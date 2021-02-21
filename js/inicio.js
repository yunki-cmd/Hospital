const btn = document.getElementById('btn');



btn.addEventListener('click', () => {
    let consulta = "todos";
    fetch("./src/consultas.php", {
        method: "Post",
        body: JSON.stringify(consulta),
        headers: {
            "Content-Type": "application/json",
            Accept: "application/json",
        },
    })
        .then(res => res.json())
        .then(data => {
            for (const iterator of data) {
                const { nombre } = iterator;
                console.log(nombre);
            }
            
        })
})