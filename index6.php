<form method='POST' name='form' action=''>
    <label>Введите число от 0 до 60</label>
    <input type='text' name='data_input' >
    <input type="submit" value='Отправить'>
</form>


<?php  

$data = trim( $_POST['data_input'] );
$filter_data = filter_var( $data, FILTER_VALIDATE_INT );
$green = array(0, 1, 2, 5, 6, 7);
$red = array(3, 4, 8, 9);

if ( (gettype( $filter_data )) == 'integer' ) 
{
    $number = $filter_data;
    if ( $number >= 0 && $number <=60 )
    {
        $min_now = $number;
        $five = $min_now / 10;
        echo $five . "<br>";
        $item = ($five - floor($five)) * 10 . "<br>";
        echo $item;

        if (in_array($item, $red) ) {
            echo "красный";
        } elseif ( in_array($item, $green) ){
            echo "зеленый";
        }
    } else {
        echo 'Введите число из заданного диапазона';
    }
} else {
    echo 'Введите число';
}



?>