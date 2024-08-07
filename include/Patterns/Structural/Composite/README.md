## Компоновщик (Composite)

Паттерн Composite относится к структурным паттернам уровня объекта.

Паттерн Composite группирует схожие объекты в древовидные структуры.

## Пример

Для построения дерева будут использоваться массивы, представляющие ветви дерева.

Требуется для реализации:

1. Базовый абстрактный класс Component который предоставляет интерфейс, как для ветвей, так и для листьев дерева;
2. Класс Composite, реализующий интерфейс Component и являющийся ветвью дерева;
3. Класс Leaf, реализующий интерфейс Component и являющийся листом дерева.

Обратите внимание, что лист дерева является классом листовых узлов и не может иметь потомков (из листа не может вырасти
ветвь или другой лист).

Ветви дерева задают поведение объектов, входящих в структуру дерева, у которых есть потомки, а также сами хранит в себе
компоненты дерева. Другим словами ветви могут содержать другие ветви и листья.

Основным назначением паттерна, является обеспечение единого интерфейса как к составному (ветви) так и конечному (листу)
объекту, что бы клиент не задумывался над тем, с каким объектом он работает.

## Применимость

### Когда вам нужно представить древовидную структуру объектов.

    Паттерн Компоновщик предлагает хранить в составных объектах ссылки на другие простые или составные объекты. Те, в свою очередь, тоже могут хранить свои вложенные объекты и так далее. В итоге вы можете строить сложную древовидную структуру данных, используя всего две основные разновидности объектов.

### Когда клиенты должны единообразно трактовать простые и составные объекты.

    Благодаря тому, что простые и составные объекты реализуют общий интерфейс, клиенту безразлично, с каким именно объектом ему предстоит работать.

## Шаги реализации

1. Убедитесь, что вашу бизнес-логику можно представить как древовидную структуру. Попытайтесь разбить её на простые
   компоненты и контейнеры. Помните, что контейнеры могут содержать как простые компоненты, так и другие вложенные
   контейнеры.

2. Создайте общий интерфейс компонентов, который объединит операции контейнеров и простых компонентов дерева. Интерфейс
   будет удачным, если вы сможете использовать его, чтобы взаимозаменять простые и составные компоненты без потери
   смысла.

3. Создайте класс компонентов-листьев, не имеющих дальнейших ответвлений. Имейте в виду, что программа может содержать
   несколько таких классов.

4. Создайте класс компонентов-контейнеров и добавьте в него массив для хранения ссылок на вложенные компоненты. Этот
   массив должен быть способен содержать как простые, так и составные компоненты, поэтому убедитесь, что он объявлен с
   типом интерфейса компонентов.

5. Реализуйте в контейнере методы интерфейса компонентов, помня о том, что контейнеры должны делегировать основную
   работу своим дочерним компонентам.

6. Добавьте операции добавления и удаления дочерних компонентов в класс контейнеров.

7. Имейте в виду, что методы добавления/удаления дочерних компонентов можно поместить и в интерфейс компонентов. Да, это
   нарушит принцип разделения интерфейса, так как реализации методов будут пустыми в компонентах-листьях. Но зато все
   компоненты дерева станут действительно одинаковыми для клиента.

## Преимущества и недостатки

    + Упрощает архитектуру клиента при работе со сложным деревом компонентов.
    + Облегчает добавление новых видов компонентов.

    - Создаёт слишком общий дизайн классов.

## Отношения с другими паттернами

1. `Строитель` позволяет пошагово сооружать дерево `Компоновщика`.

2. `Цепочку обязанностей` часто используют вместе с `Компоновщиком`. В этом случае запрос передаётся от дочерних
   компонентов к их родителям.

3. Вы можете обходить дерево `Компоновщика`, используя `Итератор`.

4. Вы можете выполнить какое-то действие над всем деревом `Компоновщика` при помощи `Посетителя`.

5. `Компоновщик` часто совмещают с `Легковесом`, чтобы реализовать общие ветки дерева и сэкономить при этом память.

6. `Компоновщик` и `Декоратор` имеют похожие структуры классов из-за того, что оба построены на рекурсивной вложенности.
   Она позволяет связать в одну структуру бесконечное количество объектов.

7. `Декоратор` оборачивает только один объект, а узел `Компоновщика` может иметь много детей. `Декоратор` добавляет
   вложенному объекту новую функциональность, а `Компоновщик` не добавляет ничего нового, но «суммирует» результаты всех
   своих детей.

8. Но они могут и сотрудничать: `Компоновщик` может использовать `Декоратор`, чтобы переопределить функции отдельных
   частей дерева компонентов.

9. Архитектура, построенная на `Компоновщиках` и `Декораторах`, часто может быть улучшена за счёт внедрения `Прототипа`.
   Он позволяет клонировать сложные структуры объектов, а не собирать их заново.



