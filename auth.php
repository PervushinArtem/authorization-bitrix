<?php
/**
 * Authorization script on the Bitrix website without using a password for any user
 * Скрипт авторизации на сайте Битрикс без использования пароля под любым пользователем
 * 
 * Let's follow the link - /auth.php?ADMIN=AUTORIZE111
 */

// This constant in case the site is closed to unauthorized users
// Эта константа на случай если сайт закрыт для не авторизованных пользователей
define("NOT_CHECK_PERMISSIONS", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

// Minimum protection
if($_REQUEST['ADMIN'] == "AUTORIZE111"){
	global $USER; 
	
	// Log in as user with ID = 1
  // Авторизуемся под пользователем с ИД = 1
	$USER->Authorize(1); 
	
	// After authorization, the script itself is deleted
	// После авторизации скрипт сам удаляется
	@unlink(__FILE__);
	
	LocalRedirect("/bitrix/admin/");
}else{
	LocalRedirect("/404.php"); 
}
