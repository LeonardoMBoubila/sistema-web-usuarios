document.getElementById('formRegistro').addEventListener('submit', function(e) {
    const email = document.getElementById('email').value.trim();
    const pass = document.getElementById('contraseña').value.trim();
    if (!email || !pass) {
        e.preventDefault();
        alert('Por favor completa todos los campos.');
    }
});