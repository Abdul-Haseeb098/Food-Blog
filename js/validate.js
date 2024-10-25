
        // Validate form inputs
        var form = document.querySelector('form');
        var nameInput = document.getElementById('name');
        var unameInput = document.getElementById('username');
        var emailInput = document.getElementById('email');
        var numberInput = document.getElementById('phone');
        var passInput = document.getElementById('pass');
        var cpassInput = document.getElementById('confirmPass');
        var nameError = document.getElementById('name_error');
        var unameError = document.getElementById('uname_error');
        var emailError = document.getElementById('email_error');
        var numberError = document.getElementById('number_error');
        var passwordError = document.getElementById('password_error');
        var cpasswordError = document.getElementById('cpassword_error');

        function validateForm() {
            let isValid = true;  // Track if the form is valid

            // Validate name
            if (nameInput.value.trim().length < 3) {
                nameError.textContent = 'Name should be at least 3 characters long';
                isValid = false;
            } else {
                nameError.textContent = '';
            }

            // Validate username
            if (unameInput.value.trim().length < 5) {
                unameError.textContent = 'Username should be at least 5 characters long';
                isValid = false;
            } else {
                unameError.textContent = '';
            }

            // Validate email
            if (!emailInput.value.trim()) {
                emailError.textContent = 'Email is required';
                isValid = false;
            } else {
                emailError.textContent = '';
            }

            // Validate phone number
            if (!numberInput.value.trim()) {
                numberError.textContent = 'Phone number is required';
                isValid = false;
            } else {
                numberError.textContent = '';
            }

            // Validate password
            if (passInput.value.trim().length < 6) {
                passwordError.textContent = 'Password should be at least 6 characters long';
                isValid = false;
            } else {
                passwordError.textContent = '';
            }

            // Validate confirm password
            if (cpassInput.value.trim() !== passInput.value.trim()) {
                cpasswordError.textContent = 'Passwords do not match';
                isValid = false;
            } else {
                cpasswordError.textContent = '';
            }

            // If all fields are valid, allow form submission
            if (isValid) {
                return true;
            }

            return isValid;
        }
function  validateloginForm() {
    let isValid = true;  // Track if the form is valid
    // Validate username
    if (!unameInput.value.trim()) {
        unameError.textContent = 'Username is required';
        isValid = false;
    } else {
        unameError.textContent = '';
    }
    // Validate password
    if (!passInput.value.trim()) {
        passwordError.textContent = 'Password is required';
        isValid = false;
    } else {
        passwordError.textContent = '';
    }
    // If all fields are valid, allow form submission
    if (isValid) {
        return true;
    }
    return isValid;
}