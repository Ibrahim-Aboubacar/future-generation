let X_TIME_OUT = 0;
function intTextWriter(parent = document) {
    const textToWrite = parent.querySelectorAll(".write-text");

    textToWrite.forEach((el) => {
        el.data;
        writeText(el);
    });
}
const textWriterDefaults = {
    speed: 20,
    delay: 0,
};
async function writeText(el) {
    let text = el.textContent;
    let speed = el.dataset.speed ?? textWriterDefaults.speed;
    let delay = el.dataset.delay ?? textWriterDefaults.delay;

    // reinitialiser le text á vide
    el.innerHTML = "&nbsp;";
    el.style.opacity = 1;

    // wait if any delay
    await wait(delay);

    // remplissage du text
    for (let i = 0; i < text.length; i++) {
        // recuperer la lettre active
        let lettre = text[i];
        // injecter la letter active dans l'element
        el.innerHTML += lettre;
        // patienter pour donner l'effet de frappe au clavier
        await wait(speed);
    }
}

function wait(milliseconds) {
    clearTimeout(X_TIME_OUT);
    return new Promise((resolve) => {
        X_TIME_OUT = setTimeout(resolve, milliseconds);
    });
}
