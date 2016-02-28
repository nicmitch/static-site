<?php

    require('../include/functions.php');

    /*
        Language code;
    */

    $lng = "en";

    /*
        Template name homepage.tlp.php = homepage;
    */
    $template = 'homepage';

    $pageName = 'home';
    $bodyClass = $pageName;

    $metaPageTitle = 'Page title Enlish';
    $metaPageDescription = 'Page description English';



    require_once( getContentFile($lng) );
    require_once( getTemplatePath($template) );
?>