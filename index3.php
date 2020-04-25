<?php

    $result = 0;
    $int_divide = 5;
    $list_all_numbers = [];        //array with numbers from the specified range

    for ($i=10; $i<=45; $i++) 
        $list_all_numbers[] = $i;

    foreach ($list_all_numbers as $item)            
    {
        if ( fmod($item, 5) ==0 )          // checking the division by 5 
        {
            $result += $item;       // the sum of numbers that are divisible by 5
        }
    }

    echo $result;