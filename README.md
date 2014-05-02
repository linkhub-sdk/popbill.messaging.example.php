popbill.messaging.example.php
==============================

팝빌 메시징 SDK Example for PHP 5
####Requirements
+ php 5.2+
+ curl
+ openssl 1.0.1g+ (don't forget about heartbleed.)

####예제 목록
+ common.php  - 공통부분
+ JoinMember.php  - 연동회원 가입
+ GetBalance.php  - 연동회원 잔여포인트 확인
+ GetPartnerBalance.php - 파트너 잔여 통합포인트 확인
+ GetPopbillURL.php - 팝빌 기본 URL 확인
+ GetUnitCost.php	- 발송 단가 확인
+ SendSMS.php	- 단문메시지 전송
+ SendLMS.php	- 장문메시지 전송
+ SendXMS.php	- 장/단문 메시지 전송
+ GetMessages.php	- 전송 내역/상태 확인
+ CancelReserve.php	- 예약전송건 취소