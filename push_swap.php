<?php
$la = $argv;
array_shift($la);
$lb = array();
$bite = count($la);
$i = 0;
$momo = 0;
$bite2 = $bite - 1;
$j = 0;
$baba = count($la);
$bobo = 0;
$jojo = 0;
if($bite == 1){
    echo "$";
    return false;
}
    while($i < $bite){
        $bite = count($la);
        $bite2 = $bite - 1;
        while($la != []){
            $lilol = count($lb);
            $lolil = count($la);
            $leplushaut = max($la);
            
            if($la[0] == $leplushaut){
                array_push($lb, $la[0]);
                array_shift($la);
                $bite2--;
                echo " pb";
            }
            elseif($la[0] != $leplushaut){

                if($j = 0){
                $temp1 = $la[$bite];
                $la[$bite] = $la[0];
                $la[0] = $temp1;
                }
                while($j < $bite2)
                {
                    $temp = $la[$j];
                    $la[$j] = $la[$j + 1];
                    $la[$j + 1] = $temp;
                $j++;
                }
                echo " rra";
            }
            $momo++;
        }
        if($momo == $baba){
            return false;
        }
        $i++;
    }

    while($i > $bite){
        $bite = count($lb);
        $bite2 = $bite - 1;
        while($lb != []){
            $lilol = count($la);
            $lolil = count($lb);
            $leplushaut = min($lb);
            
            if($lb[0] == $leplushaut){
                array_push($la, $lb[0]);
                array_shift($lb);
                $bite2--;
                echo " pa";
            }
            elseif($lb[0] != $leplushaut){

                if($j = 0){
                $temp1 = $lb[$bite];
                $lb[$bite] = $lb[0];
                $lb[0] = $temp1;
                }
                while($j < $bite2)
                {
                    $temp = $lb[$j];
                    $lb[$j] = $lb[$j + 1];
                    $lb[$j + 1] = $temp;
                $j++;
                }
                echo " rrb";
            }
        }
        $i--;
    }
    echo "$";
    ?>