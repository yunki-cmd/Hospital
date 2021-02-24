export  const render = {
  Doctor: function insertDoctor() {
    let form = document.createElement("form");
    form.innerHTML = `<label for="doctor">
                    <input type="text" placeholder="nombre doctor" id="doctor" name="doctor">
                </label>
                <label for="fecha_nacimiento">
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento required">
                </label>
                <label for="fecha_incorporacion">
                    <input type="date" name="fecha_incorporacion" id="fecha_incorporacion">
                </label>
                <input type="button" id="btn" value="enviar">`;
    return form;
  },
  Paciente: function insertarPaciente() {
    let form = document.createElement("form");
    form.innerHTML = `<label for="paciente">
                    <input type="text" placeholder="Nombre Paciente" id="paciente" name="paciente">
                </label>
                <label for="fecha_nacimiento">
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
                </label>
                <input type="button" id ="btn" value="enviar">`;
    return form;
  },
};
