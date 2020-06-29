<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-02 03:22:35 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:22:39 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:25:46 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:26:14 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:28:40 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:29:20 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:29:27 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:34:34 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:34:50 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:35:53 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:36:56 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:37:50 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:39:15 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 03:59:28 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 04:10:14 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 04:10:20 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\psr7\src\Stream.php 112
ERROR - 2019-01-02 04:15:47 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 04:24:00 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 04:27:31 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 04:49:18 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\web.sheerkah\application\controllers\Welcome.php 41
ERROR - 2019-01-02 04:49:40 --> Severity: Notice --> Trying to get property 'token' of non-object C:\xampp\htdocs\web.sheerkah\application\helpers\request_api_helper.php 22
ERROR - 2019-01-02 04:49:40 --> Severity: Notice --> Trying to get property 'token' of non-object C:\xampp\htdocs\web.sheerkah\application\helpers\request_api_helper.php 25
ERROR - 2019-01-02 04:49:41 --> Severity: Notice --> Undefined property: stdClass::$data C:\xampp\htdocs\web.sheerkah\application\controllers\Welcome.php 42
ERROR - 2019-01-02 04:50:09 --> Severity: Warning --> pg_query(): Query failed: server closed the connection unexpectedly
	This probably means the server terminated abnormally
	before or while processing the request. C:\xampp\htdocs\web.sheerkah\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2019-01-02 04:50:09 --> Query error: server closed the connection unexpectedly
	This probably means the server terminated abnormally
	before or while processing the request. - Invalid query: SELECT "stp"."id_mitra", "wm"."nama", "wm"."foto", "tp"."nama_usaha", "tp"."foto_tampak_depan", "tp"."kebutuhan_investasi_diajukan", "mk"."nama" as "nama_kota", "tp"."kebutuhan_investasi_diajukan", "tp"."rata_rata_omset_perbulan", "mju"."nama" as "nama_jenis", "tp"."presentase_mitra"
FROM "t_pengajuan" "tp"
LEFT JOIN "web"."m_mitra" "wm" ON "wm"."username" = "tp"."id_mitra"
LEFT JOIN "m_kota" "mk" ON "mk"."id" = "tp"."id_kota"
LEFT JOIN "m_jenis_usaha" "mju" ON "mju"."id" = "tp"."id_jenis_usaha"
WHERE "tp"."id_status" = 17
AND "tp"."id_batch" = 17
AND "wm"."id_partner_mitra" = 1
ORDER BY "tp"."id_mitra" DESC
 LIMIT 3
ERROR - 2019-01-02 06:49:06 --> Severity: Notice --> Trying to get property 'token' of non-object C:\xampp\htdocs\web.sheerkah\application\helpers\request_api_helper.php 22
ERROR - 2019-01-02 06:49:06 --> Severity: Notice --> Trying to get property 'token' of non-object C:\xampp\htdocs\web.sheerkah\application\helpers\request_api_helper.php 25
ERROR - 2019-01-02 07:22:03 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\web.sheerkah\application\controllers\Blog.php 96
ERROR - 2019-01-02 08:42:33 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\web.sheerkah\application\controllers\Blog.php 78
ERROR - 2019-01-02 08:43:28 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\web.sheerkah\application\controllers\Blog.php 78
ERROR - 2019-01-02 08:43:35 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\web.sheerkah\application\controllers\Blog.php 78
ERROR - 2019-01-02 10:11:17 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\system\libraries\Session\drivers\Session_files_driver.php 180
ERROR - 2019-01-02 10:11:17 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2019-01-02 10:11:17 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\Users\Asus\AppData\Local\Temp) Unknown 0
ERROR - 2019-01-02 10:25:32 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\system\libraries\Session\drivers\Session_files_driver.php 180
ERROR - 2019-01-02 10:25:33 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2019-01-02 10:25:33 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\Users\Asus\AppData\Local\Temp) Unknown 0
ERROR - 2019-01-02 10:26:55 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\system\libraries\Session\drivers\Session_files_driver.php 180
ERROR - 2019-01-02 10:26:55 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2019-01-02 10:26:55 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\Users\Asus\AppData\Local\Temp) Unknown 0
ERROR - 2019-01-02 10:28:34 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\system\libraries\Session\drivers\Session_files_driver.php 180
ERROR - 2019-01-02 10:28:34 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2019-01-02 10:28:34 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\Users\Asus\AppData\Local\Temp) Unknown 0
ERROR - 2019-01-02 10:28:34 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\system\libraries\Session\drivers\Session_files_driver.php 180
ERROR - 2019-01-02 10:28:34 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2019-01-02 10:28:34 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\Users\Asus\AppData\Local\Temp) Unknown 0
ERROR - 2019-01-02 14:52:22 --> Severity: Notice --> Undefined variable: blog_sidebar C:\xampp\htdocs\web.sheerkah\application\views\component\sidebar.php 22
ERROR - 2019-01-02 14:52:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\web.sheerkah\application\views\component\sidebar.php 22
ERROR - 2019-01-02 14:55:26 --> Severity: Notice --> Undefined property: stdClass::$logo C:\xampp\htdocs\web.sheerkah\application\views\pendaftaran_v.php 309
ERROR - 2019-01-02 14:55:57 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\web.sheerkah\application\controllers\Master.php 14
ERROR - 2019-01-02 14:55:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\web.sheerkah\application\controllers\Master.php 18
ERROR - 2019-01-02 14:55:59 --> Severity: Notice --> Undefined variable: blog_sidebar C:\xampp\htdocs\web.sheerkah\application\views\component\sidebar.php 22
ERROR - 2019-01-02 14:55:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\web.sheerkah\application\views\component\sidebar.php 22
ERROR - 2019-01-02 14:56:38 --> Severity: Notice --> Undefined property: stdClass::$logo C:\xampp\htdocs\web.sheerkah\application\views\pendaftaran_v.php 309
ERROR - 2019-01-02 14:58:43 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\web.sheerkah\application\controllers\Master.php 14
ERROR - 2019-01-02 14:58:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\web.sheerkah\application\controllers\Master.php 18
ERROR - 2019-01-02 15:06:33 --> Severity: Notice --> Undefined property: stdClass::$logo C:\xampp\htdocs\web.sheerkah\application\views\pendaftaran_v.php 309
ERROR - 2019-01-02 15:06:35 --> Severity: Notice --> Undefined property: stdClass::$logo C:\xampp\htdocs\web.sheerkah\application\views\pendaftaran_v.php 309
ERROR - 2019-01-02 15:06:52 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\web.sheerkah\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php 538
ERROR - 2019-01-02 15:10:31 --> Severity: Notice --> Undefined property: stdClass::$logo C:\xampp\htdocs\web.sheerkah\application\views\pendaftaran_v.php 309
ERROR - 2019-01-02 15:11:01 --> Severity: Notice --> Undefined property: stdClass::$logo C:\xampp\htdocs\web.sheerkah\application\views\pendaftaran_v.php 309
ERROR - 2019-01-02 15:12:17 --> Severity: Notice --> Trying to get property 'data' of non-object C:\xampp\htdocs\web.sheerkah\application\controllers\Master.php 14
ERROR - 2019-01-02 15:12:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\web.sheerkah\application\controllers\Master.php 18
