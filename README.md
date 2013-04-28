Jenkins jobs for PHP Projects
=============================

* Use this template for [composer.json](http://getcomposer.org/) to install all tools, described on [jenkins-php.org](http://jenkins-php.org/)

```json
{
  "require-dev" : {
    "covex-nn/phpqatools" : ">=1.0.0"
  }, 
  "repositories" : [
    { "type" : "composer", "url" : "https://raw.github.com/covex-nn/phpqatools/master" }
  ], 
  "extra" : {
    "branch-alias": {
      "dev-master": "1.0.x-dev"
    }
  }, 
  "config" : {
    "bin-dir" : "bin", 
    "preferred-install" : "dist"
  }, 
  "minimum-stability" : "dev", 
  "prefer-stable" : true
}
```

* Run <code>composer update</code>
* Create your *[phpcs.xml](https://github.com/covex-nn/phpqatools/blob/master/phpcs.xml)*, *[phpdox.xml](https://github.com/covex-nn/phpqatools/blob/master/phpdox.xml)*, *[phpmd.xml](https://github.com/covex-nn/phpqatools/blob/master/phpmd.xml)* and *[phpunit.xml](https://github.com/covex-nn/phpqatools/blob/master/phpunit.xml)*.
* Use this template for *build.xml*

```xml
<?xml version="1.0" encoding="utf-8"?>
<project name="Your project name" default="init">
  <import file="vendor/covex-nn/phpqatools/build.xml" />
  
  <target name="init">
    <echo message="${ant.project.name} Init - OK" />
  </target>
</project>
```

* Write [code](https://github.com/covex-nn/phpqatools/blob/master/src/JooS/Jenkins/SampleClass.php), create [unit-tests](https://github.com/covex-nn/phpqatools/blob/master/tests/src/JooS/Jenkins/SampleClassTest.php)
* Run <code>ant CI-build</code>
* Profit

---

This package is not stable yet, see [wiki](https://github.com/covex-nn/phpqatools/wiki)
