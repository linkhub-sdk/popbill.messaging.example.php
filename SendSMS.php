<?php

include 'common.php';
use Popbill\PopbillException;

echo '단문문자 전송 테스트'.chr(10).'처리결과 : ' ;

try
{
	$Messages = array();
	
	$Messages[] = array(
		'snd' => '07075106766',
		'rcv' => '11112222',
		'rcvnm' => '수신자성명',
		'msg'	=> '개별 메시지 내용'
	);
	
	$Messages[] = array(
		'rcv' => '22223333',
		'rcvnm' => '수신자성명'
	);
	
	$result = $MessagingService->SendSMS('1231212312','07075106766','동보전송 문자내용',$Messages,null,'userid');
	echo $result;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);

?>
