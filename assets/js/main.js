import auth from './modules/auth.js';
import slider from './modules/slider.js';


const elSlider = document.getElementsByClassName('slider')[0];
new slider.Slider(elSlider);

const elAuth = document.getElementsByClassName('auth')[0];
const objAuth = new auth.Auth(elAuth);

const elsBtnReg = document.getElementsByClassName('btn');
Array.from(elsBtnReg).forEach((e) => {
    e.onclick = () => {
        switch (e.textContent) {
            case 'РЕГИСТРАЦИЯ':
                objAuth.change = false;
                objAuth.show();
            break;

            case 'ВОЙТИ':
                objAuth.change = true;
                objAuth.show();
            break;
        }
    }
});
