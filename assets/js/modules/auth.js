import ajax from "./ajax.js";
class Auth extends ajax.Ajax {
    change = false;
    constructor(elemAuth) {
        super();
        this.modalWindow = elemAuth.parentElement;
        this.elemAuth = elemAuth;
        this.title = elemAuth.getElementsByTagName('h2')[0];
        this.submit = elemAuth.getElementsByTagName('button')[0];
        this.elQuestion = elemAuth.getElementsByClassName('auth__right-form-question')[0];
        this.elsHidden = elemAuth.getElementsByClassName('auth__right-form-hidden');
        this.close = elemAuth.getElementsByClassName('auth__right-close')[0];
        this.#start();
    }
    show() {
        this.modalWindow.classList.add('modal_active');
        this.#changeContent();
    }
    #changeContent() {
        let title = 'Регистрация',
            btn = 'Зарегистрироваться',
            question = 'Уже зарегистрированы?',
            span = 'Войти',
            modifer = '_active';
        if (this.change) {
            title = 'Авторизация',
            question = 'Ещё не зарегистрированы?';
            span = 'Зарегистрироваться';
            btn = 'Войти';
            modifer = '_disabled';
            this.change = false;
        } else {
            this.change = true;
        }
     
        this.title.textContent = title;
        this.submit.textContent = btn;
        this.elQuestion.children[0].textContent = question;
        this.elQuestion.children[1].textContent = span;
      
        Array.from(this.elsHidden).forEach((e) => {
            e.classList = 'auth__right-form-hidden auth__right-form-hidden'+modifer;
        }); 
    }
    #sendAjax() {
        const formData = new FormData(this.elemAuth.getElementsByClassName('auth__right-form')[0]);
        const action = (this.change) ? 'reg' : 'auth';
        super._sendRequest({
            'url': './app/controllers/users.php',
            'method': 'post',
            'data': {
                'action': action,
                'login': formData.get('login'),
                'email': formData.get('email'),
                'pass': formData.get('pass'),
                'confirmPass': formData.get('confirmPass')
            }
        });
    }
    #close() {
        this.close.addEventListener('click', () => {
            this.modalWindow.classList.remove('modal_active');
        });
    }
    #start() {
        this.#close();
        this.elQuestion.children[1].addEventListener('click', () => {
            this.#changeContent();
        });
        this.submit.addEventListener('click', (e) => {
            e.preventDefault();
            this.#sendAjax();
        });
    }
}
export default {Auth}