
<?php
#Funcion inciso a 
    function calcularExpresionA($x, $y) {
        return (1 / $x) + (($x + $y) / 3) + (2 * ($x / $y));
    }
#Función inciso b
function calcularExpresionB($x) {
    $numerador = (1/2 * $x) + ((3 + $x) / 2) * (2 * pow($x, 2));
    $denominador = (2 + 3) * $x;
    return $numerador / $denominador;
}
#Función inciso c
function calcularExpresionC($x) {
    $parte1 = sqrt(pow(2 * $x, 2) + pow(3, 2)) / 5;
    $parte2 = sqrt(pow($x, 2));
    return $parte1 + $parte2;
}
#Función inciso d
function calcularExpresionD($x) {
    $numerador = (1/2 + 1/4 + 1/8) * pow($x, 1/3);
    $denominador = (sqrt($x) / 2) + ((3 * pow($x, 2)) / 4);
    return $numerador / $denominador;
}
#Función inciso e
function calcularExpresionE($x) {
    $numerador = (pow($x, 2) / 2) + (1 / sqrt($x));
    $denominador = 3 + (1/2) * pow($x, 3);
    return sqrt($numerador / $denominador);
}
#Variables 
$xA = 2; $yA = 4;
$xB = 3;
$xC = 2;
$xD = 2;
$xE = 4;

$resultadoA = calcularExpresionA($xA, $yA);
$resultadoB = calcularExpresionB($xB);
$resultadoC = calcularExpresionC($xC);
$resultadoD = calcularExpresionD($xD);
$resultadoE = calcularExpresionE($xE);

?>

<html>
<head>
    <title>Cálculo de Expresiones</title>
</head>
<body>
    <h1>Resultados de las Expresiones</h1>

        <p>
        <b>Inciso A:</b> Para X = <?php echo $xA; ?>, Y = <?php echo $yA; ?> el resultado es: <?php echo $resultadoA; ?>
        <br><br>
        <img src="inciso_a.png" alt="Expresión A" width="400">
        <br><br><br><br><br><br><br><br>
        <p>
        <b>Inciso B:</b> Para X = <?php echo $xB; ?> el resultado es: <?php echo $resultadoB; ?>
        <br><br>
        <img src="inciso_b.png" alt="Expresión B" width="400">
        <<br><br><br><br><br><br><br><br>
        <p>
        <b>Inciso C:</b> Para X = <?php echo $xC; ?> el resultado es: <?php echo $resultadoC; ?>
        <br><br>
        <img src="inciso_c.png" alt="Expresión C" width="600">
        <br><br><br><br><br><br><br><br>
        <p>
        <b>Inciso D:</b> Para X = <?php echo $xD; ?> el resultado es: <?php echo $resultadoD; ?>
        <br><br>
        <img src="inciso_d.png" alt="Expresión D" width="400">
        <br><br><br><br><br><br><br><br>
        <p>
        <b>Inciso E:</b> Para X = <?php echo $xE; ?> el resultado es: <?php echo $resultadoE; ?>
        <br><br>
        <img src="inciso_e.png" alt="Expresión E" width="400">
        
</body>
</html>