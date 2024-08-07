# Caching

#### Ссылки

- https://habr.com/ru/company/ruvds/blog/503800/
- https://developer.mozilla.org/ru/docs/Web/HTTP/Caching
- https://habr.com/ru/company/vk/blog/310054/
- https://www.php.net/manual/ru/book.opcache.php
- https://habr.com/ru/company/oleg-bunin/blog/316652/
- https://for-each.dev/lessons/b/-memcached-vs-redis/

# Кэширование

Кэширование (или кэш) – это некий промежуточный буфер, в котором хранятся данные. Благодаря кэшированию страница сайта
не воссоздается заново для каждого пользователя. Кэширование позволяет осуществлять работу с большим количеством данных
в максимально сжатые сроки и при ограниченных ресурсах (серверных и пользовательских).

Сайт может хранить данные для ускорения обработки последующих запросов на четырёх уровнях:

    клиентский;
    сетевой;
    серверный;
    уровень приложения.

## Client-side

### HTTP-кеширование

Заголовки HTTP отвечают за определение возможности кэширования ответа и за определение срока хранения данных.

Cache-control - указывает, скролько по времени ответ может находиться в кэше. Браузер отправит повторный запрос на
хранение данных, если срок хранения истечёт или пользователь целенаправленно обновит страницу.

Last-Modified или Etag - эти заголовки нужны для проверки возможности повторного использования данных. Статус ответа
304 указывает, что содержимое не изменилось и повторная загрузка не требуется.

#### Приватный (private) кеш браузера

Приватный кеш предназначен для отдельного пользователя. Вы, возможно, уже видели параметры кеширования в настройках
своего браузера.
Кеш браузера содержит все документы, загруженные пользователем по HTTP. Он используется для доступа к ранее загруженным
страницам
при навигации назад/вперёд, позволяет сохранять страницы, или просматривать их код, не обращаясь лишний раз к серверу.
Кроме того,
кеш полезен при отключении от сети.

#### Общий (shared) прокси-кеш

Кеш совместного использования — это кеш, который сохраняет ответы, чтобы их потом могли использовать разные
пользователи. Например,
в локальной сети вашего провайдера или компании, может быть установлен прокси, обслуживающий множество пользователей,
чтобы можно
было повторно использовать популярные ресурсы, сокращая тем самым сетевой трафик и время ожидания.

## CDN [&uarr;](https://habr.com/ru/company/ruvds/blog/503800/)

Согласно Википедии, Сеть Доставки Контента (CDN) — географически распределённая сетевая инфраструктура, позволяющая
оптимизировать доставку и дистрибуцию контента конечным пользователям в сети Интернет. Иначе говоря, CDN — это
распределённое хранение и использование кэша.

CDN — это общее название множества различных технологий, призванных доставлять статический контент как можно ближе и
быстрее по
отношению к клиенту. Например, torrent-раздача новой версии Ubuntu — это тоже CDN. А вы становитесь одним из узлов
раздачи,
помогая другим пользователям быстрее получить новую версию дистрибутива и не положить основной сайт под нагрузкой.

В случае классического понимания речь идёт о специально созданных и предназначенных только для решения подобных задач
сетях.
Часто проприетарных. Если вам нужен CDN общего назначения, то вы обращаетесь к кому-то из крупных вендоров, имеющих
серверы по
всему миру и достаточные каналы связи. Крупнейшие из них, такие, как Amazon и Google, тянут свои собственные кабели
связи для
обеспечения нужной пропускной способности и снижения задержек.

`CDN решает несколько проблем:`

#### Проблема ширины канала

У вас есть много иллюстраций и видео, которые надо доставить клиенту. Передать однократно несколько Мегабайт не очень
трудно:
современные каналы связи позволяют делать это за секунды. Всё становится гораздо хуже, когда к вам на сайт одновременно
заходят
вначале несколько десятков, а потом — тысяч посетителей.

Давайте считать. Допустим, у вас один-единственный сервер и у вас типичная страница весом в 1,8 Мегабайта. Клиенты
приходят к вам
впервые и с «холодным» кэшем, то есть в браузере нет ранее загруженных материалов с вашего ресурса.

Чтобы отдать за приемлемые три секунды страницу, нам потребуется ширина канала в 4,8 Мегабита на одного посетителя. Если
их придет
100, то это уже 480 Мегабит. А если вдруг потребуется отдать тем же людям небольшой видеофайл размером 10 Мегабайт, то
нам
потребуется канал в 2,7 Гигабита.

