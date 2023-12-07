<?php
include_once __DIR__ . "/constants.php";
function img(string $path): string
{
    return SITE_BASE . IMG_PATH . $path;
}

function page(string $page_name): string
{
    if (!isset(PAGES[$page_name])) return "#PAGE_NOT_FOUND";
    return SITE_BASE . PAGES[$page_name];
}
