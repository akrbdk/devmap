#QUESTIONS

### Общее

- Интересный крон (запуск скрипта раз в 30 секунд)
- Защита от спама - предложить интересный способ
- Защита от повторной отправки форм
- Что происходит при открытии вкладки браузера
- HTTP и другие протоколы
- Что такое https и зачем он нужен, настройка https с выпуском сертификата
- Веб-сервисы, отличия, когда что использовать (soap, архитектура Rest API)
- Шаги по оптимизации сайта
- Git, Gitflow, создание репы, ветки
- AJAX, пример реализации
- htaccess, какие задачи решает (авторизация, преобразование адресов, изменение настроек), mod_rewrite
- Авторизация и аутентификация
- PSR standards
- Composer
- Тесты
- LAMP - расшифровать, зачем нужен
- Nginx и Apache, зачем нужны, когда что выбрать, двухуровневая архитектура
- SSH - назвать два способа аутентификации и что нужно для каждого из них
- LINUX - просмотр списка процессов, убить процесс, перезапуск сервера и других служб, сониторинг ресурсов сервера,
  grep, абсолютные и относительные пути
- Серверное кэширование
- CRON - зачем нужен, отобразить список задач для текущего пользователя, переменная среды EDITOR и как ее использовать
- Сессии и Куки, когда что использовать
- микросервисные паттерны

### Docker

- Что такое Docker?
- Разница между виртуализацией и контейнеризацией?
- Что такое Docker контейнер и каковы его преимущества?
- Что такое Образ Docker?
- Объясните архитектуру Docker?
- Что такое Docker Hub?
- Каковы важные особенности Docker?
- Каковы основные недостатки Docker?
- Расскажите нам что-нибудь о Docker Compose.
- Что такое Docker Engine?

### PHP

- С каким версиями работал
- Php8, что принципиально нового
- Типы данных
- Функции по работе с массивами
- Анонимные функции, замыкания. Приведите примеры, когда, почему и как они могут быть использованы?
- Область видимости переменной
- Пространства имен
- Динамические переменные
- Область видимости свойства/метода/константы класса
- Final классы и методы
- !empty() vs isset()
- Несколько конструкторов в классе
- Паттерны, антипаттерны
- Трейты - зачем нужны
- Reflection API
- Autoloader
- Преинкремент и постинкремент
- Абстрактные классы/методы
- Интерфейсы
- Объясните, с какой целью и как используется ключевое слово global. Приведите пример, когда его применение
  целесообразно и когда нет.
- Расскажите о пространствах имён в PHP и о том, почему они полезны.
- Расскажите, как связаны между собой php://input и $_POST и как получить доступ к потоку php://input?
- Назовите не менее пяти суперглобальных переменных, имена которых начинаются
  с $_, и дайте им определение. Расскажите об их связи с переменной $GLOBALS.
- Объясните назначение и применение магических методов __get, __set, __isset, __unset, __call, и __callStatic. Когда,
  как и почему их стоит использовать (или не использовать)?
- Опишите несколько структур данных из стандартной библиотеки PHP (SPL). Приведите примеры использования.
- Объясните назначение ключевого слова static при вызове метода или обращении к свойству. Расскажите, когда и зачем его
  нужно использовать, а также чем оно отличается от ключевого слова self. Приведите пример.
- Позднее статическое связывание
- Расскажите о внутреннем устройстве массивов в PHP?
- В чем различие между ArrayAccess и ArrayObject?
- Что такое генераторы? Когда их можно использовать вместо итераторов и обычных массивов? Для чего нужны ключевые слова
  yield и send?
- Паттерны, назвать несколько и объяснить проблемы которые они решают
- Инкапсуляция/наследование/полиморфизм
- SOLID
- Kiss
- Dry
- MVC
- Управление выводом ошибок в PHP/Apache, где искать логи на сервере
- три отличия хэш-функций от функций шифрования
- кодирование, для чего используется

### DB

