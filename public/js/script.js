const  form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const repeatPasswordInput = form.querySelector('input[name="repeatPassword"]');

function isEmail(email){
    return /\S+@\S+\.\S+/.test(email);
}

function arePasswordsSame(password, repeatedPassword){
    return password === repeatedPassword;
}

function markValidation(element, condition){
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

function validateEmail() {
    setTimeout(function () {
            markValidation(emailInput, isEmail(emailInput.value));
        },
        1000
    );
}

function validatePassword() {
    setTimeout(function () {
            const condition = arePasswordsSame(
                repeatPasswordInput.previousElementSibling.value,
                repeatPasswordInput.value
            );
            markValidation(repeatPasswordInput, condition);
        },
        1000
    );
}

emailInput.addEventListener('keyup', validateEmail);
repeatPasswordInput.addEventListener('keyup', validatePassword);