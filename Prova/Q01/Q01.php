<!DOCTYPE html>
<html lang="pt-br">
<link link rel='stylesheet' href='Q01.css'>
<link rel="icon" type="image/x-icon" href="Q01.ico">
<body>
<form method="get" action ="Q01.html">
    <label aling="center">
        <?php Repetir();?>
        <input type="submit" value='Voltar'/>
    </label>
</form>
</body>
</html>
<?php
function Repetir(){
    if(isset($_GET['times']) && $_GET['times'] != ''  && $_GET['times'] > 0)
    {
    	$times=$_GET['times'];
        $str="<h2>Seja bem vindo</h2>";
        echo str_repeat($str,$times);
    }
    else
    {
     echo"<h2Nenhum valor inserido</h2>";
    }
}    
?>