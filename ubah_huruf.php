    <?php
    function ubah_huruf($string)
    {
    $huruf = range('a','z');
    $temp = '';

    for ($i = 0; $i < strlen($string); $i++){
        for ($z = 0; $z < count($huruf); $z++ ){
            if ($huruf[$z] == $string[$i]){
            echo $huruf[$z].' =>'.$huruf[$z+1].'<br>';
            $temp .= $huruf[$z+1];    
            }
            
        }
    }
    echo $temp.'<br>';
    }

    // TEST CASES
    echo ubah_huruf('wow'); // xpx
    echo ubah_huruf('developer'); // efwfmpqfs
    echo ubah_huruf('laravel'); // mbsbwfm
    echo ubah_huruf('keren'); // lfsfo
    echo ubah_huruf('semangat'); // tfnbohbu

    ?>