<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-21 00:07:13 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 50
ERROR - 2020-02-21 00:07:24 --> Severity: Notice --> Undefined property: stdClass::$icon /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 50
ERROR - 2020-02-21 00:07:24 --> Severity: Notice --> Undefined property: stdClass::$icon /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 50
ERROR - 2020-02-21 00:07:24 --> Severity: Notice --> Undefined property: stdClass::$icon /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 50
ERROR - 2020-02-21 00:07:24 --> Severity: Notice --> Undefined property: stdClass::$icon /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 50
ERROR - 2020-02-21 00:07:24 --> Severity: Notice --> Undefined property: stdClass::$icon /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 50
ERROR - 2020-02-21 06:49:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ASCss' at line 6 - Invalid query: SELECT t_akses_user.id_menu, t_akses_user.id_role, m_menu.nama_menu, m_menu.url_menu, m_menu.is_aktif, m_menu.icon_menu, m_menu.id
            FROM t_akses_user 
            LEFT JOIN m_menu on m_menu.id = t_akses_user.id_menu
            WHERE t_akses_user.id_role = '1' AND m_menu.is_aktif = '1'
            GROUP BY  t_akses_user.id_menu, t_akses_user.id_role, m_menu.nama_menu,m_menu.url_menu,m_menu.is_aktif, m_menu.icon_menu, m_menu.id ORDER BY
            m_menu.`asc` ASCss
ERROR - 2020-02-21 06:49:03 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 25
ERROR - 2020-02-21 06:49:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ASCss' at line 6 - Invalid query: SELECT t_akses_user.id_menu, t_akses_user.id_role, m_menu.nama_menu, m_menu.url_menu, m_menu.is_aktif, m_menu.icon_menu, m_menu.id
            FROM t_akses_user 
            LEFT JOIN m_menu on m_menu.id = t_akses_user.id_menu
            WHERE t_akses_user.id_role = '1' AND m_menu.is_aktif = '1'
            GROUP BY  t_akses_user.id_menu, t_akses_user.id_role, m_menu.nama_menu,m_menu.url_menu,m_menu.is_aktif, m_menu.icon_menu, m_menu.id ORDER BY
            m_menu.`asc` ASCss
ERROR - 2020-02-21 06:49:03 --> Severity: error --> Exception: Call to a member function result() on bool /Applications/MAMP/htdocs/project-kaltim/lpp-quantum/application/views/component/sidebar.php 25
ERROR - 2020-02-21 21:52:19 --> 404 Page Not Found: Assets/demo
