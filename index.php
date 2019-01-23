<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use Transbank\Webpay\Configuration;
use Transbank\Webpay\Webpay;

session_start();
$_SESSION['test'] = rand();

$transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
               ->getNormalTransaction();

$amount = 1000;

echo $_SESSION['test'];
$sessionId = $_SESSION['test'];
$buyOrder = strval(rand(100000, 999999999));
$returnUrl = "https://cyrax.cl/transbank_2/resultado_transaccion.php";
$finalUrl = "https://callback/final/post/comprobante/webpay";

$initResult = $transaction->initTransaction(
        $amount, $buyOrder, $sessionId, $returnUrl, $finalUrl);

$formAction = $initResult->url;
$tokenWs = $initResult->token;


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>FORM :D</title>
	<style>
		.btnPago{
			background-color: orangered;
			padding: 20px;
			color: #fff;
			font-size: 1.4em;
		}
	</style>
</head>
<body>
	<form action="<?= $returnUrl ?>" method="post">
		<input type="hidden" value="<?= $tokenWs ?>" name="token_ws">
		<input type="submit" value="Realizar Pago" class="btnPago">
	</form>
</body>
</html>