const wrapper = document.querySelector('.wrapper');
const signup = document.querySelector('.signup-link');
const login = document.querySelector('.login-link');

signup.onclick = () => {
    wrapper.classList.add('active');
}

login.onclick = () => {
    wrapper.classList.remove('active');
}
