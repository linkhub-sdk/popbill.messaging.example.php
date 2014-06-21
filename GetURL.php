<?php

include 'common.php';

echo '문자 관련 URL(ex. 조회 팝업) 확인 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $MessagingService->GetURL('1231212312','userid','BOX');
	echo substr( $result,0,40) . ' ...생략...';
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
