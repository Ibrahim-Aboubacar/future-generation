<?php
$PAGE_NAME = "gallery";

include_once "../includes/header.php";
$imagesFromSite = [
    "bg-1.jpg",
    "bg-2.jpg",
    "bg-3.jpg",
    "bg-cover.jpg",
    "elone-musk.jpg",
    "Staples_High_School2C_Westport2C_CT.jpg",
    "img-1.jpg",
    "img-2.jpg",
];
$filters = [
    "primary",
    "college",
    "lycee",
    "parascoloaire",
    "it-courses",
    "english-classes",
    "revision",
];
$filtersUsed = [
    "primary" => 0,
    "college" => 0,
    "lycee" => 0,
    "parascoloaire" => 0,
    "it-courses" => 0,
    "english-classes" => 0,
    "revision" => 0,
];
$images = [];
for ($i = 0; $i < 13; $i++) {
    $filter = $filters[rand(0, (count($filters) - 1))];
    $filtersUsed[$filter]++;

    $image = img($imagesFromSite[rand(0, count($imagesFromSite) - 1)]);

    $images[] = [
        "filter" => $filter,
        "image" => $image,
        "desc" => "Desc: " . ucwords(str_replace("-", " ", $filter)),
    ];
}
?>

<section>
    <script src="assets/js/masonry.js"></script>

    <div class="containero my-10">
        <h2 class="text-center font-semibold uppercase text-[#502a29] mb-5 text-2xl">Nos Images</h2>
        <div class="mx-5">
            <h5 class="font-semibold text-[#502a29] mb-2">Filtre:</h5>
            <div id="filter" class="flex gap-3 overflow-x-auto py-2">
                <button class="bg-[#ffbb00] text-[#502a29] font-semibold rounded-md py-1 px-3 transition-all min-w-max inline-block filter-btn" data-filter="*" type="button">Toutes (<?php echo count($images) ?>)</button>
                <button class="bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100 font-semibold rounded-md py-1 px-3 transition-all min-w-max inline-block filter-btn" data-filter="primary" type="button">Primary (<?php echo $filtersUsed["primary"] ?>)</button>
                <button class="bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100 font-semibold rounded-md py-1 px-3 transition-all min-w-max inline-block filter-btn" data-filter="college" type="button">College (<?php echo $filtersUsed["college"] ?>)</button>
                <button class="bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100 font-semibold rounded-md py-1 px-3 transition-all min-w-max inline-block filter-btn" data-filter="lycee" type="button">Lycee (<?php echo $filtersUsed["lycee"] ?>)</button>
                <button class="bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100 font-semibold rounded-md py-1 px-3 transition-all min-w-max inline-block filter-btn" data-filter="parascoloaire" type="button">parascoloaire (<?php echo $filtersUsed["parascoloaire"] ?>)</button>
                <button class="bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100 font-semibold rounded-md py-1 px-3 transition-all min-w-max inline-block filter-btn" data-filter="it-courses" type="button">IT Courses (<?php echo $filtersUsed["it-courses"] ?>)</button>
                <button class="bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100 font-semibold rounded-md py-1 px-3 transition-all min-w-max inline-block filter-btn" data-filter="english-classes" type="button">English Classes (<?php echo $filtersUsed["english-classes"] ?>)</button>
                <button class="bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100 font-semibold rounded-md py-1 px-3 transition-all min-w-max inline-block filter-btn" data-filter="revision" type="button">Revision (<?php echo $filtersUsed["revision"] ?>)</button>
            </div>
        </div>
        <div id="gallery" class="grid mt-5 isotop-grid max-w-full w-full">
            <?php foreach ($images as $key => $image) : ?>
                <div id="image-<?php echo $key ?>" onclick="showImagePreview(<?php echo $key ?>)" class="masonry-grid-item w-1/2 md:w-1/3 cursor-pointer  hover:shadow-lg group shadow-black rounded-md p-3 <?php echo $filter = $image['filter'] ?> relative" data-desc="<?php echo $image['desc'] ?>">
                    <span class="py-1 px-3 text-gray-50 absolute bottom-5 left-5 rounded-md bg-[#502a29] uppercase text-sm z-20 filter-btn" data-filter="<?php echo $filter ?>"><?php echo str_replace("-", " ", $filter) ?></span>
                    <img src="<?php echo $image['image'] ?>" class="max-w-full h-auto block overflow-hidden rounded-md shadow group-hover:scale-105 origin-center transition-all" alt="<?php echo str_replace("-", " ", $filter) ?>" data-desc="<?php echo $image['desc'] ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="imagePreview" class="fixed inset-0 bg-[#502a29]/60 backdrop-blur-sm z-30 transition-all duration-700" style="opacity: 0; display: none;">
    <div id="imagePreviewContainer" tabindex="1" class="containero outline-none my-10 relative h-full bottom-0 top-0">
        <button id="goLeftBtn" onclick="moveImage('left')" class="absolute top-1/2 md:top-1/2 -translate-y-1/2 left-1 text-gray-50 bg-[#ffbb00] hover:scale-105 origin-center active:bg-[#502a29] p-1 md:p-3 rounded-xl flex justify-center items-center z-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 md:w-10 h-6 md:h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </button>
        <button id="goRightBtn" onclick="moveImage('right')" class="absolute top-1/2 md:top-1/2 -translate-y-1/2 right-1 text-gray-50 bg-[#ffbb00] hover:scale-105 origin-center active:bg-[#502a29] p-1 md:p-3 rounded-xl flex justify-center items-center z-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 md:w-10 h-6 md:h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>
        <button id="closeBtn" class="absolute top-20 md:top-24 right-[40px] md:right-[-20px]_ text-gray-50 border-2 text-xl p-3 rounded-xl flex justify-center items-center" onclick="closePreview ()" title="Fermer la previsualisation">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 md:w-8 h-6 md:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        <div id="thumbnails" class="absolute flex justify-center items-center gap-2 overflow-x-auto bottom-[100px] md:bottom-[70px] left-0 right-0 rounded-md min-h-[70px]">
            <div class="hover:scale-110 transition-all cursor-pointer ring-4 ring-[#ffbb00]" style="width: 40px;">
                <img class="object-cover" style="width: 100%;" src="assets/img/bg-1.jpg" alt="">
            </div>
        </div>

        <div id="previewArea" class="absolute overflow-hidden flex rounded-md justify-center items-center top-[100px] left-5 md:left-40 right-5 md:right-40 bottom-[170px]">
            <img src="" class="rounded-md object-contain transition-all duration-300 max-w-full max-h-full" alt="">
            <div id="imageDesc" class="absolute rounded-b-md bottom-[0px] left-0 right-0 z-40 p-3 pt-16_ text-lg font-semibold bg-gradient-to-t from-[#502a29] from-[40%] to-[#502a29]/30 text-gray-50">
                <p class="write-text" data-speed="40" data-delay="500" style="opacity: 0;">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae harum, totam eum ad libero, minus tempore id quibusdam consequatur delectus accusantium praesentium est iste natus exercitationem culpa assumenda expedita saepe?
                </p>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/text-writer.js"></script>
<script>
    const gallery = document.getElementById("gallery");
    const filterBtns = [...document.querySelectorAll(".filter-btn")];
    const galleryItems = [...document.querySelectorAll(".masonry-grid-item")];
    // let x = 0
    const mason = new Masonry(gallery, {
        itemSelector: '.masonry-grid-item',
        columnWidth: 0,
        transitionDuration: '0.5s',
        // horizontalOrder: true,
    });

    setTimeout(() => {
        mason._init()
    }, 300);

    x = setInterval(() => {
        mason._init()
        console.log("View, Reorganised.");
    }, 5000)
    // mason._init()
    filterBtns.forEach(btn => {
        btn.addEventListener("click", e => {
            e.stopImmediatePropagation()
            let filterValue = btn.getAttribute('data-filter') == "*" ? 'masonry-grid-item' : btn.getAttribute('data-filter');;

            newGalleryItems = galleryItems.filter(item => item.classList.contains(filterValue));
            gallery.innerHTML = ""
            let count = 0
            newGalleryItems.map(item => {
                gallery.append(item)
            })

            filterBtns.map(btno => {
                if (btno.getAttribute('data-filter') === e.target.getAttribute('data-filter') && btno.tagName == "BUTTON") {
                    // bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100
                    btno.classList.remove("bg-[#502a29]")
                    btno.classList.add("bg-[#ffbb00]")

                    btno.classList.remove("text-gray-100")
                    btno.classList.add("text-[#502a29]")
                    btno.scrollIntoView(!true)
                } else {
                    // bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100
                    btno.classList.add("bg-[#502a29]")
                    btno.classList.remove("bg-[#ffbb00]")

                    btno.classList.add("text-gray-100")
                    btno.classList.remove("text-[#502a29]")
                }
            })
            mason._init();
        })
    });
</script>
<script>
    const imagePreview = document.getElementById("imagePreview")
    let imagePreviewOpened = false;
    const imagePreviewContainer = document.getElementById("imagePreviewContainer")
    const thumbnails = document.getElementById("thumbnails")
    const previewArea = document.getElementById("previewArea")
    const imageDesc = document.getElementById("imageDesc")
    const imageDescEl = imageDesc.querySelector("p")
    const previewAreaImage = document.querySelector("#previewArea img")
    let currentImage = 0

    const showImagePreview = (imageKey) => {
        currentImage = imageKey
        const images = [...gallery.querySelectorAll(".masonry-grid-item")]
        const image = document.getElementById("image-" + imageKey)
        setTimeout(() => {
            const containerRec = previewArea.getBoundingClientRect()
            const areaRec = previewAreaImage.getBoundingClientRect()
            let bottom = (containerRec.height - areaRec.height) / 2;
            let leftRight = (containerRec.width - areaRec.width) / 2;
            imageDesc.style.bottom = bottom + "px"
            imageDesc.style.left = leftRight + "px"
            imageDesc.style.right = leftRight + "px"
            previewArea.getBoundingClientRect().width
        }, 100);
        if (image.dataset.desc !== undefined && image.dataset.desc != "") {
            imageDescEl.innerText = image.dataset.desc
        } else {
            imageDescEl.innerText = image.querySelector("img").alt
        }
        intTextWriter(imageDesc)
        setTimeout(() => {}, 300);
        thumbnails.innerHTML = "";

        previewAreaImage.src = image.querySelector("img").src
        setTimeout(() => imagePreviewContainer.focus(), 400)

        images.map(image => {
            const div = document.createElement("div")
            const imageEl = image.querySelector("img")
            const thumbnailKey = image.id.split("image-")[1];
            div.classList.add("hover:scale-110")
            div.classList.add("transition-all")
            div.classList.add("cursor-pointer")
            if (thumbnailKey == imageKey) {
                div.classList.add("ring-4")
                div.classList.add("ring-[#ffbb00]")
            }
            div.id = `thumbnail-image-${thumbnailKey}`
            div.style.width = "55px";
            div.onclick = () => {
                previewAreaImage.style.opacity = "0"
                previewAreaImage.addEventListener("transitionend", fixePosition, true)

                function fixePosition() {
                    previewAreaImage.style.opacity = "1"
                    showImagePreview(thumbnailKey)
                    previewAreaImage.removeEventListener("transitionend", fixePosition, true)
                }
                // showImagePreview(thumbnailKey)
            }

            const img = document.createElement("img")
            img.src = imageEl.src
            img.alt = imageEl.alt
            img.classList.add("object-cover")
            img.style.width = "100%"

            div.append(img)
            thumbnails.append(div)
            imagePreviewOpened = true
        })

        showPreview();
    }

    imagePreview.addEventListener("click", e => {
        e.stopImmediatePropagation();
        if (e.target == imagePreview || e.target == imagePreviewContainer || e.target == previewArea) {
            closePreview();
        }
    })

    function closePreview() {
        imagePreview.style.opacity = 0

        imagePreview.addEventListener("transitionend", eventL, true)

        function eventL() {
            imagePreview.style.display = "none"
            imagePreview.removeEventListener("transitionend", eventL, true)
        }
        imagePreviewOpened = false;
    }

    function showPreview() {
        imagePreview.style.display = "block"
        setTimeout(() => imagePreview.style.opacity = 1, 100)
    }

    function moveImage(direction) {
        switch (direction.toLowerCase()) {
            case "left":
            case "top":
                const prevImage = getPreviousArrayItem([...gallery.querySelectorAll(".masonry-grid-item")], document.getElementById("image-" + currentImage))
                currentImage = prevImage.id.split("image-")[1]

                previewAreaImage.style.opacity = "0"
                previewAreaImage.addEventListener("transitionend", fixePosition, true)

                function fixePosition() {
                    previewAreaImage.style.opacity = "1"
                    showImagePreview(currentImage)
                    previewAreaImage.removeEventListener("transitionend", fixePosition, true)
                }
                break;
            case "right":
            case "bottom":
            default:
                const NextImage = getNextArrayItem([...gallery.querySelectorAll(".masonry-grid-item")], document.getElementById("image-" + currentImage))
                currentImage = NextImage.id.split("image-")[1]

                previewAreaImage.style.opacity = "0"
                previewAreaImage.addEventListener("transitionend", fixePosition, true)

                function fixePosition() {
                    previewAreaImage.style.opacity = "1"
                    showImagePreview(currentImage)
                    previewAreaImage.removeEventListener("transitionend", fixePosition, true)
                }
                break;
        }
    }

    window.addEventListener("resize", e => {
        if (imagePreviewOpened) showImagePreview(currentImage)
    })

    imagePreview.addEventListener("keydown", e => {
        switch (e.key) {
            case "ArrowRight":
            case "ArrowDown":
            case "n":
            case "N":
                e.preventDefault()
                moveImage("right")
                break;
            case "ArrowLeft":
            case "ArrowUp":
            case "p":
            case "P":
                e.preventDefault()
                moveImage("left")
                break;
            case "Escape":
            case " ":
            case "c":
            case "f":
                e.preventDefault()
                closePreview()
                break;

            default:
                break;
        }
    })

    function getPreviousArrayItem(array, item) {
        let previous = array[0]
        for (let i = 1; i < array.length; i++) {
            const element = array[i];
            if (item === element) {
                return previous
            } else {
                previous = array[i]
            }
        }
        return previous
    }

    function getNextArrayItem(array, item) {
        for (let i = 0; i < array.length; i++) {
            const current = array[i];
            const next = array[i + 1];
            if (item === current) {
                if (next) {
                    return next
                } else {
                    return array[0]
                }
            }
        }
        return array[0]
    }
</script>
<script>
    // Get the element you want to make swipeable
    const swipeContainer = document.getElementById('previewArea');

    let startX = 0;
    let startY = 0;
    let isSwiping = false;

    swipeContainer.addEventListener('touchstart', handleTouchStart);
    swipeContainer.addEventListener('touchmove', handleTouchMove);
    swipeContainer.addEventListener('touchend', handleTouchEnd);

    function handleTouchStart(event) {
        // Prevent scrolling while swiping
        // event.preventDefault();
        startX = event.touches[0].clientX;
        startY = event.touches[0].clientY;
        isSwiping = true;
    }

    function handleTouchMove(event) {
        if (!isSwiping) return;

        const deltaX = event.touches[0].clientX - startX;
        const deltaY = event.touches[0].clientY - startY;

        // Set a threshold for swipe detection
        const swipeThreshold = .5E2;

        // Example: Detect left swipe
        if (deltaX < -swipeThreshold) {
            moveImage("left")
            isSwiping = false;
            // console.log('Swiped left!');
            // alert("Swiped left!")
        }

        // Example: Detect right swipe
        if (deltaX > swipeThreshold) {
            moveImage("right")
            isSwiping = false;
            // console.log('Swiped right!');
            // alert("Swiped right!")
        }

        // Example: Detect up swipe
        if (deltaY < -swipeThreshold) {
            isSwiping = false;
            moveImage("left")
        }

        // Example: Detect down swipe
        if (deltaY > swipeThreshold) {
            moveImage("right")
            isSwiping = false;
        }

        // Prevent scrolling while swiping
        event.preventDefault();
    }

    function handleTouchEnd() {
        isSwiping = false;
    }
</script>
<!-- <script src="assets/js/fit-columns.js"></script> -->


<!-- START- FIND US -->
<?php #include "../includes/components/find-us.php"; 
?>
<!-- END- FIND US -->

<?php
include_once "../includes/footer.php";
?>