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
    el.innerText = "";
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
    return new Promise((resolve) => {
        setTimeout(resolve, milliseconds);
    });
}
