## Поведенческие паттерны (Behavioral)

Поведенческие паттерны делятся на два типа:

1. Паттерны уровня класса
2. Паттерны уровня объекта.

Паттерны уровня класса описывают взаимодействия между классами и их подклассами. Такие отношения выражаются путем
наследования и реализации классов. Тут базовый класс определяет интерфейс, а подклассы - реализацию.

Паттерны уровня объекта описывают взаимодействия между объектами. Такие отношения выражаются связями - ассоциацией,
агрегацией и композицией. Тут структуры строятся путем объединения объектов некоторых классов.

Ассоциация - отношение, когда объекты двух классов могут ссылаться один на другой. Например, свойство класса содержит
экземпляр другого класса.

Агрегация – частная форма ассоциации. Агрегация применяется, когда один объект должен быть контейнером для других
объектов и время существования этих объектов никак не зависит от времени существования объекта контейнера. Вообщем, если
контейнер будет уничтожен, то входящие в него объекты не пострадают. Например, мы создали объект, а потом передали его в
объект контейнер, каким-либо образом, можно в метод объекта контейнера передать или присвоить сразу свойству контейнера
извне. Значит при удалении контейнера мы ни как не затронем наш созданный объект, который может взаимодействовать и с
другими контейнерами.

Композиция – Тоже самое, что и агрегация, но составные объекты не могут существовать отдельно от объекта контейнера и
если контейнер будет уничтожен, то всё его содержимое будет уничтожено тоже. Например, мы создали объект в методе
объекта контейнера и присвоили его свойству объекта контейнера. Из вне, о нашем созданном объекте никто не знает,
значит, при удалении контейнера, созданный объект убудет удален так же, т.к. на него нет ссылки извне.

К паттернам уровня класса относится только «Шаблонный метод».

Поведенческие паттерны описывают взаимодействие объектов и классов между собой и пытаются добиться наименьшей степени
связанности компонентов системы друг с другом делая систему более гибкой.

* [Цепочка ответственности (Chain Of Responsibility)](ChainOfResponsibility)
* [Команда (Command)](Command)
* [Итератор (Iterator)](Iterator)
* [Посредник (Mediator)](Mediator)
* [Хранитель (Memento)](Memento)
* [Наблюдатель (Observer)](Observer)
* [Состояние (State)](State)
* [Стратегия (Strategy)](Strategy)
* [Шаблонный метод (Template Method)](TemplateMethod)
* [Посетитель (Visitor)](Visitor) 

