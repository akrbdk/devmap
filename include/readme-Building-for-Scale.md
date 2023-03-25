
### Building for Scale [&uarr;](#Readme)

Speaking in general terms, scalability is the ability of a system to handle a growing amount of work by adding resources to it.

A software that was conceived with a scalable architecture in mind, is a system that will support higher workloads without any 
fundamental changes to it, but don’t be fooled, this isn’t magic. You’ll only get so far with smart thinking without adding more 
sources to it.

For a system to be scalable, there are certain things you must pay attention to, like:

- Coupling
- Observability
- Evolvability
- Infrastructure

When you think about the infrastructure of a scalable system, you have two main ways of building it: using on-premises resources or 
leveraging all the tools a cloud provider can give you.

The main difference between on-premises and cloud resources will be FLEXIBILITY, on cloud providers you don’t really need to plan ahead, 
you can upgrade your infrastructure with a couple of clicks, while with on-premises resources you will need a certain level of planning.


### Instrumentation, Monitoring, and Telemetry [&uarr;](#Readme)

#### Instrumentation [&uarr;](#Readme)

Instrumentation refers to the measure of a product’s performance, in order to diagnose errors and to write trace information.
Instrumentation can be of two types: source instrumentation and binary instrumentation.

Output:

- Profiling: measuring dynamic program behaviors during a training run with a representative input. This is useful for properties of a program that cannot be analyzed statically with sufficient precision, such as alias analysis.
- Inserting timers into functions.
- Logging major events such as crashes.

Limitations:

    Instrumentation is limited by execution coverage. If the program never reaches a particular point of execution, then instrumentation at 
    that point collects no data. For instance, if a word processor application is instrumented, but the user never activates the print feature, 
    then the instrumentation can say nothing about the routines which are used exclusively by the printing feature.
    
    Some types of instrumentation may cause a dramatic increase in execution time. This may limit the application of instrumentation to 
    debugging contexts.


#### Backend monitoring [&uarr;](#Readme)

Backend monitoring allows the user to view the performance of infrastructure i.e. the components that run a web application.
These include the HTTP server, middleware, database, third-party API services, and more.

Backend monitoring helps you find out when things go wrong — fast.  Each of the components powering a web app can run into a host of problems:

- software performance issues
- memory issues
- code bugs
- system-level software problems (OS issues, security problems)
- hardware issues (out of memory, out of disk space, disk failure, network card failure). 


#### Front-End monitoring [&uarr;](#Readme)

Front-end monitoring provides a complete view of the performance of your web application from a user?s perspective, including all third-party content.

While backend monitoring alerts you of failures of your own components, front-end monitoring reveals performance problems that are not necessarily related to component failure.  These include:

- Content problems (i.e., a new image on your site is too heavy, drags down performance; a script served by a site like Facebook is down, thereby slowing down your site)
- Browser-compatibility problems (i.e., users on FireFox 13 are experiencing a much slower page load than users on other browsers)
- Location-based problems (i.e., users in Asia are experiencing a much slower site than users elsewhere)
- Network issues (?last mile? connectivity is a bottleneck, especially on mobile)

Simply put, front end monitoring is important because the front-end is what users see, and the user?s experience is what ultimately 
matters.  If your site takes too long to load or provides a suboptimal user experience, you?ll lose site visitors ? and customers.

Front-end Monitoring Solutions:

Solutions under the front-end monitoring umbrella operate through different means. Here are three main ways data is collected:

1. RUM ? ?real user monitoring.?  This type of solution takes performance data from actual user visits as they happen, via a JavaScript injected into the browser.  RUM is effective for gathering data to find trends and patterns in performance.  RUM is limited, however, when it comes to pinpointing the source of a problem on your site (no waterfall chart accompanies the data) or alerting you to problems quickly.

2. Simulated Browsers.  This type of front end monitoring system uses simulated browsers to access a web page or web application.  This is the cheapest monitoring option, but is limited because simulated browsers cannot offer as accurate a representation of user experience as a real browser visit.

