# Readme

### 1

Задача: я хочу хранить свою билиотеку в БД. Меня волнуют названия книг и авторы — больше ничего хранить не надо. Предложите структуру таблиц.
Половина кандидатов не знают что такое many-to-many и не могут решить что лучше — хранить author_id в таблице books или book_id в таблице authors.
Если со структурой всё ок, я прошу вытащить список книг, которые написаны 3-мя со-авторами. То есть получить отчет «книга — количество соавторов» и отфильтровать те, у которых со-авторов меньше 3х.


CREATE TABLE book (
    book_id INT PRIMARY KEY AUTO_INCREMENT,
    book_name VARCHAR(255) DEFAULT NULL
);

CREATE TABLE author (
    author_id INT PRIMARY KEY AUTO_INCREMENT,
    author_name VARCHAR(255) DEFAULT NULL
);

CREATE TABLE book_author (
    id INT PRIMARY KEY AUTO_INCREMENT,
    book_id INT(11) NOT NULL,
    author_id INT(11) NOT NULL,
    FOREIGN KEY (book_id) REFERENCES book (book_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY (author_id) REFERENCES author (author_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

INSERT INTO book (book_name)
VALUES('Книга 1'),('Книга 2'),('Книга 3'),('Книга 4'),('Книга 5');

INSERT INTO author (author_name)
VALUES('Автор 1'),('Автор 2'),('Автор 3'),('Автор 4'),('Автор 5');

SELECT book.book_name, COUNT(*) cnt
FROM book_author
JOIN book USING (book_id)
GROUP BY book_id
HAVING cnt >= 3;


### 2

что, если у нас огромная таблица, а запрос нужно выполнять каждые 3 минуты? Что можно сделать?

Навскидку:
— кеширование;
— денормализация базы;
— NoSQL;



### 3

Задача 1:
Есть таблица, в которой записаны 9 не повторяющихся чисел от 1 до 10. Нужно написать скрипт, который вернет недостающее число.
Подсказка: можно написать, как это можно сделать с помощью создания таблицы (что создать, с какими данными и как написать итоговый селект).

CREATE TABLE test (
  id INT NOT NULL PRIMARY KEY
);

INSERT INTO test (id) VALUES (1), (2), (3), (6), (8), (9), (12);

SELECT id1 AS 'FROM', id3 AS 'TO' 
FROM (
  SELECT
    t1.id AS id1,
    t2.id AS id2,
    (
      SELECT id FROM test t3 
      WHERE t3.id > t1.id
      ORDER BY id
      LIMIT 1
    ) AS id3 FROM test t1 
  LEFT JOIN test t2 ON t2.id = t1.id + 1
) query_in
WHERE id1 IS NOT NULL AND id2 IS NULL AND id3 IS NOT NULL



### 4

Нужно написать скрипт, который вернет id заявки и фио (ID) клиентов, которым на момент обращения в банк (то есть заведения заявки) было менее 18 лет.

Есть 2 таблицы:

Applications:
app_id — номер заявки,
app_dt — дата заведения заявки,
status,
client_id — id клиента,
empl_id — id сотрудника,
credit_id — id договора (если он был оформлен, иначе — пусто).

Clients:
Client_id,
Surname,
Firstname,
Middlename,
Birth_dt,
Passport
Pass_dt
Update_dt – дата занесения записи.

Подсказка: использовать функции с данными.


### 5

Имеем таблицу employees (name_employee, department_id, salary) 

1 запрос: вывести список сотрудников, получающих максимальную зарплату в своём отделе. 

SELECT name_employee
FROM employees
GROUP BY department_id
HAVING salary = MAX(salary);

2 запрос: вывести список отделов, содержащих как минимум 5 сотрудников.

SELECT department_id
FROM employees
GROUP BY department_id
HAVING COUNT(name_employee) >= 5;

3 запрос: вывести список дубликатов значений поля salary и их количество. Написать SQL запрос.

SELECT salary, 
COUNT(*) AS count 
FROM employees 
GROUP BY salary 
HAVING COUNT(*) > 1


### 6

Есть две таблицы

users (user_id, name)
orders (order_id, user_id, status)

- выбрать всех пользователей из таблицы users у которых ВСЕ записи в таблице orders имеют статус = 0

SELECT name
FROM users
INNER JOIN orders ON orders.user_id = users.user_id
WHERE status = 0;

- выбрать всех пользователей из таблицы users у которых больше 5 записей в таблице orders имеют статус = 1

SELECT name
FROM users
INNER JOIN oreders USING(user_id)
WHERE status = 1
GROUP BY order_id
HAVING COUNT(*) > 5;

### 7

Есть таблица one, к ней нужно добавить таблицу two, которая содержит такие же поля (id, name, seller, price). Как это сделать?

INSERT INTO one(id, name, seller, price)
SELECT id, name, seller, price
FROM two;

### 8

Есть таблица books (id, publish_date, name, author, price)

Вывести последню опубликованную книгу каждого автора

SELECT name
FROM book
GROUP BY publish_date
HAVING publish_date = MAX(publish_date);

### 9

Какая по вашему мнению должна быть структура БД. Есть список книг и список авторов. У книг может быть несколько авторов.

Ответ: структура таблиц many-to-many
