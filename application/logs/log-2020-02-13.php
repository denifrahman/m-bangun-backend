<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-13 05:12:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 05:12:34 --> 404 Page Not Found: %3C/index
ERROR - 2020-02-13 05:12:34 --> 404 Page Not Found: Assets/particles.js
ERROR - 2020-02-13 05:12:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 05:12:35 --> 404 Page Not Found: Assets/particles.js
ERROR - 2020-02-13 05:12:35 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 05:12:35 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 05:12:45 --> Query error: Table 'lpp_quantum.tbl_menu' doesn't exist - Invalid query: SELECT *
FROM `tbl_menu`
WHERE `url` = 'm_user'
ERROR - 2020-02-13 05:12:45 --> Severity: error --> Exception: Call to a member function row_array() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/helpers/racode_helper.php 56
ERROR - 2020-02-13 05:13:46 --> Query error: Unknown column 'url' in 'where clause' - Invalid query: SELECT *
FROM `m_menu`
WHERE `url` = 'm_user'
ERROR - 2020-02-13 05:13:46 --> Severity: error --> Exception: Call to a member function row_array() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/helpers/racode_helper.php 56
ERROR - 2020-02-13 05:14:00 --> Query error: Table 'lpp_quantum.tbl_setting' doesn't exist - Invalid query: SELECT *
FROM `tbl_setting`
WHERE `id_setting` = 1
ERROR - 2020-02-13 05:14:00 --> Severity: error --> Exception: Call to a member function row_array() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 50
ERROR - 2020-02-13 05:15:30 --> Query error: Unknown column 'url' in 'where clause' - Invalid query: SELECT *
FROM `m_menu`
WHERE `url` = 'm_user'
ERROR - 2020-02-13 05:15:30 --> Severity: error --> Exception: Call to a member function row_array() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/helpers/racode_helper.php 56
ERROR - 2020-02-13 05:20:42 --> Query error: Unknown column 'url' in 'where clause' - Invalid query: SELECT *
FROM `m_sub_menu`
WHERE `url` = 'm_user'
ERROR - 2020-02-13 05:20:42 --> Severity: error --> Exception: Call to a member function row_array() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/helpers/racode_helper.php 56
ERROR - 2020-02-13 05:22:54 --> Severity: Notice --> Undefined variable: id_role /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/helpers/racode_helper.php 59
ERROR - 2020-02-13 05:28:05 --> Query error: SELECT command denied to user 'lppquant'@'140.0.128.236' for table 'm_menu' - Invalid query: SELECT
            lpp_quantum.m_menu.nama_menu,
            lpp_quantum.m_menu.url_menu,
            lpp_quantum.m_menu.icon_menu,
            lpp_quantum.m_menu.is_aktif,
            lpp_quantum.m_menu.id
            FROM
            lpp_quantum.m_menu
            JOIN lpp_quantum.t_akses_user
            ON lpp_quantum.m_menu.id = lpp_quantum.t_akses_user.id_menu
            WHERE
            lpp_quantum.t_akses_user.id_role = 1
            GROUP BY lpp_quantum.m_menu.id
ERROR - 2020-02-13 05:28:05 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 70
ERROR - 2020-02-13 05:50:44 --> 404 Page Not Found: M_role/assets
ERROR - 2020-02-13 05:56:31 --> 404 Page Not Found: 01/index
ERROR - 2020-02-13 05:56:50 --> 404 Page Not Found: M_role/assets
ERROR - 2020-02-13 07:15:51 --> Severity: Warning --> mysqli::real_connect(): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-02-13 07:15:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-02-13 07:15:51 --> Unable to connect to the database
ERROR - 2020-02-13 07:15:51 --> Severity: error --> Exception: Call to a member function real_escape_string() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2020-02-13 07:28:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Operation timed out /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-02-13 07:28:04 --> Unable to connect to the database
ERROR - 2020-02-13 07:28:04 --> Severity: error --> Exception: Call to a member function real_escape_string() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2020-02-13 07:28:17 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Operation timed out /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-02-13 07:28:17 --> Unable to connect to the database
ERROR - 2020-02-13 07:28:17 --> Severity: error --> Exception: Call to a member function real_escape_string() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2020-02-13 09:24:18 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 09:24:18 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 09:24:18 --> 404 Page Not Found: Assets/particles.js
ERROR - 2020-02-13 09:24:18 --> 404 Page Not Found: %3C/index
ERROR - 2020-02-13 09:24:21 --> 404 Page Not Found: Assets/particles.js
ERROR - 2020-02-13 09:24:21 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 09:24:21 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 09:28:25 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 09:28:25 --> 404 Page Not Found: %3C/index
ERROR - 2020-02-13 09:28:25 --> 404 Page Not Found: Assets/particles.js
ERROR - 2020-02-13 09:28:25 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 09:28:27 --> 404 Page Not Found: Assets/particles.js
ERROR - 2020-02-13 09:28:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 09:28:27 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 09:41:58 --> Query error: Unknown column 'lppquant_ori.t_akses_user.id_sub_menu' in 'where clause' - Invalid query: SELECT lppquant_ori.m_sub_menu.nama_sub_menu, lppquant_ori.m_sub_menu.url_sub_menu, lppquant_ori.m_sub_menu.icon_sub_menu FROM lppquant_ori.t_akses_user JOIN lppquant_ori.m_role ON lppquant_ori.t_akses_user.id_role = lppquant_ori.m_role.id JOIN lppquant_ori.m_menu ON lppquant_ori.t_akses_user.id_menu = lppquant_ori.m_menu.id JOIN lppquant_ori.m_sub_menu ON lppquant_ori.t_akses_user.id_sub_menu = lppquant_ori.m_sub_menu.id 
                     WHERE lppquant_ori.t_akses_user.id_menu = 1
                     AND lppquant_ori.t_akses_user.id_role = 1 AND 
                     lppquant_ori.t_akses_user.id_sub_menu IS NOT NULL
