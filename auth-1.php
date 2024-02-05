<?php
/**
 * Authorization script on the Bitrix website without using a password for any user
 * Скрипт авторизации на сайте Битрикс без использования пароля под любым пользователем
 *
 * Let's follow the link - /auth-1.php?ADMIN=AUTORIZE111
 */

// This constant in case the site is closed to unauthorized users
// Эта константа на случай если сайт закрыт для не авторизованных пользователей
define("NOT_CHECK_PERMISSIONS", true);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$userId = 1;
$token = "AUTORIZE11";

// Minimum protection
if ($_REQUEST['ADMIN'] === $token) {
    $timeControl = time() - filectime(__FILE__);
    // Что бы не забывать на площадке скрипт делаем проверку времени создания
    // In order not to forget the script on the site, we check the creation time
    if ($timeControl > 60) {
        @unlink(__FILE__);
        LocalRedirect("/404.php?the-file-is-rotten");
    } else {
        global $USER;
        // Log in as user with ID = 1
        // Авторизуемся под пользователем с ID = 1
        $USER->Authorize($userId);
        // After authorization, the script itself is deleted
        // После авторизации скрипт сам удаляется
        @unlink(__FILE__);
        LocalRedirect("/bitrix/admin/");
    }
} else {
    LocalRedirect("/404.php");
}
