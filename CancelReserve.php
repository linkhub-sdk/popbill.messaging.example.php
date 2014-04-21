<?php

include 'common.php';
use Popbill\PopbillException;

echo '예약전송건 취소 테스트'.chr(10).'처리결과 : ' ;

try
{
	//접수번호
	$ReceiptNum = '014042114000000005';
	
	$result = $MessagingService->CancelReserve('1231212312',$ReceiptNum,'userid');
	echo $result;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);

?>