3. Real-Browser Monitoring.  This type of front-end monitoring uses real browsers — rather than simulated browsers — to access a website or web application.  This means it gathers information on exactly what a user would see if he or she accessed the site with the given criteria of browser, geographic location, and type of Internet connection.  This will allow you to fine-tune your site?s performance for certain criteria before any of your users run into problems.

#### Telemetry [&uarr;](#Readme)

Telemetry automatically collects, transmits and measures data from remote sources, using sensors and other devices to collect data. 
It uses communication systems to transmit the data back to a central location. Subsequently, the data is analyzed to monitor and control 
the remote system.

Telemetry data helps improve customer experiences and monitor security, application health, quality and performance.


Key takeaways:

- Collecting telemetry data is essential for administering and managing various IT infrastructures.
- Measure telemetry through monitoring tools, which measure everything from server performance to utilization.
- If a hacking attempt or security breach occurs, holistic monitoring helps you determine if critical data was lost or stolen or if systems are compromised.
- A telemetry software vendor helps implement a sound monitoring strategy and ensures that it evolves and becomes more comprehensive over time.

### Mitigation Strategies [&uarr;](#Readme)

This section is mainly relevant to the cloud design patterns that help you build scalable solutions.

#### Graceful Degradation [&uarr;](#Readme)


Graceful degradation is a design principle that states that a system should be designed to continue functioning, even if some of 
its components or features are not available. In the context of web development, graceful degradation refers to the ability of a web 
page or application to continue functioning, even if the user’s browser or device does not support certain features or technologies.

Graceful degradation is often used as an alternative to progressive enhancement, a design principle that states that a system should 
be designed to take advantage of advanced features and technologies if they are available.


#### Throttling [&uarr;](#Readme)


Throttling is a design pattern that is used to limit the rate at which a system or component can be used. It is commonly used 
in cloud computing environments to prevent overuse of resources, such as compute power, network bandwidth, or storage capacity.

There are several ways to implement throttling in a cloud environment:

- Rate limiting: This involves setting a maximum number of requests that can be made to a system or component within a specified time period.
- Resource allocation: This involves allocating a fixed amount of resources to a system or component, and then limiting the use of those resources if they are exceeded.
- Token bucket: This involves using a “bucket” of tokens to represent the available resources, and then allowing a certain number of tokens to be “consumed” by each request. When the bucket is empty, additional requests are denied until more tokens become available.

Throttling is an important aspect of cloud design, as it helps to ensure that resources are used efficiently and that the system remains 
stable and available. It is often used in conjunction with other design patterns, such as auto-scaling and load balancing, 
to provide a scalable and resilient cloud environment.


#### Backpressure [&uarr;](#Readme)


Backpressure is a design pattern that is used to manage the flow of data through a system, particularly in situations where 
the rate of data production exceeds the rate of data consumption. It is commonly used in cloud computing environments to prevent 
overloading of resources and to ensure that data is processed in a timely and efficient manner.

There are several ways to implement backpressure in a cloud environment:

- Buffering (Буферизация): This involves storing incoming data in a buffer until it can be processed, allowing the system to continue receiving data even if it is temporarily unable to process it.
- Batching (Пакетная обработка): This involves grouping incoming data into batches and processing the batches in sequence, rather than processing each piece of data individually.
- Flow control (Управление потоком): This involves using mechanisms such as flow control signals or windowing to regulate the rate at which data is transmitted between systems.

Backpressure is an important aspect of cloud design, as it helps to ensure that data is processed efficiently and that the system 
remains stable and available. It is often used in conjunction with other design patterns, such as auto-scaling and load balancing, 
to provide a scalable and resilient cloud environment.


#### Load Shifting [&uarr;](#Readme)


Load shifting is a design pattern that is used to manage the workload of a system by shifting the load to different components 
or resources at different times. It is commonly used in cloud computing environments to balance the workload of a system and to optimize 
the use of resources.

There are several ways to implement load shifting in a cloud environment:

- Scheduling: This involves scheduling the execution of tasks or workloads to occur at specific times or intervals.
- Load balancing: This involves distributing the workload of a system across multiple resources, such as servers or containers, to ensure that the workload is balanced and that resources are used efficiently.
- Auto-scaling: This involves automatically adjusting the number of resources that are available to a system based on the workload, allowing the system to scale up or down as needed.

