<?php

namespace emildev\SimpleForm2B;

class SimpleForm2B {

	public $formDetails = array();
	public $inputDetails = array();
	public $form = array();
	public $oneInput = array();
	public $textAreaInput = array();
	public $submitInput = array();
	public $inputId = 0;


	public function setForm($method, $action, $class) 
	{
		global $formDetails;
		$formDetails = [
			'method' => $method,
			'action' => $action,
			'class'  => $class
		];
	}
	
	public function setInput($type, $name, $value = NULL, $id = NULL, $label = NULL, $placeholder = NULL) {
		global $inputDetails;
		global $inputId;
		global $oneInput;
		
		$oneInput = [
				 'type'					=> $type,
				 'name'					=> $name,
				 'value'				=> $value,
				 'id'						=> $id,
				 'label'				=> $label,
				 'placeholder' 	=> $placeholder
		];
		
		$inputDetails[] = $oneInput;
	}
	
	public function setTextArea($name, $value = NULL, $id = NULL, $label = NULL, $placeholder = NULL) {
			global $textAreaInput;
			
			$textAreaInput = [
					 'name'					=> $name,
					 'value'				=> $value,
					 'id'						=> $id,
					 'label'				=> $label,
					 'placeholder' 	=> $placeholder
			];
	}
	
	public function setSubmit($name, $value) {
		global $submitInput;
		$submitInput = [
						'name' 	=> $name,
						'value'	=> $value
		];
	}
	
	public function saveForm() {
		global $form;
		global $formDetails;
		global $inputDetails;
		global $textAreaInput;
		global $submitInput;
		$form = ['formDetails' => $formDetails, 
						 'formInput'	 => $inputDetails,
						 'textArea'		 => $textAreaInput,
						 'submitInput' => $submitInput
						 ];
						 
		return $form;
	}	

}