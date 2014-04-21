<?php

include 'common.php';
use Popbill\PopbillException;
use Popbill\ENumMessageType;

echo '전송 단가 확인 테스트'.chr(10).'처리결과 : ' ;

try {
	/*
	*	ENumMessageType::SMS => 단문
	*	ENumMessageType::LMS => 장문
	*/
	$result = $MessagingService->GetUnitCost('1231212312',ENumMessageType::SMS);
	echo $result;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
