<?php

namespace Access\Model;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\ServiceManager;
use Zend\Mail\Message;
use Zend\Mime\Part;
use Zend\Mime\Message as MimeMessage;
use Zend\Session\Container;
use Zend\Db\Sql\Expression;

class Logger {
	protected $sm;
	protected $tableGateway;
	private $options;
	public static $LEVEL_DEBUG = array('name' => "DEBUG", 'val' => "0");
	public static $LEVEL_INFO = array('name' => "INFO", 'val' => "1");
	public static $LEVEL_NOTICE = array('name' => "NOTICE", 'val' => "2");
	public static $LEVEL_ERROR = array('name' => "ERROR", 'val' => "3");

	public function __construct(ServiceManager $sm, TableGateway $tableGateway){
		$this->serviceLocator = $sm;
		$this->tableGateway = $tableGateway;
		$this->options = $sm->get('config')['logger'];
	}

	public function log($title, $data = "", $level = "DEBUG", $sendEmail = true){
		$log = false;
		if($this->getRealLevel($level)['val'] >= $this->options['min-level']){
			$log = true;
		}
		$container = new Container('login');
		if(isset($container->nuid)){
			$userid = $container->userid;
		} else {
			$userid = null;
		}
		if($log){
			$insert = $this->tableGateway->getSql()->insert();
			if(isset($_SERVER['REMOTE_ADDR'])){
			    $address = $_SERVER['REMOTE_ADDR'];
			} else {
			    $address = "CONSOLE";
			}
			$insert->values(array(
					'users_id'	=> $userid,
					'level'			=> $this->getRealLevel($level)['name'],
					'ip'			=> $address,
					'title' 		=> $this->serviceLocator->get('config')['sessionNameHandle'] . ": " . $title,
					'data'		=> $data,
			));
			$this->tableGateway->insertWith($insert);
		}
		if($sendEmail)
			$this->sendEmail($title, $data, $level);
	}

	private function getRealLevel($data){
		$retVal = Logger::$LEVEL_DEBUG;
		if(is_int($data)){
			switch(strtoupper($data)){
				case 0:
					$retVal = Logger::$LEVEL_DEBUG;
					break;
				case 1:
					$retVal = Logger::$LEVEL_INFO;
					break;
				case 2:
					$retVal = Logger::$LEVEL_NOTICE;
					break;
				case 3:
					$retVal = Logger::$LEVEL_ERROR;
					break;
				default:
					$retVal = Logger::$LEVEL_DEBUG;
			}
		} else if(is_string($data)){
			switch(strtoupper($data)){
				case "DEBUG":
					$retVal = Logger::$LEVEL_DEBUG;
					break;
				case "INFO":
					$retVal = Logger::$LEVEL_INFO;
					break;
				case "NOTICE":
					$retVal = Logger::$LEVEL_NOTICE;
					break;
				case "ERROR":
					$retVal = Logger::$LEVEL_ERROR;
					break;
				default:
					$retVal = Logger::$LEVEL_DEBUG;
			}

		} else if(is_array($data)){
			$retVal = $data;
		}

		return $retVal;
	}

	private function sendEmail($title, $data, $level){
		$email = false;

		if($this->getRealLevel($level)['val'] >= $this->options['email-level']){
			$email = true;
		}
		if($email){
			$mail = new Message();
			$mail->setTo($this->options['email']);
			$mail->setFrom('logger@ESU.edu', 'WebApp Logger');
			$mail->setSubject('WEBAPP ERROR');
			$bodyHTML = "<h3>There was an error with the system</h3>
				<p>There was an error with the system</p>
				<br/>
				<p><strong>LEVEL: </strong>" . $this->getRealLevel($level)['name'] . "</p>
				<p><strong>IP: </strong>" . $_SERVER['REMOTE_ADDR'] . "</p>
				<p><strong>TITLE: </strong>" . $title . "</p>
				<p><strong>DATA: </strong>" . $data . "</p>
				";
			$html = new Part($bodyHTML);
			$html->type = "text/html";
			$body = new MimeMessage();
			$body->addPart($html);
			$mail->setBody($body);
			$this->serviceLocator->get('MailTransport')->send($mail);
			$this->log('Error Email Sent', "email:" . $this->options['email'], Logger::$LEVEL_NOTICE, false );
		}
	}
}

?>