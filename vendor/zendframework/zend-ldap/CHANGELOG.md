# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 2.6.0 - 2016-02-11

### Added

- [#6](https://github.com/zendframework/zend-ldap/pull/6) Adds a possibility 
  to delete attributes without having to remove the complete node and add it
  again without the attribute

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [#16](https://github.com/zendframework/zend-ldap/pull/16) Fixed the usage of
  ```ldap_sort``` during sorting search-results due to deprecation of 
  ```ldap_sort``` in PHP 7

## 2.5.2 - 2016-02-11

### Added

- [#16](https://github.com/zendframework/zend-ldap/pull/16) removes the call
  to the now deprecated ldap_sort-function wile still preserving the
  sort-functionality.
- [#14](https://github.com/zendframework/zend-ldap/pull/14) adds a Vagrant
  environment for running an LDAP server against which to run the tests;
  additionally, it adds Travis-CI scripts for setting up an LDAP server with
  test data.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [#18](https://github.com/zendframework/zend-ldap/pull/18) Fixes an already
  removed second parameter to ```ldap_first_attribute``` and ```ldap_next_attribute```
