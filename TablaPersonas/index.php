<?php 

ini_set("display_errors", E_ALL);
    include_once "persona.php";

    $lista =[
        new Persona("Fulano","1969-11-02","5578569138"),
        new Persona("Mengano","1980-10-02","5512859647"),
        new Persona("Sutano","1974-05-02","5570259412"),
        new Persona("Yari","2004-09-02","5585362147"),
        new Persona("Arthur","1967-11-02","5589631247"),
        new Persona("Chris","1972-12-02","5574258316"),
        new Persona("Jesus","1975-08-02","5525631485"),
        new Persona("Salvador","2000-05-24","5589647852"),
        new Persona("Oswaldo","1965-01-02","5512320587"),
        new Persona("Sara","1957-12-02","5586396547")
    ];
echo "Todo bien";
?>

<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de personas </title>
        <style>
            td{
                background-color:pink;
            }
            </style>

    </head>
    <body>
        <h1>Lista de Personas</h1>
        <table border>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha Nacimiento</th>
                    <th>Edad Actual</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $p): ?>
            <tr>
                    <td><?php echo $p->getNombre()?></td>
                    <td><?php echo $p->getFecNac()?></td>
                    <td><?php echo $p->getEdad(); ?> años</td>
                    <td><?php echo $p->getTel()?></td>
            </tr>

            <?php endforeach?>

            </tbody>
        </table>
    </body>

    </html>

