<?  ?>

Алгоритм проектирования БД на примере новостного сайта:
1 - Определить сущности
2 - Определить свойства сущностей(поля)
3 - Определить связи между сущностями
4 - Дать названия таблицам, полям и записать таблицы в виде схемы
5 - Обозначить связи на схеме
6 - Определить типы полей


1) Определить сущности.
Сущность - реальный или представляемый обьект, информация о котором должна хранится и быть доступной

Сущность всегда обьект.
У обьекта  есть характеристики:
 - у пользователя - имя, фамилия, логин, пароль
 - у новости - заголовок, текст, дата

 Сущность для нашего сайта:
  - 1 - новость
  - 2 - категория новости
  - 3 - пользователь
  - 4 - коментарий
  Эти сущности и будут таблицами в нашей базе данных.


2) Определить свойства сущностей(поля)
В этом нам поможет:
 - от закажчика (не сильно надейся)
 - подумать самому
 - посмотреть на аналогичных сайтах

 Новости - свойства:
 - id
 - заголовок
 - краткое описание
 - содеожание
 - автор
 - категория
 - дата публикации
 - миниатюра
 - статус

 Пользователь - свойства:
  - id
  - имя
  - фамилия
  - emeil
  - пароль
  - страна
  - город
  - пол
  - дата рождения
  - дата регистрации
  - время последнего визита

  Категории новостей - свойства:
   - id
   - название
   - описание
   - порядковый номер

   Коментарии - свойства:
    - id
    - текст
    - автор
    - дата публикации
    - id новости

3) Определить связи между сущностями

Виды связей:
 - один ко многим
 	- ученик - оценки
 - один к одному
 	- люди - паспорта
 - многие ко многим
 	- автор - книги
 	- преподаватель - студенты

Как опознать связь между сущностями: - задать себе 2 вопроса:
1 - сколько объ. В могут относиться к объ. А?
2 - сколько объ. А могут относиться к объ. В?


4) Дать названия таблицам, полям и записать таблицы в виде схемы

Рекомендации по наименованию:
 - имя таб. - существительное в ед. числе (user вместо users)
 - имя таб. должно быть понятным
 - как можно короче, но без потери сути
 - вместо CamelCase исползовать Snake_case

 News:
  - id
  - h1
  - short_content
  - content
  - category_id
  - author_id
  - date
  - preview
  - status

 User:
   - id
   - name
   - surname
   - email
   - password
   - country
   - city
   - gender
   - birthdate
   - register-date
   - last_visit

  News_category:
   - id
   - name
   - destription
   - sort_order
   - status

  Coment:
   - id
   - text
   - author
   - date
   - news_id


5) Обозначить связи на схеме:
 - 1 пользователь может быть автором множества новостей, но у 1 новости может быть только 1 автор (1:M)
 - у 1 пользователя может быть много коментариев, но у одного коментария только один пользователь (1:M)
 - в 1 кат. новостей может содерж. множество новостей, но 1 новость пренадлежит только 1 новости (1:M)
 - 1 коментарий может принадлежать только 1 новости, но 1 новость может иметь множество коментариев (1:M)


6) Определить типы полей

News:
  - id              - int(11)
  - h1              - varchar(255) 
  - short_content   - TEXT
  - content         - TEXT
  - category_id     - int(11)
  - author_id       - int(11)
  - date            - TimeStamp
  - preview         - varchar(255)
  - status          - int(1)

 User:
   - id             - int(11)
   - name           - varchar(50)
   - surname        - varchar(50)
   - email          - varchar(255)
   - password       - varchar(50)
   - country        - varchar(50)
   - city           - varchar(50)
   - gender         - int(1)
   - birthdate      - Datetime
   - register-date  - Timestamp
   - last_visit     - Datetime

  News_category:
   - id             - int(11)
   - name           - varchar(50)
   - destription    - TEXT
   - sort_order     - int(11)
   - status         - int(11)

  Coment:
   - id             - int(11)
   - text           - TEXT
   - author         - int(11)
   - date           - Timestamp
   - news_id        - int(11)