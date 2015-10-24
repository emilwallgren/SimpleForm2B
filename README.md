[![Build Status](https://travis-ci.org/emilwallgren/SimpleForm2B.svg?branch=master)](https://travis-ci.org/emilwallgren/SimpleForm2B)

SimpleForm2B - README
=====================
A simple form-creator for Anax MVC built with php. Supports all input-types, textarea and submit.

Installation
------------
Download package from packagist using 

```composer require emildev/simpleform2b```

from your console. When this is done, you can enter your vendor folder and navigate to emildev/simpleform2b. 
Inside you will find two folders, src and webroot. Inside the src is the main module, leave it there.
If you head over to webroot, you will find a folder named simpleform2b. copy that folder and put it in your views directory.

Usage - creating the SimpleForm2B object
-----
Now that the package is properly installed, you can start to use the module. To include the module in your controller, simply
create an object with the following reference.

```php
\emildev\SimpleForm2B\SimpleForm2B();
```

An example where I create an $auth object that contains the SimpleForm2B module would hence look like this:

```php
$auth = new \emildev\SimpleForm2B\SimpleForm2B();
```

Usage - using the the SimpleForm2B object
-----------------------------------------
SimpleForm2B contains 5 different methods.
* setForm()
* setInput()
* setTextArea()
* setSubmit()
* saveForm()

How to use them is explained below

### setForm()
setForm() opens the form and contains 3 parameters:

1. Method
2. Action
3. Class

These three parameters are not optional and should always be set before using other methods.
An example where I create a new form with the method of post, the action of url:register/check and the class of registerForm should hence look like this:
```php 
$auth->setForm('post', $this->url->create('register/check'), 'registerForm');
```

### setInput()
setInput() creates an input type and contains 6 parameters:

1. type
2. name
3. value - optional
4. id - optional
5. label - optional
6. placeholder - optional

If you choose not to use a parameter, define NULL in it's place. You can create how many input-fields you want. They will show up in the order you write them in the controller.
An example where I create an input-field with the type of text, name of username, no-value, id of username, label of Insert Username and no-placeholder would look like this:
```php
$auth->setInput('text', 'username', NULL, 'username', 'Insert Username', NULL);
```
### setTextArea()
setTextArea() creates a textarea for your form. It consists of 5 parameters:

1. name
2. value - optional
3. id - optional
4. label - optional
5. placeholder - optional

If you choose not to use a parameter, define NULL in it's place. You can only create one textarea for each form, and it will always end up under the input-fields. An example where I create a textarea with the name of textarea, no-value, no-id, label of Write info and no-placeholder would look like this:

```php
$auth->setTextArea('textarea', NULL, NULL, 'Write info', NULL);
```

### setSubmit()
setSubmit() creates a submit-button at the bottom of your form. It has 2 non-optional parameters:

1. name
2. value

This method is quite self-explanatory but if you want to create a submit button which contains the name of submitThis and a value of Send, this is how you write it in your controller:

```php
$auth->setSubmit('submitThis', 'Send');
```

### saveForm()
saveForm() should always be included after all other methods are set. It contains 0 parameters and offers you a way to save the form into a variable which you can pass along to the view. An example of saving the form into the variable $myNewForm would look like this:

```php
$myNewForm = $auth->saveForm();
```

When passing along the variable to the view, it should always be named 'form'. An example on how to implement this into Anax-Mvc would be:

```php
$this->views->add('simpleform2b/simpleform2b', [
				'form' => $myNewForm
				]);
```

Finally
-------
With SimpleForm2B, you can easily create forms in lightning speed. The above information should be everything you need to know. If you still end up with problems, you are free to contact me at emil.wallgren@hotmail.se

Have Fun!
