<?php
//так всегда начинается php код(файл)
//=====================================================

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================

?>
<title>Регулярные выражения</title>

<H1>Синтаксис регулярных выражений</H1>
<body style="font-size:18px;">

<em>Все символы состоят из:</em><br>
 <b>- литералы</b><br>
<b> - метасимволы</b><br><br>

<b>Литералы:</b><br>
&nbsp; &nbsp;&nbsp; - все цыфры от 0 до 9 <b>(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ) =  (0-9)</b> - с ними и так все понятно :)<br> 
&nbsp; &nbsp;&nbsp; - все буквы русского языка<b>(от А до ЯЁ, и от а до яё) =  (А-ЯЁ) и (а-яё)</b> <br>
&nbsp; &nbsp;&nbsp; - все буквы английского языка<b>(от A до Z, и от a до z) = (A-Z) и (a-z)</b><br><br>


<h2>Введение</h2>
<b>Регулярные выражения</b> - это шаблон, с которым сравнивается указанная строка слева направо. Большинство символов в шаблоне являются самими собой, и совпадают с соответствующими символами в искомой строке.<br><br>


<h2>Основы синтаксиса</h2>

Любая строка (в которой нет символов ^ . $ * + ? { } [ ] \ ( ) | &nbsp; ) сама по себе является регулярным выражением. Так, выражению Хаха будет соответствовать строка “Хаха” и только она. Регулярные выражения являются регистрозависимыми, поэтому строка “хаха” (с маленькой буквы) уже не будет соответствовать выражению выше. <br><br> 


<b>В регулярках используются такие группы символов:</b><br>
  - <em>ограничители (разделители)</em><br>
  - <em>обычные символы</em><br>
  - <em>метасимволы</em><br>
  - <em>флаги</em><br>
  - <em>квантификаторы</em><br><br>

