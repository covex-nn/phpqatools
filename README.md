Jenkins jobs for PHP Projects
=============================

Use this template for [composer.json](http://getcomposer.org/) to install all tools, described on [jenkins-php.org](http://jenkins-php.org/)

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
    "bin-dir" : "bin"
  }, 
  "minimum-stability" : "dev", 
  "prefer-stable" : true
}
```

### TODO ###

* Add *phpdox* to main packagist repository
  * https://github.com/theseer/phpdox/pull/93
* Add *phpcb* to main packagist repository 
  * https://github.com/Mayflower/PHP_CodeBrowser/pull/22
* Ownership of [pear/pear_exception](https://github.com/pear/PEAR_Exception) package must move it's real [owner](https://github.com/pear/)
  * https://packagist.org/packages/pear/pear_exception
  * or *phpcb* must rewritten to use *zetacomponents/console-tools*
    * pear/log ???
* Stable dependencies for all packages