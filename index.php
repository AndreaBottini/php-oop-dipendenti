<?php   
require_once __DIR__ . '/classes/dipendenti.php';
require_once __DIR__ . '/classes/Dirigente.php';
require_once __DIR__ . '/classes/Operaio.php';

$dirigenteUno = new Dirigente('0001', 'Andrea', 'Bottini', 'via dei Mille', 'bttndr4jfjid', 'it333333333', 3);
var_dump($dirigenteUno);

try {
    $dirigenteUno->setBonus(10);
} catch (Exception $e) {
    echo 'errore' . $e->getMessage();
}
var_dump($dirigenteUno);

$dirigenteUno->getBonus();
echo $dirigenteUno->getBonus();

try {
    $dirigenteUno->setAzioni(3000);
} catch (Exception $e) {
    echo 'errore' . $e->getMessage();
}
var_dump($dirigenteUno);

$dirigenteUno->getAzioni();
echo $dirigenteUno->getAzioni();

var_dump($dirigenteUno->visualizzaDipendente());

$operaioUno = new Operaio('0001', 'Marco', 'Bianchi', 'via dei Mille', 'bttndr4jfjid', 'it333333333', 4, 5);
var_dump($operaioUno);



?>
