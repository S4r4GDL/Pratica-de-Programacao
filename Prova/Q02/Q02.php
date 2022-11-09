
<?php                    
if(isset($_GET['num1']) && isset($_GET['operacao']) && isset($_GET['num2']) && isset($_GET['idade'])){
    $numero1=$_GET['num1'];
    $numero2=$_GET['num2'];
    if ($numero1 == 0 && $numero2 == 0 )
    {
        echo 'Números inválidos';
        ?>
            <form method="get" action="Q02.html">
                <input type="submit" value="Inicio">
            </form>
        <?php
    }
    $Op=$_GET['operacao'];
    switch($Op){
        case '+'{
            $total = $numero1 + $numero2;
            break;
        }
        case '-'{
            $total = $numero1 - $numero2;
            break;
        }
        case '*'{
            $total = $numero1 * $numero2;
            break;
        }
        case '/'{
            $total = $numero1 / $numero2;
            break;
        }
        default{
            echo 'Operador Inválido';
            ?>
            <form method="get" action="Q02.html">
                <input type="submit" value="Inicio">
            </form>
            <?php
        }
    }

    /*else
    {
    $soma = $numero1 + $numero2;
    $sub= $numero1 - $numero2;
    $mult= $numero1 * $numero2;
    $div= $numero1 / $numero2;
    $especial= $numero1 + $idade;
    }*/
}
else{
    echo "<h1>Acesso Inválido</h1>";
    ?>
        <form method="get" action="Q02.html">
        <input type="submit" value="Inicio">
        </form>
    <?php
}
?>