Таким образом, у вас появляется два основных типа контента: динамический и статический.
Статический контент, как следует из названия, не изменяется или меняется крайне редко. Например, это логотип веб-сайта.
Или залитые
образы с дистрибутивами ПО.

Динамический контент отличается тем, что он генерируется сервером «на лету». Обычно это происходит в момент самого
запроса. Например, при клике на кнопку формируется плей-лист, уникальный для конкретного пользователя.

Именно для решения проблемы кэширования статического контента и были созданы CDN.

#### Проблема долгого пинга

Вторая проблема, которую решает CDN, — это ускорение запросов. Около вас есть локальный сервер, который кэширует
статический
контент и иногда сам умеет выдавать динамический. Если вам знакомы тормоза 1С при забегах из Владивостока в Москву или
особенности
работы с SAP через какой-нибудь корпоративный VPN в Европе из Новосибирска, то вы понимаете всю глубину боли.
Сотни запросов незаметны при обычных сетевых задержках внутри города, но, когда расстояния увеличиваются, неиллюзорно
тормозить
начинает всё.

`Как работет CDN:`

1. Выбираем ближайший узел

Для начала пользователю при DNS-запросе отдаётся адрес ближайшего к нему узла. Это нужно для того, чтобы ваш браузер не
полез
качать фотографию откуда-то из Ванкувера, когда ближайшая к вам копия файла есть в кэше на сервере в вашем городе.
Обычно это
делается с помощью GeoDNS, но иногда используется специально сконфигурированный Anycast. Например, всем известный
8.8.8.8 от
Google будет вести на ближайший узел, который чаще всего расположен во внутренней сети вашего провайдера. Это возможно
благодаря
правильному анонсированию сетей, по которому роутеры провайдера выбирают наиболее короткий маршрут.

2. Кэшируем

Это ключевой момент в работе CDN. Кэширование очень важно для снижения трансграничного трафика, каналы для которого
совсем не
резиновые. Более того, очень важно, чтобы кэширование происходило строго в соответствии с географией пользователей.

3. Доставляем динамику

Динамический контент генерируется на стороне вашего origin-сервера. Например, создаётся страница с новостями,
отсортированными
под конкретного клиента. Кэшировать всё это очень сложно, так как контент, по сути, уникальный. В большинстве случаев
динамическое
содержимое вроде текста «В Лондоне +23 градуса» доставляется от origin-сервера, а статическое вроде картинки с Биг-Беном
прилетает
от CDN.

#### Управление кэшированием

Проблема любого кэша в том, что мало отрегулировать скорость его протухания. Нужно убедиться, что ни промежуточные узлы,
ни
браузер не додумаются закэшировать особо чувствительные данные. Например, реквизиты банковской карты. Замечали, что их
каждый раз
приходится вводить заново? Вот это оно и работает.

Для этого необходимо использовать специальные валидаторы в заголовках веб-страниц:

`cache-control: private`

Заголовок говорит о том, что контент может быть закэширован только конечным клиентом, но не промежуточным узлом, таким,
как прокси
или CDN.

`cache-control: public`

Контент может быть кэширован кем угодно.

`cache-control: no-store`

Контент не должен быть кэширован никем и никогда. Чаще всего используется для страниц с особо чувствительной
информацией, например,
форме ввода реквизитов банковской карты.

`cache-control: no-cache`

Контент не должен использоваться до тех пор, пока клиент не убедится, что он просматривает последнюю версию. Это
реализуется за
счёт хедера ETag, который представляет собой идентификатор, уникальный для конкретного ресурса. По сути, это хэш.

Клиент при запросе посмотрит, что у него лежит в кэше, и отдаст ETag в заголовке If-None-Match. Если ETag от клиента
соответствует
актуальной версии у сервера, то он ответит клиенту, что можно пользоваться кэшем. Иначе пришлёт новую версию.

`cache-control: max-age`

В этом заголовке указывается срок жизни ресурса в секундах с момента первого получения.
Помимо управления кэшированием через заголовки, владелец ресурса всегда может внести дополнительные изменения через
панель управления
или сбросить кэш, ткнув CDN через API.

## Сторона сервера:

OpCache -> сохраняет опкоды для увеличения производительности исполнения кода -> данные регулируется непосредственно PHP
и конфигурацией

