<?php  

namespace emildev\SimpleForm2B;

class SimpleForm2BTest extends \PHPUnit_Framework_TestCase {

	
	public function testSetForm() {
		$auth = new SimpleForm2B();
	
		$auth->setForm('post', 'register/check', 'registerForm');
		$array = $auth->saveForm();
		
		$this->assertArrayHasKey('formDetails', $array);
		
		$res = $array['formDetails'];
		$exp = array(
								 'method' => 'post',
								 'action' => 'register/check',
								 'class' => 'registerForm'
								 );
								 
		$this->assertEquals($exp, $res, 'array doesnt match inputs');
	}
	
	public function testSetInput() {
		$auth = new SimpleForm2B();
	
		$auth->setInput('text', 'username', Null, 'usernameForm', 'Username', Null);
		$array = $auth->saveForm();
		
		$this->assertArrayHasKey('formInput', $array);
		
		$formInput = $array['formInput'];
		$res = $formInput[0];
		$exp = array(
						'type' => 'text',
						'name' => 'username', 
						'value' => Null,
						'id' => 'usernameForm', 
						'label' => 'Username', 
						'placeholder' => Null
						);
						
		$this->assertEquals($exp, $res, 'array doesnt match inputs');
	}
	
	
	public function testSetTextArea() {
		$auth = new SimpleForm2B();
	
		$auth->setTextArea('textarea', Null, 'textArea', 'Write Text', Null);
		$array = $auth->saveForm();
		
		$this->assertArrayHasKey('textArea', $array);
		

		$res = $array['textArea'];
		$exp = array(
						'name' => 'textarea',
						'value' => Null,
						'id' => 'textArea',
						'label' => 'Write Text',
						'placeholder' => Null
						);
						
		$this->assertEquals($exp, $res, 'array doesnt match inputs');
	}
	
	public function testSetSubmit() {
			$auth = new SimpleForm2B();
		
			$auth->setSubmit('sendSubmit', 'SEND');
			$array = $auth->saveForm();
			
			$this->assertArrayHasKey('submitInput', $array);
			
	
			$res = $array['submitInput'];
			$exp = array(
							'name' => 'sendSubmit',
							'value' => 'SEND'
							);
							
			$this->assertEquals($exp, $res, 'array doesnt match inputs');
		}
	
		public function testSaveForm() {
				$auth = new SimpleForm2B();
				$array = $auth->saveForm();
				
				$this->assertArrayHasKey('formDetails', $array);
				$this->assertArrayHasKey('formInput', $array);
				$this->assertArrayHasKey('textArea', $array);
				$this->assertArrayHasKey('submitInput', $array);
				
			}
		
	}
