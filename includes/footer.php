</div>

<footer class="bg-[#222222] py-8 px-8 gap-2">
    <section class="max-w-screen-xl mx-auto grid grid-cols-4 sm:grid-cols-4 md:grid-cols-8 gap-5">
        <div class="col-span-3 md:col-span-2">
            <h4 class="border-l-2 text-gray-200 uppercase border-[#ffbb00] mb-4 py-1 pl-3 text-lg font-bold">
                Apropos
            </h4>
            <p class="text-xs font-light text-gray-400 pl-2 sm:pl-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, enim saepe? Laboriosam voluptatum, et unde ab laudantium eos, dolores, exercitationem quasi doloribus similique animi molestiae explicabo sit ex impedit molestias.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, enim saepe? Laboriosam voluptatum, et unde ab laudantium eos, dolores, exercitationem quasi doloribus similique animi molestiae explicabo sit ex impedit molestias.
            </p>
        </div>

        <div class="col-span-1 md:col-span-1">
            <h4 class="border-l-2 text-gray-200 uppercase border-[#ffbb00] mb-4 py-1 pl-3 text-lg font-bold">
                Pages
            </h4>
            <ul class="text-xs pl-2 sm:pl-0">
                <li><a class="text-gray-400" href="#">Accueil</a></li>
                <li><a class="text-gray-400" href="#">Primaire</a></li>
                <li><a class="text-gray-400" href="#">College</a></li>
                <li><a class="text-gray-400" href="#">Lycé</a></li>
                <li><a class="text-gray-400" href="#">Parascolaire</a></li>
                <li><a class="text-gray-400" href="#">Matternelle</a></li>
                <li><a class="text-gray-400" href="#">IT Coursers</a></li>
                <li><a class="text-gray-400" href="#">English Classes</a></li>
                <li><a class="text-gray-400" href="#">Revision</a></li>
            </ul>
        </div>

        <div class="col-span-2 md:col-span-3">
            <h4 class="border-l-2 text-gray-200 uppercase border-[#ffbb00] mb-4 py-1 pl-3 text-lg font-bold">
                Latest post
            </h4>
            <div class=" pl-2 sm:pl-0">
                <?php for ($i = 0; $i < 2; $i++) : ?>
                    <div class="flex px-2 gap-4 mb-2">
                        <div class="w-1/3">
                            <img class="max-w-full h-full object-contain" src="<?php echo img("elone-musk.jpg") ?>" alt="" data-image-error>
                        </div>
                        <div class="w-8/12 text-xs text-gray-400">
                            <p>
                                TRAIN YOUR KIDS FOR THE NATIONAL EXAMS
                            </p>
                            <span class="font-bold text-gray-200">10 dec, 2023</span>
                        </div>

                    </div>
                <?php endfor ?>
            </div>
        </div>

        <div class="col-span-2 md:col-span-2">
            <h4 class="border-l-2 text-gray-200 uppercase border-[#ffbb00] mb-4 py-1 pl-3 text-lg font-bold">
                Contacts
            </h4>
            <ul class="text-xs pl-2 sm:pl-0">
                <li class="text-gray-400">Email: <a class="text-gray-400" href="#">info.@gmail.commodi</a></li>
                <li class="text-gray-400">Phone: <a class="text-gray-400" href="#">Primaire</a></li>
                <li class="text-gray-400">Phone: <a class="text-gray-400" href="#">College</a></li>
                <li class="text-gray-400">Phone: <a class="text-gray-400" href="#">Lycé</a></li>
                <li class="text-gray-400">Location: <a class="text-gray-400" href="#">Parascolaire</a></li>
            </ul>
        </div>
    </section>
    <section class="text-gray-500 text-center border-t border-dashed border-[#909090] flex flex-col justify-center items-center mt-5 pt-10">
        <p>Copyright &copy; 2023 <a class="text-gray-300" href="/">Group Scolaire Future Generation</a> - Tous Droits Réservés</p>
        <p>Developed by: <a href="@">Diallo Mamadou Alpha</a> - Contact: +224-628-898-930</p>
    </section>
    <!-- Div cobaille pout l'indentification des calsse dynamique en utiliser php -->
    <div calsse="hidden'"></div>
</footer>
</body>
<script src="./assets/js/js.js">
</script>

</html>