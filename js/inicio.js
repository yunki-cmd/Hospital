import { render } from './render.js';
const formulario = document.getElementById("formulario");
const cons = document.querySelector('ul');
cons.addEventListener('click', (e) => {
    if (
      e.target.nodeName === "UL" &&
      !e.target.classList.contains("container__header_ul")
    ) {
      e.target.classList.toggle("show");
      if (!e.target.classList.contains("show") && formulario.firstChild!==null) {
        formulario.firstChild.remove();
      }
    }
    if (e.target.nodeName === "LI") {
        if (formulario.hasChildNodes()) {
            formulario.firstChild.remove();
            formulario.append(render[e.target.getAttribute('value')]());
            let btn = document.getElementById('btn');
            evento(btn);
        } else {
            formulario.append(render[e.target.getAttribute('value')]());
            evento(btn);
        }
    }
})


const  evento = (button) => {
    button.addEventListener('click', fet)
}

const fet = () => {
    let form = document.forms[0];
    let nombres = new FormData(form);
    let modo = form.getAttribute('data-modo');
    nombres.append('modo', modo);
    fetch("./src/consultas.php", {
        method: "Post",
        body: nombres,
    })
        .then((res) =>res.json())
        .then((data) => {
            console.log(data);
        })

}