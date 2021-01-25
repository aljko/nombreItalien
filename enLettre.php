<?php
    function enLettre($nombre)
        {
            $tableau = array_reverse(str_split($nombre));
	        $mot ="";	

            if (array_key_exists(3, $tableau) && !(array_key_exists(4, $tableau))){
                switch ($tableau[3]) {
                    case 0:
                        break;
                    case 1 :
                        $mot=$mot."mille";
                        break;
                    case 2 :
                        $mot=$mot."duemila";
                        break;
                    case 3:
                        $mot=$mot."tremila";
                        break;
                    case 4:
                        $mot=$mot."quattromila";
                        break;
                    case 5:
                        $mot=$mot."cinquemila";
                        break;
                    case 6:
                        $mot=$mot."seimila";
                        break;
                    case 7:
                        $mot=$mot."settemila";
                        break;
                    case 8:
                        $mot=$mot."ottomila";
                        break;
                    case 9:
                        $mot=$mot."novemila";
                        break;
                }
            }
        
            if (array_key_exists(2, $tableau)){
            switch ($tableau[2]) {
                case 0:
                    break;
                case 1 :
                    $mot=$mot."cento";
                    break;
                case 2 :
                    $mot=$mot."duecento";
                    break;
                case 3:
                    $mot=$mot."trecento";
                    break;
                case 4:
                    $mot=$mot."quattrocento";
                    break;
                case 5:
                    $mot=$mot."cinquecento";
                    break;
                case 6:
                    $mot=$mot."seicento";
                    break;
                case 7:
                    $mot=$mot."settecento";
                    break;
                case 8:
                    $mot=$mot."ottocento";
                    break;
                case 9:
                    $mot=$mot."novecento";
                    break;
            }
        }
        
        if (array_key_exists(1, $tableau)){
            switch ($tableau[1]) {
                case 0:
    
                    break;
                case 2 :
                    $mot=$mot."venti";
                    break;
                case 3:
                    $mot=$mot."trenta";
                    break;
                case 4:
                    $mot=$mot."quaranta";
                    break;
                case 5:
                    $mot=$mot."cinquanta";
                    break;
                case 6:
                    $mot=$mot."sessanta";
                    break;
                case 7:
                    $mot=$mot."settanta";
                    break;
                case 8:
                    if ((array_key_exists(1, $tableau))){
                        $mot=$mot."ttanta";
                    }
                    else{
                        $mot=$mot."ottanta";
                    }
                    
                    break;
                case 9:
                    $mot=$mot."novanta";
                    break;
            }
        }else{
            $tableau[1] = 0;
        }
        
        if  ($tableau[1] <> 1) {
        
            switch ($tableau[0]) {
                case 0:
                    break;
                case 1 :
                    $mot=$mot."uno";
                    break;
                case 2 :
                    $mot=$mot."due";
                    break;
                case 3:
                    $mot=$mot."tre";
                    break;
                case 4:
                    $mot=$mot."quattro";
                    break;
                case 5:
                    $mot=$mot."cinque";
                    break;
                case 6:
                    $mot=$mot."sei";
                    break;
                case 7:
                    $mot=$mot."sette";
                    break;
                case 8:
                    if (((array_key_exists(2, $tableau)) && (($tableau[1] == 0)))){
                        $mot=$mot."tto";
                    }else
                    {
                        $mot=$mot."otto";
                    }
                    break;
                case 9:
                    $mot=$mot."nove";
                    break;
            }
        }else{
            switch ($tableau[0]) {
                case 0:
                    break;
                case 1 :
                    $mot=$mot."undici";
                    break;
                case 2 :
                    $mot=$mot."dodici";
                    break;
                case 3:
                    $mot=$mot."tredici";
                    break;
                case 4:
                    $mot=$mot."quattordici";
                    break;
                case 5:
                    $mot=$mot."quindici";
                    break;
                case 6:
                    $mot=$mot."sedici";
                    break;
                case 7:
                    $mot=$mot."diciassette";
                    break;
                case 8:
                    $mot=$mot."diciotto";
                    break;
                case 9:
                    $mot=$mot."diciannove";
                    break;
            }
        }

        return $mot;
    }
    