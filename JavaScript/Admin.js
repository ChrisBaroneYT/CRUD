window.addEventListener('load', () => {
    const username = sessionStorage.getItem('username'); // Recuperar el nombre de usuario del sessionStorage
  
    if (username) {
      document.getElementById('welcome-message').textContent = `Welcome, ${username}`; // Mostrar el mensaje de bienvenida
    } else {
      window.location.href = 'index.html'; // Redirigir a la página de inicio si no hay nombre de usuario
    }
  });