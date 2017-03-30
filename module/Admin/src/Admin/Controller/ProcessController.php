<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Swagger\Client\Configuration;
use Swagger\Client\ApiClient;
use Swagger\Client\Api\StudentsApi;
use Swagger\Client\Api\SchoolsApi;
use Swagger\Client\Model\StudentSchoolAssociation;
use Swagger\Client\Api\StudentSchoolAssociationsApi;
use Application\Model\User;
use Swagger\Client\Model\StaffSchoolAssociation;
use Swagger\Client\Api\StaffSchoolAssociationsApi;
use Swagger\Client\Api\StaffsApi;
use Application\Model\EdFiEntry;
use Application\Interfaces\Connector;
use Zend\Validator\InArray;


/**
 * ProcessController
 *
 * @author
 *
 * @version
 *
 */
class ProcessController extends AbstractActionController
{
	private $log = "";
	private $usernamesCreated = array();
	private $filename;
	/**
	 * The default action - show the home page
	 */
	public function processAction()
	{
		$error = false;
		// TODO Auto-generated ProcessController::indexAction() default action
		$startTime = time();
		$edfiEntryId = $this->getRequest()->getParam('edfi-entry-id');
		try{
			$this->log('*****************************************');
			$this->log('*********Process Sync for****************');
			$this->log('*****************************************');
			$this->log("Get EdFi Entry we will be working with");
			$edfiEntry = $this->getEdFiEntryTableGateway()->get($edfiEntryId);
			/**
			 *
			 * @var $edfiEntry \Application\Model\EdFiEntry
			 */
			if($edfiEntry){
				$this->log("     Got Entry with id: " . $edfiEntry->getId());
			} else {
				throw new \Exception('EdFi Entry not found');
			}

			$this->log('Initiating EdFiClient');
			if($this->getEdfiClient($edfiEntry->edfi_username, $edfiEntry->edfi_password)){
				$this->log('     Done');
			}
			$students = array();
			if($edfiEntry->sync_students == 1){
				$this->log('Initiating Student API Objects');

				$studentsApi = new StudentsApi($this->getEdfiClient());

				$this->log('     Done');


				$this->log('Get Students');
				$limit = 100;
				$offset = 0;

				$studentsRaw = $studentsApi->getStudents($limit, $offset);
				while(count($studentsRaw)){
					$students = array_merge($students, $studentsRaw);
					$offset = $offset + $limit;
					$studentsRaw = $studentsApi->getStudents($limit, $offset);
				}

				$this->log("     Organized " . count($students) . " students");


			} else {
				$this->log('Skipping Students');
			}
			$staff = array();
			if($edfiEntry->sync_staff == 1){
				$this->log('Initiating Staff API Objects');

				$staffApi = new StaffsApi($this->getEdfiClient());

				$this->log('     Done');
				$this->log('Get Staff');
				$limit = 100;
				$offset = 0;

				$staffRaw = $staffApi->getStaffs($limit, $offset);
				while(count($staffRaw)){
					$staff = array_merge($staff, $staffRaw);
					$offset = $offset + $limit;
					$staffRaw = $staffApi->getStaffs($limit, $offset);
				}
				$this->log("     Organized " . count($staff) . " staff");

			} else {
				$this->log('Skipping Staff');
			}
			$users = array();

			$this->log('Initiate Connector with ID: ' . $edfiEntry->connector_id);
			$connector = $this->getAccess()->getConnectorById($edfiEntry->connector_id);
			if($connector){
				$this->log('     Done');
			}else {
				throw new \Exception('Could not initialize connector with ID: ' . $edfiEntry->connector_id);
			}
			$this->log('Get All Users in directory');
			$users = $connector->getAllUsers();
			$this->log('     Got ' . count($users) . ' users from directory');

			$this->log('Processing Students:');
			foreach($students as $student){
				/**
				 * @var $student \Swagger\Client\Model\Student
				 */
				$this->log("     Student {$student->getStudentUniqueId()}:");
				$user = new User();
				$user->setFirstname(trim($student->getFirstName()));
				$user->setMiddlename(trim($student->getMiddleName()));
				$user->setLastname(trim($student->getLastSurname()));
				$id = $student->getStudentUniqueId();
				$user->setId($id);
				if(($username = $this->getUsername($user, $edfiEntry, $users, $connector)) !== FALSE){
					if($username === TRUE){
						$this->log("          Student Already Exists");

					} else {
						$this->log("          Student Account Needs Creating");
						$this->log("          Username: {$username}");
						$user->setUsername($username);
						$this->log("          Creating");
						$count = 1;
						$success = false;
						while($count <= 5 && $success ==  false){
							try{
								$this->log("               Attempt #" . $count);
								$connector->addStudent($user);
								$this->log("               SUCCESS");
								$count++;
								$success = true;
							} catch(\Exception $e){
								$this->log("               FAILED");
								$count++;
								$success = false;
								sleep(1);
							}
						}
						if(!$success){
							throw new \Exception('Could not create user');
						}
						$this->log("               Done");
						$password = $this->getRandomPassword();
						$this->log("          Setting Password to a randomize string: " . $password);
						$connector->resetPassword($username, $password);
						$this->log("               Done");
						//throw new \Exception('You shall not pass');
					}
				} else {
					throw new \Exception('Cannot complete creation');
				}
			}
			foreach($staff as $employee){
				/**
				 * @var $employee \Swagger\Client\Model\Staff
				 */
				$this->log("     Employee {$employee->getStaffUniqueId()}:");
				$user = new User();
				$user->setFirstname($employee->getFirstName());
				$user->setMiddlename($employee->getMiddleName());
				$user->setLastname($employee->getLastSurname());
				$id = $employee->getStaffUniqueId();
				$user->setId($id);
				if(($username = $this->getUsername($user, $edfiEntry, $users, $connector)) !== FALSE){
					if($username === TRUE){
						$this->log("          Student Already Exists");
					} else {
						$this->log("          Student Account Needs Creating");
						$this->log("          Username: {$username}");
						$user->setUsername($username);
						$this->log("          Creating");
						$count = 1;
						$success = false;
						while($count <= 5 && $success ==  false){
							try{
								$this->log("               Attempt #" . $count);
								$connector->addStaff($user);
								$this->log("               SUCCESS");
								$count++;
								$success = true;
							} catch(\Exception $e){
								$this->log("               FAILED");
								$count++;
								$success = false;
								sleep(1);
							}
						}
						if(!$success){
							throw new \Exception('Could not create user');
						}

						$this->log("               Done");
						$password = $this->getRandomPassword();
						$this->log("          Setting Password to a randomize string: " . $password);
						$connector->resetPassword($username, $password);
						$this->log("               Done");

					}
				} else {
					throw new \Exception('Cannot complete creation');
				}
			}

		} catch (\Exception $e){
			$this->log($e->getMessage());
			$this->log($e->getTraceAsString());
			$error = true;
		}
		$this->log('COMPLETE');
		$this->log('Time to complete ' . (time() - $startTime) . ' seconds');

		echo '<pre>' . print_r($this->log, true) . '</pre>';
		if($error){
			$this->getLogger()->log('Processing Sync EdFiEntry ' . $edfiEntry->getId(), $this->log, \Access\Model\Logger::$LEVEL_ERROR);
		} else {
			$this->getLogger()->log('Processing Sync EdFiEntry ' . $edfiEntry->getId(), $this->log, \Access\Model\Logger::$LEVEL_NOTICE);
		}
		die();




		return new ViewModel();
	}

