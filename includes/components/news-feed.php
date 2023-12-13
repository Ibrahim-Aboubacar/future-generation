<section class="bg-[#502a29]  pb-16 px-5">
    <div class="max-w-screen-xl mx-auto relative overflow-hidden">
        <h2 class="text-center uppercase text-2xl font-semibold text-gray-50 py-10 ">WHAT'S NEW AT FUTURE GENERATION</h2>
        <div class="slide-content overflow-hidden rounded-xl">
            <div class="swiper-wrapper flex gap-3_">
                <?php for ($i = 0; $i < 15; $i++) : ?>

                    <div class="card swiper-slide w-[200px]_ bg-gray-50 rounded-xl overflow-hidden">
                        <div class="image-content relative ">
                            <!-- <span class="overlay absolute inset-0 bg-red-900/50 flex justify-center items-center"></span> -->
                            <span class="absolute bottom-0 left-0 rounded-md m-2 p-2 bg-[#502a29] text-gray-50">Matternelle</span>
                            <div class="card-image">
                                <img class="w-full h-full object-cover" src="<?php echo img('Staples_High_School2C_Westport2C_CT.jpg') ?>" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content p-3">
                            <h2 class="name font-semibold text-lg ">kindergarden Students reading loader</h2>
                            <p class="description font-light">The lorem text the section that contains header with having open functionality...</p>

                            <button class="px-4 rounded-md mt-5 py-2 bg-[#502a29] text-gray-50">View More</button>
                        </div>
                    </div>

                <?php endfor; ?>
            </div>
        </div>
        <div class="swiper-button-next hidden lg:block after:content-['next'] -right-10 after:text-[#ffbb00] swiper-navBtn_"></div>
        <div class="swiper-button-prev hidden lg:block after:content-['prev'] -left-10 after:text-[#ffbb00] swiper-navBtn_"></div>
        <div class="swiper-pagination bottom-[-20px_!important]" style="--swiper-pagination-color: #ffbb00; min-width: 100px"></div>
    </div>
</section>
<script src="assets/js/swiper.js"></script>
<script>
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>