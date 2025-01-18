const loginForm = document.getElementById('login-form');
const formTitle = document.getElementById('form-title');
const toggleText = document.getElementById('toggle-text');

toggleText.addEventListener('click', () => {
  // Cambia la visibilidad entre el formulario de login y de registro
  loginForm.style.display = loginForm.style.display === 'none' ? 'block' : 'none';
  registerForm.style.display = registerForm.style.display === 'none' ? 'block' : 'none';
  formTitle.textContent = formTitle.textContent === 'Login' ? 'Register' : 'Login';
  toggleText.textContent = toggleText.textContent === 'Don’t have an account? Register' ? 'Already have an account? Login' : 'Don’t have an account? Register';
});

function GO() {
  // Obtener los valores de los campos del formulario
  const username = document.forms['loginForm']['username'].value;
  const password = document.forms['loginForm']['password'].value;

  // Validar el nombre de usuario y la contraseña
  if (username === 'Chris' && password === '1234') {
    sessionStorage.setItem('username', username); // Guardar el nombre de usuario en sessionStorage
    window.location.href = 'Administrador.html'; // Redirige a Administrador.html
    return false; // Evita que el formulario se envíe de la manera tradicional
  } else {
    alert('Nombre de usuario o contraseña incorrectos.');
    return false; // Evita que el formulario se envíe
  }
}