ENG NOTES

## What are the most important PHP Developer interview questions?

When interviewing PHP engineers, open-ended questions can be used to spark further discussion:

# General Questions/Ice Breaker

1. **Tell us about your most recent project.**
    - In my most recent project, I developed a web application using PHP and Laravel framework. It involved creating a
      secure authentication system, integrating third-party APIs for data fetching, and optimizing database queries for
      better performance.

2. **Do you ever do any coding in your personal time (outside of work)?**
    - Yes, I enjoy working on personal projects during my spare time. It helps me explore new technologies and improve
      my skills.

3. **Do you have a GitHub account?**
    - Yes, I have a GitHub account where I showcase some of my personal projects and contribute to open-source
      repositories.

4. **If so, what are some examples of repos you follow?**
    - I follow repositories related to Laravel, Symfony, and various PHP libraries that interest me. I also keep an eye
      on repositories that focus on best practices and new developments in PHP programming.

5. **Tell us what critical problems you have to handle in your latest projects?**
    - In my latest projects, handling scalability issues, ensuring data security, and optimizing performance were
      critical challenges. Implementing efficient caching strategies and designing robust APIs were key solutions.

6. **Why did you get into development?**
    - I got into development because I have always been fascinated by creating software that solves real-world problems
      efficiently. It allows me to constantly learn and challenge myself.

7. **How many technical books did you read in the past year?**
    - I read around three technical books last year, focusing on advanced PHP programming, software architecture, and
      design patterns.

8. **What was your favorite technical book in the past year? What did you learn from it?**
    - My favorite technical book was "Clean Code" by Robert C. Martin. It taught me valuable principles on writing
      maintainable and understandable code, which has significantly influenced my coding practices.

9. **What websites do you read regularly, related to development?**
    - I regularly read websites like Stack Overflow, Medium (for tech blogs), Laravel News, and GitHub repositories of
      popular PHP projects.

10. **Do you maintain any open-source projects?**
    - Yes, I contribute to a few open-source projects on GitHub. I believe in giving back to the community and learning
      from collaborative development.

11. **Do you code in your spare time?**
    - Absolutely, coding in my spare time allows me to experiment with new technologies, refine my skills, and work on
      projects that interest me personally.

12. **Do you love programming, or do you do it for the money?**
    - I love programming because it challenges me intellectually, allows me to create meaningful solutions, and
      contributes to technological advancement. Money is a secondary motivation.

13. **Have you accomplished anything important in your career yet? Do you want to?**
    - Yes, I've successfully led projects that significantly improved performance and user experience. I aspire to
      continue growing and contributing to impactful projects.

14. **What would make you feel that you have done something important?**
    - I would feel accomplished knowing that my work has positively impacted users, solved complex problems effectively,
      and inspired others in the development community.

15. **What's your favorite programming language? Why?**
    - My favorite programming language is PHP because of its versatility, strong community support, and the vast
      ecosystem of frameworks and libraries like Laravel that simplify web development.

16. **If you could add one feature to your favorite language, what would it be? Why?**
    - If I could add one feature to PHP, it would be native support for asynchronous programming. This would greatly
      improve handling of I/O-bound operations and enhance performance in web applications.

17. **If you could remove one feature from it, what would it be? Why?**
    - I would consider removing the `mysql_*` functions from PHP due to their deprecated status and security risks
      associated with SQL injection vulnerabilities. It would encourage developers to adopt modern database access
      methods.

18. **Suppose you could design your dream job that you'll be starting on Monday. It's at your ideal company with your
    ideal job title and salary. All you have to do is tell them what you want to do at your job and you can have it.
    What does your job entail?**
    - My dream job would involve working as a Senior PHP Developer at a tech-forward company known for innovation and
      supportive teamwork. I would lead projects, mentor junior developers, and collaborate with cross-functional teams
      to deliver scalable and secure web applications. Additionally, I would have opportunities for continuous learning,
      contribute to open-source projects, and participate in shaping technical strategies that drive the company's
      growth.

# Backend Questions

##ОБЩЕЕ

### What PHP frameworks have you worked with, and what has your experience with each been like?

I have experience with several PHP frameworks, including:

1. **Laravel**: I find Laravel to be robust and developer-friendly. It provides a wide range of features out-of-the-box
   such as ORM, routing, and authentication, which accelerate development.

2. **Symfony**: Symfony offers great flexibility and follows best practices in software design. It's well-suited for
   large-scale projects due to its modular architecture and extensive documentation.

### Can you provide an example of a recent PHP project you have contributed to that makes you proud?

Certainly! Recently, I contributed to an e-commerce platform built with Laravel. I was responsible for implementing a
real-time order tracking feature using Laravel Echo and WebSockets. This feature allowed customers to receive live
updates on their order status, enhancing their overall shopping experience.

### Which template engines have you used, which do you prefer, and why?

I have used **Twig** extensively in PHP projects due to its clean syntax, strong documentation, and robust feature set.
Twig’s separation of concerns and its easy-to-read syntax make it my preferred choice. It helps maintain a clear
distinction between PHP logic and presentation, facilitating collaboration between front-end and back-end developers.

Certainly! Here are the questions and answers formatted in Markdown with English translations:

### How does the internet work?

The internet is a global network of interconnected computers that communicate via standardized protocols.

### Name types of network protocols.

Some common network protocols include HTTP, FTP, SMTP, and TCP/IP.

### Tell me about DNS.

DNS (Domain Name System) translates domain names into IP addresses, facilitating access to websites and other internet
resources.

### Tell me about Proxy servers, VPN.

Proxy servers and VPNs act as intermediaries between a user and the internet, enhancing privacy, security, and access
control.

### Tell me about HTTPS and why it's necessary.

HTTPS (Hyper Text Transfer Protocol Secure) encrypts data transmitted over the internet, ensuring secure communication
between clients and servers.

### Explain the concept of network architecture.

Network architecture refers to the design and structure of a network, including hardware, software, protocols, and
configurations.

### Explain gitflow, cherry-pick, revert.

- **Gitflow:** A branching model that defines a standard for organizing branches in a Git repository.
- **Cherry-pick:** Selectively applies a single commit from one branch to another.
- **Revert:** Reverts a commit or a range of commits, creating a new commit to reverse the changes.

### Explain how to transfer changes from one branch to another (2 ways).

Changes can be transferred between branches using `git merge` or `git rebase`.

### Explain how to create a branch (2 ways).

Branches can be created using `git branch <branch_name>` or `git checkout -b <branch_name>`.

### What are the differences between rebase and merge - description of rebase, merge, stash.

- **Rebase:** Incorporates changes from one branch into another by reapplying each commit on top of the destination
  branch.
- **Merge:** Integrates changes from different branches by creating a merge commit.
- **Stash:** Temporarily stores changes that are not ready to be committed, allowing switching branches without losing
  work.

### Functions of regular expressions in PHP.

Regular expressions in PHP are used for pattern matching and string manipulation tasks like validation, searching, and
replacing.

### Difference between composer install and composer update.

- `composer install`: Installs the dependencies defined in `composer.lock` file.
- `composer update`: Updates all dependencies to their latest versions according to the `composer.json` file.

### Tell me about PSR standards, Coding Standards.

PSR (PHP Standards Recommendation) standards are guidelines for writing PHP code that promote interoperability and
consistency across projects.

### Steps to optimize a website.

Website optimization involves improving performance through techniques like upgrading PHP version, optimizing code,
caching, and streamlining processes.

### Explain absolute and relative paths on a server.

- **Absolute path:** Specifies the full path starting from the root directory.
- **Relative path:** Specifies the path relative to the current directory.

### Technologies for improving PHP performance.

Improving PHP performance includes upgrading PHP version, optimizing code (e.g., reducing database queries), caching (
e.g., OPCache), and optimizing server processes.

### Explain Web sockets.

Web sockets provide a full-duplex communication channel over a single, long-lived connection between a client and a
server.

### Key differences between Apache Kafka and RabbitMQ.

Apache Kafka is designed for high-throughput, low-latency messaging, while RabbitMQ focuses on flexibility and
developer-friendliness with support for multiple messaging protocols.

### Explain Monolithic-Apps vs. Microservices.

- **Monolithic-Apps:** Single-tiered software application where components are interconnected and interdependent.
- **Microservices:** Architectural style where an application is composed of small, independent services that
  communicate through APIs.

### Explain Hexagonal Architecture.

Hexagonal architecture (Ports and Adapters) promotes loosely coupled application components by separating domain logic
from input/output and infrastructure concerns.

### Explain Twelve Factor Apps.

Twelve Factor Apps are best practices for building modern, scalable web applications emphasizing factors like
configuration management, dependency management, and disposability.

### Explain KISS, DRY, YAGNI, BDUF, SOLID, APO, and Occam's Razor.

- **KISS:** Keep It Simple, Stupid - advocate for simplicity.
- **DRY:** Don't Repeat Yourself - avoid redundancy.
- **YAGNI:** You Ain't Gonna Need It - avoid unnecessary complexity.
- **BDUF:** Big Design Up Front - opposite of agile methodologies.
- **SOLID:** Object-oriented design principles.
- **APO:** Avoid Premature Optimization - optimize when necessary.
- **Occam's Razor:** Principle of simplicity.

### Explain Design Patterns.

Design patterns are reusable solutions to common software design problems that help in designing flexible and reusable
software.

### Explain Domain Driven Design.

Domain Driven Design (DDD) is an approach to software development that focuses on understanding and modeling the domain
of the problem to create a more effective and maintainable system.

### Explain Test Driven Development (TDD).

TDD is a software development process where tests are written before the code, guiding the development by defining the
desired behavior of the code.

### Explain Integration Testing.

Integration testing verifies the interaction between different software components or modules to ensure they work
together as expected.

### Explain Unit Testing.

Unit testing tests individual units or components of a software application in isolation.

### Explain Functional Testing.

Functional testing tests the functionalities of a software application by providing input and examining the output.

### Explain Hash Algorithms.

Hash algorithms are cryptographic algorithms that generate fixed-size hashes (digests) from variable-length input data,
used for data integrity verification and security.

### Explain Spam Protection - suggest an interesting method.

Implementing honey pots or using CAPTCHA systems are effective methods to protect against spam.

### Explain Protection against form resubmission.

Use techniques like generating unique tokens (CSRF tokens) or redirecting after form submission to prevent accidental
form resubmission.

### Explain htaccess and its tasks (authorization, URL rewriting, settings modification), mod_rewrite.

`.htaccess` is a configuration file for Apache web servers used for URL rewriting, authorization and authentication
control, and server settings modification. `mod_rewrite` is an Apache module used for URL rewriting.

### Explain Sessions and Cookies, when to use each.

Sessions store user-specific data on the server, whereas cookies store data on the client side. Sessions are typically
used for sensitive information and managing user state, while cookies are used for personalization and tracking.

### Explain Microservices patterns.

Microservices patterns include service discovery, circuit breaker, centralized configuration, and API gateway patterns.

### Explain FastCGI or PHP-FPM.

FastCGI (Fast Common Gateway Interface) and PHP-FPM (PHP FastCGI Process Manager) are methods for executing PHP scripts
efficiently in web servers.

### Explain Authentication and Authorization.

Authentication verifies the identity of a user, while authorization determines whether a user has permission to access a
resource.

### Explain Caching - Client side, CDN, OPCache, Redis, Memcached.

Caching improves performance by storing frequently accessed data. Types include client-side caching, Content Delivery
Network (CDN) caching, OPCache for PHP bytecode caching, and external caching with Redis or Memcached.

### Explain Redis vs Memcached.

- **Redis:** In-memory data structure store with support for various data types and persistence options.
- **Memcached:** In-memory key-value store for caching data, simpler and faster but lacks some advanced features of
  Redis.

### Explain REST and SOAP.

- **REST (Representational State Transfer):** Architecture style for designing networked applications, using HTTP
  methods (GET, POST, PUT, DELETE).
- **SOAP (Simple Object Access Protocol):** Protocol for exchanging structured information in the implementation of web
  services.

### Explain API Authentication Types.

API authentication types include HTTP Basic Authentication, API keys, OAuth, and JWT (JSON Web Tokens).

### Explain JWT.

JWT (JSON Web Token) is a compact, URL-safe means of securely transmitting information between parties as a JSON object.

### Explain Docker.

Docker is a platform for developing, shipping, and running applications using containerization technology.

### Explain Php 8, what's new.

PHP 8 introduced improvements such as Just-In-Time compilation (JIT), Union Types, Named Arguments, Attributes, Match
Expression, and improvements in performance and error handling.

### Explain Algorithms in PHP.

Algorithms in PHP refer to logic or set of rules to accomplish a specific task like sorting arrays, searching, or
mathematical operations.

### Explain Anonymous functions, closures. Provide examples of when, why, and how they can be used.

Anonymous functions (closures) are functions without a specified name that can be used as arguments or assigned to
variables. They are useful for callbacks, event handling, and encapsulating behavior within a limited scope.

### Explain Variable Scope in PHP.

Variable scope refers to the accessibility of variables in different parts of a PHP script. PHP supports local, global,
static, and class-level (property) scopes.

### Explain the internal structure of arrays in PHP?

Arrays in PHP are implemented as ordered maps, allowing for the association of keys with values. They can store multiple
values under a single variable name.

### What are Generators? When can they be used instead of iterators and regular arrays? What are the purposes of the yield and send keywords?

Generators in PHP allow for the iterative generation of a sequence of values without needing to store them all in memory
simultaneously. They can be used instead of iterators and regular arrays for handling large datasets efficiently. The
`yield` keyword returns a value from a generator function, while `send` allows passing a value back to the generator.

### Explain Encapsulation/Inheritance/Polymorphism.

- **Encapsulation:** Bundling of data and methods that operate on the data into a single unit (class).
- **Inheritance:** Mechanism where a class inherits properties and behaviors from another class.
- **Polymorphism:** Ability of an object to take on many forms; for example, a method can be implemented differently in
  different classes.

### Explain SOLID

, Kiss, Dry.

- **SOLID:** Object-oriented design principles (Single Responsibility, Open-Closed, Liskov Substitution, Interface
  Segregation, Dependency Inversion).
- **KISS:** Keep It Simple, Stupid - principle of simplicity in design and coding.
- **DRY:** Don't Repeat Yourself - principle of reducing repetition in code by abstraction and reusability.

### Explain MVC.

MVC (Model-View-Controller) is a design pattern that separates an application into three main components: Model (data),
View (presentation layer), and Controller (logic layer).

### Explain Managing error output in PHP/Apache, where to find logs on the server.

Error handling in PHP/Apache can be managed through configuration settings (`php.ini`, `.htaccess`) to control error
reporting and logging. Logs are typically found in directories like `/var/log/apache2` or specified paths in server
configurations.

### Explain the three differences between hash functions and encryption functions.

- **Hash Functions:** One-way transformation to generate a fixed-size hash from data, used for data integrity.
- **Encryption Functions:** Two-way transformation using a key to encrypt and decrypt data, used for data
  confidentiality.
- Differences: Hash functions are irreversible, while encryption functions are reversible. Hash functions produce
  fixed-length outputs, while encryption functions can produce variable-length outputs. Hash functions are
  deterministic, producing the same hash for the same input, while encryption functions with the same input and key can
  produce different outputs due to randomness.

### Explain NoSQL Databases.

NoSQL databases are non-relational databases that provide flexible schema designs and horizontal scalability, suitable
for handling large volumes of unstructured or semi-structured data.

### Explain Relational Databases.

Relational databases store data in tables with predefined schema and relationships between tables, using SQL for
querying and manipulating data.

### Explain ACID.

ACID (Atomicity, Consistency, Isolation, Durability) is a set of properties ensuring database transactions are processed
reliably.

### Explain Race Condition.

A race condition occurs in concurrent execution when the outcome of operations depends on the timing or interleaving of
threads or processes.

### Explain Transactions.

Transactions in databases are units of work that are executed as a single, indivisible operation, ensuring data
integrity and consistency.

### Explain the N+1 Problem.

The N+1 problem refers to inefficient querying in ORM (Object-Relational Mapping) frameworks where a query to retrieve
related objects results in N+1 database queries, impacting performance.

### Explain the difference between SQL and MySQL?

- **SQL:** Structured Query Language, a standard language for relational database management systems.
- **MySQL:** A popular open-source relational database management system that uses SQL as its query language.
- Difference: SQL is a language standard, while MySQL is an implementation of a relational database system using SQL.

### Explain SQL subsets.

SQL subsets include Data Definition Language (DDL), Data Manipulation Language (DML), Data Control Language (DCL), and
Transaction Control Language (TCL).

### Explain what is meant by a table and a field in SQL?

