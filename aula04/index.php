<body>
    <?php
    //aqui declarei as variaveis
    $i=65;
    $imin=18;
    $imax=65;
    //aqui entra as condições de if elseif e else
        
        //se a idade for menor que a minima voce n é obrigado a votar
        if($i<$imin){
            echo 'voce não é obrigado a votar';
        }

        //se a idade for maior que a limite 65 voce não é obrigado a votar
        elseif($i>=$imax){
            echo 'voce é muito senhorzinho, não obrigatorio';
        }

        //se voce n se encaixa nem na idade maxima e nem na minima vai ter q votar
        else{
            echo 'obrigatorio';
        }
    ?>
</body>
