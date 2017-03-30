<?php
namespace Admin\Form;

use Zend\Form\Form;
use Zend\ServiceManager\ServiceManager;
use Zend\InputFilter\InputFilter;
use Swagger\Client\Api\SchoolsApi;

class SchoolForm extends Form
{

	public function __construct(ServiceManager $sm = null)
	{
		parent::__construct('ed-fi-entry-form');



		$cache   = \Zend\Cache\StorageFactory::factory(array(
			'adapter' => array(
				'name' => 'filesystem'
			),
			'plugins' => array(
				// Don't throw exceptions on cache errors
				'exception_handler' => array(
					'throw_exceptions' => false
				),
			)
		));

		$key    = 'edfi-schools-listing';
		$success = false;
		$result = $cache->getItem($key, $success);
		//if (!$success) {

			$this->serviceLocator = $sm;
			$schoolsApi = new SchoolsApi($this->getEdFiClient());
			$limit = 50;
			$offset = 0;
			$schoolsRaw = $schoolsApi->getSchools($limit,$offset);
			$schools = array();
			while(count($schoolsRaw) > 0){
				foreach($schoolsRaw as $school) {
					$schools[$school->getSchoolId()] = $school->getNameOfInstitution();
				}
				$offset = $offset + $limit;
				$schoolsRaw = $schoolsApi->getSchools($limit,$offset);
			}
			//sort($schools);
			$result = serialize($schools);

			$cache->setItem($key, $result);
		//}
		//$schools = unserialize($result);




		$this->add(array(
		    'name' => 'edfi-entry-id',
		    'type' => 'hidden',
		    'options' => array(
		        'label' => 'EdFi Entry ID',
		        'inline' => true,
		        'label_options' => array(
		            'disable_html_escape' => true,
		            'always_wrap' => false
		        ),
		        'label_attributes' => array(

		        )
		    )
		));

		$this->add(array(
		    'name' => 'school-id',
		    'type' => 'Select',
		    'options' => array(
		        'label' => 'School',
		        //'column-size' => 'sm-6',
		        'inline' => true,
		        'label_options' => array(
		            'disable_html_escape' => true,
		            'always_wrap' => false
		        ),
		        'label_attributes' => array(
		            //'class' => 'col-sm-4 control-label'
		        ),
		        'value_options' => $schools,
		    ),
		));


		$mainFilter = new InputFilter();

		$mainFilter->add(array(
		    'name' => 'school-id',
		    'required' => true,
		    'filters' => array(
		        array(
		            'name' => 'StripTags'
		        ),
		        array(
		            'name' => 'StringTrim'
		        )
		    )
		));

		$mainFilter->add(array(
		    'name' => 'edfi-entry-id',
		    'required' => true,
		    'filters' => array(
		        array(
		            'name' => 'StripTags'
		        ),
		        array(
		            'name' => 'StringTrim'
		        )
		    )
		));
	}
	/**
	 * @return \Swagger\Client\ApiClient
	 */
	private function getEdFiClient(){
		if(!isset($this->edfiClient)){
			$this->edfiClient = $this->serviceLocator->get('Swagger\Client\ApiClient');
		}
		return $this->edfiClient;
	}

	private function getSchoolTableGateway(){
	    if(!isset($this->schoolTableGateway)){
	        $this->schoolTableGateway = $this->serviceLocator->get('Application\Model\SchoolTable');
	    }
	    return $this->schoolTableGateway;
	}
}
