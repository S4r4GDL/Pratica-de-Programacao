
<!DOCTYPE html>
<html lang="pt-br">
<link link rel='stylesheet' href='Q01.css'>
<link rel="icon" type="image/x-icon" href="Q01.ico">
<body>
<?php Repetir();?>
<form method="get" action ="Q01.html">
    <label aling="center">
        <input type="submit" value='Voltar'/>
    </label>
</form>
</body>
</html>
<?php
function Repetir(){
    if(isset($_GET['times']))
    {
        $times=$_GET['times'];
        if($times > 0)
        {
            $str="<h2>Seja bem vindo</h2>";
            echo str_repeat($str, $times);
        }
        else
        {
            echo "<h2>Valor inválido</h2>";
        }
    }
    else
    {
        echo "<h2>Nenhum valor informado!</h2>";
    }
}
?>
