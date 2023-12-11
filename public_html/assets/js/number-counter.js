function initNumberCounter(parent = document) {
    const textToWrite = parent.querySelectorAll(".count-number");

    textToWrite.forEach((el) => {
        el.data;
        countNumber(el);
    });
}
const countNumberDefaults = {
    speed: 20,
    delay: 0,
};
async function countNumber(el) {
    let text = el.textContent * 1;
    let speed = el.dataset.speed ?? countNumberDefaults.speed;
    let delay = el.dataset.delay ?? countNumberDefaults.delay;

    // reinitialiser le text á vide
    el.innerText = "";
    el.style.opacity = 1;

    // wait if any delay
    await wait(delay);

    // remplissage du text
    for (let i = 0; i <= text; i++) {
        // recuperer la lettre active
        // injecter la letter active dans l'element
        if (i < 10) {
            el.innerHTML = " +00" + "" + i;
        } else if (i < 100) {
            el.innerHTML = " +0" + "" + i;
        } else {
            el.innerHTML = " +" + "" + i;
        }

        if (text > 500) {
            i = i + 4;
        }
        if (i >= text) {
            el.innerHTML = " +" + "" + text;
        }
        // patienter pour donner l'effet de frappe au clavier
        await wait(speed);
    }
}

function wait(milliseconds) {
    return new Promise((resolve) => {
        setTimeout(resolve, milliseconds);
    });
}
