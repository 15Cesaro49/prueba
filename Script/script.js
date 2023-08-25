// Obtenemos los elementos del DOM
const registerForm = document.getElementById("register-form");
const loginForm = document.getElementById("login-form");
const registerToggle = document.getElementById("register-toggle");
const loginToggle = document.getElementById("login-toggle");

// Agregamos los eventos a los botones de cambio de formulario
registerToggle.addEventListener("click", () => {
	registerForm.classList.add("active");
	loginForm.classList.remove("active");
	registerToggle.classList.add("active");
	loginToggle.classList.remove("active");
});

loginToggle.addEventListener("click", () => {
	loginForm.classList.add("active");
	registerForm.classList.remove("active");
	loginToggle.classList.add("active");
	registerToggle.classList.remove("active");
});