ERROR - 2020-02-13 09:41:58 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 80
ERROR - 2020-02-13 09:41:59 --> Query error: Unknown column 'lppquant_ori.t_akses_user.id_sub_menu' in 'where clause' - Invalid query: SELECT lppquant_ori.m_sub_menu.nama_sub_menu, lppquant_ori.m_sub_menu.url_sub_menu, lppquant_ori.m_sub_menu.icon_sub_menu FROM lppquant_ori.t_akses_user JOIN lppquant_ori.m_role ON lppquant_ori.t_akses_user.id_role = lppquant_ori.m_role.id JOIN lppquant_ori.m_menu ON lppquant_ori.t_akses_user.id_menu = lppquant_ori.m_menu.id JOIN lppquant_ori.m_sub_menu ON lppquant_ori.t_akses_user.id_sub_menu = lppquant_ori.m_sub_menu.id 
                     WHERE lppquant_ori.t_akses_user.id_menu = 1
                     AND lppquant_ori.t_akses_user.id_role = 1 AND 
                     lppquant_ori.t_akses_user.id_sub_menu IS NOT NULL
ERROR - 2020-02-13 09:41:59 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 80
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 102
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 103
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 102
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 103
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 102
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 103
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 102
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 103
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 102
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 103
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 102
ERROR - 2020-02-13 09:46:34 --> Severity: Notice --> Undefined property: stdClass::$url_sub_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 103
ERROR - 2020-02-13 09:50:06 --> 404 Page Not Found: Master/index
ERROR - 2020-02-13 09:51:30 --> 404 Page Not Found: Master/index
ERROR - 2020-02-13 20:08:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Operation timed out /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-02-13 20:08:20 --> Unable to connect to the database
ERROR - 2020-02-13 20:08:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Operation timed out /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-02-13 20:08:30 --> Unable to connect to the database
ERROR - 2020-02-13 20:08:31 --> 404 Page Not Found: %3C/index
ERROR - 2020-02-13 20:08:31 --> 404 Page Not Found: Assets/particles.js
ERROR - 2020-02-13 20:08:31 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 20:08:32 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 20:08:33 --> 404 Page Not Found: Assets/particles.js
ERROR - 2020-02-13 20:08:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 20:08:34 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 20:08:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Operation timed out /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-02-13 20:08:45 --> Unable to connect to the database
ERROR - 2020-02-13 20:09:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Operation timed out /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-02-13 20:09:28 --> Unable to connect to the database
ERROR - 2020-02-13 20:18:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'lpp_quantum' /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-02-13 20:18:51 --> Unable to connect to the database
ERROR - 2020-02-13 20:19:14 --> Query error: Table 'lppquant_ori.m_menu' doesn't exist - Invalid query: SELECT
            lppquant_ori.m_menu.nama_menu,
            lppquant_ori.m_menu.url_menu,
            lppquant_ori.m_menu.icon_menu,
            lppquant_ori.m_menu.is_aktif,
            lppquant_ori.m_menu.id
            FROM
            lppquant_ori.m_menu
            JOIN lppquant_ori.t_akses_user
            ON lppquant_ori.m_menu.id = lppquant_ori.t_akses_user.id_menu
            WHERE
            lppquant_ori.t_akses_user.id_role = 1
            GROUP BY lppquant_ori.m_menu.id
