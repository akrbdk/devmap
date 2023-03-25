# Readme

#### Список ссылок

- [Введение в REST API — RESTful веб-сервисы](https://habr.com/ru/post/483202/)
- [Различия REST и SOAP](https://habr.com/ru/post/483204/)
- [Разработка REST API — что такое Contract First?](https://habr.com/ru/post/483206/)
- [Разработка REST API — что такое Code First подход?](https://habr.com/ru/post/483322/)
- [REST API — Что такое HATEOAS?](https://habr.com/ru/post/483328/)
- [Рекомендации по REST API — примеры проектирования веб-сервисов на Java и Spring](https://habr.com/ru/post/483374/)


- [Developing REST APIs](https://dzone.com/articles/developing-rest-apis)
- [10 API Testing Tips for Beginners (SOAP and REST)](https://dzone.com/articles/10-api-testing-tips-for-beginners-soap-amp-rest)


- [gRPC и все-все-все](https://proglib.io/p/grpc-i-vse-vse-vse-chast-i-vvedenie-2021-03-26)


- [JSON API – работаем по спецификации](https://habr.com/ru/company/oleg-bunin/blog/433322/)
- [JSON API Implementations](https://jsonapi.org/implementations/#client-libraries-php)
- [Что такое GraphQL: с основ до первых запросов](https://ru.hexlet.io/blog/posts/chto-takoe-graphql-s-osnov-do-pervyh-zaprosov)


- [Проверка тестов PHP API на соответствие определениям OpenAPI — пример Laravel](https://habr.com/ru/company/otus/blog/565710/)


- [Подделка невозможна: как устроен токен и какие задачи можно решить с помощью JWT-авторизации](https://highload.today/blogs/jwt-avtorizatsiya/)


### REST [&uarr;](#Readme)


REST - REpresentational State Transfer (Википедия: «передача состояния представления») - это популярный
архитектурный подход для создания API в современном мире.

Протокол HTTP

    Когда вы вводите в браузере URL-адрес, например www.google.com, на сервер отправляется запрос на веб-сайт, идентифицированный URL-адресом.
    Затем этот сервер формирует и выдает ответ. Важным является формат этих запросов и ответов. Эти форматы определяются протоколом HTTP — Hyper Text Transfer Protocol.

    Когда вы набираете URL в браузере, он отправляет запрос GET на указанный сервер. Затем сервер отвечает HTTP-ответом, который содержит данные в формате HTML — Hyper Text Markup Language. Затем браузер получает этот HTML-код и отображает его на экране.

    Допустим, вы заполняете форму, присутствующую на веб-странице, со списком элементов. В таком случае, когда вы нажимаете кнопку «Submit» (Отправить), HTTP-запрос POST отправляется на сервер.

HTTP и RESTful веб-сервисы

    HTTP обеспечивает базовый уровень для создания веб-сервисов. Поэтому важно понимать HTTP. Вот несколько ключевых абстракций.

    Ресурс

    Ресурс — это ключевая абстракция, на которой концентрируется протокол HTTP. Ресурс — это все, что вы хотите показать внешнему миру через ваше приложение. Например, если мы пишем приложение для управления задачами, экземпляры ресурсов будут следующие:

        Конкретный пользователь
        Конкретная задача
        Список задач


    URI ресурса

    Когда вы разрабатываете RESTful сервисы, вы должны сосредоточить свое внимание на ресурсах приложения. Способ, которым мы идентифицируем ресурс для предоставления, состоит в том, чтобы назначить ему URI — универсальный идентификатор ресурса. Например:

        Создать пользователя: POST /users
        Удалить пользователя: DELETE /users/1
        Получить всех пользователей: GET /users
        Получить одного пользователя: GET /users/1

REST и Ресурсы

    Важно отметить, что с REST вам нужно думать о приложении с точки зрения ресурсов:
    Определите, какие ресурсы вы хотите открыть для внешнего мира
    Используйте глаголы, уже определенные протоколом HTTP, для выполнения операций с этими ресурсами.

    Вот как обычно реализуется служба REST:

    - Формат обмена данными: здесь нет никаких ограничений. JSON — очень популярный формат, хотя можно использовать и другие, такие как XML
    
    - Транспорт: всегда HTTP. REST полностью построен на основе HTTP.
    
    - Определение сервиса: не существует стандарта для этого, а REST является гибким. Это может быть недостатком в некоторых сценариях, поскольку потребляющему приложению может быть необходимо понимать форматы запросов и ответов. Однако широко используются такие языки определения веб-приложений, как WADL (Web Application Definition Language) и Swagger.


    REST фокусируется на ресурсах и на том, насколько эффективно вы выполняете операции с ними, используя HTTP.

Компоненты HTTP

    HTTP определяет следующую структуру запроса:

        строка запроса (request line) — определяет тип сообщения
        заголовки запроса (header fields) — характеризуют тело сообщения, параметры передачи и прочие сведения
        тело сообщения (body) — необязательное


    HTTP определяет следующую структуру ответного сообщения (response):

        строка состояния (status line), включающая код состояния и сообщение о причине
        поля заголовка ответа (header fields)
        дополнительное тело сообщения (body)


    Метод, используемый в HTTP-запросе, указывает, какое действие вы хотите выполнить с этим запросом. Важные примеры:

        GET: получить подробную информацию о ресурсе
        POST: создать новый ресурс
        PUT: обновить существующий ресурс
        DELETE: Удалить ресурс


    Код состояния всегда присутствует в ответе HTTP. Типичные примеры:

        200 — успех
        404 — cтраница не найдена

### REST и SOAP

REST и SOAP на самом деле не сопоставимы. SOAP — это формат протокола, основанный на XML, тогда как REST — это
архитектурный подход.

Давайте сравним популярные реализации стилей REST и SOAP.

    - Пример реализации RESTful: JSON через HTTP
    - Пример реализации SOAP: XML поверх SOAP через HTTP

Формат обмена сообщениями

    - В SOAP вы используете формат SOAP XML для запросов и ответов.

    - В REST такого фиксированного формата нет. Вы можете обмениваться сообщениями на основе XML, JSON или любого другого удобного формата. JSON является самым популярным среди используемых форматов.

Определения услуг

    - SOAP использует WSDL (Web Services Description Language) — язык описания веб-сервисов и доступа к ним, основанный на языке XML.
    
    - REST не имеет стандартного языка определения сервиса. Несмотря на то, что WADL был одним из первых предложенных стандартов, он не очень популярен. Более популярно использование Swagger или Open API.

Транспорт

    SOAP не накладывает никаких ограничений на тип транспортного протокола. Вы можете использовать либо Web протокол HTTP, либо MQ.

    REST подразумевает наилучшее использование транспортного протокола HTTP

Простота реализации

    RESTFful веб-сервисы, как правило, гораздо проще реализовать, чем веб-сервисы на основе SOAP.

    REST обычно использует JSON, который легче анализировать и обрабатывать. В дополнение к этому, REST не требует наличия определения службы для предоставления веб-службы.

    Однако в случае SOAP вам необходимо определить свой сервис с использованием WSDL, и при обработке и анализе сообщений SOAP-XML возникают большие накладные расходы.

Всякий раз, когда вы разрабатываете сервис, такой как REST API или SOAP API, вы можете выбрать один из двух подходов:

    - Code First и генерируйте контракт из кода
    - Contract First и разработка кода на основе контракта

### SOAP [&uarr;](#Readme)


`RPC(Remote Procedure Call)` – класс технологий, позволяющих программам вызывать функции или процедуры в другом представлении 
или в адресном пространстве (на удалённых узлах, либо в независимой сторонней системе на том же узле). Одной из его реализаций 
является `SOAP` – это основанный на формате XML протокол для выполнения запросов к сетевым API. Будучи применяемым чаще всего 
по `HTTP`, он стремится к независимости от последнего и избегает использования большинства его возможностей. Вместо этого к нему 
прилагается масса разнообразных сопутствующих стандартов (фреймворк веб-сервисов, известный под названием WS-*), которые добавляют 
в него различные возможности. `API SOAP` веб-сервиса описывается с помощью основанного на XML языка, именуемого языком описания 
веб-сервисов (`Web Services Description Language, WSDL`). Первоначально SOAP предназначался в основном для реализации удалённого 
вызова процедур RPC.


SOAP — это протокол, по которому веб-сервисы взаимодействуют друг с другом или с клиентами. Название происходит от сокращения 
Simple Object Access Protocol («простой протокол доступа к объектам»). SOAP API — это веб-сервис, использующий протокол SOAP для 
обмена сообщениями между серверами и клиентами.


Протокол SOAP был представлен в 1998 году и быстро стал одним из главных стандартов веб-служб, когда Microsoft продвигала платформу .NET, 
приложения которой взаимодействовали с помощью SOAP API. Сейчас протокол и API уступают по популярности архитектурному стилю REST. 
Но веб-приложения, использующие SOAP API, все еще пользуются спросом, особенно в банковском и телекоммуникационном секторах.


SOAP может использоваться с протоколами SMTP, FTP, HTTP, HTTPS. Чаще всего — с HTTP как с наиболее универсальным: его поддерживают 
все браузеры и серверы. Корректное SOAP-сообщение состоит из нескольких структурных элементов: Envelope, Header, Body и Fault.


### JSON-APIs [&uarr;](#Readme)

В 2013 году все лайфхаки, Steve Klabnik объединил в спецификацию JSON API и зарегистрировал как новый media type поверх JSON.

На сайте http://jsonapi.org/implementations/ всё подробно описано: есть даже список 170 различных реализаций спецификаций 
для 32 языков программирования — и это только добавленные в каталог. Уже написаны библиотеки, парсеры, сериализаторы и пр.

#### Плюсы JSON API

Cпецификация JSON API решает ряд проблем — общее соглашение для всех. Раз есть общее соглашение, то мы не спорим внутри 
команды — велосипедный сарай задокументирован. У нас есть соглашение, из каких материалов делать велосипедный сарай и как его красить.

Теперь, когда разработчик делает что-то неправильно и я это вижу, то не начинаю дискуссию, а говорю: «Не по JSON API!» и показываю на 
место в спецификации. Меня ненавидят в компании, но постепенно привыкают, и JSON API всем начал нравиться. Новые сервисы по умолчанию мы 
делаем по этой спецификации. У нас есть ключ date, мы готовы добавлять ключи meta, include. Для фильтров есть зарезервированный 
GET-параметр filters. Мы не спорим, как назвать фильтр — используем эту спецификацию. В ней описано, как делать URL.

Поскольку мы не спорим, а делаем бизнес задачи, производительность разработки выше. У нас спецификации описаны, бэкенд разработчик прочитал,
сделал API, мы его прикрутили — заказчик счастлив.

Популярные проблемы уже решены, например, с пагинацией. В спецификации много подсказок.

Поскольку это JSON (спасибо Дугласу Крокфорду за этот формат), он лаконичней XML, его довольно легко читать и понимать.

#### Минусы JSON API

Объект разросся (date, attributes, included и пр.) — фронтенду надо парсить ответы: уметь перебирать массивы, ходить по объекту и 
знать, как работает reduce. Не все начинающие разработчики знают эти сложные вещи. Есть библиотеки сериализаторы/десериализаторы, 
можно пользоваться ими. Вообще это просто работа с данными, но объекты большие.

А у бэкенда начинается боль:

- Контроль вложенности — include можно залезть очень далеко;
- Сложность запросов к БД — они строятся иногда автоматически, и получаются очень тяжелыми;
- Безопасность — можно залезть в дебри, особенно если подключить какую-то библиотеку;
- Спецификация сложно читается. Она на английском, и это некоторых отпугнуло, но постепенно все привыкли;
- Не все библиотеки реализуют спецификацию хорошо — это проблема Open Source.


#### Подводные камни JSON API

Немножко хардкора.

1) `Количество relationships в выдаче не ограничено`. Если мы делаем include, запрашиваем статьи, добавляя к ним комментарии, 
то в ответ нам придут все комментарии этой статьи. Есть 10 000 комментариев — получи все 10 000 комментариев.

        GET /articles/1?include=comments НТТР/1.1
    
        01. ...
          02. "relationships": {
              03.  "comments": {
              04.   "data": [0 ... ∞]
              05.  }
          06. }


Таким образом на наш запрос в ответ пришло реально 5 Мбайт: «В спецификации так и написано — надо правильно переформулировать запрос:

        GET /comments?filters[article]=1&page[size]=30 HTTP/1.1
        
        01. {
        02. "data": [0 ... 29]
        03. }

Мы запрашиваем комментарии с фильтром по статье, говорим: «30 штучек, пожалуйста» и получаем 30 комментариев. Это и есть неоднозначность.

2) `Одни и те же вещи можно неоднозначно сформулировать`:

● GET /articles/1?include=comments HTTP/1.1 — запрашиваем статью с комментариями;
● GET /articles/1/comments HTTP/1.1 — запрашиваем комментарии к статье;
● GET /comments?filters[article]=1 HTTP/1.1 — запрашиваем комментарии с фильтром по статье.

Это одно и то же — одни и те же данные, которые получаются по-разному, возникает некоторая неоднозначность. Этот подводный камень сразу не видно.

3) `Полиморфные связи «один ко многим» очень быстро вылезают в REST`.

       01. GET /comments?include=commentable НТТР/1.1
       02.
       03. ...
       04. "relationships": {
           05.  "commentable": {
           06.   "data": { "type": "article", "id": "1″ }
           07. }
       08. }

На бэкенде есть полиморфная связь commentable — она вылезает в REST. Так и должно произойти, но ее можно замаскировать. В JSON API не замаскируешь — она вылезет.

4) `Сложные связи «многие ко многим» с дополнительными параметрами`. Тоже все связующие таблицы вылезают:

       01. GET /users?include=users_comments НТТР/1.1
       02.
       03. ...
       04. "relationships": {
           05.  "users_comments": {
           06.   "data": [{ "type": "users_comments", "id": "1″ }, ...]
           07.  },
       08. }


### gRPC [&uarr;](#Readme)


`gRPC` – это новый и современный фреймворк для разработки масштабируемых, современных и быстрых API и дословно переводится 
как система удаленного вызова процедур, разработанный компанией Google еще в далеком 2015 году. Используется многими ведущими 
компаниями, такими как Google, Square и Netflix, и позволяет программистам писать микросервисы на любом языке, который они хотят, 
сохраняя при этом возможность легко устанавливать связь между этими сервисами. И так же является реализацией удалённого 
вызова процедур (RPC), но уже в качестве транспорта использует новый `HTTP/2` - является новой версией протокола `HTTP`, которая уменьшает задержки и позволяет выполнять сразу 
множество запросов в рамках одного соединения, благодаря чему значительно увеличивается производительность и ускоряется загрузка 
страниц вашего сайта.

А для описания интерфейса используется Protocol Buffers (protobuf), где описывается структура для передачи, кодирования и обмена 
данных между представлениями описанными выше. Protocol Buffers проще, компактнее и быстрее, чем XML, поскольку осуществляется передача 
бинарных данных.

Какие бывают разновидности API в gRPC?

- `Унарный (Unary)` – синхронный запрос клиента, который блокируются пока не будет получен ответ от сервера.
- `Потоковая передача сервера (Server streaming)` – при подключении клиента сервер открывает стрим и начинает отправлять сообщения.
- `Потоковая передача клиента (Client streaming)` – то же самое, что и серверный, только клиент начинает стримить сообщения на сервер.
- `Двунаправленная потоковая передача (Bi-directional streaming)` – клиент инициализирует соединение, создаются два стрима. Сервер может отправить изначальные данные при подключении или отвечать на каждый запрос клиента по типу “пинг-понга”


Балансировка нагрузки `(Load Balancing) в gRPC`

Балансировка нагрузки между сервисами работающих между собой по gRPC выполняется на стороне клиента. В данном случае клиент использует 
простой “round-robin” алгоритм для передачи запросов по списку полученному от LB (LoadBalancing) сервера. При желании на стороне LB сервера
можно организовать более сложный алгоритм выдачи списка бэкенд сервисов клиенту использую LB политики.


### Swagger [&uarr;](#Readme)

Ручное формирование документации — утомительное занятие. Поэтому разработчики придумали Swagger. С его помощью на основе 
кода можно автоматически сгенерировать спецификации API.

Swagger — это набор инструментов, которые помогают описывать API. Благодаря ему пользователи и машины лучше понимают возможности REST API без доступа к коду. С помощью Swagger можно быстро создать документацию и отправить ее другим разработчикам или клиентам.

В 2015 году проект Swagger сделали открытым и передали OpenAPI Initiative. Теперь сама спецификация называется OpenAPI. Swagger — инструментарий для работы с OpenAPI, название которого используется в коммерческих и некоммерческих продуктах. Если кто-то называет саму спецификацию Swagger, то это не совсем верно.

Документ спецификации OpenAPI использует YAML, но также может быть написан в формате JSON. Сам по себе он является объектом JSON.

Swagger предлагает два основных подхода к генерированию документации:

- Автогенерация на основе кода. 
- Самостоятельная разметка-написание.

Первый подход проще. Мы добавляем зависимости в проект, конфигурируем настройки и получаем документацию. Сам код из-за этого может стать 
менее читабельным, документация тоже не будет идеальной. Но задача минимум решена — код задокументирован.

Чтобы пользоваться вторым подходом, нужно знать синтаксис Swagger. Описания можно готовить в формате YAML/JSON. Можно упростить эту задачу,
используя Swagger Editor. Конечно, второй подход позволяет сделать документацию более качественной и кастомной для каждого конкретного 
проекта и его особенностей, к тому же все не так сложно как может показаться, это потребует минимальных дополнительных усилий.

Допустим, нашего бэкенд-разработчика попросили написать документацию к его API, и он ее написал. Это легко, если API простой. 
Если же это JSON API, Swagger так легко не напишешь.


### GraphQL [&uarr;](#Readme)

GraphQL — это язык запросов с открытым исходным кодом.

Три основные характеристики языка:

- Позволяет клиенту точно указать, какие данные ему нужны.
- Облегчает агрегацию данных из нескольких источников.
- Использует систему типов для описания данных.


#### Высокий порог входа.

С точки зрения фронтенда все выглядит круто, но нового разработчика не посадишь писать GraphQL, потому что его сначала нужно изучить. 
Это как SQL — нельзя сразу писать SQL, надо хотя бы прочитать, что это такое, пройти туториалы, то есть порог входа увеличивается.

#### Эффект большого взрыва.

Если в проекте не было никакого API, и мы стали использовать GraphQL, через месяц мы поняли, что он нам не подходит, будет поздно. 
Придется писать костыли. С JSON API или с OData можно эволюционировать — простейший RESTful, прогрессивно улучшаясь, превращается в JSON API.

#### Ад на бэкенде.

GraphQL вызывает ад на бэкенде — прямо один в один, как и полностью реализованный JSON API, потому что GraphQL получает полный 
контроль над запросами, а это библиотека, и вам нужно будет решать кучу вопросов:

- контроль вложенности;
- рекурсия;
- ограничение частоты;
- контроль доступа.


### Cookie-Based [&uarr;](#Readme)

Cookie-based authentication normally works in these four steps:

#### Step 1: Client > Signing up

Before anything else, the user has to sign up. The client posts a HTTP request to the server containing his/her username and password.

#### Step 2: Server > Handling sign up

The server receives this request and hashes the password before storing the username and password in your database. This way, if 
someone gains access to your database they won't see your users' actual passwords.

#### Step 3: Client > User login

Now your user logs in. He/she provides their username/password and again, this is posted as a HTTP request to the server.

#### Step 4: Server > Validating login

The server looks up the username in the database, hashes the supplied login password, and compares it to the previously 
hashed password in the database. If it doesn't check out, we may deny them access by sending a 401 status code and ending the request.

#### Step 5: Server > Generating access token

If everything checks out, we're going to create an access token, which uniquely identifies the user's session. Still in the server, 
we do two things with the access token:

- Store it in the database associated with that user
- Attach it to a response cookie to be returned to the client. Be sure to set an expiration date/time to limit the user's session

Henceforth, the cookies will be attached to every request (and response) made between the client and server.

#### Step 6: Client > Making page requests

Back on the client side, we are now logged in. Every time the client makes a request for a page that requires authorization 
(i.e. they need to be logged in), the server obtains the access token from the cookie and checks it against the one in the database 
associated with that user. If it checks out, access is granted.

This should get you started. Be sure to clear the cookies upon logout!


### QAuth [&uarr;](#Readme)

OAuth — популярный протокол, который позволяет социальным сервисам интегрироваться между собой и дает безопасный способ обмена 
персональной информацией. OAuth может связать между собой 2 сервиса, каждый из которых имеет свою пользовательскую базу — именно их я 
в данном случае называю «социальными».

OAuth 2 is an authorization framework that enables applications — such as Facebook, GitHub, and DigitalOcean — to obtain limited access 
to user accounts on an HTTP service. It works by delegating user authentication to the service that hosts a user account and authorizing 
third-party applications to access that user account. OAuth 2 provides authorization flows for web and desktop applications, as well as 
mobile devices.


### Basic-Auth [&uarr;](#Readme)


Возможно использовать функцию header() для отправки сообщения "Authentication Required" браузеру, заставив его показать окошко для 
ввода логина и пароля. Как только пользователь заполнит логин и пароль, ссылка, содержащая PHP-скрипт будет вызвана ещё раз с 
предопределёнными переменными PHP_AUTH_USER, PHP_AUTH_PW и AUTH_TYPE, установленными в логин, пароль и тип аутентификации соответственно. 
Эти предопределённые переменные хранятся в массиве $_SERVER. Поддерживаются только: "Basic" и "Digest". Подробнее смотрите функцию header().

Пример Basic HTTP-аутентификации:

      <?php
         if (!isset($_SERVER['PHP_AUTH_USER'])) {
             header('WWW-Authenticate: Basic realm="My Realm"');
             header('HTTP/1.0 401 Unauthorized');
             echo 'Текст, отправляемый в том случае,
             если пользователь нажал кнопку Cancel';
             exit;
         } else {
             echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
             echo "<p>Вы ввели пароль {$_SERVER['PHP_AUTH_PW']}.</p>";
         }
      ?>



### Token-Auth [&uarr;](#Readme)

Token-based authentication is a protocol which allows users to verify their identity, and in return receive a unique access token. 
During the life of the token, users then access the website or app that the token has been issued for, rather than having to re-enter 
credentials each time they go back to the same webpage, app, or any resource protected with that same token.

Auth tokens work like a stamped ticket. The user retains access as long as the token remains valid. Once the user logs out or quits 
an app, the token is invalidated.

Token-based authentication is different from traditional password-based or server-based authentication techniques. Tokens offer a second 
layer of security, and administrators have detailed control over each action and transaction.

But using tokens requires a bit of coding know-how. Most developers pick up the techniques quickly, but there is a learning curve.

Let's dig in, so you can determine if tokens are right for you and your organization.

Token Authentication in 4 Easy Steps

Use a token-based authentication system, and visitors will verify credentials just once. In return, they'll get a token that allows access 
for a time period you define.

The process works like this:

- Request: The person asks for access to a server or protected resource. That could involve a login with a password, or it could involve some other process you specify.
- Verification: The server determines that the person should have access. That could involve checking the password against the username, or it could involve another process you specify.
- Tokens: The server communicates with the authentication device, like a ring, key, phone, or similar device. After verification, the server issues a token and passes it to the user.
- Storage: The token sits within the user's browser while work continues.

If the user attempts to visit a different part of the server, the token communicates with the server again. Access is granted or denied 
based on the token.

Administrators set limits on tokens. You could allow a one-use token that is immediately destroyed when the person logs out. Or you could 
set the token to self-destruct at the end of a specified time period.

![TokenBasedAuthentication.png](images%2FTokenBasedAuthentication.png)



### JWT [&uarr;](#Readme)

JSON Web Token (JWT): A Special Form of Auth Token – это открытый стандарт для передачи пакетов между сторонами в веб-среде. Он используется для шифрования и передачи
данных авторизованных пользователей между поставщиком идентификации (ваш корпоративный веб-сайт) и поставщиком услуг.

Простыми словами, JWT — это лишь строка в следующем формате header.payload.signature.
Предположим, что мы хотим зарегистрироваться на сайте. В нашем случае есть три участника — пользователь user, сервер
приложения application server и сервер аутентификации authentication server. Сервер аутентификации будет обеспечивать
пользователя токеном, с помощью которого он позднее сможет взаимодействовать с приложением.

Приложение использует JWT для проверки аутентификации пользователя следующим образом:

 1. Сперва пользователь заходит на сервер аутентификации с помощью аутентификационного ключа (это может быть пара логин/пароль, либо Facebook ключ, либо Google ключ, либо ключ от другой учетки).
 2. Затем сервер аутентификации создает JWT и отправляет его пользователю.
 3. Когда пользователь делает запрос к API приложения, он добавляет к нему полученный ранее JWT.
 4. Когда пользователь делает API запрос, приложение может проверить по переданному с запросом JWT является ли пользователь тем, за кого себя выдает. В этой схеме сервер приложения сконфигурирован так, что сможет проверить, является ли входящий JWT именно тем, что был создан сервером аутентификации (процесс проверки будет объяснен позже более детально).

JWTs have three important components.

- Header: Define token type and the signing algorithm involved in this space.
- Payload: Define the token issuer, the expiration of the token, and more in this section.
- Signature: Verify that the message hasn't changed in transit with a secure signature.

Coding ties these pieces together. The finished product looks something like this.

### OpenID [&uarr;](#Readme)


OpenID is a protocol that utilizes the authorization and authentication mechanisms of OAuth 2.0 and is now widely adopted 
by many identity providers on the Internet. It solves the problem of needing to share user’s personal info between many different 
web services(e.g. online shops, discussion forums etc.)

OpenID allows you to use login credentials from an OpenID provider (such as Google) to log in to another application (like Facebook). 
For example, if you want to access www.example.com, they can ask you for your OpenID in the form of a Google or Facebook account. 
If you enter your OpenID, example.com will redirect you to your OpenID provider and you will authenticate yourself, confirming your 
identity and then be allowed access to your account on example.com.

#### OpenID vs. OAuth

Simply put, OpenID is used for authentication while OAuth is used for authorization.

OpenID was created for federated authentication, meaning that it lets a third-party application authenticate users for you using 
accounts that you already have. In contrast, OAuth was created to remove the need for users to share their passwords with third-party 
applications.

The problem is that both protocols can be used to accomplish similar tasks, but that doesn’t mean they should be used interchangeably. 
OpenID provides an identity assertion while OAuth is more generic. When a client uses OAuth, a server issues an access token to a third 
party, the token is used to access a protected resource, and the source validates the token. Notice, that at no point is the identity of 
the owner of the token verified.

You can think of a token issued by a resource server like it’s a ticket to a movie. Nowhere on the ticket does it say any identifying 
information about an individual, it simply is used as a way of saying I have permission to enter. This means that the issued token may be 
in the hands of a bad actor or a machine.


### SAML [&uarr;](#Readme)

SAML (язык разметки подтверждений безопасности) — это защищенный механизм коммуникации на базе XML для обмена данными аутентификации и
авторизации между организациями и приложениями. Часто он используется для реализации Web SSO (единый вход в систему). Это устраняет 
необходимость сохранения нескольких учетных данных для разных организаций. Проще говоря, вы можете использовать одну учетную запись, 
например имя пользователя и пароль, для доступа к нескольким приложениям.

Экземпляр SimpleSAMLphp подключается к источнику аутентификации, который представляет собой поставщика удостоверений, например LDAP или 
база данных пользователей. Он выполняет аутентификацию пользователей для этого источника аутентификации, прежде чем предоставлять доступ 
к ресурсам, предоставляемым связанным поставщиком сервисов.


### HATEOAS [&uarr;](#Readme)

Термин HATEOAS означает фразу «Hypermedia As The Engine Of Application State» (Гипермедиа как двигатель состояния
приложения).

Когда вы отправляете запрос для получения данных к примеру - учетной записи, вы получаете оба:

- Номер счета и данные баланса
- Ссылки, которые обеспечивают действия, чтобы сделать депозит/снятие/перевод/закрытие

С HATEOAS запрос на REST ресурс дает мне как данные, так и действия, связанные с данными.

Зачем нам нужен HATEOAS?

Единственная самая важная причина для HATEOAS — слабая связь (loose coupling). Если потребителю службы REST необходимо
жестко закодировать все URL-адреса ресурсов, он тесно связан с реализацией вашей службы. Вместо этого, если вы вернете
URL-адреса, которые он может использовать для действий, он будет слабосвязанным. Нет строгой зависимости от структуры
URI, так как она указана и используется в ответе.

### Open-API-Specs [&uarr;](#Readme)

OpenAPI — это спецификация, описывающая API-интерфейсы RESTful в форматах JSON и YAML так, что он понятен и людям, и машинам.

Определения OpenAPI не привязаны к конкретному языку и могут использоваться самым разным образом.

