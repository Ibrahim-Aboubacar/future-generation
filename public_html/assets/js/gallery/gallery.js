const gallery = document.getElementById("gallery");
const filterBtns = [...document.querySelectorAll(".filter-btn")];
const galleryItems = [...document.querySelectorAll(".masonry-grid-item")];
// let x = 0
const mason = new Masonry(gallery, {
    itemSelector: ".masonry-grid-item",
    columnWidth: 0,
    transitionDuration: "0.5s",
    // horizontalOrder: true,
});

setTimeout(() => {
    mason._init();
}, 300);

x = setInterval(() => {
    mason._init();
    console.log("View, Reorganised.");
}, 2500);
filterBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        e.stopImmediatePropagation();
        let filterValue =
            btn.getAttribute("data-filter") == "*"
                ? "masonry-grid-item"
                : btn.getAttribute("data-filter");

        newGalleryItems = galleryItems.filter((item) =>
            item.classList.contains(filterValue)
        );
        gallery.innerHTML = "";
        let count = 0;
        newGalleryItems.map((item) => {
            gallery.append(item);
        });

        filterBtns.map((btno) => {
            if (
                btno.getAttribute("data-filter") ===
                    e.target.getAttribute("data-filter") &&
                btno.tagName == "BUTTON"
            ) {
                // bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100
                btno.classList.remove("bg-[#502a29]");
                btno.classList.add("bg-[#ffbb00]");

                btno.classList.remove("text-gray-100");
                btno.classList.add("text-[#502a29]");
                btno.scrollIntoView(!true);
            } else {
                // bg-[#502a29] hover:bg-[#ffbb00] hover:text-[#502a29] text-gray-100
                btno.classList.add("bg-[#502a29]");
                btno.classList.remove("bg-[#ffbb00]");

                btno.classList.add("text-gray-100");
                btno.classList.remove("text-[#502a29]");
            }
        });
        mason._init();
    });
});