ERROR - 2020-02-13 20:19:14 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 70
ERROR - 2020-02-13 20:20:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-quantum.m_menu
            JOIN lpp-quantum.t_akses_user
            ON lpp-qua' at line 8 - Invalid query: SELECT
            lpp-quantum.m_menu.nama_menu,
            lpp-quantum.m_menu.url_menu,
            lpp-quantum.m_menu.icon_menu,
            lpp-quantum.m_menu.is_aktif,
            lpp-quantum.m_menu.id
            FROM
            lpp-quantum.m_menu
            JOIN lpp-quantum.t_akses_user
            ON lpp-quantum.m_menu.id = lpp-quantum.t_akses_user.id_menu
            WHERE
            lpp-quantum.t_akses_user.id_role = 1
            GROUP BY lpp-quantum.m_menu.id
ERROR - 2020-02-13 20:20:52 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 70
ERROR - 2020-02-13 20:34:40 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'lpp-quantum' /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-02-13 20:34:41 --> Unable to connect to the database
ERROR - 2020-02-13 20:34:41 --> Severity: error --> Exception: Call to a member function real_escape_string() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2020-02-13 20:34:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-quantum.m_menu
            JOIN lpp-quantum.t_akses_user
            ON lpp-qua' at line 8 - Invalid query: SELECT
            lpp-quantum.m_menu.nama_menu,
            lpp-quantum.m_menu.url_menu,
            lpp-quantum.m_menu.icon_menu,
            lpp-quantum.m_menu.is_aktif,
            lpp-quantum.m_menu.id
            FROM
            lpp-quantum.m_menu
            JOIN lpp-quantum.t_akses_user
            ON lpp-quantum.m_menu.id = lpp-quantum.t_akses_user.id_menu
            WHERE
            lpp-quantum.t_akses_user.id_role = 1
            GROUP BY lpp-quantum.m_menu.id
ERROR - 2020-02-13 20:34:54 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 70
ERROR - 2020-02-13 20:36:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-quantum.m_menu
            JOIN lpp-quantum.t_akses_user
            ON lpp-qua' at line 8 - Invalid query: SELECT
            lpp-quantum.m_menu.nama_menu,
            lpp-quantum.m_menu.url_menu,
            lpp-quantum.m_menu.icon_menu,
            lpp-quantum.m_menu.is_aktif,
            lpp-quantum.m_menu.id
            FROM
            lpp-quantum.m_menu
            JOIN lpp-quantum.t_akses_user
            ON lpp-quantum.m_menu.id = lpp-quantum.t_akses_user.id_menu
            WHERE
            lpp-quantum.t_akses_user.id_role = 1
            GROUP BY lpp-quantum.m_menu.id
ERROR - 2020-02-13 20:36:42 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 70
ERROR - 2020-02-13 20:58:15 --> 404 Page Not Found: Master/index
ERROR - 2020-02-13 22:39:01 --> Query error: Table 'lpp_quantum.t_akses_user_detail' doesn't exist - Invalid query: SELECT
                     lpp_quantum.m_sub_menu.nama_sub_menu,
                     lpp_quantum.t_akses_user.id_role,
                     lpp_quantum.m_sub_menu.url_sub_menu,
                     lpp_quantum.m_sub_menu.icon_sub_menu,
                     lpp_quantum.m_sub_menu.is_aktif,
                     lpp_quantum.m_sub_menu.id_menu
                     FROM
                     lpp_quantum.t_akses_user_detail
                     JOIN lpp_quantum.t_akses_user
                     ON lpp_quantum.t_akses_user_detail.id_akses_user = lpp_quantum.t_akses_user.id 
                     JOIN lpp_quantum.m_sub_menu
                     ON lpp_quantum.t_akses_user_detail.id_sub_menu = lpp_quantum.m_sub_menu.id
                     WHERE
                     lpp_quantum.t_akses_user.id_role = '1' AND lpp_quantum.t_akses_user.id_menu = '1'
