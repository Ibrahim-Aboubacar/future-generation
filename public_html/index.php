<?php
$PAGE_NAME = "home";
include_once "../includes/header.php";
?>


<section class="relative">
    <div class="relative h-[830px] md:h-screen z-0 bg-no-repeat bg-cover bg-[15%] md:bg-center" style="background-image: url(<?= img("bg-cover.jpg") ?>);">
        <div class="absolute_ h-full inset-0 bg-[#502a29]/70 flex flex-col gap-10 justify-center items-center">
            <h1 class="text-xl text-center md:text-3xl text-gray-200 drop-shadow-md">Bienvenue au complexe scolaire <br>
                <span class="text-4xl md:text-6xl font-semibold text-[#ffbb00] mt-3">Future Génération</span>
            </h1>
            <a class="px-8 py-4 rounded-xl flex gap-3 text-base md:text-xl font-bold cursor-pointer border-[#ffbb00] hover:bg-[#ffbb00] group text-[#ffbb00] hover:border-[#502a29] hover:text-[#502a29] border-2  transition-all" href="<?= page('contact') ?>">
                <span>Prenez attache avec nous</span>
                <span class="inline-block w-6 animate-wiggle-x group-hover:animate-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </span>
            </a>
        </div>
    </div>

    <div class="[position:unset] md:absolute md:bottom-[-7rem] w-full">
        <div class="max-w-screen-xl mx-auto px-5 flex flex-col md:flex-row justify-around items-center gap-5">
            <!-- Eleves -->
            <div class="md:bg-gray-50 p-5 rounded-md w-1/5 flex flex-col justify-center items-center aspect-square text-[#502a29]">
                <p class="mb-2 flex flex-col justify-center items-center">
                    <span class="w-16 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full aspect-square">
                            <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd" />
                            <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                        </svg>
                    </span>
                    <span class="text-center text-gray-500 font-semibold text-xl">Éleves</span>
                </p>
                <p class="text-center count-number font-bold text-4xl" data-speed="10">1000</p>
            </div>

            <!-- Enseignants -->
            <div class="md:bg-gray-50 p-5 rounded-md w-1/5 flex flex-col justify-center items-center aspect-square text-[#502a29]">
                <p class="mb-2 flex flex-col justify-center items-center">
                    <span class="w-16 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full aspect-square">
                            <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                        </svg>
                    </span>
                    <span class="text-center text-gray-500 font-semibold text-xl">Enseignants</span>
                </p>
                <p class="text-center count-number font-bold text-4xl" data-speed="30">100</p>
            </div>

            <!-- Classes -->
            <div class="md:bg-gray-50 p-5 rounded-md w-1/5 flex flex-col justify-center items-center aspect-square text-[#502a29]">
                <p class="mb-2 flex flex-col justify-center items-center">
                    <span class="w-16 inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-full aspect-square">
                            <path d="M19.006 3.705a.75.75 0 00-.512-1.41L6 6.838V3a.75.75 0 00-.75-.75h-1.5A.75.75 0 003 3v4.93l-1.006.365a.75.75 0 00.512 1.41l16.5-6z" />
                            <path fill-rule="evenodd" d="M3.019 11.115L18 5.667V9.09l4.006 1.456a.75.75 0 11-.512 1.41l-.494-.18v8.475h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3v-9.129l.019-.006zM18 20.25v-9.565l1.5.545v9.02H18zm-9-6a.75.75 0 00-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75H9z" clip-rule="evenodd" />
                        </svg>

                    </span>
                    <span class="text-center text-gray-500 font-semibold text-xl">Classes</span>
                </p>
                <p class="text-center count-number font-bold text-4xl" data-speed="10">300</p>
            </div>
        </div>
    </div>
    <script src="assets/js/number-counter.js"></script>
    <script>
        window.onload = initNumberCounter()
    </script>
</section>

<section class="py-40 bg-no-repeat bg-cover " style="background-image: url(<?= img("bg-1.jpg") ?>);">
    <div class="max-w-screen-xl mx-auto px-5 md:flex" id="section_welcome">
        <div class="w-full md:w-1/2 overflow-hidden flex flex-col justify-center rounded-md" id="div_image_buil">
            <img src="<?= img("Staples_High_School2C_Westport2C_CT.jpg") ?>" alt="" id="b_img">
        </div>
        <div class="w-full md:w-1/2 md:px-5 flex flex-col justify-center text-gray-800" id="div_image_buil_info">
            <h2 class="my-4 font-semibold text-2xl" id="complex_h2">COMPLEX SCOLAIRE <br>
                FUTURE GENERATION</h2>
            <p class="text-lg" id="complex_p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores porro natus alias aliquid, atque aspernatur sed
                corporis minus, officia explicabo ipsa autem eius
                harum distinctio! Facilis veniam dolor laborum dolorum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores porro natus alias aliquid, atque aspernatur sed
                corporis minus, officia explicabo ipsa autem eius
                harum distinctio! Facilis veniam dolor laborum dolorum
            </p>
            <a class="px-5 mt-3 py-3 bg-[#502a29] text-[#ffbb00] transition-all hover:bg-[#ffbb00] hover:text-[#502a29] font-semibold text-lg text-center rounded-md " href="#">
                Contactez-nous
            </a>
        </div>
    </div>
</section>

<!-- START- NEWS FEED -->
<?php include "../includes/components/news-feed.php"; ?>
<!-- END- NEWS FEED -->

<hr class="border-t-2 border-gray-50">

<!-- START- FIND US -->
<?php include "../includes/components/comments.php"; ?>
<!-- END- FIND US -->

<!-- START- FIND US -->
<?php include "../includes/components/find-us.php"; ?>
<!-- END- FIND US -->

<?php
include_once "../includes/footer.php";
?>