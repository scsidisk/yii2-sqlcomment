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

[Changelog](blob/master/CHANGELOG.md)
