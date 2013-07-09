TC_Jquery
=========

Magento module to enable the jQuery library for Magento stores. Tested for Magento CE 1.7.0.2.

Installation
============

1. Copy folder contents into Magento (on OSX, I recommned the ditto terminal command).
2. Flush cache at Admin > System > Cache Management.
3. Logout and login again.
4. New menu items appear at Admin > System > Configuration, under heading TC.

Notes
=====

This module includes the jQuery library at version 1.10.1, loaded from Google's CDN, with support for http and https protocols. 

In the event that Google's CDN is not available, a local copy of jQuery 1.10.1 is provided. To use this feature, refer to the following file: app/design/frontend/base/default/layout/tc_jquery.xml

ALL other versions or inclusions of the jQuery library must be removed from Magento in order for this module to function correctly.
