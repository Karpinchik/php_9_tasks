<!-- Составить программу, которая бы по заданному числу выводила его название
по китайскому календарю. Заданное число не может быть меньше 1924 -->

<form action='' name='form' method='post'>
    <lable>Введите год (более 1924).</lable>
    <input type='text' name='input_year'>
    <input type='submit' value='Отправить'>
</form>

<?php

$Chinese_calendar = [ 4=>'Крысы', 5=>'Быка', 6=>'Тигра', 7=>'Кролика', 8=>'Дракона', 9=>'Змеи',
                      10=>'Лошади', 11=>'Овцы', 0=>'Обезьяны', 1=>'Петуха', 2=>'Собаки', 3=>'Свиньи' ];

if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $input_year = filter_var( $_POST['input_year'], FILTER_SANITIZE_NUMBER_INT );

    if ( $input_year >=1924 )
    {   
        $index = ($input_year % 12 ) ;
        echo "Год " . $input_year . ' в китайском календаре - год ' . $Chinese_calendar[$index] . '.' . '<br>';
    } else {
        echo 'введите число корректно';
    }
}



?>
