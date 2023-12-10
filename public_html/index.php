<?php
$PAGE_NAME = "home";
include_once "../includes/header.php";
?>


<section>
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