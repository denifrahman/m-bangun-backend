<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-13 08:20:50 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 08:20:50 --> Severity: Warning --> mysqli::query(): Error reading result set's header /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 08:20:50 --> Query error: MySQL server has gone away - Invalid query: SELECT
                     m_sub_menu.nama_sub_menu,
                     m_sub_menu.url_sub_menu,
                     m_sub_menu.icon_sub_menu,
                     m_sub_menu.is_aktif,
                     t_akses_user.id_menu,
                     t_akses_user.id_role
                     FROM
                     t_akses_user_detail
                     JOIN m_sub_menu
                     ON t_akses_user_detail.id_sub_menu = m_sub_menu.id 
                     JOIN t_akses_user
                     ON t_akses_user_detail.id_akses_user = t_akses_user.id
                     WHERE
                     t_akses_user.id_menu = '12' AND t_akses_user.id_role = '3' AND m_sub_menu.is_aktif = '1'
ERROR - 2020-03-13 08:20:50 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/lpp/lppquantum/application/views/component/sidebar.php 45
ERROR - 2020-03-13 08:20:52 --> Severity: Warning --> session_start(): Failed to decode session object. Session has been destroyed /Applications/MAMP/htdocs/lpp/lppquantum/system/libraries/Session/Session.php 143
ERROR - 2020-03-13 08:36:54 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 08:36:54 --> Severity: Warning --> mysqli::query(): Error reading result set's header /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 08:36:54 --> Query error: MySQL server has gone away - Invalid query: SELECT
                     m_sub_menu.nama_sub_menu,
                     m_sub_menu.url_sub_menu,
                     m_sub_menu.icon_sub_menu,
                     m_sub_menu.is_aktif,
                     t_akses_user.id_menu,
                     t_akses_user.id_role
                     FROM
                     t_akses_user_detail
                     JOIN m_sub_menu
                     ON t_akses_user_detail.id_sub_menu = m_sub_menu.id 
                     JOIN t_akses_user
                     ON t_akses_user_detail.id_akses_user = t_akses_user.id
                     WHERE
                     t_akses_user.id_menu = '1' AND t_akses_user.id_role = '1' AND m_sub_menu.is_aktif = '1'
ERROR - 2020-03-13 08:36:54 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/lpp/lppquantum/application/views/component/sidebar.php 45
ERROR - 2020-03-13 08:37:13 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 08:37:13 --> Severity: Warning --> mysqli::query(): Error reading result set's header /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 08:37:13 --> Query error: MySQL server has gone away - Invalid query: SELECT
                     m_sub_menu.nama_sub_menu,
                     m_sub_menu.url_sub_menu,
                     m_sub_menu.icon_sub_menu,
                     m_sub_menu.is_aktif,
                     t_akses_user.id_menu,
                     t_akses_user.id_role
                     FROM
                     t_akses_user_detail
                     JOIN m_sub_menu
                     ON t_akses_user_detail.id_sub_menu = m_sub_menu.id 
                     JOIN t_akses_user
                     ON t_akses_user_detail.id_akses_user = t_akses_user.id
                     WHERE
                     t_akses_user.id_menu = '11' AND t_akses_user.id_role = '3' AND m_sub_menu.is_aktif = '1'
ERROR - 2020-03-13 08:37:13 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/lpp/lppquantum/application/views/component/sidebar.php 45
ERROR - 2020-03-13 08:37:13 --> Severity: Warning --> Error while sending QUERY packet. PID=22494 /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 08:37:13 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `v_t_akses_user_detail`
WHERE `url_sub_menu` = 'chat'
AND `id_role` = '3'
ERROR - 2020-03-13 08:37:13 --> Severity: error --> Exception: Call to a member function row_array() on bool /Applications/MAMP/htdocs/lpp/lppquantum/application/helpers/racode_helper.php 56
ERROR - 2020-03-13 08:55:33 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 08:55:33 --> Severity: Warning --> mysqli::query(): Error reading result set's header /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 08:55:33 --> Query error: MySQL server has gone away - Invalid query: SELECT
                     m_sub_menu.nama_sub_menu,
                     m_sub_menu.url_sub_menu,
                     m_sub_menu.icon_sub_menu,
                     m_sub_menu.is_aktif,
                     t_akses_user.id_menu,
                     t_akses_user.id_role
                     FROM
                     t_akses_user_detail
                     JOIN m_sub_menu
                     ON t_akses_user_detail.id_sub_menu = m_sub_menu.id 
                     JOIN t_akses_user
                     ON t_akses_user_detail.id_akses_user = t_akses_user.id
                     WHERE
                     t_akses_user.id_menu = '9' AND t_akses_user.id_role = '1' AND m_sub_menu.is_aktif = '1'
ERROR - 2020-03-13 08:55:33 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/lpp/lppquantum/application/views/component/sidebar.php 45
ERROR - 2020-03-13 08:55:33 --> Severity: Warning --> Error while sending QUERY packet. PID=13060 /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 08:55:33 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `v_t_akses_user_detail`
WHERE `url_sub_menu` = 'chat'
AND `id_role` = '1'
ERROR - 2020-03-13 08:55:33 --> Severity: error --> Exception: Call to a member function row_array() on bool /Applications/MAMP/htdocs/lpp/lppquantum/application/helpers/racode_helper.php 56
ERROR - 2020-03-13 09:59:30 --> Severity: Warning --> mysqli::real_connect(): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-03-13 09:59:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-03-13 09:59:30 --> Unable to connect to the database
ERROR - 2020-03-13 09:59:30 --> Severity: error --> Exception: Call to a member function real_escape_string() on bool /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2020-03-13 10:23:59 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 10:23:59 --> Severity: Warning --> mysqli::query(): Error reading result set's header /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2020-03-13 10:23:59 --> Query error: MySQL server has gone away - Invalid query: SELECT
                     m_sub_menu.nama_sub_menu,
                     m_sub_menu.url_sub_menu,
                     m_sub_menu.icon_sub_menu,
                     m_sub_menu.is_aktif,
                     t_akses_user.id_menu,
                     t_akses_user.id_role
                     FROM
                     t_akses_user_detail
                     JOIN m_sub_menu
                     ON t_akses_user_detail.id_sub_menu = m_sub_menu.id 
                     JOIN t_akses_user
                     ON t_akses_user_detail.id_akses_user = t_akses_user.id
                     WHERE
                     t_akses_user.id_menu = '12' AND t_akses_user.id_role = '3' AND m_sub_menu.is_aktif = '1'
ERROR - 2020-03-13 10:23:59 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/lpp/lppquantum/application/views/component/sidebar.php 45
ERROR - 2020-03-13 13:06:47 --> 404 Page Not Found: Assets/demo
ERROR - 2020-03-13 21:07:19 --> Severity: Warning --> mysqli::real_connect(): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-03-13 21:07:19 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-03-13 21:07:19 --> Unable to connect to the database
ERROR - 2020-03-13 21:07:19 --> Severity: Warning --> mysqli::real_connect(): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-03-13 21:07:19 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): php_network_getaddresses: getaddrinfo failed: nodename nor servname provided, or not known /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-03-13 21:07:19 --> Unable to connect to the database
ERROR - 2020-03-13 21:40:11 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-03-13 21:40:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/2006): MySQL server has gone away /Applications/MAMP/htdocs/lpp/lppquantum/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2020-03-13 21:40:11 --> Unable to connect to the database
ERROR - 2020-03-13 22:35:24 --> 404 Page Not Found: T_nilai/index
ERROR - 2020-03-13 22:35:28 --> 404 Page Not Found: T_nilai_siswa/index