ERROR - 2020-02-13 22:39:01 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 83
ERROR - 2020-02-13 22:39:03 --> Query error: Table 'lpp_quantum.t_akses_user_detail' doesn't exist - Invalid query: SELECT
                     lpp_quantum.m_sub_menu.nama_sub_menu,
                     lpp_quantum.t_akses_user.id_role,
                     lpp_quantum.m_sub_menu.url_sub_menu,
                     lpp_quantum.m_sub_menu.icon_sub_menu,
                     lpp_quantum.m_sub_menu.is_aktif,
                     lpp_quantum.m_sub_menu.id_menu
                     FROM
                     lpp_quantum.t_akses_user_detail
                     JOIN lpp_quantum.t_akses_user
                     ON lpp_quantum.t_akses_user_detail.id_akses_user = lpp_quantum.t_akses_user.id 
                     JOIN lpp_quantum.m_sub_menu
                     ON lpp_quantum.t_akses_user_detail.id_sub_menu = lpp_quantum.m_sub_menu.id
                     WHERE
                     lpp_quantum.t_akses_user.id_role = '1' AND lpp_quantum.t_akses_user.id_menu = '1'
ERROR - 2020-02-13 22:39:03 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 83
ERROR - 2020-02-13 23:15:49 --> Severity: Notice --> Undefined index: id_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/helpers/racode_helper.php 57
ERROR - 2020-02-13 23:16:14 --> Severity: Notice --> Undefined variable: id_menu /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/helpers/racode_helper.php 59
ERROR - 2020-02-13 23:24:07 --> Query error: Unknown column 'lpp_quantum.m_sub_menu.id_menu' in 'field list' - Invalid query: SELECT
                     lpp_quantum.m_sub_menu.nama_sub_menu,
                     lpp_quantum.t_akses_user.id_role,
                     lpp_quantum.m_sub_menu.url_sub_menu,
                     lpp_quantum.m_sub_menu.icon_sub_menu,
                     lpp_quantum.m_sub_menu.is_aktif,
                     lpp_quantum.m_sub_menu.id_menu
                     FROM
                     lpp_quantum.t_akses_user_detail
                     JOIN lpp_quantum.t_akses_user
                     ON lpp_quantum.t_akses_user_detail.id_akses_user = lpp_quantum.t_akses_user.id 
                     JOIN lpp_quantum.m_sub_menu
                     ON lpp_quantum.t_akses_user_detail.id_sub_menu = lpp_quantum.m_sub_menu.id
                     WHERE
                     lpp_quantum.t_akses_user.id_role = '1' AND lpp_quantum.t_akses_user.id_menu = '1'
ERROR - 2020-02-13 23:24:07 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 83
ERROR - 2020-02-13 23:24:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM
                     lpp_quantum.t_akses_user_detail
                     J' at line 7 - Invalid query: SELECT
                     lpp_quantum.m_sub_menu.nama_sub_menu,
                     lpp_quantum.t_akses_user.id_role,
                     lpp_quantum.m_sub_menu.url_sub_menu,
                     lpp_quantum.m_sub_menu.icon_sub_menu,
                     lpp_quantum.m_sub_menu.is_aktif,
                     FROM
                     lpp_quantum.t_akses_user_detail
                     JOIN lpp_quantum.t_akses_user
                     ON lpp_quantum.t_akses_user_detail.id_akses_user = lpp_quantum.t_akses_user.id 
                     JOIN lpp_quantum.m_sub_menu
                     ON lpp_quantum.t_akses_user_detail.id_sub_menu = lpp_quantum.m_sub_menu.id
                     WHERE
                     lpp_quantum.t_akses_user.id_role = '1' AND lpp_quantum.t_akses_user.id_menu = '1'
ERROR - 2020-02-13 23:24:56 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 82
ERROR - 2020-02-13 23:25:24 --> Query error: Unknown column 'lpp_quantum.m_sub_menu.nama_sub_menu' in 'field list' - Invalid query: SELECT
                     lpp_quantum.m_sub_menu.nama_sub_menu,
                     lpp_quantum.t_akses_user.id_role,
                     lpp_quantum.m_sub_menu.url_sub_menu,
                     lpp_quantum.m_sub_menu.icon_sub_menu,
                     lpp_quantum.m_sub_menu.is_aktif
                     FROM
                     lpp_quantum.t_akses_user_detail
                     JOIN lpp_quantum.t_akses_user
                     ON lpp_quantum.t_akses_user_detail.id_akses_user = lpp_quantum.t_akses_user.id 
                     -- JOIN lpp_quantum.m_sub_menu
                     -- ON lpp_quantum.t_akses_user_detail.id_sub_menu = lpp_quantum.m_sub_menu.id
                     WHERE
                     lpp_quantum.t_akses_user.id_role = '1' AND lpp_quantum.t_akses_user.id_menu = '1'
