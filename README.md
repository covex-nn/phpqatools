PHP QA Tools
============

<a href="https://travis-ci.org/covex-nn/phpqatools/" target="_blank"><img src="https://travis-ci.org/covex-nn/phpqatools.png?branch=master" /></a>

List
----

* PHPUnit v4.8.26
* PHP_CodeSniffer v2.6.1
* phpDocumentor v2.8.5
* PHPMD v2.4.3
* phpcpd v2.0.4
* phploc v3.0.1
* PDepend v2.2.4
* PHP CodeBrowser

Installation
------------

* Use this template for composer.json to install all tools, described on [jenkins-php.org](http://jenkins-php.org/) via [Composer](http://getcomposer.org/)

```json
{
  "require-dev" : {
    "covex-nn/phpqatools" : "~2.0"
  }, 
  "config" : {
    "bin-dir" : "bin"
  }
}
```

Usage
-----

* Create your *[phpcs.xml](https://github.com/covex-nn/phpqatools/blob/master/phpcs.xml)*, *[phpdoc.xml](https://github.com/covex-nn/phpqatools/blob/master/phpdoc.xml)*, *[phpmd.xml](https://github.com/covex-nn/phpqatools/blob/master/phpmd.xml)* and *[phpunit.xml](https://github.com/covex-nn/phpqatools/blob/master/phpunit.xml)*.
* Use this template for *build.xml*

```xml
<?xml version="1.0" encoding="utf-8"?>
<project name="Your project name" default="init">
  <target name="init">
    <echo message="${ant.project.name} Init - OK" />
  </target>
</project>
```

* Use this template for *build-dev.xml*

```xml
<?xml version="1.0" encoding="utf-8"?>
<project name="Your project name - PHP QA Tools" default="init">
  <import file="build.xml" />
  <import file="vendor/covex-nn/phpqatools/build.xml" />
</project>
```

* Write [code](https://github.com/covex-nn/phpqatools/blob/master/src/JooS/Jenkins/SampleClass.php), create [unit-tests](https://github.com/covex-nn/phpqatools/blob/master/tests/src/JooS/Jenkins/SampleClassTest.php)
* Run <code>ant init</code>
* Run <code>ant -f build-dev.xml CI-build</code>
