<?php
include_once __DIR__ . "/helpers.php";
if (!isset($PAGE_NAME)) $PAGE_NAME = "FUG";
if (!isset($PAGE_CSS)) $PAGE_CSS = [];
if (!isset($PAGE_JS)) $PAGE_JS = [];
$SITE_NAME = "FUG";
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
    <script src="assets/js/alpine.js" defer></script>
    <title><?= strtoupper($PAGE_NAME) . " - " . strtoupper($SITE_NAME) ?></title>
</head>

<body>
    <header class="z-[99999999] fixed w-full max-w-[100vw] bg-[#502a29]" x-data="{showMtnl:false, showMenu:false, showMtnl2:false, x:0}">
        <div class=" p-3 flex justify-between align-center mx-auto max-w-screen-xl w-full">
            <div class="px-2">
                <a href="<?= page('home') ?>">
                    <img class="max-w-[80px]" src="<?= img("logo.png") ?>" alt="Le logo de la prestigieuse ecole FUTURE GENERATION">
                </a>
            </div>
            <button x-on:click="showMenu = !showMenu; showMtnl2 = false;" class="md:hidden text-[#ffbb00a9] flex justify-center items-center p-3 border-2 border-[#ffbb00a9]/0 rounded-lg transition-all hover:border-[#ffbb00a9]">
                <svg x-show="!showMenu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                </svg>
                <svg x-show="showMenu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <ul class="hidden md:flex justify-end items-center gap-2 ">
                <li class="">
                    <a class="px-3 py-2 font-semibold text-gray-200 hover:underline transition-all hover:text-[#ffbb00a9]" href="<?= page('home') ?>">ACCUEIL</a>
                </li>
                <li class="">
                    <a class="px-3 py-2 font-semibold text-gray-200 hover:underline transition-all hover:text-[#ffbb00a9]" href="<?= page('about') ?>">APROPOS</a>
                </li>
                <li class="relative">
                    <div x-on:mouseover="showMtnl = true; clearTimeout(x)" x-on:mouseout="x = setTimeout(()=>{ showMtnl = false}, 300)" class="px-3 py-2 font-semibold text-gray-200 cursor-pointer hover:text-[#ffbb00a9]">
                        MATERNELLE
                        <ul x-show="showMtnl" x-transition x-transition.duration.500ms class="absolute z-20 top-full flex flex-col gap-2 left-0 mt-3 bg-gray-100 text-[#502a29] rounded shadow p-3" style="display: none;">
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">Primary</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">College</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">Lycee</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">parascoloaire</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">IT Courses</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">English Classes</a></li>
                            <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">Revision</a></li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a class="px-3 py-2 font-semibold text-gray-200 hover:underline transition-all hover:text-[#ffbb00a9]" href="<?= page('gallery') ?>">GALLERY</a>
                </li>
                <li class="">
                    <a class="px-3 py-2 font-semibold text-gray-200 hover:underline transition-all hover:text-[#ffbb00a9]" href="<?= page('admissions') ?>">ADMISSIONS</a>
                </li>
                <li class="">
                    <a class="px-3 py-2  font-semibold text-gray-200 hover:underline transition-all hover:text-[#ffbb00a9]" href="<?= page('contact') ?>">CONTACT</a>
                </li>
            </ul>
        </div>
        <ul class="md:flex justify-center items-center transition-all" x-show="showMenu" x-transition x-transition.duration.500ms style="display: none;">
            <li class="">
                <a class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 transition-all hover:bg-[#ffbb00a9]/20 duration-300" href="<?= page('home') ?>">ACCUEIL</a>
            </li>
            <li class="">
                <a class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 transition-all hover:bg-[#ffbb00a9]/20 duration-300" href="<?= page('about') ?>">APROPOS</a>
            </li>
            <li class="relative">
                <div x-on:click="showMtnl2 = !showMtnl2" class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 cursor-pointer hover:bg-[#ffbb00a9]/20 duration-300">
                    MATERNELLE
                    <ul x-show="showMtnl2" x-transition x-transition.duration.200ms class="absolute z-20 top-full w-[90%] left-1/2 -translate-x-1/2 transition-all duration-500 flex flex-col gap-2 left-_0 mt-3 bg-gray-100 text-[#502a29] rounded shadow p-3">
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">Primary</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">College</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">Lycee</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">parascoloaire</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">IT Courses</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">English Classes</a></li>
                        <li><a class="px-3 w-full inline-block rounded-sm py-1 text-left hover:bg-pink-950/20 whitespace-nowrap transition-all" href="#">Revision</a></li>
                    </ul>
                </div>
            </li>
            <li class="">
                <a class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 transition-all hover:bg-[#ffbb00a9]/20 duration-300" href="<?= page('gallery') ?>">GALLERY</a>
            </li>
            <li class="">
                <a class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 transition-all hover:bg-[#ffbb00a9]/20 duration-300" href="<?= page('admissions') ?>">ADMISSIONS</a>
            </li>
            <li class="">
                <a class="px-3 py-3 w-full inline-block text-center font-semibold text-gray-200 transition-all hover:bg-[#ffbb00a9]/20 duration-300" href="<?= page('contact') ?>">CONTACT</a>
            </li>
        </ul>
    </header>
    <div id="main" class="pt-[65px] z-0 max-w-[100vw]">