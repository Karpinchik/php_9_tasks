<form method='POST' name='form' action=''>
    <label>Введите любое число</label>
    <input type='text' name='input_data'> <br>
    <label>Введите число для подсчета</label>
    <input type='text' name='data_for_count' ><br>
    <input type="submit" value='Отправить'>
</form>

<?php 

    if ($_POST) 
    {
        if (!empty($_POST['input_data']) && !empty($_POST['data_for_count']))
        {
            $input_data = $_POST['input_data'];
            $data_for_count = $_POST['data_for_count'];
            $result = substr_count($input_data, $data_for_count);
            print('Колличество элементов ' . $data_for_count . ' в данной строке = ' . $result);
        }
    } 
?>