<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=1920"> -->
    <meta name="viewport" content="width=device-width">
    <title>Доступный ДОМ</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- owlcarousel -->
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.green.css">

</head>

<body>
    <header class="header">
        <div class="container1400 header-flex">
            <div class="header-left">
                <a href="#">
                    <img src="img/logo.png" alt="logo">
                </a>
            </div>
            <div class="header-right">
                <div class="phone-header">
                    <a class="phone-link" href="#">
                        8-965-921-9000
                    </a>
                </div>
                <p class="address-header">Стерлитамак, ул. Профсоюзная 2к1</p>
            </div>
        </div>
        <div class="container1400 contact-header">
            <a class="button-contact-header modal-button-trigger" href="#">5 популярных проектов</a>
        </div>
    </header>
    <main class="main-page">

        <div id="modal-box" class="modal">
            <div class="modal-content">
                <span class="modal-close">&times;</span>
                <p class="modal-form-text">Закажите рассчёт проекта уже сегодня!</p>
                <input class="modal-input-text" type="text" placeholder="Ваше имя">
                <input class="modal-input-text" type="text" placeholder="Ваш телефон">
                <a href="#" class="modal-button">
                    Заказать бесплатный рассчёт сметы
                </a>
            </div>
        </div>

        <div class="green-background">
            <div class="container1400 banner">
                <div class="banner-logo">
                    <img src="img/biglogo.png" alt="biglogo">
                </div>
                <div class="banner-descr">
                    <div class="banner-descr-box">
                        <p class="banner-descr-text">Дом с участком по цене квартиры в Стерлитамаке!</p>
                    </div>
                </div>
                <div class="order-project">
                    <a id="modal-btn" class="button-order-project" href="#">Заказать проект</a>
                </div>
                <div class="banner-left">
                    <img src="img/house.png" alt="house">
                </div>
            </div>

            <div class="our-projects-bg">
                <div class="about-us-icons">
                    <div class="about-us-what-we-do">
                        <p class="about-us-what-we-do-txt">СТРОИМ ТЕПЛЫЕ ДОМА<br> БЫСТРО И ПО ДОСТУПНОЙ ЦЕНЕ!</p>
                    </div>
                    <div class="about-us-icon">
                        <img src="img/icon1.png" alt="icon">
                        <p>Ипотека от ведущих банков</p>
                    </div>
                    <div class="about-us-icon">
                        <img src="img/icon2.png" alt="icon">
                        <p>Строим “под ключ”</p>
                    </div>
                    <div class="about-us-icon">
                        <img src="img/icon3.png" alt="icon">
                        <p>Рассрочка без банков</p>
                    </div>
                </div>

                <div class="our-projects-plans">
                    <p class="our-projects-announce-text">Наши проекты</p>

                    <div class="project-types">

                        <div class="owl-one owl-carousel owl-theme">

                            <div class="project-option project-option-trigger" onclick="openDescr(0)">
                                <div class="project-type-name">
                                    <p class="project-type-name-text">проект стандарт</p>
                                </div>
                                <img class="proj-slider-house-type-img" src="img/projslider/70.png" alt="project">
                                <p class="project-type-area-text">70 кв.м</p>
                            </div>
                            <div class="project-option project-option-trigger" onclick="openDescr(1)">
                                <div class="project-type-name">
                                    <p class="project-type-name-text">проект стандарт</p>
                                </div>
                                <img class="proj-slider-house-type-img" src="img/projslider/80.png" alt="project">
                                <p class="project-type-area-text">80 кв.м</p>
                            </div>
                            <div class="project-option project-option-trigger" onclick="openDescr(2)">
                                <div class="project-type-name">
                                    <p class="project-type-name-text">проект стандарт</p>
                                </div>
                                <img class="proj-slider-house-type-img" src="img/projslider/90.png" alt="project">
                                <p class="project-type-area-text">90 кв.м</p>
                            </div>
                            <div class="project-option project-option-trigger" onclick="openDescr(3)">
                                <div class="project-type-name">
                                    <p class="project-type-name-text">проект стандарт</p>
                                </div>
                                <img class="proj-slider-house-type-img" src="img/projslider/100.png" alt="project">
                                <p class="project-type-area-text">100 кв.м</p>
                            </div>
                            <div class="project-option project-option-trigger" onclick="openDescr(4)">
                                <div class="project-type-name">
                                    <p class="project-type-name-text">проект стандарт</p>
                                </div>
                                <img class="proj-slider-house-type-img" src="img/projslider/110.png" alt="project">
                                <p class="project-type-area-text">110 кв.м</p>
                            </div>
                            <div class="project-option project-option-trigger" onclick="openDescr(5)">
                                <div class="project-type-name">
                                    <p class="project-type-name-text">проект стандарт</p>
                                </div>
                                <img class="proj-slider-house-type-img" src="img/projslider/120.png" alt="project">
                                <p class="project-type-area-text">120 кв.м</p>
                            </div>
                            <div class="project-option project-option-trigger" onclick="openDescr(6)">
                                <div class="project-type-name">
                                    <p class="project-type-name-text">проект стандарт</p>
                                </div>
                                <img class="proj-slider-house-type-img" src="img/projslider/130.png" alt="project">
                                <p class="project-type-area-text">130 кв.м</p>
                            </div>
                            <div class="project-option project-option-trigger" onclick="openDescr(7)">
                                <div class="project-type-name">
                                    <p class="project-type-name-text">проект стандарт</p>
                                </div>
                                <img class="proj-slider-house-type-img" src="img/projslider/140.png" alt="project">
                                <p class="project-type-area-text">140 кв.м</p>
                            </div>
                            <div class="project-option project-option-trigger" onclick="openDescr(8)">
                                <div class="project-type-name">
                                    <p class="project-type-name-text">проект стандарт</p>
                                </div>
                                <img class="proj-slider-house-type-img" src="img/projslider/150.png" alt="project">
                                <p class="project-type-area-text">150 кв.м</p>
                            </div>

                        </div>

                    </div>

                    <div class="proj-descr-container project-option-descr">
                        <div class="proj-descr-img"><img class="proj-descr-img-pic" src="img/projslider/70.jpg"></div>
                        <div class="proj-descr-text-container">

                            <p class="proj-descr-text-normal">Проект Стандарт 70</p>
                            <p class="proj-descr-text-big">базовый – <b>1 535 000</b> руб.</p>
                            <p class="proj-descr-text-big">стандарт – <b>1717 520</b> руб.</p>
                            <p class="proj-descr-text-big">под ключ – <b>2 149 980</b> руб.</p>

                            <div class="proj-descr-button modal-button-trigger">Заказать звонок</div>
                        </div>
                    </div>

                    <div class="proj-descr-container project-option-descr">
                        <div class="proj-descr-img"><img class="proj-descr-img-pic" src="img/projslider/80.jpg"></div>
                        <div class="proj-descr-text-container">

                            <p class="proj-descr-text-normal">Проект Стандарт 80</p>
                            <p class="proj-descr-text-big">базовый – <b>1 535 000</b> руб.</p>
                            <p class="proj-descr-text-big">стандарт – <b>1717 520</b> руб.</p>
                            <p class="proj-descr-text-big">под ключ – <b>2 149 980</b> руб.</p>

                            <div class="proj-descr-button modal-button-trigger">Заказать звонок</div>
                        </div>
                    </div>

                    <div class="proj-descr-container project-option-descr">
                        <div class="proj-descr-img"><img class="proj-descr-img-pic" src="img/projslider/90.jpg"></div>
                        <div class="proj-descr-text-container">

                            <p class="proj-descr-text-normal">Проект Стандарт 90</p>
                            <p class="proj-descr-text-big">базовый – <b>1 535 000</b> руб.</p>
                            <p class="proj-descr-text-big">стандарт – <b>1717 520</b> руб.</p>
                            <p class="proj-descr-text-big">под ключ – <b>2 149 980</b> руб.</p>

                            <div class="proj-descr-button modal-button-trigger">Заказать звонок</div>
                        </div>
                    </div>

                    <div class="proj-descr-container project-option-descr">
                        <div class="proj-descr-img"><img class="proj-descr-img-pic" src="img/projslider/100.jpg"></div>
                        <div class="proj-descr-text-container">

                            <p class="proj-descr-text-normal">Проект Стандарт 100</p>
                            <p class="proj-descr-text-big">базовый – <b>1 535 000</b> руб.</p>
                            <p class="proj-descr-text-big">стандарт – <b>1717 520</b> руб.</p>
                            <p class="proj-descr-text-big">под ключ – <b>2 149 980</b> руб.</p>

                            <div class="proj-descr-button modal-button-trigger">Заказать звонок</div>
                        </div>
                    </div>

                    <div class="proj-descr-container project-option-descr">
                        <div class="proj-descr-img"><img class="proj-descr-img-pic" src="img/projslider/110.jpg"></div>
                        <div class="proj-descr-text-container">

                            <p class="proj-descr-text-normal">Проект Стандарт 110</p>
                            <p class="proj-descr-text-big">базовый – <b>1 535 000</b> руб.</p>
                            <p class="proj-descr-text-big">стандарт – <b>1717 520</b> руб.</p>
                            <p class="proj-descr-text-big">под ключ – <b>2 149 980</b> руб.</p>

                            <div class="proj-descr-button modal-button-trigger">Заказать звонок</div>
                        </div>
                    </div>

                    <div class="proj-descr-container project-option-descr">
                        <div class="proj-descr-img"><img class="proj-descr-img-pic" src="img/projslider/120.jpg"></div>
                        <div class="proj-descr-text-container">

                            <p class="proj-descr-text-normal">Проект Стандарт 120</p>
                            <p class="proj-descr-text-big">базовый – <b>1 535 000</b> руб.</p>
                            <p class="proj-descr-text-big">стандарт – <b>1717 520</b> руб.</p>
                            <p class="proj-descr-text-big">под ключ – <b>2 149 980</b> руб.</p>

                            <div class="proj-descr-button modal-button-trigger">Заказать звонок</div>
                        </div>
                    </div>

                    <div class="proj-descr-container project-option-descr"> 
                        <div class="proj-descr-img"><img class="proj-descr-img-pic" src="img/projslider/130.jpg"></div>
                        <div class="proj-descr-text-container">

                            <p class="proj-descr-text-normal">Проект Стандарт 130</p>
                            <p class="proj-descr-text-big">базовый – <b>1 535 000</b> руб.</p>
                            <p class="proj-descr-text-big">стандарт – <b>1717 520</b> руб.</p>
                            <p class="proj-descr-text-big">под ключ – <b>2 149 980</b> руб.</p>

                            <div class="proj-descr-button modal-button-trigger">Заказать звонок</div>
                        </div>
                    </div>

                    <div class="proj-descr-container project-option-descr">
                        <div class="proj-descr-img"><img class="proj-descr-img-pic" src="img/projslider/140.jpg"></div>
                        <div class="proj-descr-text-container">

                            <p class="proj-descr-text-normal">Проект Стандарт 140</p>
                            <p class="proj-descr-text-big">базовый – <b>1 535 000</b> руб.</p>
                            <p class="proj-descr-text-big">стандарт – <b>1717 520</b> руб.</p>
                            <p class="proj-descr-text-big">под ключ – <b>2 149 980</b> руб.</p>

                            <div class="proj-descr-button modal-button-trigger">Заказать звонок</div>
                        </div>
                    </div>

                    <div class="proj-descr-container project-option-descr">
                        <div class="proj-descr-img"><img class="proj-descr-img-pic" src="img/projslider/150.jpg"></div>
                        <div class="proj-descr-text-container">

                            <p class="proj-descr-text-normal">Проект Стандарт 150</p>
                            <p class="proj-descr-text-big">базовый – <b>1 535 000</b> руб.</p>
                            <p class="proj-descr-text-big">стандарт – <b>1717 520</b> руб.</p>
                            <p class="proj-descr-text-big">под ключ – <b>2 149 980</b> руб.</p>

                            <div class="proj-descr-button modal-button-trigger">Заказать звонок</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container1920 testimonies">
                <div class="container1400 testimonies-table">
                    <div class="testimony-option">
                        <div class="testimony-title">
                            <div class="testimony-image">
                                <img src="img/test1.png" alt="icon">
                            </div>
                            <p class="testimony-title-text">Готовые дома под ключ</p>
                        </div>
                        <div class="testimony-small-text-box">
                            <p class="testimony-title-text-small">
                                Мы строим уютные, теплые дома из провернных материалов. Наше преимущество —
                                индивидуальная
                                работа с каждым клиентом на всех этапах: от визуального знакомства с участком застройки
                                и
                                проектирования до отделки и сдачи объекта под ключ.
                            </p>
                            <p class="testimony-title-text-small">
                                Мы накопили большой опыт в строительстве, возведении прочных и «вечных» фундаментов и
                                отделке.
                            </p>
                        </div>
                        <div class="testimony-button modal-button-trigger">Заказать звонок</div>
                    </div>
                    <div class="testimony-option">
                        <div class="testimony-title">
                            <div class="testimony-image">
                                <img src="img/test2.png" alt="icon">
                            </div>
                            <p class="testimony-title-text">Кадры с высшим образованием</p>
                        </div>
                        <div class="testimony-small-text-box">
                            <p class="testimony-title-text-small">
                                Ценим каждого клиента, делаем работу качественно и быстро. От конкурентов нас отличает
                                низкая цена на строительные материалы и выполнение работ.
                            </p>
                            <p class="testimony-title-text-small">
                                Мы уделяем внимание кадрам компании. В нашей команде только высококвалифицированные
                                специалисты с профильным образованием: дизайнеры, проектировщики, архитекторы, инженеры,
                                сметчики. Бригады сформированы из специалистов своего профиля.
                            </p>
                        </div>
                        <div class="testimony-button modal-button-trigger">Заказать звонок</div>
                    </div>
                    <div class="testimony-option">
                        <div class="testimony-title">
                            <div class="testimony-image">
                                <img src="img/test3.png" alt="icon">
                            </div>
                            <p class="testimony-title-text">Гарантия<br> 10 лет!</p>
                        </div>
                        <div class="testimony-small-text-box">
                            <p class="testimony-title-text-small">
                                За первый год возможно появление незначительных дефектов финишной отделки. Например,
                                нарушается плавность хода дверного полотна. Это происходит из-за усадки и образования
                                нового
                                микроклимата в доме после завершения строительных работ и заселения.
                            </p>
                            <p class="testimony-title-text-small">
                                Такие недостатки, а также иные замечания, устраняются комплексно в течение 12 месяцев
                                бесплатно.
                            </p>
                        </div>
                        <div class="testimony-button modal-button-trigger">Узнать подробнее</div>
                    </div>
                    <div class="testimony-option">
                        <div class="testimony-title">
                            <div class="testimony-image">
                                <img src="img/test4.png" alt="icon">
                            </div>
                            <p class="testimony-title-text">Строим<br> как себе!</p>
                        </div>
                        <div class="testimony-small-text-box">
                            <p class="testimony-title-text-small">
                                Нашему коллективу одинаково важно исполнить любое пожелание заказчика: будь то построить
                                большой коттедж под ключ или сложить стены для маленького гаража.
                            </p>
                            <p class="testimony-title-text-small">
                                Мы можем предложить уже готовый проект или сделать его с нуля, учитывая все пожелания
                                клиента и ландшафт местности, выбранного вами участка.
                            </p>
                        </div>
                        <div class="testimony-button modal-button-trigger">Начать стройку!</div>
                    </div>
                </div>
            </div>
            <div class="container1920 order-today">
                <div class="order-today-form">
                    <p class="order-today-form-text">Закажите рассчёт проекта уже сегодня!</p>
                    <input class="input-text" type="text" placeholder="Ваше имя">
                    <input class="input-text" type="text" placeholder="Ваш телефон">
                    <a href="#" class="order-today-button">
                        Заказать бесплатный рассчёт сметы
                    </a>
                </div>
                <div class="order-today-house">
                    <img class="img-fit" src="img/house2.png" alt="house">
                </div>
            </div>
            <div class="container1920 reviews-box">
                <p class="reviews-title">Отзывы</p>

                <div class="navigation-keys-and-reviews">

                    <div class="owl-two owl-carousel owl-theme">

                        <div class="review-item-desc-and-button">
                            <div class="review-items-box">

                                <div class="review-item">
                                    <div class="review-photo-place"><img class="review-photo" src="img/cust/cust1.jpg"
                                            alt="logo"></div>
                                    <div class="review-text-box">
                                        <div class="review-name">Максим. Уфа.</div>
                                        <div class="review-text">Спасибо Вадиму Кутлугильдину, за столь оперативный
                                            подход,
                                            построили дом раньше договоренностей. Дали гарантию, просто нет слов, одни
                                            эмоции.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-learnmore">    
                                <div class="proj-review-button modal-button-trigger">Заказать звонок</div>                                
                            </div>
                        </div>

                        <div class="review-item-desc-and-button">
                            <div class="review-items-box">

                                <div class="review-item">
                                    <div class="review-photo-place"><img class="review-photo" src="img/cust/cust2.jpg"
                                            alt="logo"></div>
                                    <div class="review-text-box">
                                        <div class="review-name">Иван. Стерлитамак.</div>
                                        <div class="review-text">Заказ был не простой, моя задумка очень сложно
                                            реализуема,
                                            но компания Доступный Дом, справились и сдали дом, срок увеличился на 1
                                            месяц,
                                            но это не страшно, учитывая какой дом они мне сделали. Одни слова
                                            благодарности.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-learnmore">    
                                <div class="proj-review-button modal-button-trigger">Заказать звонок</div>                                
                            </div>
                        </div>

                        <div class="review-item-desc-and-button">
                            <div class="review-items-box">
                                <div class="review-item">
                                    <div class="review-photo-place"><img class="review-photo" src="img/cust/cust3.jpg"
                                            alt="logo"></div>
                                    <div class="review-text-box">
                                        <div class="review-name">Кирилл. Стерлитамак.</div>
                                        <div class="review-text">Что я могу сказать про компанию Доступный Дом? Да это
                                            реально крутые ребята они возвели 2 этажный дом из бруса за 2,5 месяца с
                                            отделкой. Рекомендую всем своим друзьям щас, которые не знали к кому
                                            обратиться.
                                            Спасибо большое за профессиональный подход.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-learnmore">    
                                <div class="proj-review-button modal-button-trigger">Заказать звонок</div>                                
                            </div>
                        </div>

                        <div class="review-item-desc-and-button">
                            <div class="review-items-box">
                                <div class="review-item">
                                    <div class="review-photo-place"><img class="review-photo" src="img/cust/cust4.jpg"
                                            alt="logo"></div>
                                    <div class="review-text-box">
                                        <div class="review-name">Тимур. Уфа.</div>
                                        <div class="review-text">Мне было страшно возводить свой собственный дом, ибо
                                            ещё
                                            никогда не сталкивался с этим и я нахожусь в разъездах постоянно. Очень
                                            понравилось, что каждый этап работы мне присылали в What’s up, с такими
                                            крутыми
                                            ребятами всё под силу. Я был на стройке всего 3 раза. Всё понравилось,
                                            подход к
                                            мелочами их, просто безумие какое-то, делают реально на совесть.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-learnmore">    
                                <div class="proj-review-button modal-button-trigger">Заказать звонок</div>                                
                            </div>
                        </div>

                        <div class="review-item-desc-and-button">
                            <div class="review-items-box">
                                <div class="review-item">
                                    <div class="review-photo-place"><img class="review-photo" src="img/cust/cust5.jpg"
                                            alt="logo"></div>
                                    <div class="review-text-box">
                                        <div class="review-name">Роман. Стерлитамак.</div>
                                        <div class="review-text">ПРОСТО… КОСМОС! Я в восторге реально, наконец-то мы
                                            переезжаем в свой собственный дом, компании Доступный Дом большая
                                            благодарность.
                                            Исполнили все наши желания в реальность. И отдельно хотим поблагодарить
                                            Вадима
                                            Кутлугильдина, за оперативность, отзывчивость и помощь.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-learnmore">    
                                <div class="proj-review-button modal-button-trigger">Заказать звонок</div>                                
                            </div>
                        </div>

                        <div class="review-item-desc-and-button">
                            <div class="review-items-box">
                                <div class="review-item">
                                    <div class="review-photo-place"><img class="review-photo" src="img/cust/cust6.jpg"
                                            alt="logo"></div>
                                    <div class="review-text-box">
                                        <div class="review-name">Дарья. Уфа.</div>
                                        <div class="review-text">Скептически относилась, до того момента пока не начала
                                            работать. Ребята огромные молодцы, выслушивают и добавляют красок в проект.
                                            Профессионалы одним словом. Спасибо за крутой дом, теперь будем каждый
                                            вечерок
                                            собираться возле камина всей семьей.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-learnmore">    
                                <div class="proj-review-button modal-button-trigger">Заказать звонок</div>                                
                            </div>
                        </div>

                        <div class="review-item-desc-and-button">
                            <div class="review-items-box">
                                <div class="review-item">
                                    <div class="review-photo-place"><img class="review-photo" src="img/cust/cust7.jpg"
                                            alt="logo"></div>
                                    <div class="review-text-box">
                                        <div class="review-name">Ксения. Стерлитамак.</div>
                                        <div class="review-text">Накопилось за эти 5 месяцев не мало. Застройка шла
                                            отлично,
                                            но не без трудностей и маленьких проблем. Долго подготавливали макет
                                            проекта, не
                                            могли определиться, хотели прям что-то минималистическое, наконец подобрали.
                                            Далее подготовительные работы, мы купил участок на болотистой местности, не
                                            проверив, пришлось подготавливать вначале саму землю. Как всё это сделали,
                                            начался процесс, и сам процесс шёл по времени примерно, как все работы
                                            которые я
                                            озвучила ранее. Ребята действительно молодцы, очень быстро и оперативно всё
                                            делают. Благодарю компанию Доступный дом, честно, огромный поклон.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-learnmore">    
                                <div class="proj-review-button modal-button-trigger">Заказать звонок</div>                                
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="container1400 order-of-steps">
                <p class="order-of-steps-text">Этапы работ</p>
                <div class="order-of-steps-list">
                    <div class="step-item">
                        <div class="step-item-image">
                            <img src="img/steps1.png" alt="icon">
                        </div>
                        <p class="step-item-text">Обсуждение проекта</p>
                    </div>
                    <div class="step-item">
                        <div class="step-item-image">
                            <img src="img/steps2.png" alt="icon">
                        </div>
                        <p class="step-item-text">Разработка планировки</p>
                    </div>
                    <div class="step-item">
                        <div class="step-item-image">
                            <img src="img/steps3.png" alt="icon">
                        </div>
                        <p class="step-item-text">Составление сметы</p>
                    </div>
                    <div class="step-item">
                        <div class="step-item-image">
                            <img src="img/steps4.png" alt="icon">
                        </div>
                        <p class="step-item-text">Заключаем договор</p>
                    </div>
                    <div class="step-item">
                        <div class="step-item-image">
                            <img src="img/steps5.png" alt="icon">
                        </div>
                        <p class="step-item-text">Подготовительные строительные работы</p>
                    </div>
                    <div class="step-item">
                        <div class="step-item-image">
                            <img src="img/steps6.png" alt="icon">
                        </div>
                        <p class="step-item-text">Стройка</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container1400 subscribe-box">
            <p class="subscribe-box-text">Узнайте о типичных ошибках<br> заказчика при строительстве дома</p>
            <p class="subscribe-box-text-small">Подпишитесь на информационную рассылку</p>
            <input class="input-text" type="email" placeholder="E-mail">
            <a href="#" class="subscribe-box-text-button">
                Получить
            </a>
        </div>
        <div class="container1400 descr-text-box">
            <p class="descr-text">
                <span class="descr-text-bold">Строительство домов под ключ</span><br>
                Мы строим под ключ комфортные дома и коттеджи в Стерлитамаке, и сдаем их заказчикам готовыми к
                проживанию. Мы познакомим вас с технологиями и материалами, которые используем в строительстве
                загородных домов. Вы узнаете все об их преимуществах, особенностях и важных нюансах.
            </p>
            <p class="descr-text">
                <span class="descr-text-bold">Строительство коттеджей под ключ в Стерлитамаке</span><br>
                За время работы мы построили и сдали заказчикам более 800 готовых для заселения домов. Мы строим
                загородные коттеджи по европейской технологии, соблюдая все требования СНиП и ГОСТ, заботимся о здоровье
                клиентов и применяем только сертифицированные, экологически безопасные материалы, не выделяющие
                формальдегиды.
            </p>
            <p class="descr-text">
                Мы самостоятельно изготавливаем деревянные, металлические и железобетонные конструкции для каркасных
                домов на производственных площадках. У нас большой автопарк строительной техники и в наличии
                механизированное оборудование. В нашей компании работают талантливые инженеры, дизайнеры, и опытные
                мастера.
            </p>
            <p class="descr-text">
                <span class="descr-text-bold">На каждом этапе работают специализированные бригады.<br>
                    Благодаря комплексному подходу к строительству домов, мы снижаем затраты и предлагаем клиентам
                    невысокие цены.</span>
            </p>
        </div>
        <div class="container1920 examples-box">
            <div class="example-item">
                <a href="#"><img src="img/example1.png" alt="example"></a>
            </div>
            <div class="example-item">
                <a href="#"><img src="img/example2.png" alt="example"></a>
            </div>
            <div class="example-item">
                <a href="#"><img src="img/example3.png" alt="example"></a>
            </div>
            <div class="example-item">
                <a href="#"><img src="img/example4.png" alt="example"></a>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container1400 footer-flex">
            <div class="footer-left">
                <a href="#">
                    <img src="img/footerlogo.png" alt="logo">
                </a>
                <p class="company-data-text">ООО Тёплый Дом<br> ИНН/ОГРН 12345678/12345678</p>
                <div class="footer-phone-address">
                    <p class="phone-header"><a class="phone-link" href="#">8-965-921-9000</a></p>
                    <p class="address-header">Стерлитамак, ул. Профсоюзная 2к1</p>
                </div>
            </div>
            <div class="footer-right">
                <div class="footer-right-first-part">
                    <div class="footer-right-map">
                        <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A35d7e157680b6a7fd7782fa5ed76589fcdd877ef48282bb365aaac40df1bab0b&amp;width=960&amp;height=425&amp;lang=ru_RU&amp;scroll=flase">
                        </script>
                    </div>
                    <div class="order-call">
                        <div class="button-order-call modal-button-trigger">Заказать звонок</div>
                    </div>
                </div>
                <div class="footer-right-second-part">
                    <div class="design-studio">
                        <div class="design-studio-container">
                            <p class="design-studio-text">Designed by</p>
                            <div class="design-studio-logo">
                                <a href="#"><img src="img/uleu.png" alt="ULEU"></a>
                            </div>
                        </div>
                        <p class="design-studio-year">2020</p>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
    </footer>
    <script src="./js/main.js"></script>
    <script src="./owlcarousel/jquery.min.js"></script>
    <script src="./owlcarousel/owl.carousel.min.js"></script>
    <script>
        /*project slider*/
        $('.owl-one').owlCarousel({
            nav: true,
            dots: false,
            items: 3,
            autoplay: false,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            navText: ["<img src='./img/projslider/proj-arr-left.png'>",
                "<img src='./img/projslider/proj-arr-right.png'>"
            ],
        });

        /*review slider*/
        $('.owl-two').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            items: 1,
            autoplay: true,
            autoplayTimeout: 7500,
            autoplayHoverPause: true,
            navText: ["<img src='./img/arrowleft.png'>", "<img src='./img/arrowright.png'>"],
        })
    </script>
</body>

</html>