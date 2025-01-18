## PATTERNS

#### [Creational](Creational)

* [ ] [Abstract Factory](Patterns/Creational/AbstractFactory)
* [ ] [Builder](Patterns/Creational/Builder)
* [ ] [Factory Method](Patterns/Creational/FactoryMethod)
* [ ] [Pool](Patterns/Creational/Pool)
* [ ] [Prototype](Patterns/Creational/Prototype)
* [ ] [Simple Factory](Patterns/Creational/SimpleFactory)
* [ ] [Singleton](Patterns/Creational/Singleton)
* [ ] [Static Factory](Patterns/Creational/StaticFactory)

#### [Structural](Structural)

* [ ] [Adapter](Patterns/Structural/Adapter)
* [ ] [Bridge](Patterns/Structural/Bridge)
* [ ] [Composite](Patterns/Structural/Composite)
* [ ] [Data Mapper](Patterns/Structural/DataMapper)
* [ ] [Decorator](Patterns/Structural/Decorator)
* [ ] [Dependency Injection](Patterns/Structural/DependencyInjection)
* [ ] [Facade](Patterns/Structural/Facade)
* [ ] [Fluent Interface](Patterns/Structural/FluentInterface)
* [ ] [Flyweight](Patterns/Structural/Flyweight)
* [ ] [Proxy](Patterns/Structural/Proxy)
* [ ] [Registry](Patterns/Structural/Registry)

#### [Behavioral](Behavioral)

* [ ] [Chain Of Responsibility](Patterns/Behavioral/ChainOfResponsibility)
* [ ] [Command](Patterns/Behavioral/Command)
* [ ] [Interpreter](Patterns/Behavioral/Interpreter)
* [ ] [Iterator](Patterns/Behavioral/Iterator)
* [ ] [Mediator](Patterns/Behavioral/Mediator)
* [ ] [Memento](Patterns/Behavioral/Memento)
* [ ] [Null Object](Patterns/Behavioral/NullObject)
* [ ] [Observer](Patterns/Behavioral/Observer)
* [ ] [Specification](Patterns/Behavioral/Specification)
* [ ] [State](Patterns/Behavioral/State)
* [ ] [Strategy](Patterns/Behavioral/Strategy)
* [ ] [Template Method](Patterns/Behavioral/TemplateMethod)
* [ ] [Visitor](Patterns/Behavioral/Visitor)

#### Other

* [ ] [Service Locator](Patterns/Other/ServiceLocator)
* [ ] [Repository](Patterns/Other/Repository)
* [ ] [Attribute](Patterns/Other/Attribute)

### Creational Patterns

**`Abstract Factory`**  

The Abstract Factory pattern provides a general interface for creating families of related or dependent objects. This approach decouples the system's functionality from the specific implementation of each class, enabling interaction through abstract interfaces.  
In practice, a concrete factory is created for each family of objects (derived from an abstract factory), and this factory is responsible for producing the products within its family.

**`Builder`**  

The Builder pattern defines a step-by-step process for constructing a complex product. Once the final part is built, the product can be used.  
A common use case is an SQL query builder, where the builder interface defines the general steps to construct a basic SQL query, and concrete builders implement these steps to generate query parts compatible with specific SQL dialects.

**`Factory Method`**  

The Factory Method pattern creates objects with a defined interface, implemented by subclasses. This involves a base abstract factory class that specifies the methods each subclass factory must implement to create its products.  
Unlike Abstract Factory (which creates families of different objects interacting with one another), the Factory Method produces objects that conform to a single interface and are unrelated. This design follows the Dependency Inversion Principle, part of S.O.L.I.D.

**`Object Pool`** 

A creational pattern that provides a pool of pre-initialized objects ready for use, avoiding repeated creation and destruction.

**`Prototype`**  

The Prototype pattern creates new objects by cloning an existing original object (prototype). This avoids the cost of creating objects traditionally (`new Foo()`) by creating a prototype and then cloning it.

**`Simple Factory`**  

Unlike Static Factory, a Simple Factory is non-static, allowing multiple factories with varying parameters. Simple Factory is generally preferable to Static Factory.

**`Singleton`**  

The Singleton pattern ensures a class has only one instance and provides a global access point to it via a factory method.

**`Static Factory`**  

Similar to Abstract Factory, this pattern creates related or dependent objects. The difference is that Static Factory uses a single static method (typically named `factory` or `build`) to create all permissible object types.

---

### Structural Patterns

**`Adapter`** 

Used to reuse existing code with incompatible interfaces. An adapter resolves this conflict without modifying the original class by adapting its interface to match the system's requirements.

**`Bridge`** 

Separates an object into abstraction and implementation, allowing them to evolve independently. Ideal when multiple implementations exist for a single abstraction.

**`Composite`** 

Groups similar objects into a tree structure. Leaf nodes represent atomic elements, while branch nodes define behavior for the entire tree and may contain leaves or other branches.

**`Data Mapper`**  

Acts as a mediator for bi-directional data transfer between persistent storage (e.g., a relational database) and in-memory data representations. Unlike Active Record, it adheres to the Single Responsibility Principle (S.O.L.I.D).

**`Decorator`**  

Extends an object's functionality dynamically by wrapping it in new features. Decorators maintain the object's original interface while delegating requests to the wrapped object.

**`Dependency Injection`**  

Promotes loosely coupled architecture for improved testability, maintainability, and scalability.

**`Facade`**  

Provides a unified high-level interface to a subsystem, simplifying its use. It breaks down a complex system into manageable subsystems while offering an easy interaction interface.

**`Fluent Interface`** 

Enables code to read like natural language sentences (e.g., Doctrine2's QueryBuilder or PHPUnit's mock objects).

**`Flyweight`**  

Efficiently supports numerous small objects by reusing instances. A factory creates or retrieves objects on demand, avoiding unnecessary duplication.

**`Proxy`**  

Controls access to another object by implementing the same interface. Common examples include payment cards acting as proxies for cash, maintaining a unified interface for transactions.

**`Registry`**  

Centralized storage for objects frequently used throughout an application. Often implemented using static methods in an abstract class or as a Singleton. However, Dependency Injection is recommended over Registry due to its global state.

---

### Behavioral Patterns

**`Chain of Responsibility`**

Allows multiple objects the chance to handle a request without the sender knowing which object will process it. Objects are linked into a chain, and the request propagates along the chain until handled.

**`Command`**  

Encapsulates a request as an object, enabling queuing, cancellation, or reuse of the request.

**`Interpreter`**  

Defines a grammar for a language and provides an interpreter for processing sentences in that language (e.g., binary logic interpreters).

**`Iterator`**  

Provides a mechanism to traverse collections without exposing their internal structure.

**`Mediator`**  

Centralizes communication between objects, reducing dependencies and enabling independent changes to object interactions.

**`Memento`**  

Captures and restores an object's internal state. Useful for undo functionality.

**`Null Object`**  

Avoids `null` checks by providing a default object with no behavior, simplifying client code.

**`Observer`**  

Establishes a one-to-many dependency so that changes in one object notify all its dependents automatically (e.g., message queue systems displaying progress in a GUI).

**`Specification`**  

Defines clear business rules for object validation. The composite `Specification` class includes an `isSatisfiedBy` method to evaluate objects.

**`State`**  

Allows objects to change behavior based on their state, resembling a finite state machine.

**`Strategy`**  

Defines interchangeable algorithms and encapsulates them in separate classes, allowing runtime behavior changes.