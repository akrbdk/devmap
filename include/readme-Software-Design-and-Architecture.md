### Enterprise Patterns (Корпоративные шаблоны) [&uarr;](#Readme)

Enterprise patterns are a set of design patterns that are commonly used in the development of enterprise software
applications.
These patterns provide a common vocabulary and a set of best practices for solving common problems that arise in the
development of large,
complex software systems. Some examples of enterprise patterns include:

- Domain-Driven Design (DDD) - Предметно-ориентированное проектирование
- Model-View-Controller (MVC) - «модель-представление-контроллер»
- Service Oriented Architecture (SOA) - Сервис-ориентированная архитектура
- Command and Query Responsibility Segregation (CQRS) — это разделение ответственности за команды и запросы, шаблон,
  который разделяет операции чтения и обновления для хранилища данных.
- Event Sourcing
- Microservices
- Event-Driven Architecture (EDA) - Событийно-ориентированная архитектура

These patterns can help to improve the maintainability and scalability of the software, by providing a clear separation
of concerns and allowing
for a more modular and flexible architecture.

### Programming Paradigms [&uarr;](#Readme)

A programming paradigm is a fundamental style or approach to solving problems using a programming language. Different
programming paradigms provide different ways of organizing and structuring code, and have different strengths and
weaknesses. Some of the most common programming paradigms include:

- Imperative programming — это парадигма, основанная на составлении алгоритма действий (инструкций/команд), которые
  изменяют состояние (информацию/данные/память) программы. Первыми языками программирования, основанными на таком
  подходе, были машинные коды и ассемблеры. Фактически, программа на этих языках — это код, который выполняется
  компьютером сразу, без предварительной компиляции. Из языков высокого уровня, требующих компиляции исходного кода
  программы в машинный код (или интерпретации), к императивным можно отнести C, C++, Java.
- Functional programming — парадигма программирования, в которой процесс вычисления трактуется как вычисление значений
  функций в математическом понимании последних (в отличие от функций как подпрограмм в процедурном программировании).
- Object-oriented programming - задача моделируется в виде объектов, которые отправляют друг другу сообщения. Объекты
  обладают свойствами и методами. Абстракция. Инкапсуляция. Полиморфизм.
- Declarative programming — это парадигма, при которой описывается желаемый результат, без составления детального
  алгоритма его получения. В пример можно привести HTML и SQL. При создании HTML мы с помощью тегов описываем, какую
  хотим получить страничку в браузере, а не то, как нарисовать на экране заголовок статьи, оглавление и текст.
- Structured Programming - программа разбивается на блоки — подпрограммы (изолированные друг от друга), а основными
  элементами управления являются последовательность команд, ветвление и цикл.

### Architectural Styles [&uarr;](#Readme)

Architectural styles in software refer to the overall design and organization of a software system, and the principles
and patterns that are used to guide the design. These styles provide a general framework for the design of a system, and
can be used to ensure that the system is well-structured, maintainable, and scalable.

Some common architectural styles in software include:

- Microservices: where the system is built as a collection of small, independent, and loosely-coupled services.
- Event-Driven: where the system reacts to specific events that occur, rather than being continuously polled for
  changes.
- Layered: where the system is divided into a set of layers, each of which has a specific responsibility and
  communicates with the other layers through well-defined interfaces.
- Service-Oriented: where the system is built as a collection of services that can be accessed over a network.
- Data-Centric: where the system is focused on the storage, retrieval and manipulation of data, rather than the
  processing of data.
- Component-Based: where the system is composed of reusable and independent software components.
- Domain-Driven: where the system is organized around the core business domain and business entities.

### Architectural Patterns [&uarr;](#Readme)

Architectural patterns are a set of solutions that have been proven to work well for specific types of software systems.
They provide a common vocabulary and set of best practices for designing and building software systems, and can help
developers make better design decisions. Some common architectural patterns include:

- Model-View-Controller (MVC): A pattern for separating the user interface, business logic, and data storage components
  of a system.
- Microservices: A pattern for building systems as a collection of small, independently deployable services that
  communicate over a network.
- Event-Driven: A pattern for building systems that respond to events and perform actions in response.
- Layered: A pattern for organizing a system into layers, with each layer providing a specific set of services to the
  layer above it.
- Pipe-and-Filter: A pattern for building systems as a series of independent, reusable processing elements that are
  connected together in a pipeline.
- Command-Query Responsibility Segregation (CQRS): A pattern for separating the handling of commands (which change the
  state of the system) from the handling of queries (which retrieve information from the system)
- Blackboard: A pattern for creating a centralized repository of information that can be accessed and modified by
  multiple independent modules or subsystems.
- Microkernel: A pattern that aims to minimize the amount of code running in kernel mode and move as much functionality
  as possible into user-mode processes.
- Serverless: A design pattern that allows developers to build and run applications and services without having to
  provision and manage servers.
- Message Queues and Streams: A pattern that decouples different components of a system and enables asynchronous
  communication between them.
- Event Sourcing: A pattern that stores all changes to the system’s state as a sequence of events, rather than just the
  current state.