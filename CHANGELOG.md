# CHANGELOG

All notable changes to this project will be documented in this file. This project make usage of the [Yii Versioning Strategy](https://github.com/yiisoft/yii2/blob/master/docs/internals/versions.md). In order to read more about upgrading and BC breaks have a look at the [UPGRADE Document](UPGRADE.md).

## 1.1.0 (in progress)

This release contains new migrations and requires to run the `migrate` command after updating.

### Added

+ [#66](https://github.com/luyadev/luya-module-admin/issues/66) Provide option to whitelist mimetypes for admin file upload.
+ [#58](https://github.com/luyadev/luya-module-admin/issues/58) New api user level to make system api calls. Provide basic endpoint overview and tester.
+ [#59](https://github.com/luyadev/luya-module-admin/issues/59) NgRest log events are now tracked by the log behavior.
+ [#56](https://github.com/luyadev/luya-module-admin/issues/56) User summary active window with diff view, sessions and user infos.

### Fixed

+ [#67](https://github.com/luyadev/luya-module-admin/issues/67) Fixed issue where crud loader (relation button) can not edit items.
+ [#1571](https://github.com/luyadev/luya/issues/1571) If Active Window label/icon from config is given ues this instead of object defaultLabel and defaultIcon.

## 1.0.3 (13. February 2018)

### Fixed

+ [#47](https://github.com/luyadev/luya-module-admin/issues/47) Fixed issue with decoding json page property values.
+ [#40](https://github.com/luyadev/luya-module-admin/pull/40) Apply chart dashboard styling according to cards element.

### Added

+ [#50](https://github.com/luyadev/luya-module-admin/issues/50) Added DummyFileSystem class to fake storage system.

## 1.0.2 (20. January 2018)

### Added

+ [#40](https://github.com/luyadev/luya-module-admin/pull/40) Added the ChartDashboardObject whit echarts.js
+ [#44](https://github.com/luyadev/luya-module-admin/issues/44) Provide packages from LUYA composer plugin (installer.php) for developer toolbar and remote admin endpoint.

### Fixed

+ [#38](https://github.com/luyadev/luya-module-admin/issues/38) Fixed ActiveWindow render composition keys problem with PHP 7.2.
+ [#42](https://github.com/luyadev/luya-module-admin/issues/42) Fixed logout item click behaviour in mainnav tooltip.

## 1.0.1 (5. January 2018)

### Added

+ [#34](https://github.com/luyadev/luya-module-admin/pull/34) Added chinese translations.

### Fixed

+ [#36](https://github.com/luyadev/luya-module-admin/issues/36) Fixed bug in NgRestRelation ActiveQuery link source identification.
+ [#30](https://github.com/luyadev/luya-module-admin/issues/30) Fixed non-unique input fields in account overview.
+ [#5](https://github.com/luyadev/luya-module-admin/issues/5) Fixed issue where modal body listenere could have negativ values and therefore the modal still exists on element which has been closed by esc key.
+ [#7](https://github.com/luyadev/luya-module-admin/issues/7) Repair login input label click function
+ [#1](https://github.com/luyadev/luya-module-admin/issues/1) Improve event listener for floating labels at login input

## 1.0.0 (12. December 2017)

- First stable release.