Redis, Memcached -> необходим для сохранения часто используемых данных и следовательно увеличивает скорость получения
данных -> записываемые данные
и их ключи регулируются разработчиком, который использует данное программное обеспечение

### OPCache [&uarr;](#Caching)

PHP открывает файл с кодом, компилирует его, затем выполняет. Поскольку файлов может быть много, процесс их открытия,
чтения и компиляции может
отнимать кучу времени и ресурсов. Если файлы не меняются, то постоянную компиляцию можно не делать. Лучше сделать ее
один раз и закэшировать
результат.

Именно это и делает модуль opCache. Результат первой компиляции будет сохранен в кэш, с которым и будет работать PHP.
Таким образом это ускорит
выполнение за счет отсутствия тяжелого процесса компиляции. Когда файлы изменяются, модуль сам сбросит кэш и обеспечит
перекомпиляцию. Короче,
этот модуль делает очень полезную экономию ресурсов даже без необходимости его как-то настраивать. Чем сложнее
приложение, тем выше эффективность
этой оптимизации.

OPcache улучшает производительность PHP путём сохранения скомпилированного байт-кода скриптов в разделяемой памяти, тем
самым избавляя PHP от
необходимости загружать и анализировать скрипты при каждом запросе.

### Redis [&uarr;](#Caching)

Redis — это высокопроизводительное нереляционное распределённое хранилище данных. В отличие от Memcached, который может
в любой момент удалить
ваши данные, вытесняя старые записи новыми, Redis хранит информацию постоянно, таким образом он похож на MemcacheDB.

Рассмотрим следующие кейсы:

    - Кэширование данных
    - Работа с очередями на базе redis
    - Организация блокировок (mutex)
    - Делаем систему rate-limit
    - Pubsub — делаем рассылки сообщений на клиенты

#### Кэширование данных

Redis — это in-memory хранилище, то есть данные хранятся в оперативной памяти. Ещё это key-value хранилище, где доступ к
данным по их ключу имеет
сложность O(1) — поэтому данные мы получаем очень быстро.

Получение данных из хранилища выглядит следующим образом:

    public function getValueFromCache(string $key)
    {
        return $this->getRedis()->rawCommand('GET', $key);
    }

Но для того, чтобы данные из кэша получить, их нужно сначала туда положить. Простой пример записи:

    public function setValueToCache(string $key, $value)
    {
        $this->getRedis()->rawCommand('SET', $key, $value);
    }

Таким образом, мы запишем данные в Redis и сможем их считать по тому же самому ключу в любой нужный нам момент. Но если
мы будем все время писать в Redis, данные в нем будут занимать все больше и больше места в оперативной памяти. Нам нужно
удалять нерелевантные данные, контролировать это вручную достаточно проблематично, поэтому пускай redis занимается этим
самостоятельно. Добавим к нашему ключу TTL (время жизни ключа):

    public function setValueToCache(string $key, $value, int $ttl = 3600)
    {
        $this->getRedis()->rawCommand('SET', $key, $value, 'EX', $ttl);
    }

#### Работа с очередями на базе redis

Используя имеющиеся в Redis структуры данных, мы можем запросто реализовать стандартные очереди FIFO или LIFO. Для этого
используем структуру List
и методы по работе с ней. Работа с очередями состоит из двух основных действий: отправить задачу в очередь, и взять
задачу из очереди.
Отправлять задачи в очередь мы можем из любой части системы. Получением задачи из очереди и ее обработкой обычно
занимается выделенный процесс,
который называется консьюмером (consumer).

Итак, для того, чтобы отправить нашу задачу в очередь, нам достаточно использовать следующий метод:

    public function pushToQueue(string $queueName, $payload)
    {
        $this->getRedis()->rawCommand('RPUSH', $queueName, serialize($payload));
    }

#### Организация блокировок (mutex)

Mutex (блокировка) — это механизм синхронизации доступа к shared ресурсу нескольких процессов, тем самым гарантируя, что
только один процесс будет
взаимодействовать с этим ресурсом в единицу времени. Этот механизм часто применяется в биллинге и других системах, где
важно соблюдать потоковую
безопасность (thread safety).

Для реализации mutex на базе Redis прекрасно подойдет стандартный метод SET с дополнительными параметрами:

    public function lock(string $key, string $hash, int $ttl = 10): bool
    {
        return (bool)$this->getRedis()->rawCommand('SET', $key, $hash, 'NX', 'EX', $ttl);
    }

