class Slider {

    slider = null;

    countSlides = 0;
    activeSlide = 0;

    btns = null; 

    autoplay = true;
    interval = null;
    pause = false;

    constructor(slider) {
        this.slider = slider;
        this.countSlides = this.slider.getElementsByTagName("li").length - 1;

        this.btns = slider.getElementsByTagName("BUTTON");

        this.#start();
    }

    #showSlide() {
        if (this.slider.getElementsByClassName("slider__item_active")[0]) {
            this.slider.getElementsByClassName("slider__item_active")[0].classList.remove("slider__item_active");
        }
        
        this.slider.getElementsByClassName("slider__item")[this.activeSlide].classList.add("slider__item_active");
    }

    #autoplay() {

        setInterval(() => {this.#nextSlide()}, 5000);

        
    }

    #nextSlide(prev = false) {
        // console.log(this.countSlides, this.activeSlide);

        if (prev) {
            if (this.activeSlide === 0) {
                this.activeSlide = this.countSlides;
            } else {
                this.activeSlide--;
            }
        } else {
            if (this.countSlides === this.activeSlide) {
                this.activeSlide = 0;
            } else {
                this.activeSlide++;
            }
        }
        this.#showSlide();
    }

    #btnTrigger() {
        [].forEach.call(this.btns, (item) => {
            item.onclick = () => {
                // if (this.interval) clearInterval(this.interval);
                this.pause = true;

                switch(item.classList[0]) {
                    case "slider__button-next": 
                        this.#nextSlide();
                    break;

                    case "slider__button-prev":
                        this.#nextSlide(true);
                    break;

                    default:
                        break;
                }
            }
        });
    }


    #start() {
        this.#showSlide();
        this.#btnTrigger();

        if (this.autoplay) this.#autoplay(); 
    }

}

export default {Slider}