- **Table:** A collection of data organized into rows and columns in a relational database.
- **Field:** A column in a table that represents a specific attribute of the data being stored.

### Explain MySQL table types, innodb, myisam.

- **InnoDB:** A MySQL storage engine that provides transactional support, foreign key constraints, and crash recovery
  capabilities.
- **MyISAM:** A MySQL storage engine known for its simplicity and speed, lacking transaction support and foreign key
  constraints.

### Explain Transactions, isolation levels.

Transactions in databases are sets of operations executed as a single unit. Isolation levels define how transactions
interact with each other, ensuring consistency and concurrency control.

### Explain Table Locking.

Table locking is a mechanism in databases where a table is locked for exclusive access by a transaction, preventing
other transactions from modifying the same table concurrently.

### Explain caching in MySQL.

Caching in MySQL improves performance by storing frequently accessed data in memory, reducing the need to fetch data
from disk.

### Explain Stored Procedures.

Stored procedures are precompiled SQL statements stored in a database, providing modularity, security, and performance
benefits.

### Explain Models for Storing Trees.

Models for storing trees in databases include adjacency list, nested set, and materialized path, each with its own
advantages and disadvantages in terms of performance and ease of manipulation.

### Explain Database vulnerabilities, hacking methods, password encryption.

Database vulnerabilities can be exploited through SQL injection, insecure configurations, or weak authentication
mechanisms. Passwords should be encrypted using strong hashing algorithms like bcrypt or Argon2.

### Explain Sharding, Partitioning, Replication.

- **Sharding:** Horizontal partitioning of data across multiple databases or servers to improve scalability.
- **Partitioning:** Dividing large tables into smaller, manageable parts (partitions) for performance and management
  purposes.
- **Replication:** Process of copying and maintaining data across multiple servers to improve availability and
  redundancy.

### Explain Optimizing Database Structure, query optimization.

Optimizing database structure involves normalization, indexing, and partitioning to improve data integrity, performance,
and storage efficiency. Query optimization focuses on improving the performance of SQL queries by using indexes,
optimizing joins, and rewriting queries.

### Explain What is an Index? Describe different types of indexes.

An index in a database is a data structure that improves the speed of data retrieval operations on a table. Types of
indexes include B-tree indexes, hash indexes, and full-text indexes.

### Explain Table Field Order.

Table field order refers to the sequence in which columns are defined within a table. While not critical for
functionality, organizing fields logically can enhance readability and maintenance.

### Explain What is a Primary Key?

A primary key in a relational database is a column or set of columns that uniquely identifies each row in a table. It
enforces entity integrity and supports relationships between tables.

### Explain What is a Unique Key (Unique Constraint)?

A unique key (or unique constraint) ensures that all values in a column (or a group of columns) are distinct from one
another, except for NULL values if allowed.

### Explain What is a Foreign Key?

A foreign key in a relational database is a field (or a set of fields) that references the primary key of another table.
It establishes a relationship between two tables, enforcing referential integrity.

### Explain the second way to select data from multiple tables besides JOIN and why it should not be used.

Another way to select data from multiple tables is by using nested subqueries or cartesian joins, but it should be
avoided due to performance issues, complexity, and potential for producing incorrect results.

### Explain Data Types.

Data types in databases specify the type of data that can be stored in a column of a table, such as integer, float,
string, date, etc.

### Explain the difference between WHERE and HAVING.

- **WHERE:** Clause used in SQL to filter records before any groupings are made.
- **HAVING:** Clause used in SQL to filter records after groupings are made, based on aggregate values.

### Explain the difference between CHAR and VARCHAR data types in SQL?

- **CHAR:** Fixed-length character data type in SQL, suitable for storing strings of a consistent length.
- **VARCHAR:** Variable-length character data type in SQL, suitable for storing strings of varying lengths up to a
  maximum defined length.

### Explain the difference between DELETE and TRUNCATE commands.

- **DELETE:** SQL command used to remove rows from a table based on a condition, with the option to roll back the
  operation using transactions.
- **TRUNCATE:** SQL command used to remove all rows from a table, resetting auto-incremented columns, and cannot be
  rolled back.

### Explain the difference between DROP and TRUNCATE commands.

- **DROP:** SQL command used to delete a table, removing its definition and all associated data, which cannot be rolled
  back.
- **TRUNCATE:** SQL command used to delete all rows from a table while keeping its structure intact, resetting
  auto-incremented columns, and cannot be rolled back.

### Explain Constraints.

Constraints in SQL are rules defined on a table column to enforce data integrity. Examples include primary key, foreign
key, unique, and check constraints.

### Explain What do you mean by "trigger" in SQL?

A trigger in SQL is a special type of stored procedure that automatically executes in response to certain events (e.g.,
INSERT, UPDATE, DELETE) on a table.

### Do NULL values match zero or blank values?

No, NULL values do not match zero or blank values in SQL. NULL represents the absence of a value.

### How do you view a list of hanging queries, SHOW PROCESSLIST?

SHOW PROCESSLIST is a SQL command used to view a list of currently executing queries and their status in a MySQL
database.

### How do you display a list of databases and tables in a database?

To display a list of databases, use the command `SHOW DATABASES;`. To display a list of tables in a specific database,
use `SHOW TABLES FROM <database_name>;`.

### Explain the EXPLAIN command, analysis of slow queries.

EXPLAIN is a SQL command used to analyze and optimize SQL queries by providing information about how MySQL executes the
query and accesses tables and indexes.

### Explain Inheritance and Composition.

- **Inheritance:** Object-oriented concept where a class (subclass) inherits properties and behaviors from another
  class (superclass).
- **Composition:** Design principle where objects are composed of other objects as parts, promoting code reuse and
  flexibility without the tight coupling of inheritance.

### Explain DTO: immutability, readonly modifier, type hinting.

- **DTO (Data Transfer Object):** An object used to encapsulate data and transfer it between application layers or
  modules.
- **Immutability:** DTOs are often designed as immutable objects to ensure data consistency and thread safety.
- **Readonly Modifier:** In PHP, the `readonly` modifier (from PHP 8.1) ensures that properties cannot be modified after
  object instantiation.
- **Type Hinting:** Specifying the expected

data type of function parameters or return values to improve code readability and reliability.

# ПО ГРЕЙДАМ

# Junior

## Общие вопросы

### 1. What are references?

References in PHP allow two variables to refer to the same content. Using references, you can alter a variable through
another variable that references it.

### 2. What are the main operations using references?

The primary operations using references include assigning by reference, passing by reference, and returning by
reference.

### 3. Name simple data types supported in PHP.

- Integer
- Float (double)
- String
- Boolean
- Array
- Object
- NULL
- Resource

### 4. What is increment and decrement? What is the difference between prefix and postfix increment and decrement?

Increment increases a variable's value by one, while decrement decreases it by one.

- Prefix (++$var / --$var): Changes the variable's value and then returns it.
- Postfix ($var++ / $var--): Returns the variable's value and then changes it.

### 5. What is recursion?

Recursion is a programming technique where a function calls itself to solve smaller instances of the same problem.

### 6. What is the difference between =, ==, and ===?

- `=`: Assignment operator, assigns a value to a variable.
- `==`: Equality operator, checks if two values are equal (type conversion is performed if necessary).
- `===`: Identity operator, checks if two values are equal and of the same type.

### 7. What OOP principles do you know?

- Encapsulation
- Inheritance
- Polymorphism
- Abstraction

### 8. What type system is used in PHP? Describe its pros and cons.

PHP uses a dynamic and loosely typed system.
**Pros:**

- Flexibility
- Easier to write code without strict type constraints
  **Cons:**
- Increased chances of runtime errors
- Potential performance overhead due to type checking

### 9. What are the differences between the keywords: include and require, mysql_connect and mysql_pconnect?

- `include` vs `require`: Both include and evaluate a specified file. `require` will produce a fatal error (
  E_COMPILE_ERROR) and stop the script if the file cannot be included, whereas `include` will only produce a warning (
  E_WARNING).
- `mysql_connect` vs `mysql_pconnect`: `mysql_connect` opens a new connection to the database. `mysql_pconnect` opens a
  persistent connection, which is not closed when the script ends and can be reused.

### 10. What are interfaces? Do you use them? If yes, describe how.

Interfaces in PHP define methods that a class must implement without providing the method's implementation. They ensure
that classes adhere to a specific contract.

```php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        // Implementation for logging to a file
    }
}
```

### 11. What is an abstract class and how does it differ from an interface?

An abstract class can provide both abstract methods (without implementation) and concrete methods (with implementation).
An interface can only declare methods without implementations.

```php
abstract class Shape {
    abstract protected function getArea();
}

class Circle extends Shape {
    protected function getArea() {
        // Implementation for circle area
    }
}
```

### 12. Can an abstract class contain a private method?

Yes, an abstract class can contain private methods.

### 13. What visibility modifiers are there in PHP?

- `public`: Accessible from anywhere.
- `protected`: Accessible within the class itself and by inheriting and parent classes.
- `private`: Accessible only within the class itself.

### 14. What magic methods do you know and how are they used?

Magic methods include `__construct`, `__destruct`, `__call`, `__get`, `__set`, `__isset`, `__unset`, `__sleep`,
`__wakeup`, `__toString`, `__invoke`, `__clone`, `__debugInfo`.
They are used to define custom behaviors for common operations like object creation, method calling, property access,
and more.

### 15. What are generators and how to use them?

Generators provide an easy way to iterate over data without creating an array in memory. They use the `yield` keyword.

```php
function numbers() {
    for ($i = 0; $i < 5; $i++) {
        yield $i;
    }
}

foreach (numbers() as $number) {
    echo $number;
}
```

### 16. What does the `yield` operator do?

The `yield` operator allows a function to return a value and then resume execution from the same point when called
again.

### 17. What are traits? An alternative solution? Provide an example.

Traits are a mechanism for code reuse in single inheritance languages like PHP. They allow developers to create reusable
methods in multiple classes.

```php
trait Logger {
    public function log($message) {
        echo $message;
    }
}

class Application {
    use Logger;
}
```

### 18. Describe the behavior when using traits with the same names for fields and/or methods.

If traits have methods or properties with the same name, you need to resolve the conflict using `insteadof` and `as`
operators.

```php
trait A {
    public function method() {
        echo 'A';
    }
}

trait B {
    public function method() {
        echo 'B';
    }
}

class Example {
    use A, B {
        B::method insteadof A;
        A::method as methodA;
    }
}
```

### 19. Will private methods of a trait be accessible in a class?

No, private methods in a trait will not be accessible outside the trait, including in the class that uses the trait.

### 20. Can traits be composed into other traits?

Yes, traits can use other traits.

```php
trait A {
    public function methodA() {
        echo 'A';
    }
}

trait B {
    use A;
    public function methodB() {
        echo 'B';
    }
}
```

### 21. Describe error and exception handling (try-catch, finally, and throw).

Exceptions in PHP are used for error handling. The `try` block contains code that may throw an exception, and the
`catch` block contains code that handles the exception. The `finally` block contains code that will always run,
regardless of whether an exception was thrown.

```php
try {
    // Code that may throw an exception
} catch (Exception $e) {
    // Code that handles the exception
} finally {
    // Code that always runs
}
```

### 22. What is type hinting, how does it work, and why is it needed?

Type hinting specifies the expected data type of function arguments. It ensures that the arguments passed to a function
are of the correct type, which can prevent errors and improve code readability.

```php
function add(int $a, int $b): int {
    return $a + $b;
}
```

### 23. What are namespaces and why are they needed?

Namespaces in PHP are used to avoid name collisions between classes, functions, and constants. They allow better
organization and modularity of code.

```php
namespace MyApp;

class User {
    // Code
}
```

### 24. Comparing variable values in PHP and pitfalls? Type casting. What changed in PHP 8 in this context?

PHP uses loose comparisons (==) and strict comparisons (===). Loose comparisons can lead to unexpected results due to
type juggling. PHP 8 introduced stricter type checking in certain contexts.

```php
var_dump(0 == '0'); // true
var_dump(0 === '0'); // false
```

### 25. How does session work in PHP, where is it stored, how is it initialized?

Sessions in PHP store data on the server, typically in files. They are initialized using `session_start()`.

```php
session_start();
$_SESSION['user'] = 'John Doe';
```

### 26. Superglobal arrays. Which ones do you know? How have you used them?

- `$_GET`
- `$_POST`
- `$_SESSION`
- `$_COOKIE`
- `$_FILES`
- `$_SERVER`
- `$_REQUEST`
- `$_ENV`
  They are used to access global data such as form inputs, session data, cookie data, file uploads, and
  server/environment variables.

### 27. Compare include vs require, include_once vs require_once.

- `include` and `require` both include files, but `require` will halt the script if the file is missing.
- `include_once` and `require_once` ensure the file is included only once, preventing redeclaration errors.

### 28. What does algorithm complexity mean?

Algorithm complexity refers to the computational resources needed by an algorithm, typically measured in terms of time (
time complexity) and space (space complexity).

### 29. What is a closure in PHP? Provide an example.

A closure is an anonymous function that can capture variables from its surrounding scope.

```php
$message = 'Hello';

$example = function() use ($message) {
    echo $message;
};

$example();
```

### 30. What is the difference between closures in PHP and JavaScript?

Closures in both PHP and JavaScript capture variables from their surrounding scope, but JavaScript closures can access
variables from their outer function scope even after the outer function has finished executing, due to its event loop
and asynchronous nature.

### 31. What is late static binding? Describe its behavior and applications.

Late static binding in PHP refers to the use of `static::` keyword which references the class that was called at
runtime, rather than the class in which the method is defined.

```php
class A {
    protected static $

name = 'A';

    public static function getName() {
        return static::$name;
    }
}

class B extends A {
    protected static $name = 'B';
}

echo B::getName(); // Outputs 'B'
```

### 32. How to override session storage?

You can override session storage by implementing custom session handlers using the `SessionHandlerInterface`.

```php
class MySessionHandler implements SessionHandlerInterface {
    // Implement required methods
}

$handler = new MySessionHandler();
session_set_save_handler($handler, true);
session_start();
```

### 33. Describe the SPL library (Reflection, autoload, data structures).

SPL (Standard PHP Library) provides a collection of interfaces and classes for standard data structures, iterators, and
more. Reflection is used to inspect classes, interfaces, functions, and methods at runtime. SPL also offers autoloading
mechanisms.

```php
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});
```

### 34. Describe the SOLID principles.

- **S**ingle Responsibility Principle: A class should have one, and only one, reason to change.
- **O**pen/Closed Principle: Software entities should be open for extension but closed for modification.
- **L**iskov Substitution Principle: Subtypes must be substitutable for their base types.
- **I**nterface Segregation Principle: Clients should not be forced to depend on interfaces they do not use.
- **D**ependency Inversion Principle: Depend on abstractions, not concretions.

### 35. Describe the GRASP patterns.

GRASP (General Responsibility Assignment Software Patterns) are a set of guidelines for assigning responsibility to
classes and objects. They include patterns like Information Expert, Creator, Controller, Low Coupling, High Cohesion,
Polymorphism, Pure Fabrication, Indirection, and Protected Variations.

### 36. Describe Dependency Injection: What are DI containers? What are the implementation options?

Dependency Injection (DI) is a design pattern that allows a class to receive its dependencies from an external source
rather than creating them itself. DI containers manage the creation and injection of dependencies.

```php
class Service {
    private $repository;

    public function __construct(Repository $repository) {
        $this->repository = $repository;
    }
}
```

### 37. What do you know about MVC?

MVC (Model-View-Controller) is an architectural pattern that separates an application into three main components:

- **Model**: Manages the data and business logic.
- **View**: Displays the data.
- **Controller**: Handles the user input and updates the model and view accordingly.

### 38. What do you know about GoF patterns?

The GoF (Gang of Four) patterns are 23 design patterns introduced in the book "Design Patterns: Elements of Reusable
Object-Oriented Software." They are categorized into Creational, Structural, and Behavioral patterns.

### 39. What do you know about patterns used in ORM?

ORM (Object-Relational Mapping) patterns include:

- Active Record
- Data Mapper
- Unit of Work
- Repository
  These patterns help manage the mapping between objects in code and relational databases.

### 40. Write a PHP example implementing the Singleton pattern.

```php
class Singleton {
    private static $instance = null;

    private function __construct() {}
    private function __clone() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
```

### 41. What is Docker? What is its principle of operation?

Docker is a platform for developing, shipping, and running applications in containers. Containers are lightweight,
portable, and consistent across different environments. Docker uses containerization to package applications with their
dependencies.

### 42. What is LAMP / NAMP?

