<form method='POST' name='form' action=''>
    <label>Введите ФИО полностью</label>
    <input type='text' name='data_name_person' >
    <input type="submit" value='Отправить'>
</form>

<?php 

mb_internal_encoding("UTF-8");
$data_post = $_POST['data_name_person'];
$str = mb_convert_case( $data_post, MB_CASE_TITLE );


if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    $work = explode(" ", $str);  
    if ( count($work) == 3 ) 
    {  
        print( $work[0] . ' ' .  mb_substr($work[1], 0, 1)  . '.' .
            ' ' . mb_substr($work[2], 0, 1) . '.' );
    } else 
    { 
        echo "Введите правильно Фамилию, Имя, Отчество.";
    }        
}

?>     