где параметрами для установки mutex являются:

    $key — ключ идентифицирующий mutex;
    $hash — генерируем некую подпись, которая идентифицирует того, кто поставил mutex. Мы же не хотим, чтобы кто-то в другом месте случайно снял блокировку и вся наша логика рассыпалась.
    $ttl — время в секундах, которое мы отводим на блокировку (на тот случай, если что-то пойдет не так, например процесс, поставивший блокировку, по какой-то причине умер и не снял ее, чтобы это блокировка не висела бесконечно).

Достаточно частая задача, когда мы хотим ограничить количество запросов к нашему апи. Например на один API endpoint от
одного аккаунта мы хотим принимать не более 100 запросов в минуту. Эта задача легко решается с помощью нашего любимого
Redis:

    public function isLimitReached(string $method, int $userId, int $limit): bool
    {
        $currentTime = time();
        $timeWindow = $currentTime - ($currentTime % 60); //Так как наш rate limit имеет ограничение 100 запросов в минуту,
        
        //то округляем текущий timestamp до начала минуты — это будет частью нашего ключа,																									//по которому мы будем считать количество запросов
        $key = sprintf('api_%s_%d_%d', $method, $userId, $timeWindow); //генерируем ключ для счетчика, соответственно каждую минуту он будет меняться исходя из $timeWindow
        $count = $this->getRedis()->rawCommand('INCR', $key); //метод INCR увеличивает значение по указанному ключу, и возвращает новое значение.
        
        //Если ключа не существует, он будут инициализирован со значением 0 и после этого увеличен
        $this->getRedis()->rawCommand('EXPIRE', $key, 60); // Обновляем TTL нашему ключу, выставляя его в минуту, для того, чтобы не накапливать не актуальные данные
        if ($count > $limit) { //limit достигнут
            return true;
        }

        return false;
    }

Таким простым методом мы можем лимитировать количество запросов к нашему API, базовый каркас нашего контроллера мог бы
выглядеть следующим образом:

    class FooController {
    
        public function actionBar()
        {
            if ($this->isLimitReached(__METHOD__, $this->getUserId(), 100)) {
                throw new Exception('API method max limit reached');
            }
    
            $this->doSomeLogick();
        }
    }

#### Делаем систему rate-limit

Pub/sub — интересный механизм, который позволяет, с одной стороны, подписаться на канал и получать сообщения из него, с
другой стороны — отправлять
в этот канал сообщение, которое будет получено всеми подписчиками. Наверное у многих, кто работал с вебсокетами,
возникла аналогия с этим механизмом,
они действительно очень похожи. Механизм pub/sub не гарантирует доставки сообщений, он не гарантирует консистентности,
поэтому не стоит его
использовать в системах, для которых важны эти критерии. Однако рассмотрим этот механизм на практическом примере.
Предположим, что у нас есть
большое количество демонизированных команд, которыми мы хотим централизованно управлять. При инициализации нашей команды
мы подписываемся на канал,
через который будем получать сообщения с инструкциями. С другой стороны у нас есть управляющий скрипт, который
отправляет сообщения с инструкциям
в указанный канал. К сожалению, стандартный PHP работает в одном блокирующем потоке; для того, чтобы реализовать
задуманное, используем ReactPHP и
реализованный под него клиент Redis.

Подписка на канал:

    class FooDaemon {
    
        private $throttleParam = 10;
    
        public function run()
        {
            $loop = React\EventLoop\Factory::create(); //инициализируем event-loop ReactPHP
            $redisClient = $this->getRedis($loop); //инициализируем клиента Redis для ReactPHP
            $redisClient->subscribe(__CLASS__); // подписываемся на нужный нам канал в Redis, в нашем примере название канала соответствует названию класса
            $redisClient->on('message', static function($channel, $payload) { //слушаем события message, при возникновении такого события, получаем channel и payload
                switch (true) { // Здесь может быть любая логика обработки сообщений, в качестве примера пускай будет так:
                    case \is_int($payload): //Если к нам пришло число – обновим параметр $throttleParam на полученное значение
                        $this->throttleParam = $payload;
                        break;
                    case $payload === 'exit': //Если к нам пришла команда 'exit' – завершим выполнение скрипта
                        exit;
                    default: //Если пришло что-то другое, то просто залогируем это
                        $this->log($payload);
                        break;
                }
            });
    
            $loop->addPeriodicTimer(0, function() {
                $this->doSomeLogick(); // Здесь в бесконечном цикле может выполняться какая-то логика, например чтение задач из очереди и их процессинг
            });
    
            $loop->run(); //Запускаем наш event-loop
        }
    }

