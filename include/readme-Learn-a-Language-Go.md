
#### Список ссылок

- [A Tour of Go](https://go.dev/tour/welcome/1)
- [Go для PHP-разработчиков](https://pahanini.gitbooks.io/golang-for-php-developers/content/)
- [Effective Go](https://go.dev/doc/effective_go)
- [The Go Programming Language Specification](https://go.dev/ref/spec)
- [Golang для веб-разработки: примеры использования](https://proglib.io/p/golang-dlya-veb-razrabotki-primery-ispolzovaniya-2021-04-20)
- [Go с точки зрения PHP программиста](https://habr.com/ru/post/277987/)


# Golang

`Go (Golang)` — это компилируемый многопоточный язык программирования от Google с открытым исходным кодом. Считается языком 
общего назначения, но основное применение — разработка веб-сервисов и клиент-серверных приложений. 

В основе языка Golang — база лучших функций из языков C и C++, Python, Pascal, Oberon и Modula.

#### Достоинства:

- Простота. Упрощенный синтаксис позволяет уменьшить время на освоение языка и увеличить скорость разработки. Именно это делает Go подходящим для больших корпораций языком. Когда разработкой занимаются сотни программистов одновременно – это имеет значение.
- Быстрая компиляция.
- Хорошая версионность и бесплатные обновления.
- Большое количество библиотек. Многое можно реализовать через простую и понятную библиотеку Go, но также эффективно можно работать и с библиотеками на C.


#### Недостатки:

- Небольшое количество вакансий. Потребность даже в опытных в разработчиках на Go относительно невелика, а вариантов для джуниоров еще меньше.
- Принудительное форматирование. Это спорная особенность, которую не всегда можно считать недостатком: каждый следующий разработчик точно знает, чего ждать от кода предшественника.
- Упрощенный синтаксис иногда создает проблемы. Язык буквально навязывает его, не позволяя писать код по-своему. Если разработчику доступен только единственно верный вариант, сохранить уникальный стиль программирования у него не получится.

#### Для чего используется Go

Изначально Go создавался для программ, связанных с сетями и инфраструктурой, в качестве замены популярных высокопроизводительных серверных 
языков, таких как Java и C++. Сегодня же Go используется как бэкенд-язык для огромного количества различных направлений разработки:

- Облачные и серверные приложения, веб-сервисы
- DevOps и автоматизация процессов
- Приложения для работы с командной строкой
- Искусственный интеллект и работа с большими данными
- Программирование микроконтроллеров и робототехники.

Однако лучше всего Go раскрывается как язык программирования для работы с инфраструктурой. Самые популярные инструменты в этой 
области написаны именно на Go — Kubernetes, Docker и Prometheus.

### Особенности языка

#### Компилируемость

Исходный код преобразуется в машинный с помощью компилятора. Официальный компилятор Golang работает в UNIX-подобных операционных 
системах, включая macOS, а также в Linux и Windows. Среди мобильных ОС компилятор Go поддерживает Android. Существуют также 
независимые компиляторы, созданные сторонними разработчиками.

#### Многопоточность

Поддержка нескольких потоков по умолчанию упрощает написание кода для мощных приложений. Для этого в языке программирования Go 
есть горутины и каналы.

#### Строгая статическая типизация

При создании переменной тип данных объявляется сразу — например, строка или число. За все время существования переменная 
может принимать значение только указанного типа. Неиспользуемые переменные определяются как ошибка компиляции. Благодаря явному 
указанию зависимостей код легко собирать из составных частей, что облегчает разработку крупных проектов.

#### Понятный и простой синтаксис

Нет объектов, классов и наследования, которые усложняют код и его изменения. Он доступен новичкам и прост в изучении. Официальное 
руководство Go занимает всего 50 страниц, просто читается и содержит примеры.

Также упрощенный синтаксис позволяет быстро прочитать чужой код — слева направо. Стандарты, обозначения или комментарии не требуются. 
Это важно в командной работе.

Пример кода:

    package main
    import "fmt"
    func main() {
        fmt.Println("hello world")
    }

#### Инструменты для разработчиков

В Go есть инструменты, которые ускоряют разработку и помогают решать разные задачи:

- `typecheck` проверит соответствие типов в коде;
- `gas` найдет уязвимости;
- `go vet` поможет обнаружить ошибки в коде;
- `gofmt` правильно отформатирует код, проставит пробелы для выравнивания и табы для отступа;
- `godoc` найдет комментарии и подготовит из них мануал к программе, и другие.

Также в `Go` от `Google` есть пакет `pprof`. Он позволяет узнать, какие фрагменты кода выполняются очень долго, где программа 
сильно нагружает процессор или занимает много памяти. Результат работы представлен в виде текстового отчета, профайла. 
Для его использования нужна утилита `graphviz`.

#### Наличие «сборщика мусора»

Это алгоритм, который сканирует код, находит объекты, замедляющие его работу, и удаляет их. «Сборщик мусора» обеспечивает 
высокую скорость исполнения программ и эффективное использование ресурсов. В некоторых языках общего назначения «сборщиков мусора» 
нет и память приходится очищать вручную — как, например, в C++.

#### Кроссплатформенность

Язык от Google поддерживается на Windows, Linux, macOS, Android. Также он работает с FreeBSD, OpenBSD и другими UNIX-системами. 
Код также обладает переносимостью: программы, написанные для одной из этих операционных систем, могут быть легко с перекомпиляцией 
перенесены на другую ОС.

#### Нехватка конструкций для ООП

Язык Go поддерживает не все возможности объектно-ориентированного программирования. Например, в нем нет классов и наследования. 
Это тоже намеренное решение для упрощения кода, чтобы добиться минимума избыточности и обеспечить высокую скорость исполнения программ.

#### Полная поддержка Unicode

Кодировка символов Unicode — самая полная из существующих, в нее входят практически все знаки и буквы, которые есть в мире. 
Многие языки требуют подключать поддержку этой кодировки отдельно, но в Go строковые данные по умолчанию представлены в Unicode.





