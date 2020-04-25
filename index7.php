<form name="form" action="" method="post">
    <label>Введите число от 1 до 9999</label>
    <input type="text" name="input_year">
    <input type="submit" value="Отправить">
</form>

<?php 

$input_year = filter_var($_POST['input_year'], FILTER_SANITIZE_NUMBER_INT);
echo $input_year . "<br>";

if ( $_SERVER['REQUEST_METHOD'] == "POST" ) 
{
    if ( !empty($input_year) && ($input_year>=1 && $input_year<=9999) )
    {
        if ( ($input_year %4 == 0) or ( $input_year %4 == 0 && $input_year %100 == 0 && $input_year %400 == 0 ) )
        {
            echo 'Год - ' . $input_year . ' является високосным.';
        } elseif ( $input_year %4 == 0 && $input_year %100 == 0  ) 
        {
            echo 'Год - ' . $input_year . ' не является високосным.';
        } else 
        {
            echo 'Год - ' . $input_year . ' не является високосным.';
        }
    } else 
    {
        echo 'Введите число в соответствии с условием.';
    }
}


?>