Отправка сообщения в канал — более простое действие, мы можем сделать это абсолютно из любого места системы одной
командой:

    public function publishMessage($channel, $message)
    {
        $this->getRedis()->publish($channel, $message);
    }

В результате такой отправки сообщения в канал, все клиенты, которые подписаны на данный канал, получат это сообщение.

#### Pubsub — делаем рассылки сообщений на клиенты

### Memcached [&uarr;](#Caching)

Memcached - программное обеспечение, реализующее сервис кэширования данных в оперативной памяти на основе хеш-таблицы.
Проще говоря, когда страница
сгенерирована, она через memcached помещается в оперативную память, и при последующем обращении к странице незачем её
генерировать снова, затрачивая
время и ресурсы сервера - она попросту берётся из memcached.

Сама технология memcached не предполагает разделение данных, тем более - разделение доступа. В рамках одного веб-сервера
любой пользователь может
использовать memcached, в том числе модифицировать и удалять любые данные. Несмотря на то, что в memcached не хранят
критичные данные, это может
не самым положительным образом сказаться на работе сайта.

Возможности memcached: он очень быстрый, вне зависимости от количества данных, которые мы храним, у него простой
интерфейс — можно засетить (set)
данные, можно получить, через время жизни удалить ключ и т.д.; в memcached поддерживаются атомарные операции —
incr/decr, append/prepend; позволяет
легко расширять количество серверов, и даже падение одного из серверов просто рассчитывается как непопадание в кэш, т.е.
просто нет данных в кэше.

Ограничения memcached: длина ключей максимум 250 байт, объем данных, который можно хранить под одним ключом,
ограничивается 1 Мб. Потеря ключей в
memcached может случаться по времени жизни, по лимиту памяти, либо при отказе сервера.

Для серверного кеширования Memcached подходит очень хорошо — кешировать можно как промежуточные данные (в
сериализованном виде), так и данные,
которые непосредственно «отдаются» пользователям — фрагменты страниц или даже страницы целиком. В случае кеширования
страниц целиком, как правило,
проще реализовать отдачу подобного рода статики на уровне веб-сервера, однако если нагрузка на дисковую подсистему
высока, то стоит помнить, что
Memcached может напрямую работать с веб-сервером (для nginx, например, есть соответствующий модуль), что позволяет на
уровне бекенда писать данные
в кеш, а получать этот кеш можно непосредственно веб-сервером без обращения к бекенду.

В API memcached есть только базовые функции — это выбор сервера, установка и разрыв соединений, добавление, удаление,
обновление и получение
значения по заданному ключу.

Memcached отлично работает в кластере. Распределение реализуется путем сегментирования данных по ключам (по аналогии с
сокетами хеш-таблицы).
Клиент, используя ключ данных, вычисляет его хеш и использует его для выбора соответствующего сервера. Ситуация сбоя
сервера интерпретируется как
промах кэша, что несколько снижает производительность, но никак не мешает дальнейшей работе с ПО (то есть критичных
ошибок не вызывает).

### Redis против Memcached

Memcached — это система кэширования с распределенной памятью, разработанная для простоты и простоты использования и
хорошо подходящая
в качестве кэша или хранилища сеансов.

Redis — это хранилище структур данных в памяти, которое предлагает богатый набор функций. Он полезен в качестве кэша,
базы данных,
брокера сообщений и очереди.

Разница между Redis и Memcached заключается в том, что когда дело доходит до хранения данных, Redis использует
определенные типы
данных, тогда как Memcached использует только строки. Redis поддерживает сохранение на диск, что означает, что данные в
его базе
данных могут быть сохранены и восстановлены в случае сбоя или перезагрузки сервера Redis. Memcached не имеет встроенной
поддержки
сохранения данных на диск.

Redis:

- больше возможностей: очереди, транзакции, различные типы данных
- позволяет хранить до 515 mb в значениях
- поддерживает master-slave репликацию
- можно использовать как постоянное хранилище данных
- производительность сравнима с Memcached

