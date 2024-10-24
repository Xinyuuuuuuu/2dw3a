// Seleccionamos el icono y el dropdown
const loginIcon = document.getElementById('login-icon');
const dropdownContent = document.getElementById('login-form');
const dropdownContentR = document.getElementById('register-form');

//ocultamos el login nada mas iniciar la página
dropdownContent.style.display = 'none';

// Añadimos un event listener para mostrar/ocultar el dropdown
loginIcon.addEventListener('click', (e) => {
    e.stopPropagation(); 
    dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
});

// Ocultar el menú si se hace clic fuera de él
window.addEventListener('click', (e) => {
    if (!loginIcon.contains(e.target) && !dropdownContent.contains(e.target) && !dropdownContentR.contains(e.target)) {
        dropdownContent.style.display = 'none';
        dropdownContentR.style.display = 'none';
    }
});

function toggleForm() {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    
    // Alterna entre mostrar el login o el registro
    if (loginForm.style.display === 'block' || loginForm.style.display === '') {
      loginForm.style.display = 'none';
      registerForm.style.display = 'block';
    } else {
      loginForm.style.display = 'block';
      registerForm.style.display = 'none';
    }
  }