ERROR - 2020-02-13 23:25:24 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 82
ERROR - 2020-02-13 23:25:42 --> Query error: Unknown column 'lpp_quantum.m_sub_menu.nama_sub_menu' in 'field list' - Invalid query: SELECT
                     lpp_quantum.m_sub_menu.nama_sub_menu,
                     lpp_quantum.t_akses_user.id_role,
                     lpp_quantum.m_sub_menu.url_sub_menu,
                     lpp_quantum.m_sub_menu.icon_sub_menu,
                     lpp_quantum.m_sub_menu.is_aktif
                     FROM
                     lpp_quantum.t_akses_user_detail
                     JOIN lpp_quantum.t_akses_user
                     ON lpp_quantum.t_akses_user_detail.id_akses_user = lpp_quantum.t_akses_user.id 
                     -- JOIN lpp_quantum.m_sub_menu
                     -- ON lpp_quantum.t_akses_user_detail.id_sub_menu = lpp_quantum.m_sub_menu.id
                     WHERE
                     lpp_quantum.t_akses_user.id_role = '1'
ERROR - 2020-02-13 23:25:42 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 82
ERROR - 2020-02-13 23:25:52 --> Query error: Unknown column 'lpp_quantum.m_sub_menu.nama_sub_menu' in 'field list' - Invalid query: SELECT
                     lpp_quantum.m_sub_menu.nama_sub_menu,
                     lpp_quantum.t_akses_user.id_role,
                     lpp_quantum.m_sub_menu.url_sub_menu,
                     lpp_quantum.m_sub_menu.icon_sub_menu,
                     lpp_quantum.m_sub_menu.is_aktif
                     FROM
                     lpp_quantum.t_akses_user_detail
                     JOIN lpp_quantum.t_akses_user
                     ON lpp_quantum.t_akses_user_detail.id_akses_user = lpp_quantum.t_akses_user.id 
                     WHERE
                     lpp_quantum.t_akses_user.id_role = '1'
ERROR - 2020-02-13 23:25:52 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 80
ERROR - 2020-02-13 23:26:15 --> Query error: Unknown column 'lpp_quantum.m_sub_menu.nama_sub_menu' in 'field list' - Invalid query: SELECT
                     lpp_quantum.m_sub_menu.nama_sub_menu,
                     lpp_quantum.t_akses_user.id_role,
                     lpp_quantum.m_sub_menu.url_sub_menu,
                     lpp_quantum.m_sub_menu.icon_sub_menu,
                     lpp_quantum.m_sub_menu.is_aktif
                     FROM
                     lpp_quantum.t_akses_user_detail
                     JOIN lpp_quantum.t_akses_user
                     ON lpp_quantum.t_akses_user_detail.id_akses_user = lpp_quantum.t_akses_user.id 
                     WHERE
                     lpp_quantum.t_akses_user.id_role = '1'
ERROR - 2020-02-13 23:26:15 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 80
ERROR - 2020-02-13 23:26:24 --> Query error: Unknown column 'lpp_quantum.m_sub_menu.nama_sub_menu' in 'field list' - Invalid query: SELECT
                     lpp_quantum.m_sub_menu.nama_sub_menu,
                     lpp_quantum.t_akses_user.id_role,
                     lpp_quantum.m_sub_menu.url_sub_menu,
                     lpp_quantum.m_sub_menu.icon_sub_menu,
                     lpp_quantum.m_sub_menu.is_aktif
                     FROM
                     lpp_quantum.t_akses_user_detail
                     JOIN lpp_quantum.t_akses_user
                     ON lpp_quantum.t_akses_user_detail.id_akses_user = lpp_quantum.t_akses_user.id 
                     WHERE
                     lpp_quantum.t_akses_user.id_role = '1'
ERROR - 2020-02-13 23:26:24 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 80
ERROR - 2020-02-13 23:37:04 --> 404 Page Not Found: %3C/index
ERROR - 2020-02-13 23:37:05 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 23:37:05 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 23:37:05 --> 404 Page Not Found: Assets/particles.js
ERROR - 2020-02-13 23:37:06 --> 404 Page Not Found: Assets/particles.js
ERROR - 2020-02-13 23:37:06 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 23:37:06 --> 404 Page Not Found: Assets/js
ERROR - 2020-02-13 23:45:42 --> 404 Page Not Found: Assets/admin
ERROR - 2020-02-13 23:45:42 --> 404 Page Not Found: Assets/admin
ERROR - 2020-02-13 23:46:14 --> 404 Page Not Found: Assets/admin
ERROR - 2020-02-13 23:46:15 --> 404 Page Not Found: Assets/admin
ERROR - 2020-02-13 23:46:32 --> 404 Page Not Found: Assets/admin
ERROR - 2020-02-13 23:46:33 --> 404 Page Not Found: Assets/admin
