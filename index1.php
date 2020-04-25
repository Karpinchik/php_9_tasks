<form method='POST' name='form' action=''>
    <input type='text' name='data_input' >
    <input type="submit" value='Отправить'>
</form>

<?php 

    $data=trim( $_POST['data_input'] );
    $result = 0; 
    $filter_data = filter_var( $data, FILTER_VALIDATE_INT );

    if (gettype( $filter_data ) == 'integer') 
    {
        $array_int_data = str_split( $filter_data );
        foreach( $array_int_data as $i ) 
        {   
            $result += $i;
        }
        echo $result;
    } else {
        echo 'Введите число.' . '<br>';
    }
    
?>