	public function indexAction(){
		$startTime = time();
		$this->log('*****************************************');
		$this->log('*********Initiate Global Sync************');
		$this->log('*****************************************');
		$this->log("Getting EdFiEntries");
		$edfiEntries = $this->getEdFiEntryTableGateway()->fetch();

		$totalNumOfExpectedProcessed = count($edfiEntries);
		$this->log("     Got {$totalNumOfExpectedProcessed} entrie(s)");
		$runningProcesses = array();
		$completedProcess = 0;

		while($completedProcess != $totalNumOfExpectedProcessed){
			if(count($edfiEntries) > 0 && count($runningProcesses) <= 5){
				$edfiEntry = array_pop($edfiEntries);
				$this->log("Initiating for edfi entry id: {$edfiEntry->getId()}");
				$command = '/usr/local/zend/bin/php public/index.php run run-edfi-sync ' . $edfiEntry->getId() . ' > /dev/null 2>&1 & echo $!';
				$pid =  (int)exec($command);
				$this->log("     got PID: {$pid}");
				$runningProcesses[] = $pid;
			}
			//get status of currently running processes and clean up any not currently running
			foreach($runningProcesses as $key => $pid){
				if (!file_exists( "/proc/$pid" )){

					$completedProcess++;
					$this->log("Finished PID: {$runningProcesses[$key]}" );
					unset($runningProcesses[$key]);
				}
			}

			sleep('3');
		}
		$this->log('COMPLETE');
		$this->log('Time to complete ' . (time() - $startTime) . ' seconds');

		echo '<pre>' . print_r($this->log, true) . '</pre>';
		die();
	}

