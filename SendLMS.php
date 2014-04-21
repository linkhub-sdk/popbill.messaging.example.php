<?php

include 'common.php';
use Popbill\PopbillException;

echo '장문문자 전송 테스트'.chr(10).'처리결과 : ' ;

try
{
	$Messages = array();
	
	$Messages[] = array(
		'snd' => '07075106766',
		'rcv' => '11112222',
		'rcvnm' => '수신자성명',
		'msg'	=> '개별 메시지 내용',
		'sjt'	=> '개발 메시지 제목'
	);
	
	$Messages[] = array(
		'rcv' => '22223333',
		'rcvnm' => '수신자성명'
	);
	
	$result = $MessagingService->SendLMS('1231212312','07075106766','동보전송 장문제목','동보전송 장문 문자내용',$Messages,null,'userid');
	echo $result;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);

?>
