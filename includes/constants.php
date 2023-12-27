<?php

/**
 * The public path of the images folder.
 */
define("IMG_PATH", "assets/img/");
define("_DS", DIRECTORY_SEPARATOR);

/**
 * The URL of the website.
 */
define("SITE_BASE", "https://future-generation.test/");
// define("SITE_BASE", "http://192.168.100.3/future-generation/public_html/");
define("IMAGE_NOT_FOUND_PATH", SITE_BASE . "assets/img/site/img-not-found.png");

/**
 * An array listing the pages within the website.
 * 
 * The keys represent the name of the pages, and the values represent
 * the name of the files being the actual page.
 */
define("PAGES", [
    "home" => "",
    "contact" => "contactez-nous",
    "about" => "apropos",
    "gallery" => "gallery",
    "sections" => "sections",
]);

define("SUB_PAGES", [
    "sections" => [
        "maternelle" => "Maternelle",
        "primary" => "Primary",
        "college" => "College",
        "lycee" => "Lycee",
        "parascoloaire" => "Parascoloaire",
        "it-courses" => "IT Courses",
        "english-classes" => "English Classes",
        "revision" => "Revision",
    ]
]);
