<?php
include_once __DIR__ . "/../includes/helpers.php";
$PAGE_NAME = "sections";

$SUB_PAGES = SUB_PAGES[$PAGE_NAME];

$SUB_PAGE_NAME = strtolower($_GET["page"] ?? "404");
$page404 = false;
$includeFile = "";
$include = $includePage404 = __DIR__ . _DS . ".." . _DS . "includes" . _DS . "pages" . _DS . "404.php";

foreach ($SUB_PAGES as $name => $title) {
    if ($SUB_PAGE_NAME == $name) {
        $PAGE_TITLE = $title . " - " . strtoupper($PAGE_NAME);
        $includeFile = $name . ".php";
    }
}
if (!isset($PAGE_TITLE)) {
    $page404 = true;
}

if ($page404) {
    http_response_code(404);
} else {
    $include = __DIR__ . _DS . ".." . _DS . "includes" . _DS . "pages" . _DS . "sections" . _DS . $includeFile;
}

if (file_exists($include)) {
    include_once "../includes/header.php";
    require_once $include;

    // START- NEWS FEED
    include "../includes/components/news-feed.php";
    // END- NEWS FEED

    // START- FIND US
    include "../includes/components/find-us.php";
    // END- FIND US

    include_once "../includes/footer.php";
    die;
}


die("<p style=\"color:#f30;font-family:sans-serif; font-weight: 600; font-size:2.5rem\">Un problème s'est produit lors du traitement de cette page.<br>Merci de bien vouloir notifier l'administrateur du site ou le propriétaire.</p>");