Load shifting is an important aspect of cloud design, as it helps to ensure that resources are used efficiently and that 
the system remains stable and available. It is often used in conjunction with other design patterns, such as throttling and backpressure,
to provide a scalable and resilient cloud environment.


#### Circuit Breaker [&uarr;](#Readme)


The circuit breaker design pattern is a way to protect a system from failures or excessive load by temporarily stopping certain 
operations if the system is deemed to be in a failed or overloaded state. It is commonly used in cloud computing environments 
to prevent cascading failures and to improve the resilience and availability of a system.

A circuit breaker consists of three states: closed, open, and half-open. In the closed state, the circuit breaker allows operations 
to proceed as normal. If the system encounters a failure or becomes overloaded, the circuit breaker moves to the open state, and all 
subsequent operations are immediately stopped. After a specified period of time, the circuit breaker moves to the half-open state, and 
a small number of operations are allowed to proceed. If these operations are successful, the circuit breaker moves back to 
the closed state; if they fail, the circuit breaker moves back to the open state.

The circuit breaker design pattern is useful for protecting a system from failures or excessive load by providing a way to temporarily 
stop certain operations and allow the system to recover. It is often used in conjunction with other design patterns, such as retries and 
fallbacks, to provide a more robust and resilient cloud environment.


### Migration Strategies [&uarr;](#Readme)

https://phauer.com/2015/databases-challenge-continuous-delivery/

Learn how to run database migrations effectively. Especially zero downtime multi-phase schema migrations. Rather than make all changes 
at once, do smaller incremental changes to allow old code, and new code to work with the database at the same time, before removing 
old code, and finally removing the parts of the database schema which is no longer used.

Узнайте, как эффективно выполнять миграцию базы данных. В частности, многоэтапная миграция схем с нулевым временем простоя. 
Вместо того, чтобы вносить все изменения сразу, делайте небольшие пошаговые изменения, чтобы старый код и новый код могли одновременно 
работать с базой данных, прежде чем удалять старый код и, наконец, удалять части схемы базы данных, которые больше не используются.

### Horizontal/Vertical Scaling [&uarr;](#Readme)


`Вертикальное масштабирование` — scaling up — увеличение количества доступных для ПО ресурсов за счет увеличения мощности применяемых с серверов.

`Горизонтальное масштабирование` — scaling out — увеличение количества нод, объединенных в кластер серверов при нехватке CPU, памяти или дискового пространства.

И то и другое является инфраструктурными решениями. Они требуются в разных ситуациях когда веб проект растет.


Для примера можно рассмотреть сервера баз данных. Для больших приложений это всегда самый нагруженный компонент системы.

Возможности для масштабирования для серверов баз данных определяются применяемыми программными решениями. Чаще всего это реляционные 
базы данных (MySQL, Postgresql) или NoSQL (MongoDB, Cassandra и др).


Горизонтальное масштабирование для серверов баз данных при больших нагрузках значительно дешевле

Веб-проект обычно начинают на одном сервере, ресурсы которого при росте заканчиваются. В такой ситуации возможны 2 варианта:

- перенести базу на более мощный сервер
- добавить еще один сервер небольшой мощности с объединить машины в кластер



MySQL является самой популярной RDBMS и, как и любая из них, требует для работы под нагрузкой много серверных ресурсов. Масштабирование 
возможно, в основном, вверх. Есть шардинг (для его настройки требуется вносить изменения в код) и  репликация, которая может быть сложной 
в поддержке.

`Вертикальное масштабирование`

NoSQL масштабируется легко. С, например, MongoDB будет значительно выгоднее материально масштабироваться вертикально. При этом не потребует трудозатратных настроек и поддержки получившегося решения. Шардинг осуществляется автоматически.

Таким образом с MySQL нужен будет сервер с большим количеством CPU и оперативной памяти, такие сервера имеют значительную стоимость.

`Горизонтальное масштабирование`

С MongoDB можно добавить еще один средний сервер и полученное решение будет стабильно работать давая дополнительно отказоустойчивость.