Memcached:

- быстрее чем Redis но на практике эта разница практически незаметна
- хорош в качестве кэша, но есть множество задач с которыми Redis справится не хуже а для некоторых и лучше чем
  Memcached в силу своих возможностей

#### Сходства

Субмиллисекундная задержка

    И Memcached, и Redis предлагают время отклика меньше миллисекунды, сохраняя данные в памяти.

Разделение данных

    Точно так же обе базы данных в памяти позволяют распределять данные между несколькими узлами.

Поддержка языков программирования

    Кроме того, оба поддерживают все основные языки программирования, включая Java, Python, JavaScript, C и Ruby.

Очистка кэша

    Memcached позволяет очистить кеш с помощью команды flush_all . Точно так же Redis позволяет нам удалять все из кеша с помощью таких команд, как FLUSHDB и FLUSHALL .

Масштабирование

    Оба решения для кэширования предлагают высокую масштабируемость для обработки больших данных, когда спрос растет в геометрической прогрессии.

#### Отличия

Командная строка

    Memcached позволяет нам запускать команды , подключаясь к серверу с помощью telnet:
    
        $ telnet 10.2.3.4 5678
        Trying 10.2.3.4...
        Connected to 10.2.3.4.
        
        $ stats
        STAT pid 14868
        STAT uptime 175931
        STAT time 1220540125
        // ...
    
    В отличие от Memcached, Redis поставляется с выделенным интерфейсом командной строки, redis-cli , позволяющим нам выполнять команды :
    
        $ redis-cli COMMAND
         
    Здесь мы выполнили COMMAND , чтобы вывести список всех команд, предоставляемых Redis.

Сброс дискового ввода/вывода

    Memcached обрабатывает дамп диска только с помощью сторонних инструментов, таких как libmemcached-tools, или ответвлений, таких 
    как memcached-dd .
    
    Однако Redis предоставляет легко настраиваемые механизмы по умолчанию, такие как RDB (файл базы данных Redis) или AOF (файлы только
    для добавления) для дампа диска. Это может быть полезно для архивации и восстановления.
    
    Используя redis-cli, мы можем выполнить синхронную команду SAVE , чтобы сделать снимок данных в памяти:
    
        $ redis-cli SAVE
        OK

Структуры данных

    Memcached хранит пары ключ-значение в виде строки и имеет ограничение размера 1 МБ на значение. 
    Однако Redis также поддерживает другие структуры данных, такие как list, set и hash, и может хранить значения размером до 512 МБ .

Репликация

    Memcached поддерживает репликацию со сторонними ответвлениями, такими как repcached .
    
    В отличие от Memcached, Redis предоставляет нам функциональные возможности для увеличения количества кластеров 
    путем репликации основного хранилища для лучшей масштабируемости и высокой доступности.
    
    Во-первых, мы можем использовать команду REPLICAOF для создания реплики главного сервера Redis. Затем мы выполняем 
    команду PSYNC на реплике, чтобы инициировать репликацию с мастера.

Транзакции

    Memcached не поддерживает транзакции, хотя его операции атомарны.
    
    Redis предоставляет готовую поддержку транзакций для выполнения команд.
    
    Мы можем запустить транзакцию с помощью команды MULTI . Затем мы можем использовать команду EXEC для выполнения следующих последующих команд. 
    Наконец, Redis предоставляет команду WATCH для условного выполнения транзакции.

Публикация и подписка на сообщения

    Memcached не поддерживает публикацию/подписку на сообщения «из коробки».
    
    Redis, с другой стороны, предоставляет функциональные возможности для публикации и подписки на сообщения с использованием очередей сообщений публикации/ подписки .
    
    Это может быть полезно при разработке приложений, требующих общения в реальном времени, таких как чаты, каналы социальных сетей и взаимодействие с сервером.
    
    Redis поставляется со специальными командами, такими как PUBLISH , SUBSCRIBE и UNSUBSCRIBE для публикации сообщения в канале, подписки и отмены подписки клиента на указанные каналы соответственно.

Геопространственная поддержка

    Геопространственная поддержка полезна для реализации функций на основе местоположения для наших приложений. В отличие от Memcached, 
    Redis поставляется со специальными командами для управления геопространственными данными в реальном времени .
    
    Например, команда GEODIST вычисляет расстояние между двумя геопространственными элементами. Аналогично, команда GEORADIUS возвращает
    все записи в указанном радиусе.

