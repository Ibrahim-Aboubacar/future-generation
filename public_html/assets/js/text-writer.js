function intTextWriter(parent = document, clearTimeoutAfterEachWait = false) {
    const textToWrite = parent.querySelectorAll(".write-text");

    textToWrite.forEach((el) => {
        el.data;
        writeText(el, clearTimeoutAfterEachWait);
    });
}
let timeOutId = 0;
const textWriterDefaults = {
    speed: 20,
    delay: 0,
};

async function writeText(el, clearTimeoutAfterEachWait = false) {
    let text = el.textContent;
    let speed = el.dataset.speed ?? textWriterDefaults.speed;
    let delay = el.dataset.delay ?? textWriterDefaults.delay;

    // reinitialiser le text á vide
    el.innerHTML = "&nbsp;";
    el.style.opacity = 1;

    // wait if any delay
    await wait(delay, clearTimeoutAfterEachWait);

    el.innerHTML = "";

    // remplissage du text
    for (let i = 0; i < text.length; i++) {
        // recuperer la lettre active
        let lettre = text[i];
        // injecter la letter active dans l'element
        el.innerHTML += lettre;
        // patienter pour donner l'effet de frappe au clavier
        await wait(speed, clearTimeoutAfterEachWait);
    }
}

function wait(milliseconds, clearTimeoutAfterEachWait = false) {
    if (clearTimeoutAfterEachWait) {
        clearTimeout(timeOutId);
    }
    return new Promise((resolve) => {
        timeOutId = setTimeout(resolve, milliseconds);
    });
}
