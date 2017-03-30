<?php
namespace Access\Model;

use Zend\ServiceManager\ServiceManager;
use Zend\Mail\Message;
use Zend\Mime\Part;
use Zend\Mime\Message as MimeMessage;
use Zend\View\Helper\ViewModel;


class Mailer
{
    private $sm;

    function __construct(ServiceManager $sm){
        $this->serviceLocator = $sm;
    }
    /**
     * This function will send an email to the the $to parameter, with the provided subject and body. If provided an array as context, this function will first replace all instances of each key in the format of {{key}} with its array value. (e.g. First name = Michael so fnam as a key {{fname}} will be replaced with Michael)
     * @param String $to
     * @param String $subject
     * @param String $body
     * @param array $context
     */
    public function sendEmail($to, $subject, $body, Array $context = null){

        if($context != null){
            foreach($context as $key => $value){
                $body = str_replace('{{' . $key . '}}', $value, $body);
                $subject = str_replace('{{' . $key . '}}', $value, $subject);
            }
        }

        //create message
        $mail = new Message();

        if($this->serviceLocator->get('config')['mailer']['debug']['enabled']){
            $body = "<div>***NOTICE*** This email was intented for $to, but was intercepted because the system's mailer is currently in debug mode.</div>" . $body;
            $mail->setTo($this->serviceLocator->get('config')['mailer']['debug']['email']);
            $mail->setFrom($this->serviceLocator->get('config')['mailer']['defaultMailerFrom']['email'], 'DEBUG');
        } else {
            $mail->setTo($to);
            $mail->setFrom($this->serviceLocator->get('config')['mailer']['defaultMailerFrom']['email'], $this->serviceLocator->get('config')['mailer']['defaultMailerFrom']['name']);
        }
        $mail->setSubject($subject);
        //set body

        $html = new Part($this->getBody($body));
        $html->type = "text/html";
        $bodyMime = new MimeMessage();
        $bodyMime->addPart($html);
        $mail->setBody($bodyMime);
        //send email
        $this->serviceLocator->get('MailTransport')->send($mail);
        //add log
        $this->serviceLocator->get('Logger')->log('Mailer: Sent email to ' . $to, $body , Logger::$LEVEL_NOTICE );
    }

    public function getBody($content){
        $renderer = $this->serviceLocator->get('Zend\View\Renderer\RendererInterface');
        $viewContent = new \Zend\View\Model\ViewModel(
            array(
                'content' => $content,
            ));
        $viewContent->setTemplate('layout/email'); // set in module.config.php
        $content = $renderer->render($viewContent);


        return $content;
    }

}

?>