Scale-out или горизонтальное масштабирование является закономерным этапом развития инфраструктуры. Любой сервер имеет ограничения и когда они достигнуты или когда стоимость более мощного сервера оказывается неоправданно высокой добавляются новые машины. Нагрузка распределяется между ними. Также это дает отказоустойчивость.


Добавлять средние сервера и настраивать кластеры нужно начинать когда возможности для увеличения ресурсов одной машины исчерпаны. Или когда приобретение сервера мощнее оказывается невыгодно.


Приведенный пример с реляционными базами данных и NoSQL является ситуацией, которая имеет место чаще всего. Масштабируются также фронтэнд и бэкенд сервера.


### Observability [&uarr;](#Readme)

In sofware development, observability is the measure of how well we can understand a system from the work it does, and how to make it better.

So what makes a system to be “observable”? It is its ability of producing and collecting metrics, logs and traces in order for us to understand 
what happens under the hood and identify issues and bottlenecks faster.

You can of course implement all those features by yourself, but there are a lot of softwares out there that can help you with it like 
Datadog, Sentry and CloudWatch.

###HIGHLOAD


### Технологии повышения производительности PHP  [&uarr;](#PHP)


#### Зачем оптимизировать

Самый простой и очевидный способ решить проблему производительности — добавить железа. Если ваш код выполняется на одном сервере, 
то добавление ещё одного удвоит производительность вашего кластера. Переводя эти затраты на рабочее время разработчика, мы задаёмся 
вопросом: сможет ли он за это время получить двукратный рост производительности за счёт оптимизаций? Возможно, да, а, возможно, нет: 
зависит от того, насколько оптимально уже работает система и насколько хорош разработчик. С другой стороны, купленный сервер останется в 
собственности компании, а потраченное время уже не вернёшь.

Получается, что на небольших объёмах правильным решением чаще будет добавление железа. 


#### Capacity planning

Прежде чем что-то предпринимать, важно понять, есть ли проблема. Если её нет, то стоит попытаться предсказать, когда она может появиться. Этот процесс называют capacity planning.

Железобетонным показателем наличия проблем с производительностью является время ответа. Ведь, по сути, не имеет значения, загружен CPU (или другие ресурсы) на 6% или 146%: если клиент получает сервис необходимого качества за удовлетворительное время, значит, всё работает хорошо.


Как контролировать ситуацию когда проект растет

При росте ресурса архитектуру системы следует совершенствовать — делается это за счет тюнинга ПО и заточки для работы с учетом выделенных 
серверу ресурсов (особенно это актуально для MySQL), и масштабированием — вертикальным или горизонтальным.

- Вертикальное масштабирование — увеличение количества ресурсов.
- Горизонтальное масштабирование — вынос части проекта на отдельные сервера.


#### Кэширование данных

Можно выделить два основных типа кэширования:

1) кэш  кода операции PHP. Интерпретатор обрабатывает  сценарии PHP по зазначеному алгоритму, при этом идёт чтение файла, генерация байт-кода, выполнение запроса и выдача результата. На все идет много затрат по времени и мощностей сервера. Чтобы этого избежать и ускорить выдачу,  кэш кода операции хранит уже скомпилированные ранее сценарии PHP. Серверу не нужно компилировать и преобразовывает скрипт PHP в машинно-понятный код при каждом запросе. Скомпилированные сценарии PHP хранятся в памяти на сервере, на котором производилась компиляция. Использование такого вида  кэширования дает возможность серверу обрабатывать намного больше одновременно поступивших запросов, что играет важную роль для высокой производительности и стабильной работы больших сайтов и приложений.

2) кэш   данных. Кэш данных хранит копии данных, шаблонов и других типов часто запрашиваемых информационных файлов, сохраняя трудоемкие вычисляемые данные в кэше. В зависимости от реализации и использования кэша он может быть локальным для одного сервера или распределенным по нескольким серверам. 

Для серверов работающих на  Linux: популярным решением есть PHP OPcache. А для приложений PHP, работающих в Windows и Windows Server, существует альтернативный ускоритель PHP под названием Windows Cache Extension.


