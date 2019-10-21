<?
if (stristr($_SERVER[HTTP_HOST], "csat.kr")) { $toLink = "csat.php"; }
else if (stristr($_SERVER[HTTP_HOST], "aes.kr")) { $toLink = "rus.html"; }
else if (stristr($_SERVER[HTTP_HOST], "kirbymaker.com")) { $toLink = "rus.html"; }

else { echo "연결 에러"; exit; }
include $toLink;
?>