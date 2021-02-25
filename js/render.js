export  const render = {
  Doctor: function insertDoctor() {
    let form = document.createElement("form");
    form.setAttribute("data-modo", "insert-doctor");
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
    form.setAttribute("data-modo", "insert-paciente");
    form.innerHTML = `<label for="paciente">
                    <input type="text" placeholder="Nombre Paciente" id="paciente" name="paciente">
                </label>
                <label for="fecha_nacimiento">
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
                </label>
                <input type="button" id ="btn" value="enviar">`;
    return form;
  },
  consultarCitaDoctor: function consultarCitaDoctor() {
    let form = document.createElement("form");
    form.setAttribute("data-modo", "consultar-cita-doctor");
    form.innerHTML = `<label for="doctor">
                    <input type="text" placeholder="Nombre Doctor" id="doctor" name="doctor">
                </label>
                <input type="button" id ="btn" value="enviar">`;
    return form;
  },
  consultarCitaPaciente: function consultarCitaPaciente() {
    let form = document.createElement("form");
    form.setAttribute("data-modo", "consultar-cita-doctor");
    form.innerHTML = `<label for="paciente">
                    <input type="text" placeholder="Nombre Paciente" id="paciente" name="paciente">
                </label>
                <input type="button" id ="btn" value="enviar">`;
    return form;
  },
  consultarCitaFecha: function consultarCitaFecha() {
    let form = document.createElement("form");
    form.setAttribute("data-modo", "consultar-cita-fecha");
    form.innerHTML = `<label for="fecha">
                    <input type="date" name="fecha" id="fecha" required>
                </label>
                <input type="button" id ="btn" value="enviar">`;
    return form;
  },
};
