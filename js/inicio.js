import { render } from './render.js';
const ul = document.getElementById('insertar');
const cita = document.getElementById('citas');
const formulario = document.getElementById("formulario");
ul.addEventListener('click', (e) => {
    if (e.target.nodeName === 'UL') {
        ul.classList.toggle('show')
        if (!ul.classList.contains('show')) {
            formulario.firstChild.remove();
        }
    }
    if (e.target.nodeName === "LI") {
        if (formulario.hasChildNodes()) {
            formulario.firstChild.remove();
            formulario.append(render[e.target.textContent]());
            let btn = document.getElementById('btn');
            evento(btn);
        } else {
            formulario.append(render[e.target.textContent]());
            evento(btn);
        }
    }
})
cita.addEventListener("click", (e) => {
  if (e.target.nodeName == "UL") {
    cita.classList.toggle("show");
  }
});

const  evento = (button) => {
    button.addEventListener('click', fet)
}

const fet = () => {
    let nombres = new FormData(document.forms[0]);
    
    fetch("./src/consultas.php", {
      method: "Post",
      body: nombres,
     /*  headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      }, */
    })
      /* .then((res) => res.json()) */
        .then((data) => data.text())
        /* for (const iterator of data) {
           const { nombre } = iterator;
        } */

        .then((text) =>console.log(text)) 
}