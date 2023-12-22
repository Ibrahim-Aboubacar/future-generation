const imagePreview = document.getElementById("imagePreview");
let imagePreviewOpened = false;
const imagePreviewContainer = document.getElementById("imagePreviewContainer");
const thumbnails = document.getElementById("thumbnails");
const previewArea = document.getElementById("previewArea");
const imageDesc = document.getElementById("imageDesc");
const imageDescEl = imageDesc.querySelector("p");
const previewAreaImage = document.querySelector("#previewArea img");
let currentImage = 0;

const showImagePreview = (imageKey) => {
    currentImage = imageKey;
    const images = [...gallery.querySelectorAll(".masonry-grid-item")];
    const image = document.getElementById("image-" + imageKey);
    setTimeout(() => {
        const containerRec = previewArea.getBoundingClientRect();
        const areaRec = previewAreaImage.getBoundingClientRect();
        let bottom = (containerRec.height - areaRec.height) / 2;
        let leftRight = (containerRec.width - areaRec.width) / 2;
        imageDesc.style.bottom = bottom + "px";
        imageDesc.style.left = leftRight + "px";
        imageDesc.style.right = leftRight + "px";
        previewArea.getBoundingClientRect().width;
    }, 100);
    if (image.dataset.desc !== undefined && image.dataset.desc != "") {
        imageDescEl.innerText = image.dataset.desc;
    } else {
        imageDescEl.innerText = image.querySelector("img").alt;
    }
    intTextWriter(imageDesc, true);

    thumbnails.innerHTML = "";

    previewAreaImage.src = image.querySelector("img").src;
    setTimeout(() => imagePreviewContainer.focus(), 400);

    images.map((image) => {
        const div = document.createElement("div");
        const imageEl = image.querySelector("img");
        const thumbnailKey = image.id.split("image-")[1];
        div.classList.add("hover:scale-110");
        div.classList.add("transition-all");
        div.classList.add("cursor-pointer");
        if (thumbnailKey == imageKey) {
            div.classList.add("ring-4");
            div.classList.add("ring-[#ffbb00]");
        }
        div.id = `thumbnail-image-${thumbnailKey}`;
        div.style.width = "55px";
        div.onclick = () => {
            previewAreaImage.style.opacity = "0";
            previewAreaImage.addEventListener(
                "transitionend",
                fixePosition,
                true
            );

            function fixePosition() {
                previewAreaImage.style.opacity = "1";
                showImagePreview(thumbnailKey);
                previewAreaImage.removeEventListener(
                    "transitionend",
                    fixePosition,
                    true
                );
            }
            // showImagePreview(thumbnailKey)
        };

        const img = document.createElement("img");
        img.src = imageEl.src;
        img.alt = imageEl.alt;
        img.classList.add("object-cover");
        img.style.width = "100%";

        div.append(img);
        thumbnails.append(div);
        imagePreviewOpened = true;
    });

    showPreview();
};

imagePreview.addEventListener("click", (e) => {
    e.stopImmediatePropagation();
    if (
        e.target == imagePreview ||
        e.target == imagePreviewContainer ||
        e.target == previewArea
    ) {
        closePreview();
    }
});

function closePreview() {
    imagePreview.style.opacity = 0;

    imagePreview.addEventListener("transitionend", eventL, true);

    function eventL() {
        imagePreview.style.display = "none";
        imagePreview.removeEventListener("transitionend", eventL, true);
    }
    imagePreviewOpened = false;
}

function showPreview() {
    imagePreview.style.display = "block";
    setTimeout(() => (imagePreview.style.opacity = 1), 100);
}

function moveImage(direction) {
    switch (direction.toLowerCase()) {
        case "left":
        case "top":
            const prevImage = getPreviousArrayItem(
                [...gallery.querySelectorAll(".masonry-grid-item")],
                document.getElementById("image-" + currentImage)
            );
            currentImage = prevImage.id.split("image-")[1];

            previewAreaImage.style.opacity = "0";
            previewAreaImage.addEventListener(
                "transitionend",
                fixePosition,
                true
            );

            function fixePosition() {
                previewAreaImage.style.opacity = "1";
                showImagePreview(currentImage);
                previewAreaImage.removeEventListener(
                    "transitionend",
                    fixePosition,
                    true
                );
            }
            break;
        case "right":
        case "bottom":
        default:
            const NextImage = getNextArrayItem(
                [...gallery.querySelectorAll(".masonry-grid-item")],
                document.getElementById("image-" + currentImage)
            );
            currentImage = NextImage.id.split("image-")[1];

            previewAreaImage.style.opacity = "0";
            previewAreaImage.addEventListener(
                "transitionend",
                fixePosition,
                true
            );

            function fixePosition() {
                previewAreaImage.style.opacity = "1";
                showImagePreview(currentImage);
                previewAreaImage.removeEventListener(
                    "transitionend",
                    fixePosition,
                    true
                );
            }
            break;
    }
}

window.addEventListener("resize", (e) => {
    if (imagePreviewOpened) showImagePreview(currentImage);
});

imagePreview.addEventListener("keydown", (e) => {
    switch (e.key) {
        case "ArrowRight":
        case "ArrowDown":
        case "n":
        case "N":
            e.preventDefault();
            moveImage("right");
            break;
        case "ArrowLeft":
        case "ArrowUp":
        case "p":
        case "P":
            e.preventDefault();
            moveImage("left");
            break;
        case "Escape":
        case " ":
        case "c":
        case "f":
            e.preventDefault();
            closePreview();
            break;

        default:
            break;
    }
});

function getPreviousArrayItem(array, item) {
    let previous = array[0];
    for (let i = 1; i < array.length; i++) {
        const element = array[i];
        if (item === element) {
            return previous;
        } else {
            previous = array[i];
        }
    }
    return previous;
}

function getNextArrayItem(array, item) {
    for (let i = 0; i < array.length; i++) {
        const current = array[i];
        const next = array[i + 1];
        if (item === current) {
            if (next) {
                return next;
            } else {
                return array[0];
            }
        }
    }
    return array[0];
}
