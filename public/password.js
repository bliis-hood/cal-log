document.addEventListener('DOMContentLoaded', function() {
const showPassword = document.getElementById('showPassword');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirm_password');

showPassword.addEventListener('change', function() {
    const type = this.checked ? 'text' : 'password';
    password.type = type;
    confirmPassword.type = type;
});
});