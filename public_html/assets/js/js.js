const imgs = document.querySelectorAll("img[data-image-error]");

imgs.forEach((img) => {
    checkImageStatus(img);
});
let headers = "";
function checkImageStatus(img) {
    console.log(img.src);
    if (
        img.src != "" ||
        img.src != location.href ||
        (img.height != 0 && img.width != 0)
    ) {
        fetch(img.src, { method: "HEAD" })
            .then((response) => {
                if (
                    !response.ok ||
                    !response.headers.get("content-type").includes("image")
                ) {
                    handleImageNotFound(img);
                }
            })
            .catch((error) => {
                console.error(
                    `Error checking status for ${img.tagName} "${img.src}": ${error.message}`
                );
            });
    } else {
        handleImageNotFound(img);
    }
}

function handleImageNotFound(img) {
    console.info(`${img.tagName} "${img.src}" not Found`);
    img.dataset.oldImage = img.src;
    img.src = IMAGE_NOT_FOUND_PATH;
}
