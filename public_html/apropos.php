<?php
$PAGE_NAME = "about";
include_once "../includes/header.php";
?>

<!-- HERO SECTION -->
<section>
    <div class="relative h-[700px] z-0 bg-no-repeat bg-cover bg-[50%_25%]" style="background-image: url(<?php echo img("bg-3.jpg") ?>);">
        <div id="heroSection" class="h-full inset-0 bg-[#502a29]/80 flex flex-col gap-10 justify-center items-center">
            <h1 class="text-3xl text-center md:text-5xl text-gray-200 flex justify-center items-center gap-4 drop-shadow-md">
                <span class="write-text" data-speed="40" style="opacity: 0;">Qui sommes nous ?</span>
            </h1>
            <p class=" text-gray-300 text-lg md:text-2xl text-justify mx-5 md:mx-auto md:max-w-xl">
                <span data-delay="3000" class="write-text" style="opacity: 0;">Le Groupe Scolaire Privé « </span>
                <strong data-delay="3200" class="write-text text-[#ffbb00]" style="opacity: 0;">
                    Future Génération
                </strong>
                <span data-delay="3800" class="write-text" style="opacity: 0;">
                    » est un établissement d'enseignement général situé dans la commune de Ratoma à 50m du grand carrefour de Lambanyi sur la T4. Crée depuis 2009 avec le cycle élémentaire renfermant 245 élèves à son ouverture. Il regroupe de nos jours en son sein les cycles élémentaire et le lycée avec 1542 élèves inscrits.
                </span>
            </p>
        </div>
    </div>
</section>


<!-- OBJECTIVES, WHY AND VISION -->
<section>
    <div class="max-w-screen-xl mx-auto">
        <div class="flex gap-8 flex-col md:flex-row justify-between my-16 mx-3 md:my-36">
            <!-- Vision -->
            <div class="mx-auto max-w-[98%]_ w-full md:w-1/3">
                <div class="flex-grow md:mt-24 p-8 border border-gray-300 shadow rounded-xl ">
                    <h2 class="text-red-500 flex gap-3 justify-center items-center">
                        <span class="w-14 md:w-20 h-14 md:h-20 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                        </span>
                        <span class="text-lg md:text-xl uppercase font-semibold">Notre Vision</span>
                    </h2>
                    <p class="text-gray-500 text-lg p-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, expedita? Earum itaque velit rem quae laborum reiciendis beatae nesciunt, culpa quibusdam molestiae, porro cupiditate sunt perspiciatis debitis? Sunt, placeat quia Ad, expedita? Earum itaque velit rem quae laborum reiciendis beatae nesciunt, culpa quibusdam molestiae porro cupiditate sunt.
                    </p>
                </div>
            </div>
            <!-- Pourquoi nous ? -->
            <div class="mx-auto max-w-[98%]_ w-full md:w-1/3">
                <div class="flex-grow-0 md:mb-24 p-8 border border-gray-300 shadow rounded-xl">
                    <h2 class="text-[#ffbb00] flex gap-3 justify-center items-center">
                        <span class="w-14 md:w-20 h-14 md:h-20 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>

                        </span>
                        <span class="write-texttext-lg md:text-xl uppercase font-semibold">Pourquoi Nous ?</span>
                    </h2>
                    <p class="text-gray-500 text-lg p-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, expedita? Earum itaque velit rem quae laborum reiciendis beatae nesciunt, culpa quibusdam molestiae, porro cupiditate sunt perspiciatis debitis? Sunt, placeat quia?
                    </p>
                </div>
            </div>
            <!-- Objectives -->
            <div class="mx-auto max-w-[98%]_ w-full md:w-1/3">
                <div class="flex-grow md:mt-24 p-8 border border-gray-300 shadow rounded-xl">
                    <h2 class="text-[#ffbb00]_ text-green-500 flex gap-3 justify-center items-center">
                        <span class="w-14 md:w-20 h-14 md:h-20 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            </svg>
                        </span>
                        <span class="text-lg md:text-xl uppercase font-semibold">Nos Objectifs</span>
                    </h2>
                    <p class="text-gray-500 text-lg p-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, expedita?
                    </p>
                    <ol type="1" class="text-gray-500 text-lg p-3 list-decimal">
                        <li class="ml-3">Earum itaque velit rem</li>
                        <li class="ml-3">Quae laborum reiciendis beatae.</li>
                        <li class="ml-3">
                            <p>Consectetur adipisicing</p>
                            <ul class="list-disc">
                                <li class="ml-3">Culpa quibusdam molestiae</li>
                                <li class="ml-3">Porro cupiditate</li>
                            </ul>
                        </li class="ml-3">
                        <li class="ml-3">sunt perspiciatis debitis?</li>
                        <li class="ml-3">Sunt, placeat quia?</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- START- FIND US -->
<?php include "../includes/components/comments.php"; ?>
<!-- END- FIND US -->









<script src="assets/js/text-writer.js"></script>
<script>
    window.onload = intTextWriter(document.getElementById("heroSection"))
</script>

<!-- START- FIND US -->
<?php include "../includes/components/find-us.php"; ?>
<!-- END- FIND US -->


<?php
include_once "../includes/footer.php";
?>