<?

require 'vendor/autoload.php';

use Transbank\Webpay\Configuration;
use Transbank\Webpay\Webpay;

$transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
               ->getNormalTransaction();

if(isset($_POST)){
	$result = $transaction->getTransactionResult($_POST["token_ws"]);
	print_r($result);
	//$output = $result->detailOutput;
	
}else{
	echo "no vas bien";
}