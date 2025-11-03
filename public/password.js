document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('showPassword');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');

    if (toggle && password && confirmPassword) {
        toggle.addEventListener('change', function() {
            const type = this.checked ? 'text' : 'password';
            password.type = type;
            confirmPassword.type = type;
        });
    }
});