- Какие типы СУБД в соответствии с моделями данных вы знаете?
- Отличие между SQL и MySQL?
- Из каких подмножеств состоит SQL?
- Что подразумевается под таблицей и полем в SQL?
- Mysql, типы таблиц, innodb, myisam
- Mysql - архитектура бд, связь на многие ко многим
- Что подразумевается под целостностью данных?
- Что такое свойство ACID в базе данных?
- Миграции
- Транзакцииб уровни изоляции
- Блокировки таблиц
- Настройка прав доступа
- Основные функции в опреаторах SQL
- кэширование в MySQL
- Хранимые процедуры
- Модели хранения деревьев
- Уязвимости бд, варианты взлома, шифрование паролей
- Шардинг, Партиционирование, Репликация
- Оптимизация структуры БД, оптимизация запросов
- Что такое индекс? Опишите различные типы индексов.
- Порядок полей в таблице
- Что такое первичный ключ?
- Что такое уникальный ключ (Unique key)?
- Что такое внешний ключ (Foreign key)?
- Объединенные запросы (Join, Union), группировка в запросах, вложенные запросы,
- Назовите четыре основных типа соединения в SQL
- А что такое Self JOIN?
- Второй способ выбрать данные из нескольких таблиц кроме JOIN и почему его не надо использовать
- Что такое нормализация и каковы ее преимущества?
- Объясните различные типы нормализации.
- Что вы подразумеваете под денормализацией?
- Агрегирующие функции
- Типы данных
- Разница в хранении разных типов данных
- Отличие между WHERE и HAVING
- Отличие между типом данных CHAR и VARCHAR в SQL?
- Отличие между операторами DELETE и TRUNCATE?
- Отличие между командами DROP и TRUNCATE?
- Что такое ограничения (Constraints)?
- Что вы подразумеваете под «триггером» в SQL?
- Совпадают ли значения NULL со значениями нуля или пробела?
- Как просмотреть список зависших запросов, SHOW PROCESSLIST
- Как выбрать БД в консоли
- Как вывести список баз и список таблиц в базе
- команда EXPLAIN, анализ медленных запросов

### Bitrix

- Структура проекта - какие папки, откуда init.php, папка local
- Mvc в Битрикс, в других cms
- Свой модуль, свой компонент
- Кэширование в Битрикс
- Порядок выполнения компонента - component, result_modifier, template, кэш, component_epilog
- Таблица b_event
- D7 Битрикс, что принципиальное новое
- Распределение прав - можно ли назначить доступ в определенному элементу инфоблока
- Оптимизация работы сайта - как
- Самые грубые ошибки при работе с Битриксом
- ORM
- Миграции
- Интеграция с Битрикс24
- Переполнение места - очистка картинок, не относящихся ни к одному элементу инфоблока

### Front-end

- Области видимости
- Нативный js (селекторы, события)
- ООП
- Замыкания
- Регулярные выражения. Проверить соответствие даты формату dd.mm.yyyy . Вариант без регулярного выражения?
- Что вернет выражение +new Date()? Чем отличается от Date.now()
- Отличия == и ===

=========================================================================================================================
=========================================================================================================================
=========================================================================================================================
=========================================================================================================================

## Read

### DB

- [Топ-65 вопросов по SQL с собеседований](https://habr.com/ru/companies/otus/articles/461067/)
- [27 распространённых вопросов по SQL](https://tproger.ru/articles/sql-interview-questions/)
- [readme-Databases.md](https://github.com/akrbdk/devmap/blob/main/include/readme-Databases.md#Doctrine-)
- [readme-Tasks-SQL.md](https://github.com/akrbdk/devmap/blob/main/include/readme-Tasks-SQL.md)

### PHP

- [Руководство по собеседованию на вакансию PHP](https://habr.com/ru/articles/230805/)
- [Собеседование php-developer ](https://habr.com/ru/articles/520472/)
- [21 Essential PHP Interview Questions](https://www.toptal.com/php/interview-questions)
- [readme-Learn-a-Language-PHP.md](https://github.com/akrbdk/devmap/blob/main/include/readme-Learn-a-Language-PHP.md)
- [readme-Tasks-PHP.md](https://github.com/akrbdk/devmap/blob/main/include/readme-Tasks-PHP.md)

### Общее

- [20 распространенных вопросов про Docker на собеседовании](https://itsecforu.ru/2020/01/15/%F0%9F%90%B3-20-%D1%80%D0%B0%D1%81%D0%BF%D1%80%D0%BE%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D1%85-%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2-%D0%BF%D1%80%D0%BE-docker-%D0%BD%D0%B0/)







