$Id: readme_220.txt,v 1.2 2012/03/31 11:37:20 ohwada Exp $

=================================================
Title:   SmartSection 2.20
Date:    2012-01-01
Author:  Kenichi OHWADA
URL:     http://linux2.ohwada.net/
Email:   webmaster@ohwada.net
=================================================

This version adds the following change to 2.14, 2.15
because the offical development site was lost 

- Improved : Migrating to PHP 5.3
http://www.php.net/manual/en/migration53.deprecated.php
(1) ereg
(2) Assigning the return value of new by reference is now deprecated.

- Improved : Migrating to MySQL 5.5
(1) TYPE=MyISAM -> ENGINE=MyISAM

- Added : Japanaese language pack 

- Improved : SmartSection 2.14 patch for XOOPS Cube Legacy ( Impresscms fourm )
http://community.impresscms.org/modules/newbb/viewtopic.php?topic_id=2513&post_id=23643

(1) change "preferences" and "modules update" in admin memu.

- Improved : SmartSection 2.14 patch for upload multibyte filename
http://community.impresscms.org/modules/newbb/viewtopic.php?topic_id=2514&post_id=23646

(1) I will attempt to change that the user can use Japanese or multibyte langugae for the upload file name.

-  Improved : SmartSection 2.14 patch for Email button ( Impresscms fourm )
http://community.impresscms.org/modules/newbb/viewtopic.php?topic_id=2515&post_id=23657

(1) mojibake (character garble) when use Email button

-  Fixed : SmartSection 2.14 bugs and patches ( Impresscms fourm )
http://community.impresscms.org/modules/newbb/viewtopic.php?topic_id=2512&post_id=23641

(1) enable "Print" and "PDF"
(2) Parse error and Notice in print
(3) wrong style in print template file
(4) Invalid argument when guest view
(5) Undefined variable in admin's category
(6) Missing argument when save file
(7) many Notice when "Disable comments"
(8) keyword "abc" match "abccccc"
(9) cannot show keyword in Japanese and multibyte language

-  Fixed : undefined constant and index in addfile.php

* added files *

- language/japanese/
- language/ja_utf8/

* changed files *

- item.php
- print.php
- admin/item.php
- admin/menu.php 
- class/category.php
- class/file.php
- class/item.php
- class/keyhighlighter.class.php
- templeates/smartsection_print.html

- addfile.php
- xoops_version.php
- changelog.txt
- admin/category.php
- admin/file.php
- admin/myblockform.php
- admin/pagewrap.php
- class/session.php
- include/functions.php
- sql/mysql.sql

