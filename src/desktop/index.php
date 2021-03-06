<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- <script src="https://localhost:4445/livereload.js"></script> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=980">
        <title>ДНК</title>
        <!-- <link type="image/x-icon" href="favicon.ico" rel="shortcut icon"> -->
        <!-- <script>
            if (screen.width <= 750) {
                document.location = "../mobile/" + document.location.search;
            }
        </script> -->
        <style>
            <?php include('css/head.css');
            ?>
        </style>
        <link type="text/css" href="css/libs.css" rel="stylesheet">
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <link type="text/css" href="css/media.css" rel="stylesheet">
        <link type="text/css" href="css/scripts.css" rel="stylesheet">
    </head>
    <body>
        <!-- <div id="maket"></div> -->
        <section id="body">
            <div>
                <div class="col">
                    <div class="row-5">
                        <p class="label">Название лендинга</p>
                        <input class="valid" id="land_name" name="land_name" data-input-type="land_name" type="text" value placeholder>
                    </div>
                    <div class="row-5">
                        <p class="label">Домен лендинга</p>
                        <input class="valid" id="domain" name="domain" data-input-type="domain" type="text" value placeholder>
                    </div>
                </div>
                <div class="hline"></div>
                <div class="col">
                    <div class="row-5">
                        <p class="label">Заголовок страницы</p>
                        <input class="valid" id="page_title" name="page_title" data-input-type="page_title" type="text" value placeholder>
                        <p class="label">Дескриптор</p>
                        <textarea class="valid" id="descriptor" name="descriptor" data-input-type="descriptor" type="text" value placeholder></textarea>
                    </div>
                    <div class="row-5">
                        <p class="label">Оффер основа</p>
                        <textarea class="valid" id="offer_h1" name="offer_h1" data-input-type="offer_h1" type="text" value placeholder></textarea>
                        <p class="label">Оффер преимущество</p>
                        <input class="valid" id="offer_h2" name="offer_h2" data-input-type="offer_h2" type="text" value placeholder>
                    </div>
                </div>
                <div class="hline"></div>
                <div class="col">
                    <div class="row-3">
                        <p class="label">Фон страницы</p>
                        <label class="button" for="upfile2">Загрузить</label>
                        <p class="label">Логотип</p>
                        <div class="trig" data-target="logo">
                            <span>Нет</span>
                            <span>Есть</span>
                        </div>
                        <div class="trig-wrap">
                            <label class="button" for="upfile1">Загрузить</label>
                        </div>
                    </div>
                    <div class="row-7">
                        <p class="label">Предпросмотр</p>
                        <div class="view" id="preview" data-logo="0">
                            <div class="logo" id="logo_view"></div>
                            <p class="descr">
                                <span></span>
                            </p>
                            <div class="bg-shadow"></div>
                        </div>
                        <p class="label slider_label">Затемнение фона</p>
                        <div class="ui-slider" id="slider">
                            <span class="ui-slider-handle" style="left:80%"></span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row-5">
                        <p class="label">Видео на фон</p>
                        <div class="trig" data-target="bg_video">
                            <span>Нет</span>
                            <span>Есть</span>
                        </div>
                        <div class="trig-wrap">
                            <input class="youtube valid" id="bg_video" name="bg_video" data-input-type="bg_video" type="text" value="0" placeholder>
                            <span></span>
                        </div>
                    </div>
                    <div class="row-5">
                        <p class="label">Продающее видео</p>
                        <div class="trig" data-target="content_video">
                            <span>Нет</span>
                            <span>Есть</span>
                        </div>
                        <div class="trig-wrap">
                            <input class="youtube valid" id="content_video" name="content_video" data-input-type="video" type="text" value="0" placeholder>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="hline"></div>
                <div class="col">
                    <div class="row-5">
                        <p class="label">Настройка полей формы</p>
                        <div class="radio active frozen" data-input="name">
                            <span class="span"></span>
                            <p>Имя</p>
                        </div>
                        <div class="radio active frozen" data-input="phone">
                            <span class="span"></span>
                            <p>Телефон</p>
                        </div>
                        <div class="radio" data-input="email">
                            <span class="span"></span>
                            <p>E-mail</p>
                        </div>
                        <div class="radio" data-input="custom">
                            <span class="span"></span>
                            <p>Текстовое поле
                                <span class="custom">
                                    <input class="valid" id="form_custom_name" name="form_custom_name" data-input-type="input_par_name" type="text" value="0" placeholder="Название поля">
                                    <input class="valid" id="form_custom_plac" name="form_custom_plac" data-input-type="input_par_plac" type="text" value="0" placeholder="Надпись на поле">
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row-5">
                        <p class="label">Надпись на форме</p>
                        <textarea class="valid" id="form_head" name="form_head" data-input-type="form_head" type="text" placeholder></textarea>
                        <p class="label">Надпись на кнопке</p>
                        <input class="valid" id="form_button" name="form_button" data-input-type="form_button" type="text" placeholder>
                    </div>
                </div>
                <div class="hline"></div>
                <div class="col">
                    <div class="row-5">
                        <p class="label">Email на странице</p>
                        <input class="valid" id="page_email" name="page_email" data-input-type="page_email" type="email" placeholder>
                        <p class="label">Адрес на странице</p>
                        <input class="valid" id="page_addr" name="page_addr" data-input-type="page_addr" type="text" placeholder>
                    </div>
                    <div class="row-5">
                        <p class="label">Email для заявок</p>
                        <input class="valid" id="act_email" name="act_email" data-input-type="act_email" type="email" placeholder>
                        <p class="label">Телефон для заявок</p>
                        <div class="input">
                            <span>+</span>
                            <input class="valid iph1" id="phone_p1" name="phone_p1" data-input-type="ph1" type="text" value placeholder>
                            <span> (</span>
                            <input class="valid iph2" id="phone_p2" name="phone_p2" data-input-type="ph2" type="text" value placeholder>
                            <span>) </span>
                            <input class="valid iph3" id="phone_p3" name="phone_p3" data-input-type="ph3" type="text" value placeholder>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row-5">
                        <a class="button button_go" href="#">Сохранить</a>
                    </div>
                    <div class="row-5">
                        <a class="button button_back" href="#">Назад к списку</a>
                    </div>
                </div>
            </div>
        </section>
        <div id="user-wrap">
            <form class="login" id="login" action="#" method="post">
                <p class="b">Войти</p>
                <input class="valid" name="login" data-input-type="login" type="text" value placeholder="логин@компания">
                <input class="valid" name="pass" data-input-type="pass" type="password" value placeholder="Пароль">
                <button class="button send_login" type="submit">Войти</button>
            </form>
            <div id="user-init" data-step="0">
                <div class="step" data-step="0">
                    <a class="button registration" href="#">Регистрация</a>
                    <a class="button login-btn" href="#">Вход</a>
                </div>
                <div class="step" data-step="1">
                    <input class="valid" name="user_email" data-input-type="email" type="email" value placeholder="Введите Ваш емейл">
                    <a class="button send_confirm" href="#">Продолжить</a>
                </div>
                <div class="step" data-step="2">
                    <p>Для продолжения, перейдите по ссылке, отправленной на указанный емейл</p>
                </div>
            </div>
            <div id="user-list">
                <div class="list">
                </div>
                <a class="button create_new" href="#">Создать новый</a>
            </div>
        </div>
        <div id="loading_wrap">
        </div>
        <div id="critical">
            <span>Что-то пошло не так(<br>Пожалуйста, обновите страницу</span>
            <div></div>
            <p></p>
        </div>
        <div id="preload">
            <div>
            </div>
        </div>
        <div id="show_cname">
            <div>
                <p>Настройте запись DNS вашего домена так, чтобы он указывал на 185.12.94.230<br>(IN A 185.12.94.230)</p>
                <div class="button">ОК</div>
            </div>
        </div>
        <a class="button" id="support" href="http://wiki.dnk.bz/ticket/" target="_blank">
            Тех. поддержка</a>
        <a id="logout" href="#"></a>
        <div id="hidden-box">
            <div id="errors">
                <div class="close"></div>
                <span>Ошибка</span>
                <p></p>
            </div>
            <form action="#" enctype="multipart/form-data">
                <input id="upfile1" name="file" type="file">
            </form>
            <input class="valid" id="logo_img" name="logo_img" data-input-type="logo_img" type="hidden" value="0">
            <input class="valid" id="bg_img_d" name="bg_img_d" data-input-type="bg_img_d" type="hidden" value>
            <input class="valid" id="bg_img_m" name="bg_img_m" data-input-type="bg_img_m" type="hidden" value>
            <input id="form_custom" name="form_custom" type="hidden" value="0">
            <input id="form_email" name="form_email" type="hidden" value="0">
            <input class="valid" id="input_count" name="input_count" data-input-type="input_count" type="hidden" value="2">
            <input id="bg_shadow" name="bg_shadow" type="hidden" value="0.8">
            <input id="template" name="template" type="hidden" value="wov">
            <input id="userKey" name="userKey" type="hidden" value>
            <input id="pageId" name="pageId" type="hidden" value>
            <form action="#" enctype="multipart/form-data">
                <input id="upfile2" name="file" type="file">
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>