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

This package is not stable
* See [wiki](wiki)
