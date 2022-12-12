<pre><?php
        //1.	Создайте массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8.
        // Перемешайте элементы этого массива

        // $arrRange = [];
        // $arrRange = range(-50,50,8);
        // shuffle($arrRange);
        // print_r($arrRange);

        //2.	Выведите элементы этого массива в строку через « ** ».

        // $arrRange = [];
        // $arrRange = range(-50,50,8);
        // print_r(implode('**', $arrRange));

        //3.	Удалите четные элементы этого массива, определите количество оставшихся
        // $arrRange = [];
        // $arrRange = range(-50, 50, 8);
        // $count = 0;
        // for ($i = 0; $i < count($arrRange); $i++) {
        //     if ($arrRange[$i]%2 ==0)
        //         $count++;
        // }
        // print_r($arrRange);
        // print_r($count);
        //4.	Замените все отрицательные значения положительными
        // $arrRange = [];
        // $arrRange = range(-50, 50, 8);
        // for ($i = 0; $i < count($arrRange); $i++) {
        //     if ($arrRange[$i] < 0)
        //         $res[$i] = $arrRange[$i] * -1;
        // }
        // print_r($res);


        //5.	Создайте новый массив arrRandom и заполните его на 20 элементов случайными числами в промежутке [-5; 10].
        $arrRandom = [];
        $kol = 20;
        $min=-5;
        $max =10;
        for($i = 0; $i<$kol;$i++){
        $arrRandom = rand($min,$max);
        }
        //6.	Определите количество значений в массиве arrRandom (количество повторений)
        // array_count_values($arrRandom);

        //7.	Определите сумму элементов массива arrRandom
        // array_sum(array: $arrRandom);


        //8.	Определите произведение элементов массива arrange, кратных 3
        // $sum = 0;
        // $arrRangeRes = array_filter($arrRandom, function($item){
        //     if ($item%3==0){
        //     return $item += $item;
        //     }});
        //     $product = array_product($arrRangeRes);
        //     print_r($arrRangeRes);
        // 9.	Объедините массивы arrRange и arrRandom двумя способами

        // array_merge($arrRandom, $arrRange);
        // $res = $arrRandom + $arrRange;

        //10.	В массиве arrRandom удалите 2, 3 и 4 элементы

        // print_r(array_slice($arrRandom, 2, 1));
        // print_r(array_slice($arrRandom, 4, 0));

        //11.	В массиве arrRandom определите количество элементов, не превышающих его среднее значение

        //12.	Добавьте в конец массива arrRandom элемент=1000 (2 способа)


        // array_push($arrRandom,1000);

        //14
        $apple = "Черешня";
        $grape = "Виноград";
        $strawberry = "Земляника";
        $pear = "Груша";
        $arr = array($apple, $grape,$strawberry,$pear);
        print_r($arr);

        //15
        $arr = [
            [
                "street" => "Гагарина", 
                "house" => 7, 
                "flat" => 303
            ],
            [
                "street" => "Елькина", 
                "house" => 12, 
                "flat" => 12
            ],
            [
                "street" => "Доватора", 
                "house" => 113, 
                "flat" => 24
            ],
        ];
        

usort($arr, function ($a, $b){
    return($b["price"]<=> $a["price"]);
    }
);

        ?>


        
</pre>