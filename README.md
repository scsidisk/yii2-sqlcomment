yii2 SQL Comment
================

[![Join the chat at https://gitter.im/scsidisk/yii2-sqlcomment](https://badges.gitter.im/scsidisk/yii2-sqlcomment.svg)](https://gitter.im/scsidisk/yii2-sqlcomment?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Add comment to end of sql.

[![Build Status](https://travis-ci.org/scsidisk/yii2-sqlcomment.svg?branch=master)](https://travis-ci.org/scsidisk/yii2-sqlcomment)
[![Latest Stable Version](https://poser.pugx.org/scsidisk/yii2-sqlcomment/v/stable)](https://packagist.org/packages/scsidisk/yii2-sqlcomment)
[![Total Downloads](https://poser.pugx.org/scsidisk/yii2-sqlcomment/downloads)](https://packagist.org/packages/scsidisk/yii2-sqlcomment)
[![License](https://poser.pugx.org/scsidisk/yii2-sqlcomment/license)](https://packagist.org/packages/scsidisk/yii2-sqlcomment)

Requirements
------------
- Yii2
- PHP 5.4+

Database support
----------------

- MySQL

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

[Changelog](CHANGELOG.md)
