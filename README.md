SimpleForm2B - README
=====================
A simple form-creator for Anax MVC. Supports all input-types, textarea and submit.

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
SetForm opens the form and contains 3 parameters:




