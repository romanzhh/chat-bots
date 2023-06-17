<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Заказать чат бота в Минске | Разработка чат ботов телеграмм от профессионалов на заказ</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Чат боты для работы. Заказать профессиональный чат бот для бизнеса от программистов с опытом работы 15 лет. Разработка в индивидуальном порядке под каждого клиента. ">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="fav.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(93925943, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11221357530"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-11221357530');
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/93925943" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <meta name="google-site-verification" content="irBCgzPr9rHGU9pEJ1tPtx7GbalSGsDMTWnv5nkBEjo" />
    <meta name="yandex-verification" content="577d03a85dc4426e" />
</head>

<body>
    <div class="header_container">
        <div class="header">
            <div class="header_row">
                <div class="logo">
                    <img src="images/logo.png">
                </div>
                <div class="navigation">
                    <nav class="nav">
                        <a href="#why">Почему мы</a>
                        <a href="#examples">Примеры чат-ботов</a>
                        <a href="#contacts">Контакты</a>
                    </nav>
                </div>
                <div class="phone_number">
                    <a href="tel:+375 29 747 6987">+375 29 747 69 87</a>
                </div>
                <div class="contact-button">
                    <a href="tel:+375 29 747 6987">Связаться с нами</a>
                </div>
            </div>
            <div class="mobile_row">
                <div class="logo_mobile">
                    <img src="images/logo_mobile.png" alt="Лого студии по созданию чат ботов chat-bots.by">
                </div>
                <div class="mobile_phone">
                    <a href="tel:+375 29 747 6987">+375 29 <span style="color:red">747 69 87</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="content_container">
        <div class="main_baner">
            <div class="main_baner_row">
                <div class="text_content">
                    <h1>Создание чат ботов любой сложности под заказ</h1>
                    <p>Мы предлагаем разработку чат-ботов на заказ, которые помогут Вам сократить время и затраты на обслуживание
                        клиентов,
                        улучшить уровень сервиса и повысить удовлетворенность клиентов.</p>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#formModal">
                            Заказать
                        </button>
                    </div>

                    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form name="mainForm" class="needs-validation" onsubmit="return false;" novalidate>
                                        @csrf
                                        <div class="mt-3">
                                            <label for="name" class="form-label">Имя</label>
                                            <input type="text" class="form-control" name="name" id="name" required>
                                            <div class="invalid-feedback">
                                                Введите ваше имя
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="email" class="form-label">Почта</label>
                                            <input type="text" class="form-control" name="email" id="email" required>
                                            <div id="emailFeedback" class="invalid-feedback">
                                                Введите вашу почту
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="phone" class="form-label">Телефон</label>
                                            <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phoneFeedback" required>
                                            <div id="phoneFeedback" class="invalid-feedback">
                                                Введите ваш номер
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                                <label class="form-check-label" for="invalidCheck3">
                                                    Согласен с правилами
                                                </label>
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    Вы должны согласиться перед подтверждением.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mt-3">
                                            <button class="btn btn-primary w-100" onclick="submitForm()" type="submit">Оставить заявку</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="image_content">
                    <img src="images/main.png" alt="Чат бот здоровается">
                </div>
            </div>
        </div>
        <a name="why"></a>
        <div class="benefits">
            <h2>Преимущества заказа чат-ботов у нас</h2>
            <div class="benefits_row">
                <div class="benefits_item">
                    <div class="benefits_item_row">
                        <div class="benefits_img">
                            <img src="images/code.png">
                        </div>
                        <p>Создание ботов вручную</p>
                    </div>
                    <hr style="color: red;">
                    <div class="benefits_item_text">
                        Мы создаём чат ботов вручную, а не на конструкторе, что позволяет сделать их более гибкими в использовании и
                        индивидуальными.
                    </div>
                </div>
                <div class="benefits_item">
                    <div class="benefits_item_row">
                        <div class="benefits_img">
                            <img src="images/bot.png" alt="Чат-бот картинка">
                        </div>
                        <p>15 лет опыта в разработке ботов</p>
                    </div>
                    <hr style="color: red;">
                    <div class="benefits_item_text">
                        Мы 15 лет в разработке чат ботов, что позволяет вам быть уверенными в том, что получите качественный продукт
                        от специалистов с большим опытом.
                    </div>
                </div>
                <div class="benefits_item">
                    <div class="benefits_item_row">
                        <div class="benefits_img">
                            <img src="images/person.png" alt="Индивидуальный подход в разработке чат ботов">
                        </div>
                        <p>Индивидуальный подход к каждому</p>
                    </div>
                    <hr style="color: red;">
                    <div class="benefits_item_text">
                        У каждой компании, с которой мы работаем, своё уникальное видение чат бота. Мы ко всем найдём подход к и
                        разработаем то, что нужно конкретно вам.
                    </div>
                </div>
            </div>
        </div>
        <div class="new_employee">
            <h2>Бот - новый сотрудник</h2>
            <div class="new_employee_row">
                <div class="new_employee_img">
                    <img src="images/7.png" alt="Чат бот - новый сотрудник в компании">
                </div>
                <div class="new_employee_text">
                    <p>Бот - это новый сотрудник в вашей организации, но в отличие от человека он работает круглосуточно и всегда
                        свяжется с клиентом. Это помогает избежать человеческий фактор в различных ситуациях и не заставит клиента
                        ждать долго ответ на заданный вопрос.</p>
                </div>
            </div>
        </div>
        <div class="examples">
            <a name="examples"></a>
            <h2>Примеры чат ботов</h2>
            <div class="examples_item">
                <div class="examples_item_img">
                    <img src="images/1.png" alt="Чат-бот для онлайн магазина">
                </div>
                <div class="examples_item_text">
                    <h3>Бот для онлайн-магазина:</h3>
                    <hr>
                    <ul>
                        <li>быстрый поиск нужного товара;</li>
                        <li>оформление заказа;</li>
                        <li>получение информации о доставке.</li>
                    </ul>
                </div>
            </div>
            <div class="examples_item">
                <div class="examples_item_img">
                    <img src="images/2.png" alt="Чат бот для онлайн поддержки">
                </div>
                <div class="examples_item_text">
                    <h3>Бот для тех. поддержки:</h3>
                    <hr>
                    <ul>
                        <li>отвечает на часто задаваемые вопросы;</li>
                        <li>предоставляет решение проблем.</li>
                    </ul>
                </div>
            </div>
            <div class="examples_item">
                <div class="examples_item_img">
                    <img src="images/3.png" alt="Чат-бот для банка">
                </div>
                <div class="examples_item_text">
                    <h3>Бот для банка:</h3>
                    <hr>
                    <ul>
                        <li>получение информации о балансе счета;</li>
                        <li>проведение операций;</li>
                        <li>оформление кредита.</li>
                    </ul>
                </div>
            </div>
            <div class="examples_item">
                <div class="examples_item_img">
                    <img src="images/4.png" alt="Чат бот для маркетплейсов">
                </div>
                <div class="examples_item_text">
                    <h3>Бот для Wildberries:</h3>
                    <hr>
                    <ul>
                        <li>даёт возможность наблюдать за заказами в режиме онлайн;</li>
                        <li>напоминает об остатках продукции на складе.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="benefits_of_bots">
            <h2>Преимущества чат-ботов</h2>
            <div class="benefits_of_bots_item">
                <div class="benefits_bots_img">
                    <img src="images/5.png" alt="Преимущества чат ботов">
                </div>
                <div class="benefits_of_bots_text">
                    <div class="flex">
                        <div class="number">
                            1
                        </div>
                        <div class="benefits_of_bots_text__item">
                            Работает 24/7;
                        </div>
                    </div>
                    <div class="flex">
                        <div class="number">
                            2
                        </div>
                        <div class="benefits_of_bots_text__item">
                            Экономит время менеджера;
                        </div>
                    </div>
                    <div class="flex">
                        <div class="number">
                            3
                        </div>
                        <div class="benefits_of_bots_text__item">
                            Чат-бот в мессенджере, а клиенты, как правило, предпочитают общаться в мессенджерах;
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefits_of_bots_item">
                <div class="benefits_bots_img">
                    <img src="images/6.png" alt="Преимущества приобретения чат-бота">
                </div>
                <div class="benefits_of_bots_text">
                    <div class="flex">
                        <div class="number">
                            4
                        </div>
                        <div class="benefits_of_bots_text__item">
                            Повышает имидж компании;
                        </div>
                    </div>
                    <div class="flex">
                        <div class="number">
                            5
                        </div>
                        <div class="benefits_of_bots_text__item">
                            Помогает в бизнесе: напомнит, если товар заканчивается, создаст отчёт;
                        </div>
                    </div>
                    <div class="flex">
                        <div class="number">
                            6
                        </div>
                        <div class="benefits_of_bots_text__item">
                            Чат-бот — это разовая инвестиция, в дальнейшем ему не нужно будет платить зарплату.
                        </div>
                    </div>
                </div>
            </div>
            <div class="contacts">
                <h2>Контакты для связи</h2>
                <a name="contacts"></a>
                <div class="contacts_flex" style="padding-bottom: 100px;">
                    <div class="contacts_item">
                        <div class="flex">
                            <div class="contact_img"><img src="images/ph.jpg" alt="Телефон"></div>
                            <div>Телефон:</div>
                        </div>
                        <hr>
                        <p><a href="tel:+375 29 747 6987">+375 29 747 6987</a></p>
                    </div>
                    <div class="contacts_item">
                        <div class="flex">
                            <div class="contact_img"><img src="images/mail.png" alt="Email"></div>
                            <div>Email:</div>
                        </div>
                        <hr>
                        <p>botsforchats@mail.ru</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            'use strict'

            const form = document.querySelector('.needs-validation')

            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)

        })()

        function submitForm() {
            const form = document.mainForm
            if (form.checkValidity()) {
                fetch('/createRequest', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    body: new FormData(form)
                }).then(() => {
                    $('#formModal').modal('hide')
                    $('#successModal').modal('show')
                })
            }
        }

        const formModal = document.querySelector('#formModal')
        formModal.addEventListener('hidden.bs.modal', event => {
            const form = document.querySelector('.needs-validation')

            form.classList.remove('was-validated')
        })
    </script>
</body>

</html>