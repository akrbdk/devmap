
## Компоновщик (Composite)

Паттерн Composite относится к структурным паттернам уровня объекта.

Паттерн Composite группирует схожие объекты в древовидные структуры.

Для построения дерева будут использоваться массивы, представляющие ветви дерева.

Требуется для реализации:

1. Базовый абстрактный класс Component который предоставляет интерфейс, как для ветвей, так и для листьев дерева;
2. Класс Composite, реализующий интерфейс Component и являющийся ветвью дерева;
3. Класс Leaf, реализующий интерфейс Component и являющийся листом дерева.

Обратите внимание, что лист дерева является классом листовых узлов и не может иметь потомков (из листа не может вырасти ветвь или другой лист).

Ветви дерева задают поведение объектов, входящих в структуру дерева, у которых есть потомки, а также сами хранит в себе компоненты дерева. Другим словами ветви могут содержать другие ветви и листья.

Основным назначением паттерна, является обеспечение единого интерфейса как к составному (ветви) так и конечному (листу) объекту, что бы клиент не задумывался над тем, с каким объектом он работает. 
