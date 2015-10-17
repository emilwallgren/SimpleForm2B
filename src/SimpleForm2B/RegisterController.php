<?php  

namespace emildev\SimpleForm2B;

class RegisterController implements \Anax\DI\IInjectionAware
{
    use \Anax\DI\TInjectable;

	
	public function indexAction() 
	{
		$auth = new SimpleForm2B();
		
		$this->theme->setTitle("Registrera Användare");
	
		$auth->setForm('post', $this->url->create('register/check'), 'registerForm');
		$auth->setInput('text', 'username', NULL, 'username', 'Användarnamn', NULL);
		$auth->setInput('password', 'Password', NULL, 'password', 'Lösenord');
		$auth->setTextArea('textarea', NULL, NULL, 'Skriv info', NULL);
		$auth->setSubmit('submitThis', 'Skicka');
		$form = $auth->saveForm();
		

		$this->views->add('login/register', [
				'form' => $form
				]);
	}
	
	public function checkAction() {
		$auth = new SimpleForm2B();
		
		$name = $auth->postValue('username', 'text');
		$password = $auth->postValue('password', 'text');
		$password2 = $auth->postValue('password2', 'text');
		$email = $auth->postValue('email', 'email');
		
		$total = $name .' '. $email .' '. $password .' '. $password2;
		
		$this->views->add('login/register', [
				'form' => $total,
				]
				);
	}
	
}