<form action='' name='form' method='post'>
    <lable>Введите номер карты в диапазоне от 6 до 14.</lable>
    <input type='text' name='input_number'>
    <input type='submit' value='Отправить'>
</form>

<?php

$playing_card = [ 6=>'шестерка', 7=>'семерка', 8=>'восьмерка', 9=>'девятка', 10=>'десятка', 
                 11=>'валет', 12=>'дама', 13=>'король', 14=>'туз' ];

if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $input_number = filter_var( $_POST['input_number'], FILTER_SANITIZE_NUMBER_INT );

    if ( $input_number >=6 and $input_number <=14 )
    {
        echo $playing_card[$input_number] . '<br>';
    } else {
        echo 'введите число корректно';
    }

}

?>