Любое выражение начинается с символа-ограничителя (delimiter по англ.). <br>
Разделителем может быть любой символ не являющийся буквой, цифрой, обратной косой чертой или любым пробельным символом (~ # или @) .<br>
Можно использовать скобоки -  ( ), { }, [ ] и < > . <br><br>

<b>Разделители (ограничители):</b><br>


/..../  --- косая черта - чаще всего<br>
#....#  --- решетка - часто<br>
~....~  --- тильда - часто<br>
@....@  --- собачка - реже<br>
%....%  --- реже<br>
+....+  --- реже<br>
(....) --- реже<br>
{....} --- реже<br>
[....] --- реже<br>
<....> --- реже<br>
!....! --- реже<br>
<ins>Пример:</ins><br>
/23прости/ - ищет 23прости<br>
#мама# - ищет мама<br>
[peppi12] - ищет peppi12<br><br>

Если необходимо использовать разделитель внутри шаблона, его нужно проэкранировать с помощью обратной косой черты (\).<br><br>

<ins>Пример:</ins><br>
%мама\%23% - ищет мама%23 - тут % в центре екранирован \%<br><br>


Если разделитель часто используется в шаблоне, в целях удобочитаемости, лучше выбрать другой разделитель для этого шаблона.<br><br> 

<b>Группы:</b><br>
<b>1 - [...]</b> = (только) один из символов = любая из..<br>
&nbsp;&nbsp; [125] = 1 или 2 или 5<br>
&nbsp;&nbsp; [dhb] = d или h или b<br>
&nbsp;&nbsp; [15hK] = 1 или 5 или h или K<br>
&nbsp;&nbsp; [1-9] = одна цыфра от 1 до 9 (1, 2, 3..8,9)<br>
&nbsp;&nbsp; [4-7] = одна цыфра от 4 до 7 (4, 5, 6 или7)<br>
&nbsp;&nbsp; [f-v] = одна буква(любая) от f до v(f, h, k, v)<br>

<b>2 - [^...] - (только не) - один из символов, кроме.. (если стоит в начале выражения!!!) </b><br>
&nbsp;[^137] = любой симфол, кроме 1, 3 или 7<br>
&nbsp;[^137] = любой симфол, кроме 1, 3 или 7<br>
&nbsp;[^1-5] = любой симфол, кроме 1,2,3,4,5<br>
&nbsp;[^впрт] = любой симфол, кроме в, п, р и т<br>
&nbsp;[^d-m] = любой симфол, кроме d,.. h,.. до m<br>
&nbsp;[^da] = любой симфол, кроме d и a.<br>
&nbsp;[^^] = любой симфол, кроме ^.<br>
&nbsp;[d^a] = любой симфол из d,^ или a. = [\^da]<br><br>

<b>3 "?" - несколько одинаковых символов</b><br>
&nbsp;/ab?c/ = найдет ac и abc<br>
&nbsp;/ab?c?/ = найдет a и ac и abc<br><br>

<b>4 - "+" предыдущий символ повторится любое число раз подряд (от 1 до &infin;)</b><br>
&nbsp;/[0-9]+/ = числа любой длины<br>
&nbsp;/a+/ = a  и aa и aaa и aaaa...<br><br>

<b>5 - "*" предыдущий символ повторится любое число раз подряд или отсуствовать</b><br>
&nbsp;/ab*c/ = ac и abc и abbc и abbbc...<br>
&nbsp;/a.*c/ = любые слова, нач.на a и заканчив. на c<br><br>

<b>5 - { } квантификаторы - повторители</b><br>
&nbsp; <ins>{N} = пред. символ должен встретится ровно N раз</ins><br>
&nbsp; /[0-9]{3}/ = все 3-значные числа - 001, 468, 780<br>
&nbsp; /[ма]{2}/ = мама<br>
&nbsp; /[яя]{2}/ = яя<br>
&nbsp; /[15]{2}/ = 15<br>

&nbsp; <ins>{N,M} = пред. символ должен встретится от N до M раз подряд</ins><br>
&nbsp; /[a-z]{3,4}/ = все англ. 3- и 4-буквенные слова<br><br><br>



<b>Метасимволы - это специальные символы</b>, являющиеся важнейшим понятием в регулярных выражениях:<br>

 [ &nbsp; ] &nbsp; \ &nbsp; / &nbsp; ^ &nbsp; $ &nbsp; . &nbsp; | &nbsp; ? &nbsp; * &nbsp; + &nbsp; ( &nbsp; ) &nbsp; { &nbsp; }  <br>
Существует несколько <b>групп метасимволов:</b><br><br>
<b>1 - Метасимволы - разделители строк:</b><br>
 <b>^</b> &nbsp; - начало строки<br>
 <b>$</b> &nbsp; - конец строки<br>
 <b>\A</b> &nbsp; - начало текста<br>
 <b>\Z</b> &nbsp; - конец текста<br>
 <b>.</b> &nbsp; - любой символ в строке<br>
<ins>Примеры:</ins><br>
  ^foobar - находит 'foobar' только если он в начале строки<br>
  foobar$ - находит 'foobar' только если он в конце строки<br>
  ^foobar$- находит 'foobar' только если это единственное слово в строке<br>
  foob.r - находит 'foobar', 'foobbr', 'foob1r'  и т.д.<br><br>

 <b>2 - Метасимволы - границы слов</b><br>
 <b>\b</b> - совпадает на границе слова - с одной стороны от нее должен стоять символ, являющийся буквой/цифрой/знаком подчеркивания (\w), а с другой стороны - не являющийся.<br>
 <b>\B</b> - совпадает не на границе слова<br><br>



 <b>3 - Метасимволы - стандартные перечни символов:</b><br>
 <b>\w</b> - буквенно-цифровой символ или "_" = (0-9), (А-ЯЁ), (а-яё), (A-Z), (a-z)<br>
 <b>\W</b> - не \w = все, кроме  \W = [ ] \ / ^ $ . | ? * + ( ) { } <br>
 <b>\d</b> - цифровой символ = (0-9)<br>
 <b>\D</b> - не \d = все, кроме (0-9)<br>
 <b>\s</b> - любой "пробельный" символ ( [\t\n\r\f] )<br>
 <b>\S</b> - не \s - любой "непробельный" символ<br>
Стандартные перечни \w, \d и \s можно использовать и внутри перечней символов.<br>

<ins>Примеры:</ins><br>
 foob\dr - находит 'foob1r', ''foob6r'  и т.д. но не 'foobar', 'foobbr'  и т.д.<br>
 foob[\w\s]r - находит 'foobar', 'foob r', 'foobbr'  и т.д. но не 'foob1r', 'foob=r'  и т.д.<br><br>



<b>4 - Метасимволы - повторения</b><br>
После любого элемента регулярного выражения может следовать <em>повторитель</em> - число допустимых повторений предшествующего символа, метасимвола или подвыражения.<br>

 <b>*</b> - ноль или более раз ("жадный"), = {0,}<br>
 <b>+</b>   один или более раз ("жадный"), = {1,}<br>
 <b>?</b>   ноль или один раз ("жадный"), = {0,1}<br>
 <b>{n}</b> точно n раз ("жадный")<br>
 <b>{n,}</b> не менее n раз ("жадный")<br>
 <b>{n,m}</b> не менее n но не более m раз ("жадный")<br>
 <b>*?</b> ноль или более раз ("не жадный"), = {0,}?<br>
 <b>+?</b> один или более раз ("не жадный"), = {1,}?<br>
 <b>??</b> ноль или один раз ("не жадный"), = {0,1}?<br>
 <b>{n}?</b> точно n раз ("не жадный")<br>
 <b>{n,}?</b> не менее n раз ("не жадный")<br>
 <b>{n,m}?</b> не менее n но не более m раз ("не жадный")<br>
 <ins>Примеры:</ins><br>
 foob.*r - находит 'foobar',  'foobalkjdflkj9r' и 'foobr'<br>
 foob.+r - находит 'foobar', 'foobalkjdflkj9r' но не 'foobr'<br>
 foob.?r - находит 'foobar', 'foobbr' и 'foobr' но не 'foobalkj9r'<br>
 fooba{2}r - находит 'foobaar'<br>
 fooba{2,}r - находит 'foobaar', 'foobaaar', 'foobaaaar' и т.д.<br>
 fooba{2,3}r - находит 'foobaar', или 'foobaaar'  но не 'foobaaaar'<br><br>



<b>5 - Метасимволы - альтернативный выбор:</b><br>
Используют метасимвол <b>|</b> для выбора.<br>
Желательно всегда заключают в скобки (ee|fie|foe).<br>
<ins>Пример:</ins>
fee|fie|foe - найдет fee или fie или foe, ( = f(e|i|o)e)<br>
foo(bar|foo) находит 'foobar' или 'foofoo'<br><br>

Внутри перечней символов | воспринимается как обычный символ - [fee|fie|foe] = [feio|]<br><br>



<b>6 - Метасимволы - обратные ссылки:</b><br>
Метасимволы от \1 до \9 воспринимаются как обратные ссылки. \&lt;n&gt; совпадает с ранее найденным подвыражением #&lt;n&gt; .<br>

<ins>Примеры:</ins>
(.)\1+         находит 'aaaa' и 'cc'.
(.+)\1+       также находит 'abab' и '123123'
(['"]?)(\d+)\1 находит "13" (в дв.кавычках), или '4' (в один.кавычках) или 77 (без кавычек) и т.д.<br><br>




<b>7 - Метасимволы - повыражения:</b><br>
используются ( ... ) <br>

По завершении поиска выражения Вы можете обратиться к любому подвыражению используя свойства MatchPos, MatchLen и Match, а также подставлять подвыражения в некий шаблон, используя метод Substitute).
Подвыражения нумеруются слева направо, в порядке появления открывающих скобок.<br>

Первое подвыражение имеет номер 1 (выражение в целом - 0', к нему можно обращаться в Substitute как $0' так и $&).<br>

<ins>Примеры:</ins><br>
 (foobar){8,10} находит строку содержащую 8, 9 или 10 копий 'foobar'<br>
 foob([0-9]|a+)r находит 'foob0r', 'foob1r' , 'foobar', 'foobaar', 'foobaar'  и т.д.<br><br>


<h3>Флаги</h3>

<b>i</b> - <em>Регистро-независимый режим</em><br>

<b>u</b> - <em>utf-8</em> - для русских ставить всегда.<br>

<b>m</b> - <em>Воспринимать входной текст как многострочный</em><br>


<b>s</b> - <em>Воспринимать входной текст как одну строку</em><br>

<b>g</b> - <em>Выключая его Вы переключаете все повторители в “не жадный” режим</em><br>

<b>x</b> - Позволяет <em>форматировать шаблон чтобы обеспечить более легкую читаемость</em><br>

<b>r</b> - <em>Если включен, то диапазоны вида а-я включают также букву ё, А-Я  включают Ё, а а-Я включает вообще все русские буквы</em><br>

<b>/x</b> - <em>игнорировать пробелы, табуляции и разделители строк</em>, - позволяет форматировать текст выражения. Кроме того, если встречается символ #, то все последующие символы до конца строки воспринимаются как комментарий.<br>

<hr>


<img src="1-regexp-example.png" alt="Примеры регулярных выражений">


 Первое выражение на картинке выше ищет последовательность из 3 букв, где первая буква это «к», вторая - любая русская буква и третья - это «т» без учета регистра (например, «кот» или «КОТ» подходит под этот шаблон).<br><br>

Второе выражение ищет в тексте время в формате 12:34.

Последовательность символов совпадает с такой же последовательностью во входной строке, так что шаблон   совпадет с подстрокой во входной строке.<br><br>


<b>Примеры:</b><br>
&nbsp;/19[0-9][0-9][0-9]/u - любой год вида 19xx<br>
&nbsp;/[012][0-9]:[0-5][0-9]/u - время в формате 18:23<br>
&nbsp;/кошка|кошки|кошке|кошку|кошкой|кошек|кошкам|кошками|кошках/ =<br>
= /кош(ка|ки|ке|ку|кой|ек|кам|ками|ках/u =<br>
= /кош(ек|к(а|и|е|у|ой|ами|ах))/u<br>
&nbsp;[.] = \\.  - ищет точку<br>
&nbsp;\\\\  - ищет бекслеш<br>
&nbsp;\\/  - ищет слеш<br>
&nbsp;[(.)?|] =  - ищет ( или . или ) или ? или |<br>

&nbsp;/^(кошка|собака)/u - найдет "кошка" в "кошка хочет курить" , но не найдет в "я у мамы кошка"<br>

&nbsp;/(кошка|собака)$/u - найдет "кошка" в "я у мамы кошка", но не найдет в "кошка хочет курить"<br>

&nbsp;/^(кошка|собака)$/u = "кошка", не найдет в "я у мамы кошка" и не найдет в "кошка хочет курить"<br><br>


<b>Поиск на PHP</b><br><xmp>
$inputDate = 'на базар пошла кошка или мышка';  
$regexp = "/кош(ек|к(а|и|е|у|ой|ами|ах))/u";     
if (preg_match($regexp, $inputDate)) {           
	echo " Все верно";                          
	echo "Повторим?";                         
} else {                                        
	echo "Не верно!!!";                        
}</xmp>                                        <br><br>

<b>Разбиение текста на части:</b><br>
&nbsp;используется ф-я <b>preg_split($regexp, $text)</b><br>
Она ищет в тексте все подстроки, соответв. регулярному выражению, разбивает ими текст на части и возвращает массив из получившихся частей.<br>
/за|па|ла|ра/u - рег. выр. для разбивки текста<br>
А роза упала на лапу Азора - текст для разбивки<br><br>
<xmp>
$inputDate = "А роза упала на лапу Азора";
$regexp = "/за|па|ла|ра/u";
$parts = preg_split($regexp, $inputDate, $limit=3);
echo '<pre>';
print_r($parts);  </xmp>
$limit=3 - на сколько частей разбивать<br>
<ins>Выведет:</ins>
Array
(
    [0] => А ро
    [1] =>  у
    [2] => ла на лапу Азора 
) <br><br>


<b>Разбиение текста на предложения</b><br>
Так как предложения разделяются знаками !, . и ?, то достаточно написать соотв. вырвжение и исп. preg_split с параметром PREG_SPLIT_NO_EMPTY - /[.!?/u<br><xmp>
$inputDate = "А роза упала на лапу Азора. Невзоров прав не во всем! Я прав почти во всем?";
$regexp = "/[.!?]/u";
$parts = preg_split($regexp, $inputDate, 0,PREG_SPLIT_NO_EMPTY);
echo '<pre>';
print_r($parts);</xmp>
<ins>Выведет:</ins>

Array
(
    [0] => А роза упала на лапу Азора
    [1] =>  Невзоров прав не во всем
    [2] =>  Я прав почти во всем
)

<hr color="red">

<h3>Условные подмаски</h3>

Если в регулярном выражении необходимо сослаться на какую-то из предшествующих групп, следует использовать <b>\n</b>, где вместо <b>n</b> подставить номер нужной группы.<br> Вам может понадобиться шаблон, соответствующий буквам «aaa» или «bbb», за которыми следует число, а затем те же три буквы. Такой шаблон реализуется с помощью групп:
<em>(aaa|bbb)[0-9]+\1</em><br>
 - первая часть шаблона ищет «aaa» или «bbb», объединяя найденные буквы в группу.<br>
 - за этим следует поиск одной или более цифр <em>([0-9]+)</em>,<br>
 - и наконец \1. Последняя часть шаблона ссылается на первую группу и ищет то же самое.<br>
  Она ищет совпадение с текстом, уже найденным первой частью шаблона, а не соответствующее ему.<br> Таким образом, «aaa123bbb» не будет удовлетворять вышеприведенному шаблону, так как \1 будет искать «aaa» после числа.

Одним из наиболее полезных инструментов в регулярных выражениях является подстановка строк. При замене текста можно сослаться на найденную группу, используя $n. Скажем, вы хотите выделить в тексте все слова «wish» жирным начертанием. Для этого вам следует использовать функцию замены по регулярному выражению, которая может выглядеть так:

replace(pattern, replacement, subject)
Первым параметром будет примерно такой шаблон (возможно вам понадобятся несколько дополнительных символов для этой конкретной функции):

([^A-Za-z0-9])(wish)([^A-Za-z0-9])
Он найдет любые вхождения слова «wish» вместе с предыдущим и следующим символами, если только это не буквы или цифры. Тогда ваша подстановка может быть такой:

$1<b>$2</b>$3
Ею будет заменена вся найденная по шаблону строка. Мы начинаем замену с первого найденного символа (который не буква и не цифра), отмечая его $1. Без этого мы бы просто удалили этот символ из текста. То же касается конца подстановки ($3). В середину мы добавили HTML тег для жирного начертания (разумеется, вместо него вы можете использовать CSS или &#60;strong&#62;), выделив им вторую группу, найденную по шаблону ($2).<br><br>
  <hr color="green">


Подмаски ¶
Подмаски ограничиваются круглыми скобками, которые могут быть вложенными. Использование части шаблона как подмаски имеет следующие функции:

Локализирует набор альтернатив. Например, шаблон cat(aract|erpillar|) соответствует одному из слов "cat", "cataract" или "caterpillar". Без использования скобок он соответствовал бы строкам "cataract", "erpillar" или пустой строке.

Указывает на необходимость захвата подстроки (как показано выше). В том случае, если соответствие шаблону было найдено, подстрока, соответствующая подмаске, также передается обратно вызывающему при помощи аргумента ovector функции pcre_exec(). Открывающие круглые скобки нумеруются слева направо (начиная с единицы) и их порядковые номера используются для нумерации соответствующих подстрок в результате.

Например, если строка "the red king" сопоставляется с шаблоном the ((red|white) (king|queen)), будут захвачены подстроки "red king", "red" и "king", с номерами 1, 2 и 3 соответственно.

На самом деле выполнение одновременно двух функций не всегда удобно. Бывают случаи, когда необходима группировка альтернатив без захвата строки. В случае, если после открывающей круглой скобки следует "?:", захват строки не происходит, и текущая подмаска не нумеруется. Например, если строка "the white queen" сопоставляется с шаблоном the ((?:red|white) (king|queen)), будут захвачены подстроки "white queen" и "queen", и они будут пронумерованы 1 и 2 соответственно. Максимальное количество захватывающих подмасок - 65535. Такие большие шаблоны могут не скомпилироваться, в зависимости от настроек libpcre.

В случае, если в незахватывающей подмаске необходимо указать дополнительные опции, можно воспользоваться удобным сокращением: символ, обозначающий устанавливаемую опцию помещается между "?" и ":". Таким образом, следующие два шаблона

(?i:saturday|sunday)
(?:(?i)saturday|sunday)
соответствуют одному и тому же набору строк. Поскольку альтернативные версии берутся слева направо, и установленные опции сохраняют свое действие до конца подмаски, опция, установленная в одной ветке, также имеет эффект во всех последующих ветках. Поэтому приведенные выше шаблоны совпадают как с "SUNDAY", так и с "Saturday".

Также можно использовать именованные подмаски с помощью синтаксиса (?P<name>pattern). Эта подмаска будет индексирована в массиве совпадений кроме обычного числового индекса, еще и по имени name. В PHP 5.2.2 было добавлено два альтернативных синтаксиса: (?<name>pattern) и (?'name'pattern).

Иногда бывает необходимо иметь несколько совпадений, исключающих друг друга. Обычно, каждое такое совпадение получает свой собственный номер, даже если шаблон позволяет совпасть только одному из них. Синтаксис (?| позволяет обойти это поведение и убрать дублирующиеся номера. Рассмотрим следующее регулярное выражение, сопоставленное со строкой Sunday:

(?:(Sat)ur|(Sun))day
Здесь Sun сохраняется в ссылке 2, тогда как ссылка 1 пуста. Если же совпадет Sat, то она будет помещена в ссылку 1, а ссылка 2 вообще не будет существовать. Использование (?| в шаблоне решает эту проблему:

(?|(Sat)ur|(Sun))day
В этом шаблоне обе подмаски Sun и Sat будут сохранены под номером 1.

</body>

