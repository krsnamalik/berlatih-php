    <?php 

    function tentukan_nilai($number)
    {
        $temp = '';
        
        if  ($number >= 85)
        {
            echo "Sangat Baik <br>";
        }
        else if ($number >= 70 && $number <=85) 
        {
            echo "Baik <br>";
        }
        else if ($number >=60 && $number <= 70) 
        {
            echo "Cukup <br>";
        }
        else 
        {
            echo "Kurang <br>";
        }
        return $temp;
    }
    //TEST CASES
    echo tentukan_nilai(98); //Sangat Baik
    echo tentukan_nilai(76); //Baik
    echo tentukan_nilai(67); //Cukup
    echo tentukan_nilai(43); //Kurang
    ?>