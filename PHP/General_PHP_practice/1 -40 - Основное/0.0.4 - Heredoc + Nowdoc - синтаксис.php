Heredoc-текст - ведет себя так же, как текст в "", не имея их - выполняются функции, работают переменные.

Используют оператор >>>
После этого оператора необходимо указать идентификатор (EOD, EOT, EOL, FOOBAR, LABEL...), затем перевод строки. После этого идет сама строка, а потом этот же идентификатор (EOD, EOT, EOL, FOOBAR, LABEL...), закрывающий вставку.
Строка должна начинаться с закрывающего идентификатора, т.е. он должен стоять в первом столбце строки. Кроме того, идентификатор должен соответствовать тем же правилам именования, что и все остальные метки в PHP: содержать только буквенно-цифровые символы и знак подчеркивания, и не должен начинаться с цифры (знак подчеркивания разрешается).

Внимание: очень важно отметить, что строка с закрывающим идентификатором не должна содержать других символов, за исключением точки с запятой (;). Это означает, что идентификатор не должен вводиться с отступом и что не может быть никаких пробелов или знаков табуляции до или после точки с запятой. Важно также понимать, что первым символом перед закрывающим идентификатором должен быть символ новой строки, определенный в вашей операционной системе.

<?php 
$name = 'Сергей';
$text = 'Уроки';
$str = <<<EOD
Пример строки,
охватывающей несколько строчек,
с использованием heredoc-синтаксиса.
EOD;

echo <<<EOT
Меня зовут $name. Я печатаю $text.
EOT;
?>


Nowdoc - это то же самое для строк в одинарных кавычках, что и heredoc для строк в двойных кавычках. Nowdoc похож на heredoc, но внутри него не осуществляется никаких подстановок. Эта конструкция идеальна для внедрения PHP-кода или других больших блоков текста без необходимости его экранирования.
Nowdoc указывается той же последовательностью <<<, что используется в heredoc, но последующий за ней идентификатор заключается в одинарные кавычки, например, <<<'EOT'.

Пример:
$name = 'Sergiy';
$text = 'Курсовая';
echo <<<'EOD'
Меня зовут $name. Я печатаю $text.
EOD;