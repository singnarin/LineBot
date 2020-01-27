<?php 
function remainTime($fromTime=0, $toTime = 0) {
    $returnTime = array('day'=>0,'hour'=>0,'minute'=>0,'second'=>0);
    $seconds = floor($toTime - $fromTime);
     
    if($seconds < 0){
        return $returnTime;
    }
     
    $remainDays = floor($seconds / 86400);
    $remainHours = floor(($seconds % 86400)/3600);
    $remainMinutes = floor(($seconds % 3600)/60);
    $remainSeconds = $seconds % 60;
     
    if($remainDays > 0){
        $returnTime['day'] = $remainDays;
    }
     
    if($remainHours > 0){
        $returnTime['hour'] = $remainHours;
    }
     
    if($remainMinutes > 0){
        $returnTime['minute'] = $remainMinutes;
    }
     
    if($remainSeconds > 0){
        $returnTime['second'] = $remainSeconds;
    }
     
    return $returnTime;
}
    
//$returnTime = array('day'=>0,'hour'=>0,'minute'=>0,'second'=>0);

$now=time(); //เวลาปัจจุบันครับ
$target=strtotime('2020-02-01 00:00:00'); //เวลาในอนาคตครับ
$remainTime=remainTime($now,$target);
//var_dump($remainTime);

//echo $remainTime['day'];

$strAccessToken = "inhBA/yRAa1Cuuju9G/CRP9XJdtMkncLbj5iflKRfIj8bWcuoGnKfpwJ3Qm8fT9zDijyJP6Ojsh3ZKY3cOBjh+mMCifHQBSY8s4xz8nvAxo2kvKsVwSqXesGFtl2hD8gxCj5A6ht1wRqG1VPjc3CgwdB04t89/1O/w1cDnyilFU=";
 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

$arrPostData = array();
$arrPostData['to'] = "C50626082693222280ab12a0df0290839";
//$arrPostData['messages'][0]['type'] = "text";
//$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";
$image_url = "https://info.pyo1.go.th/LineBot/images/".$remainTime['day'].".jpg";
$arrPostData['messages'][0]['type'] = "image";
$arrPostData['messages'][0]['originalContentUrl'] = $image_url;
$arrPostData['messages'][0]['previewImageUrl'] = $image_url;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

echo $image_url;
?>