- **LAMP**: Linux, Apache, MySQL, PHP/Perl/Python
- **NAMP**: Any system replacing Linux with Windows (WAMP) or macOS (MAMP) in the stack.

### 43. Tell us about regexp.

Regular expressions (regexp) are patterns used to match character combinations in strings. They are used for searching,
replacing, and extracting data.

```php
preg_match('/\d+/', '123abc', $matches);
```

### 44. Tell us about the SSH protocol.

SSH (Secure Shell) is a protocol used to securely connect to remote servers. It provides encrypted communications and
secure authentication.

### 45. What is PDO?

PDO (PHP Data Objects) is a database access layer providing a uniform method for accessing multiple databases. It
supports prepared statements, transactions, and other database features.

```php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'user', 'pass');
```

### 46. What is new in PHP 8?

PHP 8 introduced several new features and improvements:

- JIT (Just-In-Time) compilation
- Union types
- Named arguments
- Attributes
- Match expression
- Constructor property promotion
- Nullsafe operator
- Improvements to type system, error handling, and more

### 47. What is PHP PEAR?

PEAR (PHP Extension and Application Repository) is a framework and distribution system for reusable PHP components. It
provides a structured library of open-source code.

### 48. Which PHP versions are still supported?

As of now, PHP 7.4 and PHP 8.x are supported. PHP 7.4 receives security updates, while PHP 8.x receives both bug fixes
and security updates.

### 49. What is the difference between GET and POST?

- `GET`: Sends data via URL parameters, limited in length, not secure.
- `POST`: Sends data via HTTP body, no length limitation, more secure for sensitive data.

### 50. What is the difference between BREAK and CONTINUE operators?

- `break`: Exits the current loop or switch statement.
- `continue`: Skips the current iteration and proceeds to the next iteration of the loop.

### 51. Is there a difference between single and double quotes?

Yes, single quotes (`'`) do not parse variables and special characters, while double quotes (`"`) do.

```php
$name = 'John';
echo 'Hello, $name'; // Outputs: Hello, $name
echo "Hello, $name"; // Outputs: Hello, John
```

### 52. What are cookies and why are they used?

Cookies are small pieces of data stored on the client side. They are used to maintain state, track user sessions, and
store user preferences.

### 53. What should not be stored in cookies and why?

Sensitive data such as passwords, personal information, and security tokens should not be stored in cookies due to the
risk of interception and tampering.

### 54. What development environment do you prefer and why?

Preference for a development environment can vary. Common preferences include:

- PHPStorm: Comprehensive features, powerful debugging tools, code intelligence.
- Visual Studio Code: Lightweight, highly customizable, extensive extensions.
- Sublime Text: Fast, responsive, simple to use with plugins.
  The choice depends on the specific needs, workflow, and personal preference of the developer.

## Git

Certainly! Here are the answers to your questions as a PHP developer, translated into English and formatted with
Markdown:

---

**55. How do you add changes in git?**

To add changes to the staging area in git, use the following command:

```bash
git add .
```

---

**56. How do you commit changes in git?**

To commit the staged changes in git, use the following command:

```bash
git commit -m "Your commit message here"
```

---

**57. How do you push changes to a remote git repository?**

To push the committed changes to a remote git repository, use the following command:

```bash
git push origin branch_name
```

Replace `branch_name` with the name of the branch you want to push to.

---

### Вопросы и ответы по версиям PHP

#### PHP 7

**Вопрос:** Что нового в PHP 7?

**Ответ:**
PHP 7 внесла значительные улучшения производительности и функциональности:

- **Scalar Type Declarations:** Введены строгие типы для скалярных типов данных (int, float, string, bool).
  ```php
  function sum(int $a, int $b): int {
      return $a + $b;
  }
  ```

- **Return Type Declarations:** Возможность указать тип возвращаемого значения функции.
  ```php
  function getString(): string {
      return "Hello";
  }
  ```

- **Spaceship Operator (`<=>`):** Новый оператор для сравнения, возвращающий -1, 0 или 1.
  ```php
  $result = $a <=> $b;
  ```

- **Null Coalescing Operator (`??`):** Сокращенная запись проверки на null.
  ```php
  $value = $a ?? 'default';
  ```

#### PHP 7.1

**Вопрос:** Какие изменения в PHP 7.1?

**Ответ:**
PHP 7.1 добавила несколько новых возможностей:

- **Nullable Types:** Возможность указать тип, включая null.
  ```php
  function foo(?string $bar): void {
      // $bar может быть строкой или null
  }
  ```

- **Void Return Type:** Тип void для функций, которые не возвращают значения.
  ```php
  function doSomething(): void {
      // Ничего не возвращаем
  }
  ```

- **Iterable Type:** Новый тип для итерируемых значений.
  ```php
  function process(iterable $items): void {
      foreach ($items as $item) {
          // Обработка $item
      }
  ```

#### PHP 7.2

**Вопрос:** Какие нововведения в PHP 7.2?

**Ответ:**
PHP 7.2 включила дополнительные возможности и улучшения:

- **Argument Type Widening:** Расширение типов аргументов для интерфейсов и родительских классов.
  ```php
  interface A {
      public function test(array $input);
  }

  class B implements A {
      public function test($input) {
          // $input может быть массивом или чем-то другим
      }
  }
  ```

- **Object Type Hinting:** Уточнение типа для объектов.
  ```php
  function getObject(): object {
      return new stdClass();
  }
  ```

- **New Functions and Enhancements:** Новые функции и улучшения, такие как `hash_equals()` для сравнения хешей без
  уязвимостей времени.

#### PHP 7.3

**Вопрос:** Какие изменения в PHP 7.3?

**Ответ:**
PHP 7.3 внесла следующие изменения:

- **Flexible Heredoc and Nowdoc Syntax:** Улучшения в синтаксисе Heredoc и Nowdoc.
  ```php
  $text = <<<EOT
  Example of a heredoc string
  EOT;
  ```

- **JSON_THROW_ON_ERROR:** Исключения при ошибках в JSON операциях.
  ```php
  $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
  ```

- **Improved Garbage Collection:** Улучшенная сборка мусора.

#### PHP 7.4

**Вопрос:** Какие нововведения в PHP 7.4?

**Ответ:**
PHP 7.4 предложила ряд новых функций и улучшений:

- **Typed Properties:** Декларация типов для свойств классов.
  ```php
  class MyClass {
      public string $name;
  }
  ```

- **Arrow Functions:** Краткий синтаксис для определения анонимных функций.
  ```php
  $numbers = [1, 2, 3, 4, 5];
  $squared = array_map(fn($n) => $n * $n, $numbers);
  ```

- **Preloading:** Возможность предварительной загрузки классов и функций для улучшения производительности.

§

#### PHP 8.0

**Вопрос: Что нового в PHP 8.0?**

PHP 8.0 был значительным обновлением с множеством нововведений:

- JIT (Just In Time компилятор) для улучшения производительности.
- Сильная и слабая типизация для аргументов методов.
- Новый оператор `match` для замены `switch`.
- Атрибуты для декларации метаданных в коде.
- Изменения в обработке ошибок и исключений.

Пример использования атрибутов:

```php
#[Route('/path')]
class MyController {
    #[Route('/action')]
    public function myAction() {
        // Код действия
    }
}
```

#### PHP 8.1

**Вопрос: Что нового в PHP 8.1?**

PHP 8.1 включает следующие нововведения:

- Изменения в работе с типами данных, включая `enum` тип и `readonly` свойства классов.
- Добавление `intersection types` для более точного определения типов.
- Функция `array_is_list()` для проверки, является ли массив списком.
- Улучшения в работе с `FPM SAPI`.
- Изменения в работе с `DateTime`.

Пример использования `enum`:

```php
enum Status {
    case Draft;
    case Published;
}

function getStatus(): Status {
    return Status::Draft;
}
```

#### PHP 8.2

**Вопрос: Что нового в PHP 8.2?**

PHP 8.2 включает следующие нововведения:

- Улучшения в `match` выражениях, включая `guarded patterns`.
- Добавление оператора `enumeration` для обработки списков.
- Доработки в работе с `WeakMap`.
- Улучшения в синтаксисе и производительности.

Пример использования `match` с `guarded patterns`:

```php
match ($value) {
    1 => 'One',
    2 => 'Two',
    default if ($value > 2) => 'Greater than two',
};
```

Эти обновления в PHP 8.x значительно расширяют функциональные возможности языка, улучшают его производительность и
расширяют набор доступных инструментов для разработчиков.

## DB's

### 58. Что такое транзакция?

**Translation:** What is a transaction?

**Answer:** A transaction in the context of a database is a sequence of operations performed as a single logical unit of
work. A transaction must exhibit four properties, known as ACID properties: Atomicity, Consistency, Isolation, and
Durability. Transactions ensure that all operations within the work unit are completed successfully before committing
the changes to the database. If any operation fails, the transaction is rolled back to maintain data integrity.

### 59. Что такое нормализация?

**Translation:** What is normalization?

**Answer:** Normalization is the process of organizing the fields and tables of a relational database to minimize
redundancy and dependency. Its primary purpose is to separate data into different tables to reduce data redundancy and
improve data integrity. The main objectives are to eliminate redundant data, ensure data dependencies make sense, and
simplify the structure of tables.

### 60. Что такое денормализация? Для чего она нужна?

**Translation:** What is denormalization? What is it used for?

**Answer:** Denormalization is the process of combining normalized tables to improve database read performance. It
involves adding redundant data to one or more tables. Denormalization is used to reduce the number of joins in queries,
thus improving query performance at the cost of increased storage and potential data anomalies.

### 61. Какие есть типы связей в базе данных?

**Translation:** What are the types of relationships in a database?

**Answer:** The types of relationships in a database are:

- **One-to-One (1:1):** Each row in one table is linked to one and only one row in another table.
- **One-to-Many (1:M):** A row in one table can be linked to many rows in another table.
- **Many-to-Many (M:N):** Many rows in one table can be linked to many rows in another table, typically implemented with
  a junction table.

### 62. Что означает утверждение о том, что СУБД поддерживает контроль ссылочной целостности связей?

**Translation:** What does it mean that a DBMS supports referential integrity control of relationships?

**Answer:** When a DBMS supports referential integrity, it ensures that relationships between tables remain consistent.
This means that foreign keys in a table must either match primary keys in another table or be null. Referential
integrity prevents orphaned records and ensures that related data across tables is kept accurate and consistent.

### 63. Если используемая вами СУБД не поддерживает каскадные удаления для поддержки ссылочной целостности связей, что можно сделать для достижения аналогичного результата?

**Translation:** If the DBMS you use does not support cascading deletes to maintain referential integrity, what can be
done to achieve a similar result?

**Answer:** If the DBMS does not support cascading deletes, you can achieve similar results by manually implementing the
logic in your application code. This involves writing additional code to delete child records before deleting the parent
record, ensuring that all related data is consistently removed.

### 64. Что такое первичный и внешний ключи?

**Translation:** What are primary and foreign keys?

**Answer:**

- **Primary Key:** A primary key is a column or a set of columns that uniquely identifies each row in a table. It must
  contain unique values and cannot contain null values.
- **Foreign Key:** A foreign key is a column or a set of columns in one table that refers to the primary key in another
  table. It establishes a relationship between the two tables and ensures referential integrity.

### 65. В чем разница между первичным и уникальным ключами?

**Translation:** What is the difference between a primary key and a unique key?

**Answer:** The primary key uniquely identifies each row in a table and cannot contain null values. A table can have
only one primary key. A unique key also ensures that all values in a column are unique but can contain null values. A
table can have multiple unique keys.

### 66. Какие есть типы JOIN и чем они отличаются?

**Translation:** What types of JOINs are there and how do they differ?

**Answer:** The types of JOINs are:

- **INNER JOIN:** Returns rows that have matching values in both tables.
- **LEFT JOIN (LEFT OUTER JOIN):** Returns all rows from the left table and the matched rows from the right table. Rows
  from the left table without a match in the right table will contain nulls.
- **RIGHT JOIN (RIGHT OUTER JOIN):** Returns all rows from the right table and the matched rows from the left table.
  Rows from the right table without a match in the left table will contain nulls.
- **FULL JOIN (FULL OUTER JOIN):** Returns rows when there is a match in one of the tables. It returns all rows from the
  left and right tables, with nulls where there is no match.

### 67. Что такое курсоры в базах данных?

**Translation:** What are cursors in databases?

**Answer:** Cursors in databases are database objects used to retrieve, manipulate, and navigate through the result set
of a query one row at a time. They provide a way to process each row individually, making them useful for row-by-row
processing and complex business logic.

### 68. Что такое агрегатные функции SQL? Приведите несколько примеров.

**Translation:** What are SQL aggregate functions? Provide some examples.

**Answer:** SQL aggregate functions perform a calculation on a set of values and return a single value. Examples
include:

- **COUNT():** Returns the number of rows.
- **SUM():** Returns the sum of values.
- **AVG():** Returns the average value.
- **MIN():** Returns the minimum value.
- **MAX():** Returns the maximum value.

### 69. Что такое миграции?

**Translation:** What are migrations?

**Answer:** Migrations are a way to manage and apply changes to the database schema over time. They allow developers to
define the structure of the database in code, track changes, and apply these changes in a controlled manner. Migrations
help ensure that the database schema is consistent across different environments.

### 70. Расскажите о связи один к одному, один ко многим, многие ко многим.

**Translation:** Describe one-to-one, one-to-many, many-to-many relationships.

**Answer:**

- **One-to-One (1:1):** Each row in one table corresponds to exactly one row in another table.
- **One-to-Many (1:M):** A row in one table can correspond to multiple rows in another table.
- **Many-to-Many (M:N):** Multiple rows in one table correspond to multiple rows in another table, usually implemented
  via a junction table.

### 71. Назовите и объясните три любых агрегирующих метода.

**Translation:** Name and explain any three aggregate methods.

**Answer:**

- **COUNT():** Counts the number of rows that match a specified condition.
- **SUM():** Calculates the total sum of a numeric column.
- **AVG():** Calculates the average value of a numeric column.

### 72. Зачем используют оператор группировки GROUP BY?

**Translation:** Why is the GROUP BY clause used?

**Answer:** The GROUP BY clause is used to group rows that have the same values in specified columns into summary rows.
It is often used with aggregate functions to perform calculations on each group of rows, such as summing values or
counting occurrences.

### 73. В чем разница между WHERE и HAVING? Приведите примеры.

**Translation:** What is the difference between WHERE and HAVING? Provide examples.

**Answer:** The WHERE clause is used to filter rows before any groupings are made. The HAVING clause is used to filter
groups after the GROUP BY clause has been applied. Example:

```sql
-- WHERE example
SELECT * FROM employees WHERE salary > 50000;

-- HAVING example
SELECT department, AVG(salary) FROM employees GROUP BY department HAVING AVG(salary) > 60000;
```

### 74. В чем разница между операторами DISTINCT и GROUP BY?

**Translation:** What is the difference between DISTINCT and GROUP BY?

**Answer:** The DISTINCT keyword is used to remove duplicate rows from the result set. GROUP BY groups rows based on the
values of specified columns and is typically used with aggregate functions. DISTINCT operates on the entire row, while
GROUP BY operates on columns and can perform calculations on each group.

### 75. Для чего нужны операторы UNION, INTERSECT, EXCEPT?

**Translation:** What are the UNION, INTERSECT, EXCEPT operators used for?

**Answer:**

- **UNION:** Combines the result sets of two or more SELECT queries, removing duplicates.
- **INTERSECT:** Returns the common rows from the result sets of two SELECT queries.
- **EXCEPT:** Returns the rows from the first SELECT query that are not in the second SELECT query.

### 76. Опишите разницу типов данных DATETIME и TIMESTAMP.

**Translation:** Describe the difference between the DATETIME and TIMESTAMP data types.

**Answer:**

- **DATETIME:** Stores date and time values without timezone information. It ranges from '1000-01-01 00:00:00' to '
  9999-12-31 23:59:59'.
- **TIMESTAMP:** Stores date and time values along with timezone information, automatically converting the values to UTC
  for storage. It ranges from '1970-01-01 00:00:01' UTC to '2038-01-19 03:14:07' UTC.

### 77. Какие вы знаете движки таблиц и чем они отличаются?

**Translation:** What table engines do you know and how do they differ?

**Answer:**

- **InnoDB:** Supports transactions, foreign keys, and row-level

locking. It is optimized for high performance and reliability.

- **MyISAM:** Does not support transactions or foreign keys but is faster for read-intensive operations due to its
  simpler structure.
- **MEMORY (HEAP):** Stores tables in memory, providing extremely fast access but volatile data storage as it does not
  persist data on disk.

