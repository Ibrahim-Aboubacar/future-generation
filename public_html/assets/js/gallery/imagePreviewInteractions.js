// Get the element you want to make swipeable
const swipeContainer = document.getElementById("previewArea");

let startX = 0;
let startY = 0;
let isSwiping = false;

swipeContainer.addEventListener("touchstart", handleTouchStart);
swipeContainer.addEventListener("touchmove", handleTouchMove);
swipeContainer.addEventListener("touchend", handleTouchEnd);

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
    const swipeThreshold = 0.5e2;

    // Example: Detect left swipe
    if (deltaX < -swipeThreshold) {
        moveImage("left");
        isSwiping = false;
        // console.log('Swiped left!');
        // alert("Swiped left!")
    }

    // Example: Detect right swipe
    if (deltaX > swipeThreshold) {
        moveImage("right");
        isSwiping = false;
        // console.log('Swiped right!');
        // alert("Swiped right!")
    }

    // Example: Detect up swipe
    if (deltaY < -swipeThreshold) {
        isSwiping = false;
        moveImage("left");
    }

    // Example: Detect down swipe
    if (deltaY > swipeThreshold) {
        moveImage("right");
        isSwiping = false;
    }

    // Prevent scrolling while swiping
    event.preventDefault();
}

function handleTouchEnd() {
    isSwiping = false;
}
