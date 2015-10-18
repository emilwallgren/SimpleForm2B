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
* SetForm()
* SetInput()
* SetTextArea()
* setSubmit()
* saveForm()

How to use them is explained below

### SetForm()
SetForm() opens the form and contains 3 parameters:
1. Method
2. Action
3. Class

These three parameters are not optional and should always be set before using other methods.
An example where I create a new form with the method of post, the action of url:register/check and the class of registerForm should hence look like this:
```php 
$auth->setForm('post', $this->url->create('register/check'), 'registerForm');
```

### SetInput()
SetInput() creates an input type and contains 6 parameters:
1. type
2. name
3. value - optional
4. id - optional
5. label - optional
6. placeholder - optional

If you choose not to use a parameter, define NULL in it's place.
An example where I create an input-field with the type of text, name of username, no-value, id of username, label of Insert Username and no-placeholder would look like this:
```php
$auth->setInput('text', 'username', NULL, 'username', 'Insert Username', NULL);
```