OPcache

    OPcache — это тип кэширования OPcode. Это мощное расширение PHP, созданное для повышения производительности PHP. Он работает, сохраняя предварительно скомпилированный байт-код скрипта в разделяемой памяти, тем самым избавляя PHP от необходимости загружать и анализировать скрипты при каждом запросе. Opcache имеет три уровня кеша: исходный кеш общей памяти, файловый кэш, и функцию предварительной загрузки, добавленную в PHP 7.4. PHP OPcache также применяет дополнительные шаблоны оптимизации байт-кода, чтобы ускорить выполнение кода PHP.

Redis

    Redis - это отличный современный кэш памяти, который можно использовать как для распределенного кэширования, так и в качестве локального кэша для блокировки транзакций файлов, поскольку он гарантирует, что кэшированные объекты доступны столько времени, сколько они необходимы. Многие пользователи отмечают сложность в настройке и использовании, хотя является одним из лучших решений по кэшированию на данный момент.  


Дополнительные факторы, повышающие производительность проекта на PHP

    1. Используйте готовые функции PHP

    Везде, где это возможно, используйте готовые функции PHP. Избегайте написания ваших собственных функций. Для этого потратьте немного времени на изучение функций PHP. Тогда код приложения получится более быстрым и эффективным.

    2. Используйте JSON вместо XML

    Функции PHP json_encode() и json_decode() просто невероятно быстры. Поэтому использование JSON предпочтительнее использования XML.

    Если вам все же приходится разбираться с XML, лучше использовать шаблонные регулярные выражения, чем манипуляции с DOM.

    3. Используйте методы кэширования

    Кэш-память особенно полезна для сокращения объема загружаемых данных.

    Кэширование байт-кода с помощью APC или OPcache сильно экономит время выполнения скомпилированного сценария.

    Хранение сессий в Memcached — хранение в файлах не подходит для нагруженных проектов. Чаще всего применяется Memcached. С PHP хранилище может работать за счет расширений memcache и memcached

    4. Уберите лишние вычисления

    Если одно и то же значение выражения используется многократно, вычислите его заранее и присвойте переменной. Тогда не придется его вычислять каждый раз.

    5. Используйте isset()

    Проводите сравнения с помощью пар count(), strlen() и sizeof(), isset(). Это быстрый и простой способ поиска значений, больше нуля.

    6. Отключите ненужные классы

    Если не планируется использовать классы или методы многократно, то они вообще не нужны. Если необходимо все же использовать классы, лучше использовать методы производного класса, поскольку они быстрее методов базовых классов.

    7. Отключите отладочные сообщения

    Сообщения об ошибках необходимы только во время кодирования. Но после запуска готовой задачи они становятся еще одним процессом, замедляющим выполнение кода. Отключите такие сообщения.

    8. Закрывайте соединения с базой данных

    Сбрасывание переменных и закрытие соединений с базой данных сэкономит драгоценную память.

    9. Ограничьте обращения к базе данных

    Старайтесь использовать совокупности запросов к базе данных. Это сокращает количество обращений к базе данных, приложение будет работать быстрее.

    10. Используйте строковые функции Str

    str_replace быстрее, чем preg_replace, а strtr в четыре раза быстрее, чем str_replace.

    11. Используйте одинарные кавычки

    Когда только возможно, используйте одинарные кавычки, а не двойные. Двойные кавычки проверяются компилятором на переменные, что понижает производительность.

    12. Используйте три знака равенства

    Поскольку «= = =» проверяет величины только одного типа, это делает оператор сравнения «= = =» более быстрым, чем оператор «= =».

    13. переменные следует объявлять до начала итераций

    14. не включайте функции в тело заголовка цикла (например: for ($i=0; $i<count($array); $i, в таком случае count() будет выполняться с каждой итерацией)

    15. оператор switch лучше, чем несколько if

    16. require и include лучше, чем require_once и include_once (так как обеспечивают корректное кеширование).

    17. избегайте запросов к БД, в цикле
    
    18. Минимизация использования регулярных выражений, которые выполняются долго. Вместо regexp можно использовать функции для обработки строк:  join, explode и др.

    19. Использование абсолютных путей в коде: include /var/site/css/style.css; вместо относительных include ../style.css; С абсолютными путями код будет выполняться быстрее

    20. Современные версии PHP. Код, написанный на 8.0+ работает на 20-30% быстрее, чем код на PHP 5.4 и 5.6

    21. Подходящие значения параметров memory_limit, max_execution_time и post_max_size в файле php.ini

    22. FastCGI или PHP-FPM в качестве менеджера процессов, с FPM и Nginx получается самая высокая производительность

    23. Постоянное профилирование кода и анализ узких мест с последующей переработкой. Имеются общедоступные программы для профилирования PHP-кода, такие, как Xdebug.

    24. Выявите задержки базы данных

    Удостоверьтесь, что лог медленных запросов SQL включен, чтобы иметь возможность выявить их. Затем изучите эти медленные запросы, чтобы оценить их эффективность. Если обнаружится, что выполняется слишком много запросов или одни и те же запросы необоснованно повторяются, внесите соответствующие изменения. Такие изменения должны повысить производительность приложения, сокращая время доступа к базе данных.

    25. Очистите файловую систему

    Проанализируйте файловую систему на неэффективность, то есть удостоверьтесь, что файловая система не используется для хранения сессий. Самое главное - внимательно следите за функциями статистики файлов: file_exists(), filesize() и filetime(). Попадание этих функций внутрь цикла приводит к проблемам с производительностью.

    26. Тщательно контролируйте показ API

    Большинство веб-приложений, которые зависят от внешних ресурсов, используют удаленный API. Хотя удаленный API находится вне вашего контроля, однако можно смягчить проблемы API-производительности. Например, можно кэшировать API-вывод или делать фоновые вызовы API. Установите разумные интервалы для API-запросов и, если это возможно, показывайте на дисплее API-вывод без ответа API.

    27. Удаление из корня проекта - служебных скриптов, либо закрыть их авторизацией, воизбежание ддос атак.

    28. Использовать подготовленные операторы для взаимодействия с базой данных

    При взаимодействии с базой данных в PHP важно использовать подготовленные операторы для защиты от атак с внедрением SQL и повысить производительность. Подготовленные операторы позволяют отделить SQL-запрос от переданных ему значений, что может помочь предотвратить атаки путем внедрения SQL-кода, а также повысить производительность, позволяя серверу базы данных оптимизировать запрос.

    29. Объединение и минимизация ресурсов

    Сложные веб-страницы часто подключают много CSS и/или JavaScript файлов. Для уменьшения числа HTTP запросов и общего размера загрузки этих ресурсов, вы должны рассмотреть вопрос об их объединении в один файл и его сжатии. Это может сильно увеличить скорость загрузки страницы и снизить нагрузку на сервер.

    30. Оптимизация хранилища сессий

    По умолчанию данные сессий хранятся в файлах. Это удобно для разработки или в маленьких проектах. Но когда дело доходит до обработки множества параллельных запросов, то лучше использовать более сложные хранилища, такие как базы данных.
    Если на вашем сервере установлен Redis, настоятельно рекомендуется выбрать его в качестве хранилища сессий.

    31. Асинхронная обработка данных

    Когда запрос включает в себя некоторые ресурсоёмкие операции, вы должны подумать о том, чтобы выполнить эти операции асинхронно, не заставляя пользователя ожидать их окончания.

Краткое резюме:

    1) на небольших объёмах железо обычно дешевле оптимизаций;
    2) не оптимизируйте без явной необходимости;
    3) если всё-таки нужно оптимизировать, то измеряйте: скорее всего, проблема не в коде;
    4) правильно интерпретируйте измерения: не всегда всё линейно и очевидно (гипертрединг, пики, нелинейность активности);
    5) не полагайтесь на догадки: профилируйте и правильно интерпретируйте результаты;
    6) изменить настройки сжатия, OPCache или обновить версию PHP, как правило, проще, чем оптимизировать код;
    7) смотрите на проблему шире: возможно, помогут оптимизации клиентов или более разумное использование ресурсов.