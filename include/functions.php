<?php

/* Utility functions */

define('TEMPLATE_DIR', '../templates/');
define('SITE_DIR', 'http://www.nicolamerici.com/italianfood');
define('CONTENT_DIR', '../content/');
define('DEFAULT_LANG', 'en');


/* Load template */
function getTemplatePath($templateName){
	$templateFileName = TEMPLATE_DIR . $templateName . ".tpl.php";
	return $templateFileName;
}

/* Return text translation */
function getContentFile($lang = DEFAULT_LANG){
	$contentFile = CONTENT_DIR . "content-" . $lang . ".php";
	return $contentFile;
}

?>