	public function getRandomPassword(){
		$seed = str_split('abcdefghijklmnopqrstuvwxyz'
			.'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
			.'0123456789!@#$%^&*()');
		$rand = '';
		foreach (array_rand($seed, 15) as $k) $rand .= $seed[$k];
		return $rand;
	}

	public function getUsername(User $user, EdFiEntry $edfientry, $users, Connector $connector){

		$matches = array(
			'{firstname}' 		=> $user->getFirstname(),
			'{firstinitial}' 	=> substr($user->getFirstname(), 0, 1),
			'{middlename}' 		=> $user->getMiddlename(),
			'{middleinitial}' 	=> substr($user->getMiddlename(), 0, 1),
			'{lastname}'  		=> $user->getLastname(),
			'{lastinitial}' 	=> substr($user->getLastname(), 0, 1),
		);
		$patterns = array(
			$edfientry->pattern1,
			$edfientry->pattern2,
			$edfientry->pattern3,
			$edfientry->pattern4,
		);

		$username = false;
		for($i = 0; $i < count($patterns) && $username == false; $i++ ){
			$usernameRaw = $patterns[$i];
			foreach($matches as $key => $value){
				$usernameRaw = str_replace($key, $value, $usernameRaw);
			}
			$usernameRaw = strtolower($usernameRaw);
			$usernameRaw = preg_replace("/[^a-zA-Z0-9]+/", "", $usernameRaw);

			$exists = false;
			$userExists = false;
			for($uI = 0; $uI < count($users) && !$exists && !$userExists; $uI++){
				if( $users[$uI]->getUsername() == $usernameRaw || in_array($usernameRaw, $this->usernamesCreated)){
					$exists = true;
				}
				if(intval($users[$uI]->getId()) == intval($user->getId())){
					$userExists = true;
				}

			}
			if(!$exists){
				$username = $usernameRaw;
			}
			if($userExists){
				$username = $userExists;
			}

		}
		if($username !== FALSE && $username !== TRUE && $userExists !== TRUE){
			$this->usernamesCreated[] = $username;
		}

		return $username;


	}

	/**
	 * @return \Application\Model\EdFiEntryTable
	 */
	private function getEdFiEntryTableGateway(){
		if(!isset($this->EdFiEntryTableGateway)){
			$this->EdFiEntryTableGateway = $this->serviceLocator->get('Application\Model\EdFiEntryTable');
		}
		return $this->EdFiEntryTableGateway;
	}

	/**
	 * @return \Access\Model\Access
	 */
	private function getAccess(){
		if(!isset($this->access)){
			$this->access = $this->serviceLocator->get('Access\Model\Access');
		}
		return $this->access;
	}
	/**
	 * @return \Application\Model\SchoolTable
	 */
	private function getSchoolTableGateway(){
		if(!isset($this->schoolTableGateway)){
			$this->schoolTableGateway = $this->serviceLocator->get('Application\Model\SchoolTable');
		}
		return $this->schoolTableGateway;
	}

	private function getConnectorTableGateway(){
		if(!isset($this->connectorTableGateway)){
			$this->connectorTableGateway = $this->serviceLocator->get('Application\Model\ConnectorTable');
		}
		return $this->connectorTableGateway;
	}
	/**
	 * @return \Swagger\Client\ApiClient
	 */
	private function getEdfiClient($username = null, $password = null){
		if(!isset($this->edFiClient)){
			if($password == null || $username == null)
				throw new \Exception('for the first call you must specify the username and password for edfi');
			$this->edFiClient = $this->serviceLocator->get('Swagger\Client\ApiClient');
			$this->edFiClient->populateAuthToken($username, $password);
		}

		return $this->edFiClient;
	}

	private function log($message){
		if(!isset($this->filename)){

		}

		$this->log .= "[" . date('Y/m/d H:m:s') . "] " . $message . "\n";
	}

	/**
	 * @return \Access\Model\Logger
	 */
	private function getLogger(){
		if(!isset($this->logger)){
			$this->logger = $this->serviceLocator->get('Logger');
		}
		return $this->logger;
	}
}