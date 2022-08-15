<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <title>Restaurant</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="header__nav">
                <ul class="header__nav-list-left">
                    <li class="header__nav-list-left-item"><a href="" class="header__nav-list-left-link">главная</a></li>
                    <li class="header__nav-list-left-item"><a href="" class="header__nav-list-left-link">о нас</a></li>
                    <li class="header__nav-list-left-item"><a href="" class="header__nav-list-left-link">контакты</a></li>
                </ul>
    
                <a href="" class="header__nav-logo">
                    <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="70" cy="70" r="70" fill="#19202A"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M78.2706 119.308C101.916 115.339 119.932 94.7733 119.932 70C119.932 42.3858 97.5467 20 69.9325 20C42.3182 20 19.9325 42.3858 19.9325 70C19.9325 95.4653 38.9697 116.484 63.5888 119.601L59.1768 133.18L70.9325 124.639L82.6882 133.18L78.1979 119.361L78.2706 119.308ZM78.2706 119.308L89.9536 110.82H75.4227L70.9325 97L66.4422 110.82H51.9113L63.667 119.361L63.5888 119.601C65.6663 119.864 67.7836 120 69.9325 120C72.7734 120 75.559 119.763 78.2706 119.308ZM99.6426 102.348L92.6836 109.767L102.674 107.856L107.579 116.766L108.848 106.674L118.839 104.763L109.633 100.437L110.902 90.345L103.943 97.7635L94.7376 93.4376L99.6426 102.348ZM40.9805 102.809L45.3462 93.6223L36.4143 98.4887L29.026 91.4977L30.894 101.496L21.962 106.363L32.0485 107.676L33.9165 117.674L38.2823 108.487L48.3688 109.8L40.9805 102.809ZM119.687 75.5561L116.642 68.9596L115.228 76.0861L108.013 76.9438L114.354 80.4906L112.94 87.6171L118.273 82.6826L124.614 86.2294L121.569 79.6329L126.901 74.6984L119.687 75.5561ZM24.6696 76.3388L23.2758 69.2083L20.2122 75.7962L13 74.9183L18.3188 79.8678L15.2552 86.4557L21.606 82.9267L26.9248 87.8761L25.531 80.7456L31.8818 77.2166L24.6696 76.3388Z" fill="#D9D9D9"/>
                        <path d="M64.48 66.76C66 66.8 67.22 66.86 68.14 66.94C69.1 67.02 69.88 67.1 70.48 67.18C71.12 67.22 71.74 67.3 72.34 67.42C73.9 67.58 75.3 67.82 76.54 68.14C77.78 68.42 78.84 68.86 79.72 69.46C80.6 70.06 81.24 70.84 81.64 71.8C82.04 72.76 82.14 74 81.94 75.52L81.28 81.7C81.12 82.94 81.16 84 81.4 84.88C81.68 85.76 82.26 86.18 83.14 86.14C83.9 86.1 84.56 85.7 85.12 84.94C85.68 84.14 86.22 83.02 86.74 81.58L87.04 80.74H88.42L88.18 81.52C87.46 84 86.44 85.84 85.12 87.04C83.8 88.24 82 88.84 79.72 88.84C77.2 88.84 75.4 88.22 74.32 86.98C73.24 85.7 72.82 84.12 73.06 82.24L73.78 75.52C73.98 73.68 73.88 72.2 73.48 71.08C73.12 69.92 72.24 69.08 70.84 68.56C69.48 68 67.32 67.72 64.36 67.72L64.48 66.76ZM63.64 67.66L63.94 66.58H66.16C68.44 66.58 70.44 66.28 72.16 65.68C73.92 65.04 75.4 64.14 76.6 62.98C77.8 61.82 78.7 60.42 79.3 58.78C79.94 57.14 80.26 55.3 80.26 53.26C80.26 51.02 79.76 49.38 78.76 48.34C77.76 47.26 76.18 46.72 74.02 46.72C72.62 46.72 71.6 47.02 70.96 47.62C70.36 48.18 69.84 49.32 69.4 51.04L61.24 81.64C60.92 82.88 60.74 83.86 60.7 84.58C60.66 85.3 60.94 85.84 61.54 86.2C62.18 86.56 63.26 86.76 64.78 86.8L64.54 88C63.46 87.92 62.16 87.88 60.64 87.88C59.12 87.84 57.5 87.82 55.78 87.82C54.02 87.82 52.3 87.84 50.62 87.88C48.98 87.88 47.66 87.92 46.66 88L46.9 86.8C48.26 86.72 49.32 86.56 50.08 86.32C50.84 86.08 51.44 85.6 51.88 84.88C52.32 84.16 52.72 83.08 53.08 81.64L61 51.88C61.32 50.64 61.48 49.66 61.48 48.94C61.48 48.18 61.18 47.64 60.58 47.32C59.98 46.96 58.94 46.76 57.46 46.72L57.76 45.52C58.4 45.56 59.2 45.6 60.16 45.64C61.12 45.64 62.14 45.66 63.22 45.7C64.34 45.7 65.36 45.7 66.28 45.7C68 45.7 69.56 45.68 70.96 45.64C72.4 45.6 73.82 45.58 75.22 45.58C79.82 45.58 83.22 46.3 85.42 47.74C87.62 49.14 88.72 51.22 88.72 53.98C88.72 56.7 87.76 59.08 85.84 61.12C83.96 63.16 81.32 64.76 77.92 65.92C74.52 67.04 70.56 67.6 66.04 67.6L63.64 67.66Z" fill="#19202A"/>
                    </svg>
                </a>
    
                <ul class="header__nav-list-right">
                    <li class="header__nav-list-right-item"><a href="" class="header__nav-list-right-link">меню</a></li>
                    <li class="header__nav-list-right-item"><a href="" class="header__nav-list-right-link">галерея</a></li>
                    <li class="header__nav-list-right-item"><a href="" class="header__nav-list-right-link">отзывы</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="main">
        <div class="modal">
            <div class="auth">
                <div class="auth__left">
                    <!-- <img src="/assets/images/auth/auth.jpg" alt="picture"> -->
                </div>
                <div class="auth__right">
                        <svg class="auth__right-close" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 6L6 30" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 6L30 30" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    <h2 class="auth__right-title">Авторизация</h2>
                    <div class="auth__right-subtitle">Welcome!</div>
    
                    <form id="formAuth" class="auth__right-form" action="" method="post">
                        <label class="auth__right-form-label label" for="userName">Имя пользователя</label>
                        <input class="auth__right-form-input input" name="login" id="userName" type="text">

                        <div class="auth__right-form-hidden auth__right-form-hidden_disabled">
                            <label class="auth__right-form-label label" for="userEmail">Email</label>
                            <input class="auth__right-form-input input" name="email" id="userEmail" type="email">
                        </div>

                        <label class="auth__right-form-label label" for="userPass">Пароль<span class="auth__right-form-label-forgot">забыли пароль?</span></label>
                        <input class="auth__right-form-input input" name="pass" id="userPass" type="password" autocomplete="on">

                        <div class="auth__right-form-hidden auth__right-form-hidden_disabled">
                            <label class="auth__right-form-label label" for="userConfirmPass">Подтвердите пароль</label>
                            <input class="auth__right-form-input input" name="confirmPass" id="userConfirmPass" type="password" autocomplete="off">
                        </div>

                        <svg width="24" height="4" viewBox="0 0 24 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="#D9D9D9"/>
                            <circle cx="12" cy="2" r="2" fill="#D9D9D9"/>
                            <circle cx="22" cy="2" r="2" fill="#D9D9D9"/>
                        </svg>
                        <button class="btn btn-auth-form" type="submit">ВОЙТИ</button>
                        <div class="auth__right-form-question">
                            <div>Ещё не зарегистрированы?</div>
                            <span id='authChange'>Зарегистрироваться</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <section class="promo">
            <div class="slider">
                <ul class="slider__gallery">
                    <li class="slider__item">
                        <img src="/assets/images/bg/slide_1.jpg" alt="">
                    </li>
                    <li class="slider__item">
                        <img src="/assets/images/bg/slide_2.jpg" alt="">
                    </li>
                    <li class="slider__item">
                        <img src="/assets/images/bg/slide_3.jpg" alt="">
                    </li>
                    <li class="slider__item">
                        <img src="/assets/images/bg/slide_4.jpg" alt="">
                    </li>
                    <li class="slider__item">
                        <img src="/assets/images/bg/slide_5.jpg" alt="">
                    </li>
                </ul>

                <button class="slider__button-prev">
                    <svg width="25" height="44" viewBox="0 0 25 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 22L23.4142 20.5858L24.8284 22L23.4142 23.4142L22 22ZM3.41421 0.585786L23.4142 20.5858L20.5858 23.4142L0.585786 3.41421L3.41421 0.585786ZM23.4142 23.4142L3.41421 43.4142L0.585786 40.5858L20.5858 20.5858L23.4142 23.4142Z" fill="#FFFFFF"/>
                    </svg>
                </button>
                <button class="slider__button-next">
                    <svg width="25" height="44" viewBox="0 0 25 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 22L23.4142 20.5858L24.8284 22L23.4142 23.4142L22 22ZM3.41421 0.585786L23.4142 20.5858L20.5858 23.4142L0.585786 3.41421L3.41421 0.585786ZM23.4142 23.4142L3.41421 43.4142L0.585786 40.5858L20.5858 20.5858L23.4142 23.4142Z" fill="#FFFFFF"/>
                    </svg>
                </button>
            </div>
            

            <div class="container">
                <h1 class="promo__title">RESTAURANT</h1>
                <h2 class="promo__subtitle">New summer menus available from 12th June.</h2>
                <button type="button" class="btn btn-reg">РЕГИСТРАЦИЯ</button>
                <button type="button" class="btn btn-auth">ВОЙТИ</button>
                <!-- <ul class="slider">
                    <li class="slider__item slider__item_active"></li>
                    <li class="slider__item"></li>
                    <li class="slider__item"></li>
                    <li class="slider__item"></li>
                </ul> -->
            </div>
        </section>

        <section class="about">
            <div class="container">
                <h2 class="about__title">Restaurant - традиции азербайджанской кухни</h2>
                    <p class="about__subtitle">Гостеприимство современного Кавказа
                    Чапаевский парк, зеленые просторы и кислородный оазис Севера Москвы. Благодаря отличному расположению в ресторане «Restaurant» органично сочетаются уют и тепло тихого дворика Баку, широкое гостеприимство современного Кавказа и многовековые традиции азербайджанской кухни.
                    <br>
                    <br>
                    <br>
                    Площадь «Restaurant» внушительная и вмещает: основные залы, летнюю веранду, VIP-кабинет на 10 персон, в котором можно отметить день рождения в кругу семьи или провести переговоры. В роскошных залах на 90 и 50 человек есть возможность индивидуального оформления и проведения тематических банкетов, торжеств и свадебных церемоний.</p>
            </div>
        </section>

        <section class="menu">
            <h2 class="menu__title">Our Menu</h2>
            <ul class="menu-list">
                <li class="menu-list__item">
                    <a class="menu-list__item-link" href="">
                        <div class="menu-list__item-link-text">Горячее</div>
                        <img src="/assets/images/menu/meat.png" alt="">
                    </a>
                </li>
                <li class="menu-list__item">
                    <a class="menu-list__item-link" href="">
                        <div class="menu-list__item-link-text">Салаты</div>
                        <img src="/assets/images/menu/salat.png" alt="">
                    </a>
                </li>
                <li class="menu-list__item">
                    <a class="menu-list__item-link" href="">
                        <div class="menu-list__item-link-text">Десерты</div>
                        <img src="/assets/images/menu/dessert.png" alt="">
                    </a>
                </li>
                <li class="menu-list__item">
                    <a class="menu-list__item-link" href="">
                        <div class="menu-list__item-link-text">Напитки</div> 
                        <img src="/assets/images/menu/drink.png" alt="">
                    </a>
                </li>
            </ul>
        </section>

        <section class="reviews">
            <div class="container">
                <h2 class="reviews__title">Recent Reviews</h2>
            </div>
                <ul class="reviews-list">
                    <li class="reviews-list__item">
                        <img src="/assets/images/reviews/image1.jpg" alt="" class="reviews-list__item-img">
                        <div class="reviews-list__item-username">Alexander R.</div>
                        <div class="reviews-list__item-stars">
                            <svg width="61" height="58" viewBox="0 0 61 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_8_164)">
                                <path d="M30.5 0L36.6741 19.002H56.6541L40.49 30.7459L46.6641 49.748L30.5 38.0041L14.3359 49.748L20.51 30.7459L4.34595 19.002H24.3259L30.5 0Z" fill="white"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_8_164" x="0.345947" y="0" width="60.3081" height="57.7479" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8_164"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8_164" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                            <svg width="61" height="58" viewBox="0 0 61 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_8_164)">
                                <path d="M30.5 0L36.6741 19.002H56.6541L40.49 30.7459L46.6641 49.748L30.5 38.0041L14.3359 49.748L20.51 30.7459L4.34595 19.002H24.3259L30.5 0Z" fill="white"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_8_164" x="0.345947" y="0" width="60.3081" height="57.7479" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8_164"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8_164" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                            <svg width="61" height="58" viewBox="0 0 61 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_8_164)">
                                <path d="M30.5 0L36.6741 19.002H56.6541L40.49 30.7459L46.6641 49.748L30.5 38.0041L14.3359 49.748L20.51 30.7459L4.34595 19.002H24.3259L30.5 0Z" fill="white"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_8_164" x="0.345947" y="0" width="60.3081" height="57.7479" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8_164"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8_164" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                        </div>
                        <div class="reviews-list__item-comment">Просто отличное заведение для того ,чтобы отдохнуть всей душей. Вкусная современная кухня и высокий уровень обслуживания, я остался  доволен.</div>
                    </li>
                    <li class="reviews-list__item">
                        <img src="/assets/images/reviews/image2.jpg" alt="" class="reviews-list__item-img">
                        <div class="reviews-list__item-username">Ivetta S.</div>
                        <div class="reviews-list__item-stars">
                            <svg width="61" height="58" viewBox="0 0 61 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_8_164)">
                                <path d="M30.5 0L36.6741 19.002H56.6541L40.49 30.7459L46.6641 49.748L30.5 38.0041L14.3359 49.748L20.51 30.7459L4.34595 19.002H24.3259L30.5 0Z" fill="white"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_8_164" x="0.345947" y="0" width="60.3081" height="57.7479" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8_164"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8_164" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                            <svg width="61" height="58" viewBox="0 0 61 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_8_164)">
                                <path d="M30.5 0L36.6741 19.002H56.6541L40.49 30.7459L46.6641 49.748L30.5 38.0041L14.3359 49.748L20.51 30.7459L4.34595 19.002H24.3259L30.5 0Z" fill="white"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_8_164" x="0.345947" y="0" width="60.3081" height="57.7479" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8_164"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8_164" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                            <svg width="61" height="58" viewBox="0 0 61 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_8_164)">
                                <path d="M30.5 0L36.6741 19.002H56.6541L40.49 30.7459L46.6641 49.748L30.5 38.0041L14.3359 49.748L20.51 30.7459L4.34595 19.002H24.3259L30.5 0Z" fill="white"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_8_164" x="0.345947" y="0" width="60.3081" height="57.7479" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8_164"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8_164" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                        </div>
                        <div class="reviews-list__item-comment">Просто отличное заведение для того ,чтобы отдохнуть всей душей. Вкусная современная кухня и высокий уровень обслуживания, я осталась  довольна.</div>
                    </li>
                    <li class="reviews-list__item">
                        <img src="/assets/images/reviews/image3.jpg" alt="" class="reviews-list__item-img">
                        <div class="reviews-list__item-username">Svetlana M.</div>
                        <div class="reviews-list__item-stars">
                            <svg width="61" height="58" viewBox="0 0 61 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_8_164)">
                                <path d="M30.5 0L36.6741 19.002H56.6541L40.49 30.7459L46.6641 49.748L30.5 38.0041L14.3359 49.748L20.51 30.7459L4.34595 19.002H24.3259L30.5 0Z" fill="white"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_8_164" x="0.345947" y="0" width="60.3081" height="57.7479" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8_164"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8_164" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                            <svg width="61" height="58" viewBox="0 0 61 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_8_164)">
                                <path d="M30.5 0L36.6741 19.002H56.6541L40.49 30.7459L46.6641 49.748L30.5 38.0041L14.3359 49.748L20.51 30.7459L4.34595 19.002H24.3259L30.5 0Z" fill="white"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_8_164" x="0.345947" y="0" width="60.3081" height="57.7479" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8_164"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8_164" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                            <svg width="61" height="58" viewBox="0 0 61 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_8_164)">
                                <path d="M30.5 0L36.6741 19.002H56.6541L40.49 30.7459L46.6641 49.748L30.5 38.0041L14.3359 49.748L20.51 30.7459L4.34595 19.002H24.3259L30.5 0Z" fill="white"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_8_164" x="0.345947" y="0" width="60.3081" height="57.7479" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8_164"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8_164" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                        </div>
                        <div class="reviews-list__item-comment">Просто отличное заведение для того ,чтобы отдохнуть всей душей. Вкусная современная кухня и высокий уровень обслуживания, я осталась  довольна.</div>
                    </li>
                </ul>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__up">
            <div class="container">
                <div class="footer__info-block">
                    <nav class="footer__nav">
                        <ul class="footer__nav-list-left">
                            <li class="footer__nav-list-left-item"><a href="" class="footer__nav-list-left-link">главная</a></li>
                            <li class="footer__nav-list-left-item"><a href="" class="footer__nav-list-left-link">о нас</a></li>
                            <li class="footer__nav-list-left-item"><a href="" class="footer__nav-list-left-link">контакты</a></li>
                        </ul>
            
                        <ul class="footer__nav-list-right">
                            <li class="footer__nav-list-right-item"><a href="" class="footer__nav-list-right-link">меню</a></li>
                            <li class="footer__nav-list-right-item"><a href="" class="footer__nav-list-right-link">галерея</a></li>
                            <li class="footer__nav-list-right-item"><a href="" class="footer__nav-list-right-link">отзывы</a></li>
                        </ul>
                    </nav>
                    <div class="contacts">
                        <div class="contacts__address">Новая Москва, Картмазово, Киевская ул., 4</div>
                        <a href="" class="contacts__number">+7 (888) 888 - 88 - 88</a>
                        <div class="contacts__worktime">
                            Воскресенье — Четверг: 12:00 — 00:00<br>
                            Пятница — Суббота: 12:00 — 02:00
                        </div>
                    </div>
                </div>

                <div class="footer__link-block">
                    <a href="" class="nav__logo">
                        <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="70" cy="70" r="70" fill="#19202A"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M78.2706 119.308C101.916 115.339 119.932 94.7733 119.932 70C119.932 42.3858 97.5467 20 69.9325 20C42.3182 20 19.9325 42.3858 19.9325 70C19.9325 95.4653 38.9697 116.484 63.5888 119.601L59.1768 133.18L70.9325 124.639L82.6882 133.18L78.1979 119.361L78.2706 119.308ZM78.2706 119.308L89.9536 110.82H75.4227L70.9325 97L66.4422 110.82H51.9113L63.667 119.361L63.5888 119.601C65.6663 119.864 67.7836 120 69.9325 120C72.7734 120 75.559 119.763 78.2706 119.308ZM99.6426 102.348L92.6836 109.767L102.674 107.856L107.579 116.766L108.848 106.674L118.839 104.763L109.633 100.437L110.902 90.345L103.943 97.7635L94.7376 93.4376L99.6426 102.348ZM40.9805 102.809L45.3462 93.6223L36.4143 98.4887L29.026 91.4977L30.894 101.496L21.962 106.363L32.0485 107.676L33.9165 117.674L38.2823 108.487L48.3688 109.8L40.9805 102.809ZM119.687 75.5561L116.642 68.9596L115.228 76.0861L108.013 76.9438L114.354 80.4906L112.94 87.6171L118.273 82.6826L124.614 86.2294L121.569 79.6329L126.901 74.6984L119.687 75.5561ZM24.6696 76.3388L23.2758 69.2083L20.2122 75.7962L13 74.9183L18.3188 79.8678L15.2552 86.4557L21.606 82.9267L26.9248 87.8761L25.531 80.7456L31.8818 77.2166L24.6696 76.3388Z" fill="#D9D9D9"/>
                            <path d="M64.48 66.76C66 66.8 67.22 66.86 68.14 66.94C69.1 67.02 69.88 67.1 70.48 67.18C71.12 67.22 71.74 67.3 72.34 67.42C73.9 67.58 75.3 67.82 76.54 68.14C77.78 68.42 78.84 68.86 79.72 69.46C80.6 70.06 81.24 70.84 81.64 71.8C82.04 72.76 82.14 74 81.94 75.52L81.28 81.7C81.12 82.94 81.16 84 81.4 84.88C81.68 85.76 82.26 86.18 83.14 86.14C83.9 86.1 84.56 85.7 85.12 84.94C85.68 84.14 86.22 83.02 86.74 81.58L87.04 80.74H88.42L88.18 81.52C87.46 84 86.44 85.84 85.12 87.04C83.8 88.24 82 88.84 79.72 88.84C77.2 88.84 75.4 88.22 74.32 86.98C73.24 85.7 72.82 84.12 73.06 82.24L73.78 75.52C73.98 73.68 73.88 72.2 73.48 71.08C73.12 69.92 72.24 69.08 70.84 68.56C69.48 68 67.32 67.72 64.36 67.72L64.48 66.76ZM63.64 67.66L63.94 66.58H66.16C68.44 66.58 70.44 66.28 72.16 65.68C73.92 65.04 75.4 64.14 76.6 62.98C77.8 61.82 78.7 60.42 79.3 58.78C79.94 57.14 80.26 55.3 80.26 53.26C80.26 51.02 79.76 49.38 78.76 48.34C77.76 47.26 76.18 46.72 74.02 46.72C72.62 46.72 71.6 47.02 70.96 47.62C70.36 48.18 69.84 49.32 69.4 51.04L61.24 81.64C60.92 82.88 60.74 83.86 60.7 84.58C60.66 85.3 60.94 85.84 61.54 86.2C62.18 86.56 63.26 86.76 64.78 86.8L64.54 88C63.46 87.92 62.16 87.88 60.64 87.88C59.12 87.84 57.5 87.82 55.78 87.82C54.02 87.82 52.3 87.84 50.62 87.88C48.98 87.88 47.66 87.92 46.66 88L46.9 86.8C48.26 86.72 49.32 86.56 50.08 86.32C50.84 86.08 51.44 85.6 51.88 84.88C52.32 84.16 52.72 83.08 53.08 81.64L61 51.88C61.32 50.64 61.48 49.66 61.48 48.94C61.48 48.18 61.18 47.64 60.58 47.32C59.98 46.96 58.94 46.76 57.46 46.72L57.76 45.52C58.4 45.56 59.2 45.6 60.16 45.64C61.12 45.64 62.14 45.66 63.22 45.7C64.34 45.7 65.36 45.7 66.28 45.7C68 45.7 69.56 45.68 70.96 45.64C72.4 45.6 73.82 45.58 75.22 45.58C79.82 45.58 83.22 46.3 85.42 47.74C87.62 49.14 88.72 51.22 88.72 53.98C88.72 56.7 87.76 59.08 85.84 61.12C83.96 63.16 81.32 64.76 77.92 65.92C74.52 67.04 70.56 67.6 66.04 67.6L63.64 67.66Z" fill="#19202A"/>
                        </svg>
                    </a>
                    <ul class="socials-list">
                        <li class="socials-list__item">
                            <a href="" class="socials-list__icon">
                                <svg width="34" height="21" viewBox="0 0 34 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33.8167 18.0638C32.4282 15.7729 28.8513 13.0202 27.3746 11.8223C26.9705 11.4943 26.9272 10.9269 27.295 10.5642C30.1131 7.78811 32.3671 4.59829 33.1429 2.67081C33.4852 1.81934 32.7767 0.919705 31.7783 0.919705H28.8783C27.9224 0.919705 27.363 1.23422 27.0964 1.73504C24.7543 6.13476 22.7452 8.03887 21.3389 9.15173C20.5515 9.7751 19.3236 9.25869 19.3236 8.31018C19.3236 6.48257 19.3236 4.12014 19.3236 2.44484C19.3236 1.63233 18.5988 0.974959 17.7048 0.974959L12.407 0.919705C11.7402 0.919705 11.3592 1.61179 11.7595 2.09702L12.6342 3.24813C12.9634 3.64695 13.1411 4.13218 13.1411 4.63017L13.1365 9.81406C13.1365 10.7158 11.9442 11.1564 11.2364 10.5246C8.84173 8.38668 6.76389 4.02097 6.0159 1.93339C5.79954 1.32915 5.18214 0.921122 4.48205 0.919705L1.62532 0.91333C0.553557 0.91333 -0.229979 1.84484 0.0613354 2.78273C2.67158 11.1819 8.02728 19.1724 17.5719 20.0387C18.5123 20.1237 19.3236 19.4295 19.3236 18.5703V15.8459C19.3236 15.0645 19.992 14.393 20.8513 14.3732C20.8814 14.3724 20.9116 14.3724 20.9417 14.3724C23.4662 14.3724 26.2936 17.7408 27.2826 19.3162C27.567 19.7696 28.0986 20.0458 28.6735 20.0458H32.5163C33.6375 20.0458 34.3569 18.9556 33.8167 18.0638Z" fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <li class="socials-list__item">
                            <a href="" class="socials-list__icon">
                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.64987 9.14974C8.09231 6.44971 12.3883 4.66968 14.5378 3.80966C20.675 1.35412 21.9503 0.927565 22.7815 0.91348C22.9643 0.910382 23.3731 0.953965 23.6379 1.16064C23.8614 1.33515 23.9229 1.57088 23.9524 1.73634C23.9818 1.90179 24.0185 2.2787 23.9893 2.57321C23.6568 5.93465 22.2177 14.092 21.4856 17.8569C21.1758 19.4499 20.5658 19.9841 19.9753 20.0363C18.6919 20.1499 17.7174 19.2205 16.4744 18.4367C14.5294 17.2102 13.4305 16.4467 11.5425 15.2499C9.36064 13.8668 10.7751 13.1066 12.0185 11.8643C12.344 11.5391 17.9985 6.5917 18.1079 6.14289C18.1216 6.08676 18.1343 5.87753 18.0051 5.76705C17.8759 5.65657 17.6851 5.69435 17.5475 5.72439C17.3524 5.76698 14.2452 7.74258 8.22584 11.6512C7.34386 12.2338 6.545 12.5176 5.82924 12.5027C5.04017 12.4863 3.52233 12.0736 2.39397 11.7207C1.00999 11.288 -0.0899676 11.0592 0.00581422 10.3242C0.0557033 9.94142 0.603723 9.54993 1.64987 9.14974Z" fill="white"/>
                                </svg>
                            </a>
                        </li>
                        <li class="socials-list__item">
                            <a href="" class="socials-list__icon">
                                <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 22.959L1.69627 17.0665C0.647564 15.3369 0.0974211 13.3782 0.103152 11.3758C0.103152 5.10139 5.46704 0 12.0516 0C15.2493 0 18.2521 1.18396 20.5043 3.33364C22.7622 5.48331 24.0057 8.34228 24 11.3813C24 17.6557 18.6361 22.7571 12.0458 22.7571H12.0401C10.0401 22.7571 8.07449 22.277 6.32664 21.3713L0 22.959ZM6.63037 19.3144L6.9914 19.5217C8.51575 20.3837 10.2636 20.8366 12.0458 20.842H12.0516C17.5243 20.842 21.9828 16.6027 21.9828 11.3867C21.9828 8.8606 20.9513 6.48722 19.0773 4.69764C17.2034 2.90807 14.7049 1.92598 12.0516 1.92598C6.57879 1.92052 2.12034 6.15986 2.12034 11.3758C2.12034 13.16 2.64183 14.9004 3.63897 16.4063L3.87392 16.7664L2.87106 20.2528L6.63037 19.3144Z" fill="white"/>
                                    <path d="M0 22.959L1.69627 17.0665C0.647564 15.3369 0.0974211 13.3782 0.103152 11.3758C0.103152 5.10139 5.46704 0 12.0516 0C15.2493 0 18.2521 1.18396 20.5043 3.33364C22.7622 5.48331 24.0057 8.34228 24 11.3813C24 17.6557 18.6361 22.7571 12.0458 22.7571H12.0401C10.0401 22.7571 8.07449 22.277 6.32664 21.3713L0 22.959ZM6.63037 19.3144L6.9914 19.5217C8.51575 20.3837 10.2636 20.8366 12.0458 20.842H12.0516C17.5243 20.842 21.9828 16.6027 21.9828 11.3867C21.9828 8.8606 20.9513 6.48722 19.0773 4.69764C17.2034 2.90807 14.7049 1.92598 12.0516 1.92598C6.57879 1.92052 2.12034 6.15986 2.12034 11.3758C2.12034 13.16 2.64183 14.9004 3.63897 16.4063L3.87392 16.7664L2.87106 20.2528L6.63037 19.3144Z" fill="url(#paint0_linear_8_226)"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.06581 6.61808C8.84231 6.14341 8.60736 6.13249 8.39532 6.12704C8.2234 6.12158 8.02283 6.12158 7.82226 6.12158C7.62168 6.12158 7.30077 6.19251 7.02569 6.47622C6.75062 6.75994 5.98272 7.4474 5.98272 8.8496C5.98272 10.2463 7.05435 11.5994 7.20334 11.7904C7.35234 11.9814 9.27211 14.944 12.3036 16.0843C14.8251 17.0336 15.3409 16.8427 15.8853 16.7936C16.4297 16.7445 17.6503 16.1061 17.9025 15.4405C18.1489 14.7749 18.1489 14.2074 18.0744 14.0874C17.9999 13.9674 17.7993 13.8964 17.5013 13.7546C17.2033 13.6127 15.7363 12.9253 15.4612 12.827C15.1861 12.7343 14.9856 12.6852 14.7907 12.9689C14.5902 13.2526 14.0171 13.891 13.8452 14.0819C13.6733 14.2729 13.4956 14.2947 13.1976 14.1529C12.8996 14.011 11.9369 13.7109 10.7965 12.7398C9.90821 11.9868 9.30649 11.0538 9.13457 10.7701C8.96266 10.4864 9.11738 10.3336 9.26638 10.1918C9.39819 10.0663 9.56437 9.85896 9.71337 9.69528C9.86237 9.5316 9.91394 9.41157 10.0114 9.22061C10.1088 9.02965 10.0629 8.86597 9.98844 8.72411C9.91394 8.58771 9.32942 7.18005 9.06581 6.61808Z" fill="white"/>
                                    <defs>
                                    <linearGradient id="paint0_linear_8_226" x1="12.0023" y1="22.9568" x2="12.0023" y2="0" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F9F9F9"/>
                                    <stop offset="1" stop-color="white"/>
                                    </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="newsletter">
                    <h2 class="newsletter__title">NEWSLETTER</h2>
                    <div class="newsletter__subtitle">Захватывающие вкусы интернациональной кухни в превосходном интерьере нашего недавно открытого ресторана</div>
                    <input class="newsletter__input" type="text" placeholder="ВВЕДИТЕ ВАШ E-MAIL АДРЕС">
                    <button class="btn btn-send">ОТПРАВИТЬ</button>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="container">
                <div class="signature">Sometimes the simplest things are the hardest to find.</div>
                <div class="site-info">
                    <div class="site-info__copyright">© Copyright Qode Interactive</div>
                    <div class="site-info__version">site version: 0.1</div>
                </div>
            </div>
        </div>
    </footer>

    <script src="/assets/js/libs/jQuery.js"></script>
    <script type="module" src="/assets/js/main.js"></script>
</body>
</html>