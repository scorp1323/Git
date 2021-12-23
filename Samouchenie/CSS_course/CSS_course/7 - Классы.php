Классы применяют, когда необходимо определить стиль для индивидуального элемента веб-страницы или задать разные стили для одного тега. При использовании совместно с тегами синтаксис для классов будет следующий.
Тег.Имя класса { свойство1: значение; свойство2: значение; ... }

Внутри стиля вначале пишется желаемый тег, а затем, через точку пользовательское имя класса. Имена классов должны начинаться с латинского символа и могут содержать в себе символ дефиса (-) и подчеркивания (_). Использование русских букв в именах классов недопустимо. Чтобы указать в коде HTML, что тег используется с определённым классом, к тегу добавляется атрибут class="Имя класса"

<style>
   P { /* Обычный абзац */ 
    text-align: justify; /* Выравнивание текста по ширине */ } 
   P.cite { /* Абзац с классом cite */
    color: navy; /* Цвет текста */
    margin-left: 20px; /* Отступ слева */
    border-left: 1px solid navy; /* Граница слева от текста */
    padding-left: 15px; /* Расстояние от линии до текста */ } 
  </style>

  Можно, также, использовать классы и без указания тега. Синтаксис в этом случае будет следующий.
.Имя класса { свойство1: значение; свойство2: значение; ... }
<style>
   .gost { color: green; /* Цвет текста */
           font-weight: bold; /* Жирное начертание */ }
   .term { border-bottom: 1px dashed red; /* Подчерк. под текстом */ }
  </style>

  Классы удобно использовать, когда нужно применить стиль к разным элементам веб-страницы: ячейкам таблицы, ссылкам, абзацам и др

  К любому тегу одновременно можно добавить несколько классов, перечисляя их в атрибуте class через пробел.
  <div> 
   <a href="/term/2" class="tag level6">Paint.NET</a> 
   <a href="/term/27" class="tag level1">градиент</a> 
  </div>

  В стилях также допускается использовать запись вида:
   .layer1.layer2,
    где layer1 и layer2 представляют собой имена классов. Стиль применяется только для элементов, у которых одновременно заданы классы layer1 и layer2.