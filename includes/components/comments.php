<section class="bg-[#502a29]  pb-16 px-5">
    <div class="max-w-screen-xl mx-auto relative overflow-hidden">
        <h2 class="text-center uppercase text-2xl font-semibold text-gray-50 py-10 ">
            Ce que les gens disent sur nous
        </h2>
        <div class="slide-content1 overflow-hidden rounded-xl">
            <div class="swiper-wrapper flex gap-3_">
                <?php for ($i = 0; $i < 6; $i++) : ?>

                    <div x-data="{
                        likes: <?= rand(1, 150); ?>,
                        liked: <?= rand(0, 1) ? 'true' : 'false' ?>
                    }" class="card swiper-slide bg-gray-50 rounded-xl overflow-hidden">
                        <div class="flex flex-col sm:flex-row p-5">
                            <div class="image-content w-full sm:w-2/5 flex-grow h-full">
                                <div class="card-image">
                                    <img class="w-full rounded-md h-full object-cover" src="<?= img('Staples_High_School2C_Westport2C_CT.jpg') ?>" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="w-full sm:w-3/5 flex flex-col justify-center items-center_ p-5">
                                <h2 class="name font-semibold text-lg ">Alber Rojet de la tour</h2>
                                <p class="text-gray-400 text-sm">Directeur Général Société Cotonnière de Guinée</p>
                                <hr class="my-2 border-t border-gray-300">
                                <div class="stars flex gap-1">
                                    <?= stars(rand(1, 5)) ?>
                                </div>
                            </div>
                        </div>

                        <div class="card-content p-5 pt-0">
                            <p class="description font-light text-base border-l-2 border-[#FFBB00] shadow-sm p-5 rounded-lg">
                                The lorem text the section that contains header with having open functionality...
                            </p>
                            <button x-on:click="liked = !liked; liked ? likes++ : likes--" class="px-4 rounded mt-5 flex gap-1 py-2 text-[#502a29]">
                                <span>
                                    <svg x-show="liked" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                    </svg>
                                    <svg x-show="!liked" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </span>
                                <span x-text="likes"></span>
                            </button>
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
    var swiper = new Swiper(".slide-content1", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: false,
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
            delay: 3500,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            790: {
                slidesPerView: 2,
            },
            1260: {
                slidesPerView: 3,
            },
        },
    });
</script>