# Notes

=====================================

- Simple CRUD application with PHP and JSON      https://youtu.be/DWHZSkn5paQ
- Todo app with PHP                             https://youtu.be/NxeNqHdJFxs
- PHP Watch files and directories recursively   https://youtu.be/5f4PjQJI-Fc
- Bulk image resize with PHP                    https://youtu.be/Z99lYtn3quk
- PHP registration form & validation            https://youtu.be/V5sJ76T3mWg

=====================================

- Build PHP Form Widget using OOP Abstraction                      https://youtu.be/sBP6HKRW0sM
- Build Shopping Cart with OOP                                     https://youtu.be/1Ip7_hdSqzY
- Create MySql Notes App                                           https://youtu.be/DOsuFRnBqLU
- How To Create A Login System In PHP For Beginners                https://youtu.be/gCo6JqGMi30

=====================================

- Build PHP MVC
  Framework                 https://www.youtube.com/watch?v=WKy-N0q3WRo&list=PLLQuc_7jk__Uk_QnJMPndbdKECcTEwTA1
- Create your own PHP Framework           https://symfony.com/doc/current/create_framework/index.html

=====================================

- Yii2 E-commerce website - Full Working Process 16h 30m    https://youtu.be/eQdDBhQpU9o
- Build a REST API using Yii2 PHP Framework 1h 25m    https://youtu.be/XyHHMvRt6Cw
- Vue.js & Yii2 REST API notes app 2h 30m    https://youtu.be/7vrctmDQYW4

- Laravel E-Commerce 16h 30m    https://www.youtube.com/watch?v=o5PWIuDTgxg&list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR
- Laravel Movie App 1h 25m    https://www.youtube.com/watch?v=9OKbmMqsREc&list=PLEhEHUEU3x5pYTjZze3fhYMB4Nl_WOHI4
- a lot of great videos from Laraveller collection    https://www.youtube.com/c/Laraveller/videos

=====================================

#### Задание 1. «Базовый web». Реализуем CRUD на чистом PHP.

Суть:

    сделать страницу аутентификации;
    сделать страницу с формой обратной связи, на которой есть: текстовое поле, многострочное текстовое поле, радиокнопки, флажки, выпадающий список, кнопка сброса формы, кнопка отправки формы;
    форма обратной связи доступна только авторизованным пользователям, критерий допуска — вход в систему выполнен;

Развитие CRUD-интерфейса

    сделать мини-админку:
    список отправленных форм обратной связи;
    список должен быть отсортирован по дате отправки, новые — сначала;

#### Задание 3. Парсинг сайтов

Компетенции:

    Регулярные выражения
    HTTP-запросы с сервера, cURL
    TODO: написание консольных утилит (и одноразовых скриптов) на кодовой базе Bitrix Framework
    TODO: добавить CRON

Суть:

    Проанализировать сайт, продумать структуры данных, пригодные для автоматизированной обработки
    Распарсить сайт в эти структуры
    Оформить в виде CLI-скрипта
    Настройками реализовать возможность парсить не все подряд, а только то, что нужно пользователю

Проверка:

    корректность CLI-окружения
    декомпозиция регулярных выражений
    экономичность по запросам
    обработка ошибок
    возможность параллельного парсинга нескольких объектов сразу
    Работа в консольном и интерактивном режиме
    *работа в режиме внешнего сервиса, доступного по HTTP, с поддержкой очередей

#### Задание 4. подсчитать количество хитов

      Задача: у меня есть banner.php, пусть он выводит статичное изображение, какой-то банер. Мы включаем его на страницу
      просто <img src="/banner.php"/>
      
      Мне нужно знать, сколько раз мы его показали.
      
      Определение количества уникальных посещений действительно лучше сделать с помощью сессий или кукисов.
      А хранить лучше всего это в NoSQL базе данных.

#### Задание 5. Разное

Рекомендации:

    1. минимум фич, забыть слова "универсальное решение"/"платформа"/"плагины", иначе надоест быстрее, чем доделаешь
    2. не использовать готовые движки вроде Wordpress/Joomla/Magento, но использовать фреймворк, чтобы не велосипедить
    3. не обращать внимания на вёрстку — только Twitter Bootstrap или же готовые шаблоны

Идеи проектов:

    блог
    форум
    сайт прогноза погоды
    сайт с актуальными курсами валют
    сайт со всем выше перечисленным, либо же в виде отдельных модулей в системе
