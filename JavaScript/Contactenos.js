function validarFormulario(event) {
    // Obtener los valores de los campos
    const nombre = document.getElementById('nombre').value;
    const apellido = document.getElementById('apellido').value;
    const email = document.getElementById('email').value;
    const telefono = document.getElementById('telefono').value;
    const fecha = document.getElementById('fecha').value;
    const terminos = document.getElementById('terminos').checked;

    // Validar correo electrónico
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Por favor, ingrese una dirección de correo electrónico válida.');
        event.preventDefault();
        return;
    }

    // Validar número de teléfono
    const telefonoRegex = /^[0-9]{10}$/; // Ejemplo para números de teléfono con 10 dígitos
    if (!telefonoRegex.test(telefono)) {
        alert('Por favor, ingrese un número de teléfono válido.');
        event.preventDefault();
        return;
    }

    // Validar edad
    if (fecha) {
        const fechaNacimiento = new Date(fecha);
        const hoy = new Date();
        const edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
        const mes = hoy.getMonth() - fechaNacimiento.getMonth();
        if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNacimiento.getDate())) {
            edad--;
        }
        if (edad < 18) {
            alert('Debes tener al menos 18 años para enviar el formulario.');
            event.preventDefault();
            return;
        }
    }

    // Validar términos y condiciones
    if (!terminos) {
        alert('Debes aceptar los términos y condiciones para enviar el formulario.');
        event.preventDefault();
        return;
    }
}