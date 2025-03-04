<html>
<head>
    <title>Fibonacci</title>

</head>
<body>
<h1>Primeros 2048 numeros de fibonacci</h1>

<?php

$n=0;
$n1=1;
$n2=0;
for($i=1; $i<=2048; $i++){
    echo $n. '<br>';
    $n=$n1+$n2;
    $n1=$n2;
    $n2=$n;
}
?>
</body>


</html>