### 78. Какие способы оптимизации производительности баз данных знаете?

**Translation:** What methods do you know for optimizing database performance?

**Answer:**

- Indexing
- Query optimization
- Database schema design (normalization, denormalization)
- Using appropriate table engines
- Caching strategies
- Partitioning
- Hardware optimization (e.g., SSDs, more RAM)

### 79. Что такое партиционирование, репликация и шардинг?

**Translation:** What is partitioning, replication, and sharding?

**Answer:**

- **Partitioning:** Divides a large table into smaller, more manageable parts (partitions) based on criteria such as
  range, list, or hash.
- **Replication:** Copies data from one database to another to improve availability, fault tolerance, and read
  performance.
- **Sharding:** Divides a database horizontally across multiple servers, each handling a subset of data. It helps
  distribute load and improve scalability.

### 80. Чем отличаются SQL от NoSQL базы данных?

**Translation:** What are the differences between SQL and NoSQL databases?

**Answer:**

- **SQL (Relational databases):** Structured Query Language, tables with predefined schemas, support for ACID
  transactions, strong consistency, and relationships between tables.
- **NoSQL (Non-relational databases):** Schema-less or flexible schema, eventually consistent, designed for horizontal
  scalability, and often categorized into key-value, document, column-family, or graph databases.

### 81. Какие бывают NoSQL базы данных?

**Translation:** What types of NoSQL databases are there?

**Answer:**

- **Key-Value Stores (e.g., Redis)**
- **Document Stores (e.g., MongoDB)**
- **Column-Family Stores (e.g., Cassandra)**
- **Graph Databases (e.g., Neo4j)**

### 82. Какие типы данных есть в MySQL?

**Translation:** What data types are available in MySQL?

**Answer:** MySQL supports various data types including:

- Numeric types (INT, BIGINT, DECIMAL)
- Date and time types (DATE, DATETIME, TIMESTAMP)
- String types (CHAR, VARCHAR, TEXT)
- Binary types (BLOB, VARBINARY)

### 83. Разница между LEFT JOIN, RIGHT JOIN, INNER JOIN?

**Translation:** What is the difference between LEFT JOIN, RIGHT JOIN, and INNER JOIN?

**Answer:**

- **INNER JOIN:** Returns rows when there is a match in both tables.
- **LEFT JOIN:** Returns all rows from the left table and matching rows from the right table.
- **RIGHT JOIN:** Returns all rows from the right table and matching rows from the left table.

### 84. Разница между JOIN и UNION?

**Translation:** What is the difference between JOIN and UNION?

**Answer:**

- **JOIN:** Combines columns from two or more tables based on a related column between them.
- **UNION:** Concatenates the result sets of two or more SELECT statements, removing duplicates.

### 85. Что такое индексы? Как они влияют на время выполнения SELECT, INSERT?

**Translation:** What are indexes? How do they affect SELECT and INSERT performance?

**Answer:** Indexes are database objects that improve the speed of data retrieval operations on a table at the cost of
additional space and decreased performance on INSERT and UPDATE operations. They speed up SELECT queries by enabling the
database to quickly locate rows using the indexed columns. However, they slow down INSERT operations because the
database must update the index when adding new rows.

### 86. Что такое хранимые процедуры, функции и триггеры в MySQL? Для чего они? Приведите примеры использования.

**Translation:** What are stored procedures, functions, and triggers in MySQL? What are they used for? Provide examples
of usage.

**Answer:**

- **Stored Procedures:** Precompiled SQL statements stored in the database. They can accept parameters, perform
  operations, and return results. Example:
  ```sql
  CREATE PROCEDURE GetEmployeeById (IN emp_id INT)
  BEGIN
    SELECT * FROM employees WHERE id = emp_id;
  END;
  ```

- **Functions:** Similar to stored procedures but return a single value and are typically used in SQL statements.
  Example:
  ```sql
  CREATE FUNCTION CalcTax (salary DECIMAL) RETURNS DECIMAL
  BEGIN
    RETURN salary * 0.15;
  END;
  ```

- **Triggers:** Actions automatically performed by the database when certain events occur (e.g., INSERT, UPDATE,
  DELETE). Example:
  ```sql
  CREATE TRIGGER log_update BEFORE UPDATE ON employees
  FOR EACH ROW
  INSERT INTO audit_log (old_value, new_value) VALUES (OLD.name, NEW.name);
  ```

### 87. Как организовать сохранность вложенных категорий в MySQL?

**Translation:** How to ensure integrity of nested categories in MySQL?

**Answer:** Nested categories can be organized using techniques like:

- **Adjacency List Model:** Each row contains a reference to its parent category.
- **Path Enumeration:** Each row stores a path indicating its hierarchical position.
- **Nested Set Model:** Each row is represented with left and right values to define its hierarchical position.
  These methods ensure that operations like inserts, updates, and deletes maintain the hierarchical integrity of nested
  categories.

## Laravel

### 88. Какие есть связи и как они реализуются в Laravel?

**Translation:** What types of relationships exist and how are they implemented in Laravel?

**Answer:** Laravel supports several types of relationships between Eloquent models, which are implemented using
Eloquent ORM (Object-Relational Mapping):

- **One-to-One:** Each instance of the model has exactly one instance of another model.
- **One-to-Many:** A model can have multiple instances of another model.
- **Many-to-Many:** Models can relate to each other through a pivot table.

These relationships are defined using methods in the Eloquent models (`hasOne`, `hasMany`, `belongsToMany`, etc.) along
with foreign keys and pivot tables where necessary. Laravel's Eloquent makes it straightforward to define and use these
relationships, enabling efficient querying and data manipulation.

### 89. Что такое полиморфные связи в Laravel, как они работают?

**Translation:** What are polymorphic relationships in Laravel and how do they work?

