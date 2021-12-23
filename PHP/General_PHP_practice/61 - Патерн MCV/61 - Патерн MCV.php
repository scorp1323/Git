<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//============================
//  Патерн MCV (Model View Controller) - фактически состоит из 3 контроллеров:
//  - Model
//  - View
//  - Controller  ?>

Предполагает разделение данных, пользовательского интерфейса и управляющей логики на 3 отдельных компонента. 
    Таким образом, модификация каждого компонента может осуществляться независимо, а структура кода более предсказуема и удобна


M - MODEL - та часть программы, которая работает с данными - Модель реализует Бизнес-логику.
    На практике - Модель = класс, у кот. есть методы для работы с определенным набором данных, напр. записями в таб. БД
    - Модель - дай мне такие данные с БД - и модель дает такие данные
    - Модель - запиши такие данные в БД - и модель запишет данные
 При этом сама модель не имеет отношения к тому, как будут выглядеть данные на странице (список, таблица, нумерованный список...) - т.е. Модель выполняет только манипуляции над данными - и ВСЕ!

V - VIEW - ПРЕДСТАВЛЕНИЯ - отвечает за отображения информации, т.е. визуализацию.
 	На вход V. получает определенную инфу(напр. массив с данными) и реализует ее отображение необходимым образом (списком, плиткой...)

C - CONTROLLER - обеспечивает связь между пользователем и системой - обрабатывает запрос пользователя на основе инфы из запроса, получает данные из модели и использует представления для необходимой визуализации этих данных, после чего пользователь получает нужную страницу.


Контроллеров, Представлений и Моделей может быть много - в зависимости от к-ва разделов, кот. собираемся реализовать.

Пример:
 - Хочу посмотреть Новость -> NewsController -> 
   News_model->  View.php
 - Хочу посмотреть Список Товаров -> ProductController -> Product_model -> List.php

 СХЕМА РАБОТЫ:
 1 - пользователь пришел на сайт по опред. адресу, т.е. послал определенный запрос (/news/) или (/product-list/)
 2 - этот запрос будет переадресован на FrontController, кот. является единой точкой входа - index.php - и он один FrontController на весь сайт
 3 - в FrontController проводим общие настройки - например, соединение с БД.
 Запрос пользователя во F.C. обрабатывает спец. компонент - Router
 4 - Роутер определит, какой именно контроллер должен обработать запрос(новости, товары...)
 5 - после того, как F.C. прочитал запрос, он передает управление на нужный контроллер (напр. NewsController)
 6 - этот контроллер из запроса получит инфу о том, какие новости хочет пользователь и обратится к модели за нужными данными
 7 - далее N.C. обратится к представлению для нужной визуализации этих данных
 8 - после етих действий стр. отправляется пользователю

<!-- =================================================== -->

                   ФАЙЛОВАЯ СТРУКТУРА:
___php_start.ua
	www (основная папка)
	    components(папка)
	    	- Router.php
	    config(папка)
	        - routes.php
		controllers (папка)
			- ArticleController.php
			- NewsController.php
			- ProductController.php
		models (папка)
			- Article.php
			- News.php
			- Product.php
		views (папка)
			article (папка)
			    - archive.php
			    - index.php
			    - view.php
		    news (папка)
			    - archive.php
			    - index.php
			    - view.php
		    product (папка)
			    - archive.php
			    - index.php
			    - view.php
		- .htaccess (перенаправляет все на index.php)
		- index.php (наш FrontController)

1 - в корне сайта лежит файл index.php - это наш FrontController, на которые перенаправляются все запросы
2 - Контроллеры хранятся в папке controllers и имеют названия, которые заканчиваются словом controller (ArticleController, NewsController, ProductController)
3 - модели содержаться в папке models и имеют названия, которые соотрветствуют их сути (Article, News, Product)
4 - представления находятся в папке views. Тут есть важный момент - раздел новости может содержать разные страници, но все они относятся к новостям (список новостей, страница для просмотра конкретной новости, архив новостей...)
Следовательно, один и тот же контроллер может иметь разные представления для этих страниц:
 - archive.php - список архивных новостей
 - index.php   - для списка новостей
 - view.php    - для просмотра одной новости
 Для избежания путаницы - все эти представления будем хранить в одной папке - news/
 5 - также поступаем и для других представлений (article и ptoduct)
 6 - позже в эту структуру добавим и другие части для доп. возможностей


 Данный способ не есть единственно верным - есть много способов подходов к построению вебсайтов.
 Такую структуру делаем, так как она:
  - удобна
  - понятна
  - расширяема
  - широко используется в соврем. фреймворках
