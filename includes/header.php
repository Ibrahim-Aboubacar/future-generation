<?php
include_once __DIR__ . "/helpers.php";
if (!isset($PAGE_NAME)) $PAGE_NAME = "FUG";
if (!isset($PAGE_TITLE)) $PAGE_TITLE = $PAGE_NAME;
if (!isset($SUB_PAGE_NAME)) $SUB_PAGE_NAME = "";
if (!isset($PAGE_CSS)) $PAGE_CSS = [];
if (!isset($PAGE_JS)) $PAGE_JS = [];
$SITE_NAME = "FUG";

// Algorithme qui parametre les classes des pages active ou pas
$ACTIVE_PAGE = [];
foreach (PAGES as $name => $file) {
    if ($name == $PAGE_NAME) {
        // Classes des pages active
        $ACTIVE_PAGE[$name] = 'text-[#ffbb00] hover:text-[#ffbb00]';
    } else {
        // Classes des pages non active
        $ACTIVE_PAGE[$name] = 'text-gray-200 hover:text-[#ffbb00]';
    }
}
// Algorithme qui parametre les classes des sous pages active ou pas
$ACTIVE_SUB_PAGE = [];
foreach (SUB_PAGES as $SUB_PAGE => $SUB_PAGES) {
    if ($SUB_PAGE === $name) {
        foreach ($SUB_PAGES as $sub_name => $page_title) {
            if ($sub_name == $SUB_PAGE_NAME) {
                // Classes des sous pages active
                $ACTIVE_SUB_PAGE[$sub_name] = 'bg-[#ffbb00]';
            } else {
                // Classes des sous pages non active
                $ACTIVE_SUB_PAGE[$sub_name] = '';
            }
        }
    } else {
        foreach ($SUB_PAGES as $sub_name => $page_title) {
            // Classes des sous pages non active
            $ACTIVE_SUB_PAGE[$sub_name] = '';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($PAGE_CSS as $path => $defer) {
        # code...
    } ?>
    <link rel="stylesheet" href="assets/css/swiper.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        html {
            scroll-behavior: smooth;
            scroll-margin: 430px 50px;
        }
    </style>
    <script src="assets/js/alpine.js" defer></script>
    <script>
        const IMAGE_NOT_FOUND_PATH = "<?php echo IMAGE_NOT_FOUND_PATH ?>"
    </script>
    <title><?php echo strtoupper($PAGE_TITLE) . " - " . strtoupper($SITE_NAME) ?></title>
</head>

<body>
    <header class="z-[99999999] fixed w-full max-w-[100vw] bg-[#502a29]" x-data="{showMtnl:false, showMenu:false, showMtnl2:false, x:0, y:0, init: () =>{window.addEventListener('resize', e => {$data.showMtnl=false; $data.showMenu=false; $data.showMtnl2=false;})}}">
        <div class=" p-3 flex justify-between align-center mx-auto max-w-screen-xl w-full">
            <div class="px-2">
                <a href="<?php echo page('home') ?>">
                    <img class="max-w-[80px]" src="<?php echo img("logo.png") ?>" alt="Le logo de la prestigieuse ecole FUTURE GENERATION" data-image-error>
                </a>
            </div>
            <button x-on:click="showMenu = !showMenu; showMtnl2 = false;" class="md:hidden text-[#ffbb00] flex justify-center items-center p-3 border-2 border-[#ffbb00a9]/0 rounded-lg transition-all hover:border-[#ffbb00a9]">
                <svg x-show="!showMenu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                </svg>
                <svg x-show="showMenu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <ul class="hidden md:flex justify-end items-center gap-2 ">
                <li class="">
                    <a class="px-3 py-2 font-semibold  hover:underline transition-all hover:text-[#ffbb00a9]_ <?php echo $ACTIVE_PAGE['home'] ?>" href="<?php echo page('home') ?>">ACCUEIL</a>
                </li>
                <li class="">
                    <a class="px-3 py-2 font-semibold  hover:underline transition-all hover:text-[#ffbb00a9]_ <?php echo $ACTIVE_PAGE['about'] ?>" href="<?php echo page('about') ?>">APROPOS</a>
                </li>
                <li class="relative">
                    <div x-on:mouseover="y = setTimeout(()=>{ showMtnl = true}, 300); clearTimeout(x)" x-on:mouseout="x = setTimeout(()=>{ showMtnl = false}, 300); clearTimeout(y)" class="px-3 py-2 font-semibold cursor-pointer <?php echo $ACTIVE_PAGE['sections'] ?>">
                        SECTIONS
                        <ul x-show="showMtnl" x-transition x-transition.duration.500ms class="absolute z-20 top-full flex flex-col gap-2 left-0 mt-3 bg-gray-100 text-[#502a29] rounded shadow p-3" style="display: none;">
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all <?php echo $ACTIVE_SUB_PAGE["maternelle"] ?>" href="<?php echo page('sections', ["page" => "maternelle"]) ?>">Maternelle</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all <?php echo $ACTIVE_SUB_PAGE["primary"] ?>" href="<?php echo page('sections', ["page" => "primary"]) ?>">Primary</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all <?php echo $ACTIVE_SUB_PAGE["college"] ?>" href="<?php echo page('sections', ["page" => "college"]) ?>">College</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all <?php echo $ACTIVE_SUB_PAGE["lycee"] ?>" href="<?php echo page('sections', ["page" => "lycee"]) ?>">Lycee</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all <?php echo $ACTIVE_SUB_PAGE["parascoloaire"] ?>" href="<?php echo page('sections', ["page" => "parascoloaire"]) ?>">parascoloaire</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all <?php echo $ACTIVE_SUB_PAGE["it-courses"] ?>" href="<?php echo page('sections', ["page" => "it-courses"]) ?>">IT Courses</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all <?php echo $ACTIVE_SUB_PAGE["english-classes"] ?>" href="<?php echo page('sections', ["page" => "english-classes"]) ?>">English Classes</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all <?php echo $ACTIVE_SUB_PAGE["revision"] ?>" href="<?php echo page('sections', ["page" => "revision"]) ?>">Revision</a></li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a class="px-3 py-2 font-semibold  hover:underline transition-all hover:text-[#ffbb00a9]_ <?php echo $ACTIVE_PAGE['gallery'] ?>" href="<?php echo page('gallery') ?>">GALLERY</a>
                </li>
                <li class="">
                    <a class="px-3 py-2  font-semibold  hover:underline transition-all hover:text-[#ffbb00a9]_ <?php echo $ACTIVE_PAGE['contact'] ?>" href="<?php echo page('contact') ?>">CONTACT</a>
                </li>
            </ul>
        </div>
        <ul class="md:flex justify-center items-center transition-all" x-show="showMenu" x-transition x-transition.duration.500ms style="display: none;">
            <li class="">
                <a class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 transition-all hover:bg-[#ffbb00a9]/20 duration-300" href="<?php echo page('home') ?>">ACCUEIL</a>
            </li>
            <li class="">
                <a class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 transition-all hover:bg-[#ffbb00a9]/20 duration-300" href="<?php echo page('about') ?>">APROPOS</a>
            </li>
            <li class="relative">
                <div x-on:click="showMtnl2 = !showMtnl2" class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 cursor-pointer hover:bg-[#ffbb00a9]/20 duration-300">
                    SECTIONS
                    <ul x-show="showMtnl2" x-transition x-transition.duration.200ms class="absolute z-20 top-full w-[90%] left-1/2 -translate-x-1/2 transition-all duration-500 flex flex-col gap-2 left-_0 mt-3 bg-gray-100 text-[#502a29] rounded shadow p-3">
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="<?php echo page('sections', ["page" => "maternelle"]) ?>">Maternelle</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="<?php echo page('sections', ["page" => "primary"]) ?>">Primary</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="<?php echo page('sections', ["page" => "college"]) ?>">College</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="<?php echo page('sections', ["page" => "lycee"]) ?>">Lycee</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="<?php echo page('sections', ["page" => "parascoloaire"]) ?>">parascoloaire</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="<?php echo page('sections', ["page" => "it-courses"]) ?>">IT Courses</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="<?php echo page('sections', ["page" => "english-classes"]) ?>">English Classes</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="<?php echo page('sections', ["page" => "revision"]) ?>">Revision</a></li>
                    </ul>
                </div>
            </li>
            <li class="">
                <a class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 transition-all hover:bg-[#ffbb00a9]/20 duration-300" href="<?php echo page('gallery') ?>">GALLERY</a>
            </li>
            <li class="">
                <a class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 transition-all hover:bg-[#ffbb00a9]/20 duration-300" href="<?php echo page('contact') ?>">CONTACT</a>
            </li>
        </ul>
    </header>
    <div id="main" class="pt-[65px] z-0 max-w-[100vw]">