**Answer:** Polymorphic relationships in Laravel allow a model to belong to more than one other model on a single
association. This is useful in scenarios where a model can belong to multiple other models without the need for separate
tables for each relationship. Polymorphic relationships are implemented using the `morphTo`, `morphOne`, `morphMany`,
and `morphToMany` methods in Eloquent models. They rely on two columns in the database: `morph_type` (to store the model
class) and `morph_id` (to store the model's ID). This flexibility simplifies database schema and allows for more dynamic
and scalable application designs.

### 90. Что такое middleware в Laravel? Зачем это? На каком этапе выполняется?

**Translation:** What is middleware in Laravel? Why is it used? At what stage does it execute?

**Answer:** Middleware in Laravel provides a mechanism for filtering HTTP requests entering your application. It sits
between the request and the application's core routing, allowing you to filter requests based on conditions such as
authentication, CORS headers, logging, etc. Middleware can modify incoming requests or reject them entirely before they
reach the controller.

Middleware is essential for enforcing security, authentication, and modifying HTTP requests/responses globally across
your application. It executes during the request lifecycle after the request has been received and before the route
handler or controller action is executed. Middleware can be applied globally to all routes, to specific groups of
routes, or to individual routes in Laravel's routing system.

## Composer

### 91. What is Composer?

Composer is a tool for managing dependencies in PHP. It allows you to manage PHP libraries and packages, automatically
downloading the required dependencies into your project. Composer uses a `composer.json` file where dependencies and
their versions are specified. This tool significantly simplifies dependency management and project maintenance.

### 92. What is the difference between require and require-dev in Composer?

- **require:** This section in `composer.json` contains a list of dependencies that are necessary for the application to
  run in a production environment. These dependencies must be installed both for development and production.

- **require-dev:** This section contains a list of dependencies that are only needed for development purposes and are
  not necessary for the application to function in production. Typically, this includes tools for testing, debugging, or
  building the project.

## Практические задания

### Answering the Questions as a PHP Programmer

#### 93. Database Design for Books and Authors

```sql
-- SQL Query
SELECT authors.author_name, COUNT(books.book_id) AS books_written
FROM authors
LEFT JOIN books ON authors.author_id = books.author_id
GROUP BY authors.author_id;
```

#### 94. Matrix Diagonal Calculation

To calculate the sum of even or odd numbers on the diagonals of a 3x3 matrix:

```php
<?php
// PHP Code
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$sum_even = 0;
$sum_odd = 0;

for ($i = 0; $i < 3; $i++) {
    if ($matrix[$i][$i] % 2 == 0) {
        $sum_even += $matrix[$i][$i];
    } else {
        $sum_odd += $matrix[$i][$i];
    }

    $opposite_index = 2 - $i;

    if ($matrix[$i][$opposite_index] % 2 == 0) {
        $sum_even += $matrix[$i][$opposite_index];
    } else {
        $sum_odd += $matrix[$i][$opposite_index];
    }
}

echo "Sum of even numbers on diagonals: $sum_even\n";
echo "Sum of odd numbers on diagonals: $sum_odd\n";
?>
```

#### 95. Troubleshooting 500 Error

To troubleshoot a 500 error in your application, follow these steps:

- Check server logs for detailed error messages.
- Review recent changes in code or configuration.
- Verify permissions and file ownership.
- Check for syntax errors in the code.
- Ensure necessary extensions or modules are enabled.
- Test with a minimal script to isolate the issue.

#### 96. Palindrome Check Function

```php
<?php
// PHP Function
function isPalindrome($word) {
    $word = strtolower($word); // convert to lowercase
    $word = preg_replace('/[^a-z0-9]/', '', $word); // remove non-alphanumeric characters
    return $word === strrev($word); // compare with reversed string
}

// Example usage
echo isPalindrome("Madam"); // Output: true
?>
```

#### 102. Incrementing Array Elements

```php
<?php
// PHP Code
$array = [1, 2, 3, 4, 5];

// Method 1: Using foreach
foreach ($array as &$value) {
    $value++;
}

// Method 2: Using array_map
$array = array_map(function($val) { return $val + 1; }, $array);

// Method 3: Using array_walk
array_walk($array, function(&$val) { $val++; });

print_r($array); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 [4] => 6 )
?>
```

#### 103. Class Structure for Facebook and Google Posting API

```php
<?php
// PHP Class Structure
class PostingAPI {
    public function postToGoogle($text) {
        $url = "https://www.google.com/new-post?text=" . urlencode($text);
        // Code to post to Google
    }

    public function postToFacebook($message) {
        $url = "https://www.facebook.com/add-post?message=" . urlencode($message);
        // Code to post to Facebook
    }
}

// Example usage:
$posting_api = new PostingAPI();
$posting_api->postToGoogle("Hello Google!");
$posting_api->postToFacebook("Hello Facebook!");
?>
```

#### 105. MySQL Indexing Best Practices

For MySQL tables, it's recommended to index columns that are frequently used in:

- WHERE clauses
- JOIN conditions
- ORDER BY clauses
- GROUP BY clauses

Indexes should be used carefully to optimize read performance without impacting write operations.

#### 106. For Loop in Geometric Progression

```php
<?php
// PHP Code
for ($i = 1; $i <= 1024; $i *= 2) {
    echo $i . " ";
}
// Output: 1 2 4 8 16 32 64 128 256 512 1024
?>
```

#### 109. PHP 7.4 Data Type Enforcement Class

```php
<?php
// PHP Class
class TypeEnforcement {
    public function enforceInt(int $value): int {
        return $value;
    }

    public function enforceString(string $value): string {
        return $value;
    }

    public function enforceArray(array $value): array {
        return $value;
    }

    // Add more methods for other data types
}
?>
```

## Laravel

Certainly! Here are the questions and answers translated into English with Markdown formatting:

### 110. Write a method for many-to-many relationship handling. Include a condition for a value stored in the pivot table. For example, consider students and courses they are enrolled in, where a student's enrollment in a course must be approved. Approval status is stored in the pivot table as
`is_approve`. For the student model, there should be a method `approvedCourses`.

To handle a many-to-many relationship with an approval condition in Laravel, you can define the `approvedCourses` method
in the `Student` model as follows:

```php
public function approvedCourses()
{
    return $this->belongsToMany(Course::class)
                ->wherePivot('is_approve', true);
}
```

This method uses Laravel's Eloquent ORM to define a relationship with the `Course` model where the `is_approve` column
in the pivot table is true, indicating the student's approval for that course.

### 111. Write a query using Query Builder that corresponds to the SQL query:

```sql
SELECT * FROM `users` WHERE (`age` > 21 AND (`has_education` = 1 OR `work_experience` > 2))
```

Using Laravel's Query Builder, you can write the equivalent query:

```php
$users = DB::table('users')
            ->where('age', '>', 21)
            ->where(function ($query) {
                $query->where('has_education', 1)
                      ->orWhere('work_experience', '>', 2);
            })
            ->get();
```

This Query Builder query selects all columns from the `users` table where the `age` is greater than 21 and either
`has_education` is 1 or `work_experience` is greater than 2.

### 112. Write an artisan command to create a model and its migration.

To create a model and migration using Laravel's Artisan command:

```bash
php artisan make:model Product -m
```

This command generates both the `Product` model (`app/Product.php`) and its migration file in the `database/migrations`
directory.

### 113. Write an artisan command to clear the framework cache.

To clear the Laravel framework cache using Artisan command:

```bash
php artisan cache:clear
```

This command clears the entire cache for the application, including the cache for routes, configurations, views, etc.

# MIDDLE

## Общие вопросы

### 1. Как передаются переменные (по значению или по ссылке)?

**Translation:** How are variables passed (by value or by reference)?

**Answer:** In PHP, variables are passed by value by default. This means a copy of the variable's value is passed to a
function, and modifications to the parameter inside the function do not affect the original variable. To pass variables
by reference, you explicitly use the `&` symbol in both the function definition and the function call.

### 2. Какие процессы происходят, когда пользователь вводит в браузере URL?

**Translation:** What processes occur when a user enters a URL in a browser?

**Answer:** When a user enters a URL in a browser:

- The browser parses the URL to extract the protocol, domain, port (if specified), path, and query parameters.
- It checks DNS for the IP address associated with the domain.
- The browser establishes a TCP connection with the web server.
- HTTP request headers are sent to the server, including the requested resource (specified in the URL).
- The web server processes the request, executes scripts (like PHP), retrieves data, and generates an HTTP response.
- The response, including HTML, CSS, JavaScript, and other resources, is sent back to the browser.
- The browser renders the received content for the user to interact with.

### 3. Что такое вариативная функция или splat-оператор?

**Translation:** What is a variadic function or splat operator?

**Answer:** A variadic function in PHP accepts a variable number of arguments. The splat operator (`...`) allows a
function to accept an indefinite number of arguments by converting them into an array. It's particularly useful when you
want to pass an unknown or variable number of arguments to a function.

### 4. Что такое OWASP?

**Translation:** What is OWASP?

**Answer:** OWASP stands for Open Web Application Security Project. It is an international non-profit organization
focused on improving software security. OWASP provides resources, tools, and best practices to help organizations
develop and maintain secure web applications and APIs.

### 5. Какие типы уязвимостей знаете? Как от них защищаться?

**Translation:** What types of vulnerabilities do you know? How can you protect against them?

**Answer:** Common types of vulnerabilities include SQL injection, cross-site scripting (XSS), cross-site request
forgery (CSRF), and insecure deserialization. Protection methods include:

- Input validation and sanitization.
- Using prepared statements or parameterized queries for database access.
- Escaping output to prevent XSS attacks.
- Implementing CSRF tokens and securing cookie attributes.
- Using secure coding practices and regularly updating software dependencies.

### 6. Что такое идемпотентные методы? Какие HTTP-методы являются идемпотентными для REST?

**Translation:** What are idempotent methods? Which HTTP methods are idempotent in REST?

**Answer:** Idempotent methods in REST are HTTP methods that can be called multiple times with the same parameters and
produce the same result each time, without changing the server state beyond the initial request. Idempotent HTTP methods
include GET, PUT, and DELETE. POST is not idempotent because it creates a new resource with each request.

### 7. Что такое stateless?

**Translation:** What does stateless mean?

**Answer:** Stateless means lacking a persistent state. In the context of web applications, it refers to systems that do
not store client session information on the server between requests. Each request from a client to the server is
independent and self-contained, typically containing all necessary information (like authentication tokens) to process
the request.

### 8. SOAP vs REST. В чем разница?

**Translation:** SOAP vs REST. What is the difference?

**Answer:**

- **SOAP (Simple Object Access Protocol):** A protocol for exchanging structured information in web services. It uses
  XML for message format and WSDL (Web Services Description Language) for defining services.
- **REST (Representational State Transfer):** An architectural style for designing networked applications. It uses
  standard HTTP methods (GET, POST, PUT, DELETE) and typically returns data in JSON or XML format.

The main differences:

- SOAP is protocol-based, while REST is architectural style-based.
- SOAP uses XML for messages, whereas REST can use JSON, XML, or other formats.
- SOAP requires WSDL for describing the interface, while RESTful APIs use hypermedia links.

### 9. Какие методы авторизации используют для построения API?

**Translation:** What authentication methods are used for building APIs?

**Answer:** Common API authentication methods include:

- **Bearer Token:** A token-based approach where a token (JWT or OAuth token) is included in the request header.
- **Basic Authentication:** Credentials (username and password) are Base64-encoded and sent in the request header.
- **OAuth 2.0:** Provides token-based authentication with scopes and refresh tokens for delegated access.
- **API Keys:** A unique identifier (key) is included in the request header for authentication.

### 10. Что может содержать интерфейс?

**Translation:** What can an interface contain?

**Answer:** In PHP, an interface can contain:

- Method declarations without method bodies (i.e., abstract methods).
- Constants.
- In PHP 8 and later, interfaces can also include method signatures with default implementations (default methods).

### 11. Класс содержит свойство, которое, в свою очередь, является объектом. Что будет содержать это свойство в клонированном объекте: ссылку на тот же дочерний объект или копию дочернего объекта? Что нужно сделать, чтобы это изменить?

**Translation:** A class contains a property that is an object. In a cloned object, will this property contain a
reference to the same child object or a copy of the child object? What needs to be done to change this behavior?

**Answer:** By default, PHP performs a shallow copy when cloning objects, meaning any properties that are objects will
be referenced in the cloned object (not deep copied). To change this behavior and have a deep copy (where objects within
objects are also cloned), you can implement the `__clone()` method in the parent class and manually clone the properties
that are objects.

### 12. Что такое Mock? Где используют и зачем?

**Translation:** What is a Mock? Where is it used and why?

**Answer:** In PHP testing, a Mock object is a simulated object that mimics the behavior of a real object in controlled
ways. Mocks are used in unit testing to isolate the code being tested by replacing dependencies with controlled
responses. They allow testing of specific scenarios and behaviors without invoking actual external systems or complex
dependencies.

### 13. Что такое PSR?

**Translation:** What is PSR?

**Answer:** PSR stands for PHP Standards Recommendation. It is a set of standards and recommendations issued by the
PHP-FIG (PHP Framework Interop Group) to promote interoperability between PHP frameworks and libraries. PSRs cover
coding style guides, autoloading, HTTP message interfaces, and more.

### 14. Опишите реализацию одного из шаблонов проектирования.

**Translation:** Describe the implementation of one design pattern.

**Answer:**

- **Singleton Pattern:** Ensures a class has only one instance and provides a global point of access to that instance.
  Example implementation:

  ```php
  class Singleton {
      private static $instance;
      
      private function __construct() { }
      
      public static function getInstance(): self {
          if (!isset(self::$instance)) {
              self::$instance = new self();
          }
          return self::$instance;
      }
  }
  ```

### 15. Что такое Redis?

**Translation:** What is Redis?

**Answer:** Redis is an open-source, in-memory data structure store used as a database, cache, and message broker. It
supports various data structures such as strings, lists, sets, sorted sets, hashes, and more. Redis is known for its
high performance, scalability, and versatility in handling data storage and caching needs.

### 16. Как хранятся данные в Redis / Memcached?

**Translation:** How are data stored in Redis / Memcached?

**Answer:**

- **Redis:** Stores data in-memory, optionally persisting to disk, using a key-value store where each key can hold
  different data types. Data can be organized in data structures like strings, lists, sets, hashes, and sorted sets.
- **Memcached:** Also stores data in-memory using a key-value store, but it primarily focuses on caching. It is simpler
  and faster than Redis for caching purposes but lacks some advanced data structures and persistence features.

### 17. Расскажите о целесообразности применения Redis / Memcached для кэширования. Каковы плюсы и минусы?

**Translation:** Discuss the feasibility of using Redis / Memcached for caching. What are the pros and cons?

**Answer:**

- **Redis:** Pros include support for advanced data types, persistence options, and built-in replication. Cons include
  higher memory usage and more complex setup.
- **Memcached:** Pros include simplicity, fast read/write operations, and efficient caching. Cons include limited data
  structure support and lack

of persistence.

Both Redis and Memcached are suitable for caching, depending on specific use cases like session storage, page caching,
and API response caching.

### 18. Назовите различия между nginx и Apache.

**Translation:** Name the differences between nginx and Apache.

**Answer:**

- **Apache:** Process-based architecture using threads or processes to handle requests. Feature-rich with extensive
  module support. Suitable for traditional web hosting environments.
- **nginx:** Event-driven, asynchronous architecture optimized for high concurrency and low memory usage. Best suited
  for serving static content, reverse proxying, and load balancing. Less feature-rich than Apache but more efficient in
  certain scenarios.

### 19. Что такое Opcash? Как он работает?

**Translation:** What is OPcache? How does it work?

**Answer:** OPcache (Opcode cache) in PHP is a built-in caching mechanism that improves performance by storing
precompiled PHP bytecode in shared memory. It reduces the need for PHP to load and parse scripts on each request,
thereby speeding up execution. OPcache improves PHP application performance significantly by avoiding repetitive
compilation of PHP scripts.

### 20. Что такое JIT? Как он работает?

**Translation:** What is JIT? How does it work?

**Answer:** JIT (Just-In-Time compilation) is a technique used in PHP (starting from PHP 8.0) to improve performance by
dynamically compiling PHP bytecode into machine code at runtime. This compiled code executes faster than interpreting
bytecode directly. JIT compilation optimizes frequently executed code paths and functions based on runtime profiling,
enhancing overall application performance.

### 21. Зачем нужно ключевое слово final?

**Translation:** Why is the `final` keyword useful?

**Answer:** In PHP, `final` is used to prevent inheritance or overriding of methods in child classes. When a class or
method is marked as `final`, it cannot be extended or overridden by any subclass, ensuring that its behavior remains
unchanged and providing better control over class hierarchies and method implementations.

### 22. Что нового в PHP 7/8?

**Translation:** What's new in PHP 7/8?

**Answer:** PHP 7 introduced significant performance improvements, scalar type declarations, return type declarations,
anonymous classes, and the spaceship operator (`<=>`). PHP 8 introduced attributes (annotations), named arguments, match
expression, union types, JIT compilation, and improvements to error handling and performance.

### 23. Что такое SOLID, DRY, KISS, YAGNI?

**Translation:** What are SOLID, DRY, KISS, YAGNI?

**Answer:**

- **SOLID:** A set of principles (Single Responsibility, Open/Closed, Liskov Substitution, Interface Segregation,
  Dependency Inversion) for writing maintainable and scalable object-oriented code.
- **DRY (Don't Repeat Yourself):** Principle aimed at reducing code duplication by extracting common patterns into
  reusable functions, methods, or classes.
- **KISS (Keep It Simple, Stupid):** Principle advocating simplicity in design and implementation, avoiding unnecessary
  complexity.
- **YAGNI (You Aren't Gonna Need It):** Principle advising against adding functionality until deemed necessary, to avoid
  over-engineering.

### 24. Назовите паттерны проектирования, с которыми приходилось работать.

**Translation:** Name the design patterns you have worked with.

**Answer:** Some common design patterns include Singleton, Factory, Adapter, Strategy, Observer, Decorator, MVC (
Model-View-Controller), and Dependency Injection (DI).

### 25. Что такое простая фабрика?

**Translation:** What is a Simple Factory?

**Answer:** The Simple Factory pattern is a creational pattern that provides a method for creating instances of classes
without exposing the instantiation logic to the client. It defines a single factory method to create objects based on a
given type or condition.

### 26. Что такое Service Layer и где его следует применять?

**Translation:** What is a Service Layer and where should it be used?

**Answer:**

- **Service Layer:** A design pattern that acts as an intermediary between the presentation layer and the business logic
  layer. It encapsulates application-specific logic and operations into reusable services.
- **Usage:** Service layers are used in applications where business logic needs to be centralized, reused across
  different parts of the application, and separated from presentation concerns. They promote modularity,
  maintainability, and testability of code.

### 27. Как устроен Singleton и почему его считают антипаттерном?

**Translation:** How is Singleton structured and why is it considered an anti-pattern?

**Answer:**

- **Singleton:** A creational pattern that ensures a class has only one instance and provides a global access point to
  that instance.
- **Anti-pattern:** Singleton is considered controversial because it introduces global state and tight coupling between
  classes, making code harder to test and maintain. Overuse of Singleton can lead to dependencies that are hidden and
  difficult to manage in large applications.

### 28. Что такое идемпотентность?

**Translation:** What is idempotence?

**Answer:** Idempotence is a property of operations or methods that ensures the same operation can be applied multiple
times without changing the result beyond the initial application. In the context of HTTP methods, idempotent methods
like GET, PUT, and DELETE will produce the same result if called multiple times with the same parameters.

### 29. Опишите жизненный цикл HTTP-запроса.

**Translation:** Describe the life cycle of an HTTP request.

**Answer:**

1. **DNS Resolution:** Browser resolves the domain name to an IP address.
2. **TCP Connection:** Browser establishes a TCP connection with the web server.
3. **HTTP Request:** Browser sends an HTTP request (GET, POST, etc.) to the server.
4. **Server Processing:** Web server processes the request, executes scripts (PHP, etc.), accesses databases, and
   generates a response.
5. **HTTP Response:** Server sends an HTTP response with status code, headers, and content (HTML, JSON, etc.).
6. **Browser Processing:** Browser receives and renders the response, executes JavaScript, and loads additional
   resources (CSS, images, etc.).

### 30. Что такое куча и стек?

**Translation:** What are heap and stack?

**Answer:**

- **Heap:** Memory region where dynamic memory allocation occurs. Objects and variables created with `new` in PHP are
  stored in the heap. Managed by the garbage collector.
- **Stack:** Memory region used for static memory allocation, function calls, and local variables. Follows
  Last-In-First-Out (LIFO) order.

### 31. Что такое рефлексия?

**Translation:** What is reflection?

**Answer:** Reflection in PHP is the ability of a program to inspect its own structure at runtime. It allows you to
retrieve information about classes, methods, properties, and parameters, as well as dynamically invoke methods and
access or modify object properties.

### 32. Что такое хэш-функция и где она используется?

**Translation:** What is a hash function and where is it used?

**Answer:**

- **Hash Function:** A function that takes an input (or 'message') and returns a fixed-size string of bytes, typically
  used for data integrity and security purposes.
- **Usage:** Hash functions are used in PHP for data validation, cryptographic operations (like password hashing), and
  creating hash tables for fast data lookup.

### 33. Как применяются очереди в PHP?

**Translation:** How are queues used in PHP?

**Answer:** Queues in PHP are used to manage and process asynchronous tasks or messages. They ensure that tasks are
executed in the order they are received and decouple components by allowing producers and consumers to operate
independently.

### 34. Как в общих чертах работает OPcache?

**Translation:** How does OPcache work in general terms?

**Answer:** OPcache (Opcode cache) in PHP stores precompiled PHP bytecode in shared memory. It avoids the need to load
and parse PHP scripts on each request, improving execution speed by caching compiled code. OPcache reduces CPU usage and
accelerates PHP application performance significantly.

### 35. Что такое GRASP?

**Translation:** What is GRASP?

**Answer:** GRASP (General Responsibility Assignment Software Patterns) are a set of principles and guidelines for
object-oriented design and modeling. GRASP patterns help identify object responsibilities, maintain high cohesion, and
minimize coupling in software systems.

### 36. Что такое TDD?

**Translation:** What is TDD (Test-Driven Development)?

**Answer:** TDD is a software development process where tests are written before writing the actual code. The
development cycle involves writing a test that fails (red), writing the minimum code required to pass the test (green),
and then refactoring the code while ensuring tests continue to pass.

### 37. Чем отличаются модульные тесты от интеграционных?

**Translation:** How do unit tests differ from integration tests?

**Answer:**

- **Unit Tests:** Test individual units or components of a system (like classes or methods) in isolation. They verify
  that each unit behaves as expected independently of its dependencies.
- **Integration Tests:** Test how components work together as a whole. They verify interactions between different units,
  including external dependencies like databases or APIs.

### 38. Что такое трейты? Как применять на практике

?

**Translation:** What are traits? How are they applied in practice?

**Answer:**

- **Traits:** PHP feature that enables code reuse through multiple inheritance-like mechanism. Traits define methods
  that can be reused in multiple classes independently of class hierarchy.
- **Usage:** Apply traits to classes using `use` keyword. Traits are useful for sharing methods across classes without
  inheritance limitations, promoting code reuse and maintainability.

### 39. Как разрешить конфликты при использовании trait?

**Translation:** How to resolve conflicts when using traits?

**Answer:** Trait conflict resolution in PHP occurs when two traits used in the same class provide methods with the same
name. To resolve conflicts:

- Use the `insteadof` operator to specify which trait's method to use.
- Alias methods using the `as` keyword to provide unique names for conflicting methods.
- Define new methods in the class that override conflicting methods from traits.

### 40. Как работает автозагрузка классов?

**Translation:** How does class autoloading work?

**Answer:**

- Class autoloading in PHP dynamically loads classes when they are first accessed, rather than including all class files
  upfront.
- Use `spl_autoload_register()` to register autoload functions or use PSR-4 compliant autoloading, where namespaces
  correspond to directory structures.
- Autoloading eliminates the need for manual `require` or `include` statements for each class, improving code
  maintainability and performance.

### 41. В чем разница между стеком и очередью?

**Translation:** What is the difference between a stack and a queue?

**Answer:**

- **Stack:** Last-In-First-Out (LIFO) data structure where the last element added is the first one to be removed.
- **Queue:** First-In-First-Out (FIFO) data structure where the first element added is the first one to be removed.

Both stack and queue are abstract data types commonly used in programming for managing data storage and retrieval based
on specific ordering principles.

### 42. Расскажите о Unit Tests (required), Functional Tests (optional). Моки и стаб в PHP.

**Translation:** Tell about Unit Tests (required), Functional Tests (optional). Mocks and stubs in PHP.

**Answer:**

- **Unit Tests:** Test individual units (like methods or functions) in isolation to ensure they behave as expected.
- **Functional Tests:** Test entire systems or components to verify they function correctly from end-to-end.
- **Mocks and Stubs:** Mocks are simulated objects used to replace dependencies in tests, providing controlled
  responses. Stubs provide canned responses to method calls during testing, mimicking real behavior without actual
  implementation.

### 43. Представим ситуацию, в которой нам нужно вызвать частный метод. Как это сделать?

**Translation:** Suppose we need to call a private method. How can this be done?

**Answer:** In PHP, you can use reflection to call private or protected methods. Here's an example:

```php
class MyClass {
    private function privateMethod($arg) {
        return "Hello, $arg!";
    }
}

$object = new MyClass();
$method = new ReflectionMethod('MyClass', 'privateMethod');
$method->setAccessible(true); // Allow calling private method
$result = $method->invoke($object, 'World');
echo $result; // Outputs: Hello, World!
```

### 44. Опишите разницу между PHP-FPM и PHP на сокете.

**Translation:** Describe the difference between PHP-FPM and PHP on socket.

**Answer:**

- **PHP-FPM (FastCGI Process Manager):** Manages PHP processes via FastCGI protocol, serving PHP requests independently
  from web servers like nginx or Apache.
- **PHP on Socket:** Directly integrates PHP with web servers using PHP modules like `mod_php` for Apache, handling PHP
  execution within the web server process.

PHP-FPM offers better performance, resource management, and scalability for handling PHP requests compared to PHP on
socket.

### 45. Как бы вы реализовали загрузки больших отчетов с большим количеством данных (файлы от 1 гигабайта до N гигабайт).

**Translation:** How would you implement large report downloads with large amounts of data (files from 1 gigabyte to N
gigabytes)?

**Answer:**

- Use streaming techniques to generate and deliver large files in chunks rather than loading the entire file into
  memory.
- Set appropriate HTTP headers (`Content-Disposition`, `Content-Type`, `Content-Length`) for browser download.
- Implement efficient data retrieval and processing to generate reports on-the-fly or from pre-generated data sources.
- Consider compressing large files (e.g., using gzip) to reduce download times and bandwidth usage.

### 46. Как бы вы импортировали 50-гигабайтный файл xml в базу данных?

**Translation:** How would you import a 50-gigabyte XML file into a database?

**Answer:**

- **Preparation:** Ensure sufficient server resources (disk space, memory) and optimize database settings for large
  imports.
- **Parsing:** Use XML parsers (like `XMLReader` or `SimpleXML` in PHP) to read XML data in chunks, avoiding loading the
  entire file into memory.
- **Data Conversion:** Convert XML data into database-compatible format (arrays, objects) for batch insertion.
- **Batch Insertion:** Insert data in batches using database transactions to manage memory and improve performance.
- **Monitoring and Optimization:** Monitor import progress, handle errors gracefully, and optimize database indexes and
  configurations for large data imports.

### 47. Почему после PHP 5 идет сразу 7, куда делась 6?

**Translation:** Why did PHP jump from version 5 to 7, skipping version 6?

**Answer:** PHP 6 was originally planned as a major release with features like native Unicode support. However, due to
development challenges and conflicts, the PHP community decided to abandon the PHP 6 name and release cycle. PHP 7 was
then chosen to signify significant improvements and changes over PHP 5, including performance enhancements, new
features, and better language design.

### 48. Есть ли разница между self и this в PHP?

**Translation:** Is there a difference between `self` and `this` in PHP?

**Answer:**

- **`self`:** Refers to the current class context. Used for accessing static properties, constants, or invoking static
  methods within the same class.
- **`$this`:** Refers to the current object instance. Used for accessing non-static properties and methods within the
  class.

In PHP, `self` is used for static context, while `$this` is used for instance context, representing the current object's
state and behavior.

### 49. Что такое PuTTY?

**Translation:** What is PuTTY?

**Answer:** PuTTY is a free and open-source terminal emulator, serial console, and network file transfer application. It
supports various network protocols like SSH, Telnet, rlogin, and serial connectivity. PuTTY is widely used for accessing
remote systems securely and managing network devices.

### 50. У нас есть важный PHP-файл, его надо запускать каждые 20 секунд. Как бы вы это сделали?

**Translation:** We have an important PHP file that needs to be executed every 20 seconds. How would you do this?

**Answer:**

- **Cron Job (Linux):** Create a cron job to execute the PHP script at specific intervals (e.g., every 20 seconds).

  Example crontab entry:
  ```
  */1 * * * * /usr/bin/php /path/to/your/script.php
  ```

- **Scheduled Task (Windows):** Use Task Scheduler to schedule a task that runs the PHP script every 20 seconds.

- **Loop with Sleep:** Implement an infinite loop in a PHP script with a `sleep(20)` function call inside to pause
  execution for 20 seconds between each run. Ensure the script is executed in a suitable environment (like a background
  process).

### 51. Как расшифровать 644 в правах на файл в Linux?

**Translation:** How to decode 644 in Linux file permissions?

**Answer:** In Linux file permissions (represented as three digits), each digit corresponds to permissions for different
user groups:

- **First digit:** Owner's permissions.
- **Second digit:** Group's permissions.
- **Third digit:** Others' permissions.

Each digit is a sum of specific permissions:

- 4: Read (r)
- 2: Write (w)
- 1: Execute (x)

So, `644` means:

- Owner has read and write permissions (4 + 2 = 6).
- Group has read permissions (4).
- Others have read permissions (4).

### 52. Что такое Opcode?

**Translation:** What is Opcode?

**Answer:** Opcode (Operation Code) in PHP refers to the intermediate machine-level code generated by the PHP
interpreter from PHP source code (text-based). Opcodes are low-level instructions understood by the PHP virtual
machine (Zend Engine), facilitating efficient execution of PHP scripts. OPcache stores and retrieves these opcodes to
enhance PHP script performance by reducing compilation overhead.

---

## Git

### 53. В чем разница между merge и rebase в Git?

**Translation:** What is the difference between merge and rebase in Git?

**Answer:**

- **Merge:** Merging in Git integrates changes from one branch into another. It creates a merge commit, which combines
  the histories of both branches. This preserves the commit history of both branches but can result in a more cluttered
  history with merge commits.

- **Rebase:** Rebasing in Git moves the entire history of changes in one branch onto another branch. It effectively
  rewrites the commit history by creating new commits for each commit in the original branch. This results in a linear
  history without merge commits but can lead to conflicts that need resolution for each commit being reapplied.

### 54. Какой командой можно сделать ресет изменений в git, не потеряв их?

**Translation:** How can you reset changes in Git without losing them?

**Answer:**

To reset changes in Git without losing them, you can use the following command:

```bash
git reset --soft HEAD^
```

This command resets the current branch's HEAD to the parent commit (HEAD^), keeping all changes from the undone commits
staged. You can then commit these changes again if needed.

### 55. Что такое stash в Git и зачем он нужен?

**Translation:** What is a stash in Git and why is it used?

**Answer:**

A stash in Git is a feature that allows you to temporarily store uncommitted changes. It's useful when you need to
switch to another branch or work on something else without committing half-done work. Stashing effectively saves your
working state, including modified tracked files and staged changes, allowing you to revert your working directory to the
last commit state.

To stash changes, you use the command:

```bash
git stash
```

You can later retrieve your stashed changes using `git stash apply` or `git stash pop` to reapply them onto your current
working branch.

## Базы данных

### 56. В чем разница между MyISAM и InnoDB? Что в каких случаях лучше применять?

**Translation:** What is the difference between MyISAM and InnoDB? When is each better suited?

**Answer:**

- **MyISAM:** Supports full-text search indexes and is typically faster for read-heavy operations. It does not support
  transactions or foreign keys, making it less suitable for applications requiring data integrity and concurrency.
- **InnoDB:** Supports transactions, foreign keys, and row-level locking, ensuring high reliability and data integrity.
  It's optimized for write-heavy applications and is the default storage engine in MySQL since version 5.5.

**Recommendation:** Use **InnoDB** for most applications due to its support for transactions and referential integrity,
which are essential for maintaining data consistency in modern web applications.

### 57. Как найти и оптимизировать «тяжелые» запросы?

**Translation:** How to find and optimize "heavy" queries?

**Answer:**

- **Finding heavy queries:** Use MySQL's `EXPLAIN` statement to analyze the query execution plan and identify
  inefficient queries. Monitoring tools like MySQL's Performance Schema or third-party tools can also help pinpoint slow
  queries.
- **Optimizing queries:** Strategies include adding appropriate indexes, rewriting queries to use more efficient joins
  or subqueries, minimizing the number of rows examined, and optimizing database schema design to reduce redundancy and
  improve query performance.

### 58. Какие есть типы индексов?

**Translation:** What are the types of indexes?

**Answer:**

- **Primary Index:** Automatically created on the primary key column(s) of a table.
- **Unique Index:** Ensures that all values in the index column(s) are unique.
- **Composite Index:** Uses multiple columns for indexing.
- **Full-Text Index:** Used for full-text searches on text-based columns.
- **Spatial Index:** Optimizes searches for spatial data types like coordinates on maps.

### 59. Как хранить координаты точки на карте в БД?

**Translation:** How to store coordinates of a point on a map in a database?

**Answer:**

- Use a **spatial data type** such as `POINT` in MySQL's spatial extensions (e.g., `GEOMETRY` or `POINT`). These data
  types support indexing and efficient querying for spatial data operations.

### 60. Какие типы индексов бывают в RDBMS?

**Translation:** What types of indexes exist in RDBMS?

**Answer:**

- See answer to question 58.

### 61. Какое свойство полей БД нужно учитывать при выборе типа индекса?

**Translation:** What database field properties should be considered when choosing an index type?

**Answer:**

- The **selectivity** of the column values (how unique they are).
- The frequency of data modifications (inserts, updates, deletes) for that column.
- The types of queries performed (range queries, equality matches).

### 62. Когда следует использовать индексы, какие есть преимущества и недостатки?

**Translation:** When should indexes be used, what are the advantages and disadvantages?

**Answer:**

- **Advantages:** Improve query performance by reducing the number of rows scanned, enable fast data retrieval, and
  enforce uniqueness.
- **Disadvantages:** Increase storage requirements, slow down data modifications (inserts, updates, deletes), and
  require careful maintenance to avoid index fragmentation.

### 63. Что такое ACID?

**Translation:** What is ACID?

**Answer:** ACID is an acronym that stands for:

- **Atomicity:** Ensures that transactions are "all or nothing" – either all operations within the transaction are
  completed successfully, or none are.
- **Consistency:** Ensures that the data meets all validation rules and constraints, maintaining integrity.
- **Isolation:** Ensures that transactions are isolated from each other until they are completed.
- **Durability:** Ensures that once a transaction is committed, its changes are permanent and survive system failures.

### 64. Что такое план выполнения запроса и как его узнать?

**Translation:** What is a query execution plan and how to obtain it?

**Answer:**

- A **query execution plan** is a roadmap that the database engine uses to execute a query. It describes the steps the
  database will take to retrieve the requested data.
- To obtain a query execution plan in MySQL, use the `EXPLAIN` statement before your query. For example,
  `EXPLAIN SELECT * FROM table_name WHERE condition;` will show you how MySQL plans to execute that query.

### 65. В чем разница между типами данных CHAR и VARCHAR в SQL?

**Translation:** What is the difference between the CHAR and VARCHAR data types in SQL?

**Answer:**

- **CHAR:** Stores fixed-length strings. It is useful when the length of the column values is consistent, as it avoids
  the overhead of storing length information.
- **VARCHAR:** Stores variable-length strings. It is useful when the length of the column values varies, as it only uses
  storage space for the actual data length plus two bytes.

### 66. Каково назначение транзакций? Расскажите о принципе работы.

**Translation:** What is the purpose of transactions? Explain how they work.

**Answer:**

- **Purpose:** Transactions ensure data integrity by grouping one or more SQL operations into a single logical unit of
  work. They either complete successfully (commit) or fail entirely (rollback).
- **Working Principle:** Transactions follow the ACID properties (Atomicity, Consistency, Isolation, Durability).
  Database systems manage transactions through a transaction log, which tracks changes and allows for rollback in case
  of failure.

### 67. Назовите 3-4 нормальные формы реляционных БД.

**Translation:** Name 3-4 normal forms of relational databases.

**Answer:**

- **First Normal Form (1NF):** Eliminates repeating groups and ensures that each column contains atomic (indivisible)
  values.
- **Second Normal Form (2NF):** Ensures that all non-key attributes are fully functional dependent on the primary key.
- **Third Normal Form (3NF):** Ensures that all columns in a table are non-transitively dependent on the primary key.

### 68. Каково назначение репликации? Какие есть типы связей и в чем разница между ними?

**Translation:** What is the purpose of replication? What types of relationships exist and what are their differences?

**Answer:**

- **Replication Purpose:** Replication is used for creating redundant copies of a database to improve availability,
  fault tolerance, and load balancing.
- **Types of Relationships:**
    - **Master-Slave (Primary-Replica):** One-way replication where changes are made on the master and propagated to the
      slave(s).
    - **Master-Master (Peer-to-Peer):** Bidirectional replication where changes can be made on either master and are
      synchronized to the other master.

### 69. Что такое индексация? Какие есть типы индексов? Какой смысл их использовать?

**Translation:** What is indexing? What types of indexes exist? Why use them?

**Answer:**

- **Indexing:** Indexing is the process of creating efficient data structures (indexes) to quickly retrieve data from a
  database table.
- **Types of Indexes:** See answer to question 58.
- **Purpose:** Indexes speed up data retrieval operations such as SELECT queries, improve query performance, and enforce
  data integrity constraints like uniqueness.

### 70. Что такое полнотекстовый поиск в MySQL? Как он реализуется?

**Translation:** What is full-text search in MySQL? How is it implemented?

**Answer:**

- **Full-Text Search:** Full-text search allows users to perform text-based searches on text columns in MySQL. It
  supports operations like natural language search, boolean search, and proximity search.
- **Implementation:** Use full-text indexes (`FULLTEXT` index) on columns containing text data. Queries can then use
  `MATCH() ... AGAINST()` syntax to perform full-text searches efficiently.

### 71. Что такое cursor в MySQL-процедурах?

**Translation:** What is a cursor in MySQL procedures?

**Answer:**

- **Cursor:** A cursor in MySQL procedures is a database object that enables traversal over the rows of a result set. It
  allows processing each row individually, making it useful for complex row-by-row operations within stored procedures.

### 72. Расскажите о RabbitMQ или Gearman.

**Translation:** Tell me about RabbitMQ or Gearman.

**Answer:**

- **RabbitMQ:** RabbitMQ is a message broker that implements the Advanced Message Queuing Protocol (AMQP). It is used
  for asynchronous messaging between distributed systems, ensuring reliable communication and decoupling of components.
- **Gearman:** Gearman is a distributed job queuing system. It allows applications to offload work to other machines
  asynchronously, spreading the workload across multiple nodes for improved scalability and parallel processing.

### 73. Что знаете о Solr / ElasticSearch?

**Translation:** What do you know about Solr / Elasticsearch?

**Answer:**

- **Solr:** Solr is an open

-source search platform built on Apache Lucene. It provides full-text search, faceted search, hit highlighting, and
distributed searching capabilities. Solr is often used for enterprise search and data analytics.

- **Elasticsearch:** Elasticsearch is also built on Apache Lucene and provides a distributed, RESTful search and
  analytics engine. It is commonly used for real-time search and log analytics, offering scalability and near real-time
  search capabilities.

### 74. Что такое Дедлок MySQL?

**Translation:** What is a MySQL deadlock?

**Answer:**

- **Deadlock:** A deadlock in MySQL occurs when two or more transactions permanently block each other by each having a
  lock on a resource that the other transaction wants. This prevents both transactions from progressing and requires
  intervention to resolve, typically by rolling back one of the transactions.

### 75. Влияет ли порядок JOIN на план выполнения MySQL-запроса?

**Translation:** Does the order of JOINs affect the query execution plan in MySQL?

**Answer:**

- **Yes, it can:** The order of JOINs can affect the query optimizer's choice of execution plan. MySQL's query optimizer
  generally tries to optimize JOINs based on available indexes, table sizes, and query conditions. In some cases,
  reordering JOINs can lead to a more efficient execution plan and better query performance.

## Laravel

### 76. Как и какие запросы формируются при использовании метода with() в Laravel?

**Translation:** How and what queries are formed when using the `with()` method in Laravel?

**Answer:**
The `with()` method in Laravel is used for eager loading relationships between models to avoid the N+1 query problem.
When you use `with()` on a query builder or an Eloquent model, Laravel executes a primary query to fetch the main model
data and then a separate query for each relationship specified in `with()`.

For example, if you have a `Post` model that `hasMany` `Comment` models, using `with('comments')` like this:

```php
$posts = Post::with('comments')->get();
```

Laravel will first fetch all `Post` records in one query, and then fetch all related `Comment` records for these posts
in a separate query, optimizing the retrieval of related data.

### 77. Чем отличаются методы with() и load() в Laravel?

**Translation:** What are the differences between the `with()` and `load()` methods in Laravel?

**Answer:**

- **`with()`**:
    - **Eager Loading:** Loads relationships eagerly when the parent model is queried.
    - **Defined in Query Builder:** Used directly on the Eloquent query builder (`Model::with('relation')`) or on the
      model (`$model->with('relation')`).
    - **Loads All:** Loads all specified relationships upfront.
    - **Prevents N+1 Query Problem:** Helps in avoiding multiple additional queries when accessing relationships.

- **`load()`**:
    - **Lazy Loading:** Loads relationships lazily on an already retrieved model instance.
    - **Called on Model Instance:** Used after fetching a model instance (`$model->load('relation')`).
    - **Loads Specific Relationships:** Allows loading specific relationships on demand.
    - **Useful After Initial Query:** Useful when relationships weren't initially loaded but needed later in the code
      execution.

**Example Usage:**

Using `with()`:

```php
$posts = Post::with('comments')->get(); // Eager loads all posts with their comments
```

Using `load()`:

```php
$post = Post::find(1); // Fetches a single post
$post->load('comments'); // Lazy loads comments for this specific post
```

In summary, `with()` is used for eager loading relationships when querying multiple models upfront, while `load()` is
used for lazy loading relationships on an already retrieved model instance.

## Практические задания

Sure, here are the questions and answers translated into English with Markdown formatting:

### Question 78

**Q: You need to scrape products and their prices from an online store. How would you approach this task and what are
the main considerations to keep in mind?**

**A:**
To scrape products and prices from an online store, I would use PHP along with libraries like `GuzzleHttp` for making
HTTP requests and `Symfony DomCrawler` for parsing HTML. Key considerations include respecting the site's robots.txt
file and terms of service, handling pagination if products are spread across multiple pages, implementing rate limiting
to avoid overloading the server, and handling different HTML structures gracefully to ensure robustness in scraping.

### Question 79

**Q: For a user site, we need a mechanism to add and display avatars. How would you implement this?**

**A:**
To implement avatar handling, I would allow users to upload their avatars, storing them in a designated directory or
using a cloud storage service like Amazon S3. For displaying avatars, I'd store the file paths or URLs in the database
alongside user profiles. Ensure file type validation, resize images to save storage and bandwidth, and consider privacy
settings for user avatars.

### Question 82

**Q: Implement a message queue using MySQL for data storage. How would you avoid multiple workers processing the same
message?**

**A:**
To avoid multiple workers processing the same message in MySQL-based message queues, use transactions with
`SELECT ... FOR UPDATE` to lock rows while a worker processes them. Include a column to mark messages as being processed
and update it atomically to prevent duplicate processing. Employ indexing and query optimization to handle concurrency
efficiently.

### Question 83

**Q: Given a 3x3 matrix of numbers, how would you find numbers that do not have even/odd neighbors?**

**A:**
To find numbers in a 3x3 matrix without even/odd neighbors, iterate through each element of the matrix and check its
adjacent elements (up, down, left, right). Use modulus operations to determine if neighboring numbers are even or odd.
Collect elements that satisfy the condition and handle edge cases (like elements on the matrix boundaries) to ensure
correct results.

### Question 84

**Q: You have an API manual from the European Central Bank for currency exchange rates. How would you find
minimums-maximums over 5 years, and then by monthly breakdown?**

**A:**
To find minimums and maximums of currency exchange rates over 5 years using the ECB API, first fetch historical data and
parse it. Aggregate minimum and maximum values over the entire dataset. For monthly breakdowns, group data by month
using date/time functions in PHP or MySQL, then find minimums and maximums within each month's dataset.

### Question 85

**Q: Store your library in a database. You need to save book titles and author names. Propose a table structure and
provide a report of "book — number of co-authors".**

**A:**

#### Table Structure:

```sql
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    -- Assuming authors are stored in a separate table for normalization
);

CREATE TABLE authors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE book_authors (
    book_id INT,
    author_id INT,
    PRIMARY KEY (book_id, author_id),
    FOREIGN KEY (book_id) REFERENCES books(id),
    FOREIGN KEY (author_id) REFERENCES authors(id)
);
```

#### Report Query:

```sql
SELECT b.title AS book, COUNT(ba.author_id) AS num_coauthors
FROM books b
JOIN book_authors ba ON b.id = ba.book_id
GROUP BY b.title;
```

### Question 86

**Q: Implement simple routing for a framework like "Raus" based on the pattern "/{class_name}/{method_name}/".**

**A:**
Implement a routing mechanism that maps URLs like `/ClassName/methodName/` to corresponding PHP classes and methods. Use
regex or simple string manipulation to extract class names and method names from the URL. Instantiate the class
dynamically and invoke the method based on the URL parameters provided.

### Question 87

**Q: Design an architecture based on a basic abstraction where child classes extend via interfaces. Implement shared
method implementations using traits within the abstraction.**

**A:**
Design an abstract base class implementing common methods and declare interfaces for specific behaviors expected from
child classes. Use traits to provide default method implementations shared across multiple child classes that implement
the same interface. This allows for code reuse and flexibility in adding new functionalities by extending the base class
or implementing new interfaces.

### Question 89

**Q: In Laravel, write a schedule that runs every hour on Fridays at 15 minutes past the hour.**

**A:**
In Laravel's `app/Console/Kernel.php`, define the schedule using the `cron` method:

```php
protected function schedule(Schedule $schedule)
{
    $schedule->command('your-command')->fridays()->hourlyAt(15);
}
```

Replace `'your-command'` with the name of your custom Artisan command.

### Question 90

**Q: Write a custom Artisan command that outputs the current time to the console.**

**A:**
Create a new Artisan command using `php artisan make:command CurrentTimeCommand`. Then, implement the command in the
generated class file (`app/Console/Commands/CurrentTimeCommand.php`):

```php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class CurrentTimeCommand extends Command
{
    protected $signature = 'current:time';
    protected $description = 'Display the current time';

    public function handle()
    {
        $this->info('Current time: ' . now()->toTimeString());
    }
}
```

You can then run this command using `php artisan current:time` in the terminal.

These answers cover a range of topics commonly encountered by PHP developers, from web scraping and database management
to Laravel scheduling and Artisan commands.

# SENIOR

## Общие вопросы

### 1. Как вы понимаете REST?

**Translation:** How do you understand REST?

**Answer:** REST (Representational State Transfer) is an architectural style for designing networked applications. It
relies on a stateless, client-server communication protocol, typically using HTTP. RESTful systems use standard HTTP
methods (GET, POST, PUT, DELETE) to perform CRUD operations (Create, Read, Update, Delete) on resources. It emphasizes
scalability, simplicity, and the use of uniform interfaces.

### 2. Что такое Copy-on-write?

**Translation:** What is Copy-on-write?

**Answer:** Copy-on-write is an optimization strategy used in computer programming and database systems. It allows
multiple processes to share the same data until one of them tries to modify it. When a modification is attempted, the
data is copied so that changes are only applied to the copied version, leaving the original data intact for other
processes. This technique helps save memory and improve performance.

### 3. Что такое позднее статическое связывание?

**Translation:** What is late static binding?

**Answer:** Late static binding in PHP allows accessing static methods and properties in a class hierarchy. It enables
child classes to reference the overridden methods and properties of their parent classes using the `static` keyword.
This is particularly useful when you need to call a method or access a property from within a child class context but
want to ensure it refers to the child class's implementation.

### 4. Что такое CQRS?

**Translation:** What is CQRS?

**Answer:** CQRS (Command Query Responsibility Segregation) is an architectural pattern where read and write operations
for a data store are separated into separate models. This segregation allows for optimized read and write performance,
scalability, and flexibility in handling different data access patterns. It encourages the use of different models to
query data (read) and to update data (write), enhancing maintainability and performance tuning capabilities.

### 5. Что такое cohesion и coupling?

**Translation:** What are cohesion and coupling?

**Answer:**

- **Cohesion:** Cohesion measures how strongly related and focused the responsibilities of a single module or class are.
  High cohesion means the elements within a module or class are closely related and work together towards a single
  purpose.
- **Coupling:** Coupling measures how much one module or class depends on another. Loose coupling means modules are
  relatively independent and changes in one module have minimal impact on others.

### 6. Как можно получить значение частного свойства класса в рантайме?

**Translation:** How can you access the value of a private class property at runtime?

**Answer:** In PHP, private properties cannot be accessed directly from outside the class scope. However, you can use
getter methods defined within the class to fetch the values of private properties.

### 7. Как можно получить значение частного свойства класса в рантайме без использования рефлексии?

**Translation:** How can you access the value of a private class property at runtime without using reflection?

**Answer:** Without reflection, you can only access private properties indirectly, usually through public methods (
getters) defined in the class that return the values of private properties.

### 8. Стоит ли использовать в методах значение по умолчанию null? Если нет, то почему?

**Translation:** Is it advisable to use null as default values in methods? If not, why?

**Answer:** It's generally not advisable to use null as a default value in methods because it can lead to unexpected
behavior and increase the complexity of handling null checks throughout your code. It's better to use specific default
values that are meaningful in the context of the method, which can improve readability and reduce potential bugs related
to null handling.

### 9. Стоит ли возвращать null из методов? Если нет, то почему и как писать код в таких случаях?

**Translation:** Is it advisable to return null from methods? If not, why not, and how should you write code in such
cases?

**Answer:** Returning null from methods should be avoided where possible because it can introduce ambiguity and
error-prone code when handling return values. It's better to use exceptions or other meaningful return values (like
empty arrays or objects) to clearly indicate the absence of a meaningful result. This approach makes the code more
predictable and reduces the risk of null pointer exceptions.

### 10. Стоит ли передавать null как параметр методов? Если нет, то почему и как писать код?

**Translation:** Is it advisable to pass null as a parameter to methods? If not, why not, and how should you write code?

**Answer:** Passing null as a parameter to methods should generally be avoided because it can make the method's behavior
less clear and lead to unexpected errors or side effects. Instead, consider using method overloading (if available) or
using optional parameters with default values that are meaningful in the context of the method. This helps maintain code
clarity and reduces the likelihood of errors related to null values.

### 11. Как вы понимаете Special Case / Null Object и где его следует применять?

**Translation:** How do you understand Special Case / Null Object and where should it be applied?

**Answer:** The Special Case / Null Object pattern involves defining a class that acts as a surrogate for null. It
provides default behavior when an object is expected but not present, thereby eliminating the need for null checks in
client code. It should be applied in situations where null values are expected and need to be handled gracefully without
explicit null checks, improving code readability and maintainability.

### 12. Какой подход следует применить во время тестирования кода, имеющего внешние зависимости (например, обращение к API Google)?

**Translation:** What approach should be used when testing code that has external dependencies (e.g., accessing the
Google API)?

**Answer:** When testing code with external dependencies, mock objects or stubs should be used to simulate the behavior
of the external dependencies without actually invoking them. This approach ensures that tests remain isolated,
predictable, and independent of external factors such as network availability or API changes.

### 13. Что такое DDD?

**Translation:** What is DDD (Domain-Driven Design)?

**Answer:** Domain-Driven Design (DDD) is an approach to software development that focuses on understanding and modeling
a problem domain as a set of related concepts, rather than focusing solely on technology concerns. It emphasizes
collaboration between domain experts and developers to create a domain model that directly reflects the business
domain's logic and requirements.

### 14. Что такое микросервисная архитектура?

**Translation:** What is microservices architecture?

**Answer:** Microservices architecture is an architectural style that structures an application as a collection of
loosely coupled services. Each service is self-contained, deployable independently, and communicates with other services
through lightweight mechanisms (often HTTP or messaging protocols). This approach promotes flexibility, scalability, and
resilience, as each service can be developed, deployed, and scaled independently.

### 15. Какие есть способы коммуникации между микросервисами?

**Translation:** What are the methods of communication between microservices?

**Answer:** Microservices can communicate using various methods:

- **HTTP/REST:** Services communicate via HTTP requests using RESTful APIs.
- **Messaging:** Services use message queues (e.g., RabbitMQ, Kafka) to exchange asynchronous messages.
- **gRPC:** Services communicate using a high-performance, language-agnostic RPC framework.
- **Event-driven:** Services publish events to a message broker, and other services consume these events to react
  accordingly.

### 16. Расскажите о ReactPHP или Swoole.

**Translation:** Tell me about ReactPHP or Swoole.

**Answer:**

- **ReactPHP:** ReactPHP is a low-level library for event-driven programming in PHP, allowing non-blocking, asynchronous
  I/O operations. It enables writing scalable network servers and clients using event loops.
- **Swoole:** Swoole is a high-performance coroutine-based PHP extension for asynchronous programming. It provides
  features such as coroutines, async I/O, and TCP/UDP server/client implementations, making it suitable for building
  high-concurrency, real-time applications.

### 17. Что такое фильтр Блума?

**Translation:** What is a Bloom filter?

**Answer:** A Bloom filter is a space-efficient probabilistic data structure used to test whether an element is a member
of a set. It may return false positives (indicating that an element is in the set when it is not), but never false
negatives. Bloom filters are particularly useful in applications where memory or storage space is limited and some
degree of error is acceptable.

### 18. Что такое gap locks в MySQL?

**Translation:** What are gap locks in MySQL?

**Answer:** Gap locks in MySQL are locks placed on gaps between index records to prevent phantom reads in
multi-statement transactions. They ensure that new rows cannot be inserted into the gaps between existing index records
by other transactions, maintaining consistency and preventing race conditions.

### 19. Зачем нужно кэширование? Какую проблему оно решает?

**Translation:** Why is caching necessary? What problem does it solve?

**Answer:** Caching is used to store frequently accessed data in memory or storage closer to the requester, reducing the
need to fetch it from the original source repeatedly. It improves application performance by reducing latency, server
load, and database access, especially for

read-heavy operations. Caching helps scale applications and improves user experience by delivering data more quickly.

### 20. Какие виды кеш-хранилищ вы знаете и применяли? Чем они отличаются?

**Translation:** What types of cache stores do you know and have applied? How do they differ?

**Answer:**

- **In-memory caches:** Store data in RAM for fast access (e.g., Redis, Memcached).
- **File-based caches:** Store serialized data in files for persistent storage and retrieval (e.g., APCu).
- **Database caches:** Store cached data within a database for scalable and persistent caching (e.g., MySQL Query
  Cache).
- **Content Delivery Networks (CDNs):** Cache content globally to reduce latency and server load (e.g., Cloudflare, AWS
  CloudFront).

### 21. Чем характеризуется эффективность кэширования?

**Translation:** What characterizes caching efficiency?

**Answer:** Caching efficiency is characterized by:

- **Hit ratio:** Percentage of requests served by the cache without accessing the original data source.
- **Latency reduction:** Time savings achieved by serving data from cache rather than fetching it from the source.
- **Resource utilization:** Effective use of cache memory or storage space to maximize performance gains.
- **Invalidation strategy:** Mechanism to refresh or expire cached data to ensure it remains current and accurate.

### 22. Приведите сложный пример кэширования на практике.

**Translation:** Provide a complex example of caching in practice.

**Answer:** A complex caching example could involve:

- Caching database query results to reduce database load and improve response times.
- Using a CDN to cache and distribute static content globally to reduce server load and improve content delivery speed.
- Implementing cache invalidation strategies (e.g., time-based, event-driven) to ensure cached data remains fresh and
  relevant.

### 23. Что такое sensitive данные? Как хранятся в базе? Как отражаются в логах?

**Translation:** What are sensitive data? How are they stored in the database? How are they reflected in logs?

**Answer:** Sensitive data includes personally identifiable information (PII), financial details, passwords, etc. In
databases, sensitive data should be encrypted at rest and in transit to protect against unauthorized access. It's
essential to log access to sensitive data securely and ensure that logs themselves are protected from unauthorized
access.

### 24. Коротко расскажите об истории PHP. Что появлялось в каждой версии? Куда развивается PHP на ваш взгляд? Что нового в последней версии?

**Translation:** Briefly tell me about the history of PHP. What appeared in each version? Where do you think PHP is
heading? What's new in the latest version?

**Answer:** PHP was originally released in 1995. Key developments in each version include:

- PHP 3: Added support for OOP.
- PHP 4: Improved performance and added more features.
- PHP 5: Introduced PHP Data Objects (PDO), namespaces, and improved OOP support.
- PHP 7: Significant performance improvements, scalar type declarations, return type declarations, etc.
- PHP 8: Features like JIT compilation, attributes, union types, named arguments, etc.

PHP continues to evolve with each release, focusing on performance enhancements, language features, and modernization.
The latest versions emphasize improving developer productivity, performance, and security.

### 25. Как в PHP очистить память?

**Translation:** How do you clear memory in PHP?

**Answer:** PHP uses automatic memory management (garbage collection). You can manually trigger garbage collection using
`gc_collect_cycles()`. However, PHP's garbage collector handles memory deallocation automatically, so explicit memory
management is rarely necessary.

### 26. Что такое антипаттерны? Приведите несколько примеров.

**Translation:** What are antipatterns? Provide a few examples.

**Answer:** Antipatterns are commonly used solutions to recurring problems that lead to inefficiency, bad practices, or
poor performance. Examples include:

- **God Object:** A single class that handles too many responsibilities.
- **Spaghetti Code:** Poorly structured code that's difficult to understand and maintain.
- **Magic Numbers:** Using hard-coded numeric constants instead of named constants or configuration variables.

### 27. Как сделать рефакторинг большого legacy-проекта? Как это аргументировать / продать PM-у, заказчику?

**Translation:** How do you refactor a large legacy project? How do you justify/sell this to a PM or client?

**Answer:** Refactoring a large legacy project involves:

- **Identifying hotspots:** Areas of code with frequent changes or bugs.
- **Incremental refactoring:** Refactor small, manageable chunks at a time.
- **Testing:** Ensure comprehensive test coverage to maintain functionality.

To sell refactoring to PM or clients, emphasize benefits such as improved maintainability, reduced technical debt,
faster development, and fewer bugs over the long term.

### 28. Чем отличается Dependency Injection от Service Locator?

**Translation:** What's the difference between Dependency Injection and Service Locator?

**Answer:**

- **Dependency Injection (DI):** Objects receive their dependencies from an external source (container) rather than
  creating them internally.
- **Service Locator:** Acts as a registry that provides dependencies when requested by clients.

DI promotes loose coupling, easier testing, and better separation of concerns, while Service Locator can introduce
hidden dependencies and make code harder to understand.

### 29. Расскажите об утечке памяти в PHP. Приведите примеры. Как боролись?

**Translation:** Tell me about memory leaks in PHP. Provide examples. How did you address them?

**Answer:** Memory leaks in PHP occur when objects are not properly deallocated after use, leading to memory consumption
over time. Examples include not releasing resources (like database connections) or circular references in objects
preventing garbage collection.

To address memory leaks:

- Use `unset()` to explicitly release memory.
- Avoid circular references in objects.
- Monitor memory usage with tools like Xdebug or Profiler.

### 30. Как работает Garbage Collector? Когда есть смысл вызвать?

**Translation:** How does the Garbage Collector work in PHP? When should it be invoked?

**Answer:** PHP's Garbage Collector automatically manages memory by deallocating objects that are no longer referenced
or in use. It runs automatically during script execution. Explicitly invoking the Garbage Collector (
`gc_collect_cycles()`) is rarely necessary unless you're dealing with long-running scripts or specific memory management
issues.

### 31. По какому принципу будете выбирать архитектуру для своей будущей программы?

**Translation:** Based on what principle would you choose the architecture for your future program?

**Answer:** I would choose an architecture that aligns with the application's requirements, scalability needs, and team
expertise. Principles like modularity, maintainability, scalability, and performance would guide the selection. For
instance, microservices for scalability and agility, or monolithic for simplicity and rapid development.

### 32. С какими видами архитектуры приложений сталкивались?

**Translation:** What types of application architectures have you encountered?

**Answer:** I've worked with:

- **Monolithic architecture:** Single-tier architecture where components are tightly coupled.
- **Microservices architecture:** Decomposed into small, independent services communicating via APIs.
- **Service-oriented architecture (SOA):** Loosely coupled services with well-defined interfaces.
- **Event-driven architecture:** Based on events and message passing between services.

### 33. Структуры данных. Какие знаете, какие использовали на практике?

**Translation:** Data structures. Which ones do you know, and which have you used in practice?

**Answer:** I'm familiar with:

- **Arrays:** Indexed or associative.
- **Linked Lists:** Singly or doubly linked.
- **Stacks and Queues:** LIFO and FIFO data structures.
- **Trees:** Binary trees, AVL trees, red-black trees.
- **Graphs:** Directed, undirected, weighted.

I've used arrays, linked lists, and trees extensively in practical applications for data storage, manipulation, and
algorithms.

### 34. С какими еще видами API сталкивались? Какие были проблемы? Как решали?

**Translation:** What other types of APIs have you encountered? What were the issues, and how did you solve them?

**Answer:** I've worked with:

- **RESTful APIs:** Standard HTTP methods (GET, POST, PUT, DELETE).
- **SOAP APIs:** XML-based protocol for exchanging structured information.
- **GraphQL APIs:** Query language for APIs, providing a more flexible data-fetching mechanism.

Common issues included versioning, rate limiting, authentication, and performance optimization. Solutions involved using
caching, optimizing queries, implementing retry strategies, and monitoring API usage.

### 35. Как вы понимаете Exception flow в контексте PHP?

**Translation:** How do you understand Exception flow in the context of PHP?

**Answer:** Exception flow in PHP involves throwing exceptions when errors or exceptional conditions occur during
runtime. It allows

handling errors gracefully, separating error-handling logic from regular code execution. Exception flow typically
includes try-catch blocks to catch exceptions and handle them appropriately, ensuring robust error management and
application stability.

### 36. Расскажите об автоматических анализаторах кода PHP (Roundcube т.д.).

**Translation:** Tell me about automatic code analyzers for PHP (e.g., Roundcube).

**Answer:** Automatic code analyzers like Roundcube analyze PHP code for various metrics such as code complexity,
adherence to coding standards (PSR), potential bugs, and security vulnerabilities. They provide reports and suggestions
for improving code quality and maintainability, helping teams enforce coding best practices and ensure code consistency
across projects.

### 37. Расскажите о Performance & профилировании PHP-кода (Xdebug, XHprof т.д.).

**Translation:** Tell me about PHP code performance & profiling (e.g., Xdebug, XHprof).

**Answer:**

- **Xdebug:** PHP extension for debugging and profiling, providing insights into code execution, variable dumps, and
  stack traces.
- **XHprof:** PHP extension for profiling PHP applications, showing detailed performance metrics like CPU usage, memory
  consumption, and function call graphs.

Profiling helps identify performance bottlenecks, optimize code, and improve application efficiency, crucial for
high-performance applications.

### 38. Расскажите, как бы вы реализовали систему, когда есть много источников данных, возвращающих в различных форматах данные о пользователе. Есть получатели данных, выбирающие, из каких источников они хотят принимать данные API.

**Translation:** Explain how you would implement a system where multiple data sources return user data in different
formats, with recipients choosing which sources to accept data from via API.

**Answer:**
To implement such a system:

- Standardize data formats using a common schema or data transformation layer.
- Implement adapters or connectors for each data source to fetch and transform data into the standardized format.
- Provide API endpoints where recipients can specify their preferred data sources and receive the transformed data.
- Use caching mechanisms to improve performance and reduce repeated data fetching from sources.

### 39. Расскажите о проекте, которым по-настоящему гордитесь. Какие технологически необычные решения вы применили для его успешной реализации?

**Translation:** Tell me about a project you are truly proud of. What technologically unusual solutions did you apply
for its successful implementation?

**Answer:** One project I'm proud of involved developing a real-time analytics dashboard using microservices
architecture. We used technologies like Kafka for event streaming, Docker for containerization, and Kubernetes for
orchestration. We implemented serverless computing for handling spikes in traffic and employed AI-driven anomaly
detection for proactive monitoring. These solutions ensured scalability, performance, and real-time insights for our
users.

### 40. Как вы организуете тестирование кода? Когда покрытие тестами нерационально? Были ли у вас такие проекты?

**Translation:** How do you organize code testing? When is test coverage not rational? Have you had such projects?

**Answer:**

- I organize testing using PHPUnit for unit tests, integration tests, and end-to-end tests where applicable.
- Test coverage becomes irrational when testing trivial or non-critical parts of the code, leading to diminishing
  returns in terms of quality assurance.
- Yes, I've encountered projects where achieving 100% test coverage wasn't practical or beneficial due to time
  constraints or the nature of the codebase.

---

## Git

### 41. Как изменить только сообщение последнего коммита?

**Translation:** How to change only the message of the last commit?

**Answer:** To change the message of the last commit in Git, you can use the following command:

```bash
git commit --amend -m "New commit message"
```

This command will open your default text editor (as specified by `core.editor` configuration) or allow you to directly
edit the commit message in the terminal with the new message provided after `-m`.

### 42. git rebase -i HEAD~3 что делает эта команда и какие могут возникнуть проблемы при ее применении?

**Translation:** What does `git rebase -i HEAD~3` do and what issues might arise when applying it?

**Answer:**

The `git rebase -i HEAD~3` command initiates an interactive rebase of the last 3 commits. It opens a text editor where
you can specify how each commit should be modified (e.g., reorder, squash, edit commit messages).

Potential issues that may arise include:

- **Conflict Resolution:** If there are conflicting changes between commits or during the rebase process, manual
  intervention is required to resolve conflicts.
- **Loss of Commits:** Incorrectly reordering or squashing commits can lead to losing important changes or breaking the
  commit history.
- **Force Push Requirement:** After rewriting history with rebase, you may need to force-push (`git push --force`) to
  update the remote repository, which can cause issues if others have already pulled from the repository.

### 43. Зачем команда git bundle?

**Translation:** What is the purpose of `git bundle` command?

**Answer:**

The `git bundle` command is used to package up Git objects and references into a single file. This file can then be
transferred and used as a repository in itself, providing a convenient way to transfer Git data without needing network
access. It can be particularly useful in scenarios where direct network connection is not available or unreliable.

### 44. Какой командой можно влить коммит в текущую ветку?

**Translation:** How do you merge a commit into the current branch?

**Answer:**

To merge a commit into the current branch in Git, you can use the `git merge` command. Assuming you want to merge a
commit from another branch (e.g., `feature-branch`), you would do:

```bash
git merge feature-branch
```

This command merges the commits from `feature-branch` into your current branch.

### 45. Как выполнить склеивание коммитов?

**Translation:** How do you perform commit squashing?

**Answer:**

Commit squashing is the process of combining multiple commits into a single commit. You can do this using an interactive
rebase (`git rebase -i`) where you specify the commits to squash. Here’s how:

1. Identify the commits you want to squash by running:
   ```bash
   git rebase -i HEAD~N
   ```
   Replace `N` with the number of commits you want to include in the interactive rebase.

2. In the interactive rebase editor that opens, replace `pick` with `squash` (or `s`) for the commits you want to squash
   into the previous commit.

3. Save and close the editor. Git will then combine the selected commits into one, allowing you to edit the commit
   message if desired.

4. Complete the rebase process by saving the commit message and closing the editor.

This process allows you to tidy up your commit history by combining related changes into logical commits.

## Базы данных

Sure, here are the questions and answers translated into English with Markdown formatting:

### 46. What data structures does Redis support?

Redis supports various data structures such as strings, lists, sets, sorted sets, hashes, bitmaps, hyperloglogs, and
geospatial indexes.

### 47. What is meant by "trigger" in SQL?

A "trigger" in SQL is a set of SQL statements that automatically "fires off" when a specific event (e.g., INSERT,
UPDATE, DELETE) occurs on a particular table. Triggers are used to enforce business rules, perform complex auditing, or
maintain referential integrity.

### 48. What is the difference between relational and non-relational databases (NoSQL)?

Relational databases (SQL) store data in tables with predefined schemas and use structured query language (SQL) for data
manipulation. Non-relational databases (NoSQL) are schema-less or have flexible schemas, and they use various data
models like key-value, document, column-family, or graph-oriented. NoSQL databases are typically designed for high
scalability, flexibility, and performance.

### 49. What NoSQL databases do you know?

Some examples of NoSQL databases include MongoDB (document-oriented), Cassandra (column-family), Redis (key-value),
Neo4j (graph), and DynamoDB (key-value and document).

### 50. What is ACID Compliance?

ACID (Atomicity, Consistency, Isolation, Durability) compliance is a set of properties that guarantee database
transactions are processed reliably. It ensures that transactions are processed in a manner that is reliable and
preserves the integrity of the data.

### 51. What are Views? What are their advantages and disadvantages?

Views in databases are virtual tables derived from one or more base tables. They allow users to query the view as if it
were a normal table. Advantages include simplified querying, enhanced security (by restricting access to certain
rows/columns), and logical data independence. Disadvantages can include performance overhead due to the underlying
queries being executed each time the view is accessed.

### 52. What are transaction isolation levels?

Transaction isolation levels define the degree to which one transaction must be isolated from the effects of concurrent
transactions. The levels (such as Read Uncommitted, Read Committed, Repeatable Read, Serializable) determine the
trade-offs between data consistency and performance in database systems.

### 53. What is a concurrent query?

A concurrent query is a database query executed simultaneously with other queries. Databases are designed to handle
multiple concurrent queries efficiently, ensuring data consistency and transactional integrity.

### 54. What are clustered indexes?

Clustered indexes in databases physically order the table data based on the indexed column(s). Unlike non-clustered
indexes, clustered indexes dictate the actual order of rows in the table, which can improve query performance for range
queries and data retrieval.

### 55. How would you build a social network capable of handling 100,000 concurrent online users and suggesting friends based on location (e.g., New York)?

To build a social network for high concurrency and fast performance:

- **Data Storage:** Use a combination of relational (for structured data like user profiles, friendships) and NoSQL
  databases (for flexible data like posts, comments).
- **Query Optimization:** Store user data efficiently with appropriate indexing. Use caching (e.g., Redis) for
  frequently accessed data.
- **Friend Suggestions:** Implement geospatial indexes (e.g., MongoDB for geo queries) to find users near a given
  location. Algorithms like k-nearest neighbors (KNN) can suggest friends based on proximity.
- **Scalability:** Employ horizontal scaling with load balancers and sharding for both relational and NoSQL databases.
- **Real-time Updates:** Use WebSockets or a similar technology for real-time notifications and updates.

Queries should be optimized to leverage indexes efficiently, minimize joins across distributed databases, and utilize
caching strategies to reduce latency.

## Практические задания

### Question 57:

#### As a PHP programmer, how would you solve the problem of finding strings within a Levenshtein distance of less than 3 from a new string?

To solve this problem, you can use the following approach:

1. **Using a Database**: Store the array of strings in a database (e.g., MySQL) with precomputed Levenshtein distances
   for each string and indexed for quick lookup.

2. **Calculating Levenshtein Distance**: PHP provides libraries like `mb_strlen` and `mb_substr` for handling multibyte
   strings, which is useful when dealing with Unicode data.

3. **Optimizing Queries**: Utilize database indexes to efficiently search for strings with a Levenshtein distance of
   less than 3.

Here’s an example PHP code snippet for implementing this:

```php
<?php
// Assuming $newString contains the new string, and $pdo is a PDO object for database operations

// Prepare a query to select strings with Levenshtein distance < 3
$query = "SELECT * FROM strings WHERE LEVENSHTEIN(string_column, :newString) < 3";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':newString', $newString, PDO::PARAM_STR);
$stmt->execute();

// Process the results
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Actions with the fetched results
    echo $row['string_column'] . "\n";
}
?>
```

### Question 58:

#### What classes / layers / abstractions would you highlight for building an email sending server?

To build an email sending server in PHP, you would typically identify the following classes / layers / abstractions:

1. **Mailer**: A class responsible for sending emails. It includes methods for setting parameters (sender and recipient
   addresses, subject, content) and executing the send operation.

2. **Template Engine**: A component for generating emails from templates. Templates may include variables for
   personalization, such as recipient names or dynamic information.

3. **Queue Manager**: If handling a large volume of emails or ensuring delayed sending, a queue management system may be
   used.

4. **Logging**: For tracking the status of email delivery and handling any errors that occur.

5. **Security Layer**: Protection against spam and malicious actions, such as using CAPTCHA or sender verification.

Here’s a basic PHP class structure for sending emails:

```php
<?php
class Mailer {
    protected $mailer;
    
    public function __construct() {
        // Initialize the email sending object, e.g., PHPMailer or using PHP's built-in mail() function
        $this->mailer = new PHPMailer(true); // Example using PHPMailer
    }
    
    public function sendEmail($to, $subject, $body) {
        try {
            // Configure email parameters
            $this->mailer->setFrom('from@example.com', 'Mailer');
            $this->mailer->addAddress($to);
            $this->mailer->Subject = $subject;
            $this->mailer->Body = $body;

            // Send the email
            $this->mailer->send();
            echo 'Email successfully sent!';
        } catch (Exception $e) {
            echo "Error sending email: {$this->mailer->ErrorInfo}";
        }
    }
}
?>
```

### Question 59:

#### How would you implement URL shortening, image compression / decompression, forum post parsing for mentions of a specific brand, and price checking against competitors' products in PHP?

For each task in PHP, you can use the following approaches:

- **URL Shortener**: Utilize a database to store mappings between short and long URLs. For example, use auto-increment
  IDs to generate short URLs.

- **Image Compression / Decompression**: Use GD or Imagick libraries to resize images and compress them as needed.
  JPEG-optim is a common algorithm for compression.

- **Forum Post Parser**: Use an HTML/XML parsing library (e.g., SimpleHTMLDom) to extract relevant information from
  forum pages. Implement parsing using regular expressions or DOM traversal.

- **Competitor Price Checking**: Use cURL or Guzzle library for sending HTTP requests to competitors' websites and
  extracting prices from the responses. Process data using regular expressions or HTML/XML parsers.

Here's a basic example of a URL shortener implementation in PHP:

```php
<?php
class URLShortener {
    protected $db;
    
    public function __construct(PDO $pdo) {
        $this->db = $pdo;
    }
    
    public function shortenURL($longURL) {
        // Generate a short URL
        $shortURL = $this->generateShortURL();
        
        // Store the mapping in the database
        $stmt = $this->db->prepare("INSERT INTO url_mappings (short_url, long_url) VALUES (:shortURL, :longURL)");
        $stmt->bindParam(':shortURL', $shortURL);
        $stmt->bindParam(':longURL', $longURL);
        $stmt->execute();
        
        return $shortURL;
    }
    
    public function expandURL($shortURL) {
        // Retrieve the long URL from the database based on the short URL
        $stmt = $this->db->prepare("SELECT long_url FROM url_mappings WHERE short_url = :shortURL");
        $stmt->bindParam(':shortURL', $shortURL);
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result['long_url'];
        } else {
            return null;
        }
    }
    
    protected function generateShortURL() {
        // Generate a short URL, for example, based on an auto-increment ID
        $id = $this->db->lastInsertId();
        return base_convert($id, 10, 36);
    }
}
?>
```

These examples demonstrate foundational approaches to solving the mentioned tasks in PHP.



























