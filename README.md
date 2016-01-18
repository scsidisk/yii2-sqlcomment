yii2 SQL Comment
================

Add comment to end of sql.

Requirements
------------
- Yii2
- PHP 5.4+

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```bash
php composer.phar require --prefer-dist scsidisk/yii2-sqlcommnet "*"
```


Usage
-----

Once the extension is installed, simply use it in your code.

add follow code to your db setting.

```
'db' => [
    'class'       => 'scsidisk\yii2\sqlcomment\CMConnection',
    'dsn'         => '',
    'password'    => '',
    'username'    => '',
    'charset'     => '',
],
```


Changelog
------------

##### Release 1.0.4 - Changelog
- `CURLOPT_RETURNTRANSFER` is now set to true on default - https://github.com/linslin/Yii2-Curl/issues/18
- Readme.md adjustments.


##### Release 1.0.3 - Changelog
- Fixed override of user options. https://github.com/linslin/Yii2-Curl/pull/7
- Nice formatted PHP-examples.
- Moved `parent::init();` behavior into unitTest Controller.

##### Release 1.0.2 - Changelog

- Added custom params support
- Added custom status code support
- Added POST-Param support and a readme example
- Removed "body" support at request functions. Please use "CURLOPT_POSTFIELDS" to setup a body now.
- Readme modifications

##### Release 1.0.1 - Changelog

- Removed widget support
- Edited some spellings + added more examples into readme.md

##### Release 1.0 - Changelog

- Official stable release

