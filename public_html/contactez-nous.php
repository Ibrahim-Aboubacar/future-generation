<?php
$PAGE_NAME = "contact";
include_once "../includes/header.php";
?>

<!-- HERO SECTION -->
<section>
    <div class="relative h-[500px] md:h-[700px]_ z-0 bg-no-repeat bg-cover bg-[90%_80%] md:bg-[100%_70%]" style="background-image: url(<?= img("bg-2.jpg") ?>);">
        <div class="absolute_ h-full inset-0 bg-[#502a29]/70 flex flex-col gap-10 justify-center items-center">
            <h1 class="text-3xl text-center md:text-5xl text-gray-200 flex justify-center items-center gap-4 drop-shadow-md">
                <span>Contactez-nous</span>
                <span class="inline-block w-6 animate-wiggle-y">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
                    </svg>
                </span>
            </h1>
        </div>
    </div>
</section>

<!-- LET'S START A CONVERSATION -->
<section>
    <div class="max-w-screen-xl mx-auto flex flex-col px-5 md:pb-16">
        <h2 class="text-center w-full py-10 text-gray-700 text-2xl md:text-3xl font-bold">
            Entamons une conversation
        </h2>
        <div class="flex relative -mt-20_ mb-40_ md:my-0 justify-center flex-col md:flex-row gap-6 items-center">
            <div id="imgDiv" class="w-full relative -top-5 opacity-10 md:opacity-100 md:[position:unset] bg-red-500_ md:w-1/2 p-3" id="monImage">
                <img src="<?= img("contact-us.svg") ?>" alt="" srcset="">
            </div>
            <div id="formDiv" class="w-full md:w-1/2 p-3 absolute top-0 md:[position:unset]">
                <form action="#" method="post">
                    <!-- @csrf -->
                    <div class="grid grid-cols-6 gap-3">
                        <!-- Prenom -->
                        <div class="col-span-3 flex flex-col relative group">
                            <label for="firstnane" class="text-gray-900 text-lg font-semibold">Prénom <span class="text-red-600">*</span></label>
                            <span class="absolute right-2 top-9 text-gray-600 flex justify-center items-center group-focus-within:text-[#ffbb00]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </span>
                            <input type="text" name="firstname" value="" id="firstname" placeholder="Ex: Ramatou" class="focus-visible:outline-none focus-visible:border-[#ffbb00] focus-visible:shadow-lg py-2 pl-3 pr-8 text-gray-500 border border-gray-500 rounded-md">
                            <!-- pour decrire des erreur au niveau du formulaire relatif a cet input -->
                            <p class="hidden text-xs text-red-500 p-1">&nbsp;</p>
                        </div>
                        <!-- Nom -->
                        <div class="col-span-3 flex flex-col relative group">
                            <label for="lastnane" class="text-gray-900 text-lg font-semibold">Nom <span class="text-red-600">*</span></label>
                            <span class="absolute right-2 top-9 text-gray-600 flex justify-center items-center group-focus-within:text-[#ffbb00]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                            </span>
                            <input type="text" name="lastname" value="" id="lastname" placeholder="Ex: Mohamed" class="focus-visible:outline-none focus-visible:border-[#ffbb00] focus-visible:shadow-lg py-2 pl-3 pr-8 text-gray-500 border border-gray-500 rounded-md">
                            <!-- pour decrire des erreur au niveau du formulaire relatif a cet input -->
                            <p class="hidden text-xs text-red-500 p-1">&nbsp;</p>
                        </div>
                        <!-- Email -->
                        <div class="col-span-6 flex flex-col relative group">
                            <label for="email" class="text-gray-900 text-lg font-semibold">Adresse Email <span class="text-red-600">*</span></label>
                            <span class="absolute right-2 top-9 text-gray-600 flex justify-center items-center group-focus-within:text-[#ffbb00]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </span>
                            <input type="email" name="email" value="" id="email" placeholder="Ex: ra.mohamed@gmail.com" class="focus-visible:outline-none focus-visible:border-[#ffbb00] focus-visible:shadow-lg py-2 pl-3 pr-8 text-gray-500 border border-gray-500 rounded-md">
                            <!-- pour decrire des erreur au niveau du formulaire relatif a cet input -->
                            <p class="hidden text-xs text-red-500 p-1">&nbsp;</p>
                        </div>
                        <!-- Telephone -->
                        <div class="col-span-6 flex flex-col relative group">
                            <label for="phone" class="text-gray-900 text-lg font-semibold">Numéro de téléphone <span class="text-red-600">*</span></label>
                            <span class="absolute right-2 top-9 text-gray-600 flex justify-center items-center group-focus-within:text-[#ffbb00]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </span>
                            <input type="text" name="phone" value="" id="phone" placeholder="Ex: +224 620-XX-XX-XX" class="focus-visible:outline-none focus-visible:border-[#ffbb00] focus-visible:shadow-lg py-2 pl-3 pr-8 text-gray-500 border border-gray-500 rounded-md">
                            <!-- pour decrire des erreur au niveau du formulaire relatif a cet input -->
                            <p class="hidden text-xs text-red-500 p-1">&nbsp;</p>
                        </div>
                        <!-- Message -->
                        <div class="col-span-6 flex flex-col relative group">
                            <label for="message" class="text-gray-900 text-lg font-semibold">Message <span class="text-red-600">*</span></label>
                            <span class="absolute right-2 top-9 text-gray-600 flex justify-center items-center group-focus-within:text-[#ffbb00]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
                            </span>
                            <textarea name="message" id="message" cols="30" rows="4" class="focus-visible:outline-none focus-visible:border-[#ffbb00] focus-visible:shadow-lg py-3 pl-3 pr-8 text-gray-500 border border-gray-500 rounded-md resize-none"></textarea>
                            <p class="text-xs text-gray-400 p-1">Le Message ici.</p>
                            <!-- pour decrire des erreur au niveau du formulaire relatif a cet input -->
                            <p class="hidden text-xs text-red-500 p-1">&nbsp;</p>
                        </div>
                        <!-- Petit commentaire -->
                        <div class="col-span-6 flex flex-col relative group">
                            <a class="px-5 mt-3 py-3 bg-[#502a29] text-[#ffbb00] transition-all hover:bg-[#ffbb00] hover:text-[#502a29] font-semibold text-lg text-center rounded-md " href="#">
                                Envoyer le message
                            </a>
                            <!-- Petit commentaire -->
                            <div class="col-span-6 flex flex-col relative group">
                                <p class="text-base font-medium text-gray-600 p-4 text-center">
                                    En remplissant ce formulaire, vous acceptez de recevoir sur <span class="font-semibold">WhatsApp</span>, par <span class="font-semibold">SMS</span> ou par <spam class="font-semibold">Mail</spam> des messages relatifs au sujet de ce message.
                                </p>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div class="md:hidden h-[var(--height)]" id="tchiko"></div>
    <script>
        const imgDiv = document.getElementById("imgDiv")
        const formDiv = document.getElementById("formDiv")
        const tchiko = document.getElementById("tchiko")

        window.addEventListener("resize", (e) => {
            tchikoFunc();
        })

        function tchikoFunc() {
            let imgH = imgDiv.getBoundingClientRect().height;
            // let imgW = imgDiv.getBoundingClientRect().width

            let formH = formDiv.getBoundingClientRect().height;
            // let formW = formDiv.getBoundingClientRect().width
            let height = (formH - imgH);
            console.log(height);
            tchiko.style.setProperty("--height", height + "px");
        }
        tchikoFunc();
        tchikoFunc();
        tchikoFunc();
    </script>
</section>

<!-- LET'S START A CONVERSATION -->

<!-- START- FIND US -->
<?php include "../includes/components/find-us.php"; ?>
<!-- END- FIND US -->

<!-- START- NEWS FEED -->
<?php include "../includes/components/news-feed.php"; ?>
<!-- END- NEWS FEED -->

<?php
include_once "../includes/footer.php";
?>