Архитектура

    Redis использует одно ядро и показывает лучшую производительность, чем Memcached, при хранении небольших наборов данных, если измерять количество ядер.
    
    Memcached реализует многопоточную архитектуру, используя несколько ядер . Поэтому для хранения больших наборов данных Memcached может работать лучше, чем Redis.
    
    Еще одним преимуществом многопоточной архитектуры Memcached является ее высокая масштабируемость, достигаемая за счет использования нескольких вычислительных ресурсов.
    
    Redis может масштабироваться горизонтально с помощью кластеризации, что сравнительно сложнее в настройке и эксплуатации. Кроме того, мы можем использовать Jedis или Lettuce , 
    чтобы включить кластер Redis с помощью приложения Java.

Использование памяти

    Memcached имеет более высокий коэффициент использования памяти, чем Redis, при сравнении структуры данных String.
    Несмотря на это, когда Redis использует хэш-структуру, он обеспечивает более высокую скорость использования памяти, чем Memcached.

#### Когда использовать Memcached

Поскольку Redis новее и имеет больше возможностей, чем Memcached, Redis почти всегда лучший выбор. Тем не менее,
Memcached может быть
предпочтительнее при кэшировании относительно небольших и статических данных, таких как фрагменты кода HTML. Управление
внутренней памятью
Memcached, хотя и не столь сложное, как решение Redis, более эффективно в простейших случаях использования, поскольку
оно потребляет сравнительно
меньше ресурсов памяти для метаданных. Строки (единственный тип данных, поддерживаемый Memcached) идеально подходят для
хранения данных, которые
только читаются, потому что строки не требуют дальнейшей обработки.

Тем не менее, эффективность управления памятью Memcached быстро уменьшается, когда размер данных является динамическим,
после чего память Memcached
может стать фрагментированной. Кроме того, большие наборы данных часто включают в себя сериализованные данные, которые
всегда требуют большего
пространства для хранения. Хотя Memcached эффективно ограничивается хранением данных в его сериализованной форме,
структуры данных в Redis могут
сохранять любой аспект данных изначально, тем самым уменьшая накладные расходы на сериализацию.

Второй сценарий, в котором Memcached имеет преимущество перед Redis, находится в масштабировании. Поскольку Memcached
многопоточен, вы можете легко
увеличить его, предоставив ему больше вычислительных ресурсов, но вы потеряете часть или все кэшированные данные (в
зависимости от того, используете
ли вы постоянное хеширование). Redis, который в основном однопоточный, может масштабироваться горизонтально посредством
кластеризации без потери
данных. Кластеризация представляет собой эффективное масштабирующее решение, но его сравнительно сложно создавать и
управлять им.

#### Когда использовать Redis

Вам почти всегда придётся использовать Redis из-за своих структур данных. С Redis в качестве кеша вы получаете богатый
функционал (например,
возможность тонкой настройки содержимого кеша и долговечность) и бОльшую эффективность в целом. Как только вы
используете структуры данных,
повышение эффективности становится огромным для конкретных сценариев приложений.

Превосходство Redis проявляется почти во всех аспектах управления кешем. Кэши используют механизм, называемый выселением
данных (синоним:вытеснение
данных), чтобы освободить место для новых данных, удалив старые данные из памяти. Механизм выселения данных Memcached
использует алгоритм
Least Recent Used (LRU) и несколько произвольно вытесняет данные, похожие по размеру на новые данные.

Redis, напротив, позволяет осуществлять мелкомасштабный контроль за выселением, позволяя вам выбирать из шести различных
политик выселения.
Redis также использует более сложные подходы к управлению памятью и выбору кандидата на выселение. Redis поддерживает
как пассивное, так и активное
выселение, когда данные вытесняются только тогда, когда требуется больше места или применяется упреждающее вытеснение.
Memcached, с другой стороны,
обеспечивает пассивное выселение.

Redis дает вам большую гибкость в отношении объектов, которые вы можете кэшировать. Хотя Memcached ограничивает имена
ключей до 250 байтов и работает
только с обычными строками, Redis позволяет имена и значения ключей размером до 512 Мбайт каждый, и они могут быть
бинарными. Кроме того, Redis
имеет пять основных структур данных на выбор, открывая миру возможности для разработчика приложений посредством
интеллектуального кэширования и
манипулирования кэшированными данными.



