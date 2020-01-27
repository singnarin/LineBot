<?php



require "vendor/autoload.php";

$access_token = 'inhBA/yRAa1Cuuju9G/CRP9XJdtMkncLbj5iflKRfIj8bWcuoGnKfpwJ3Qm8fT9zDijyJP6Ojsh3ZKY3cOBjh+mMCifHQBSY8s4xz8nvAxo2kvKsVwSqXesGFtl2hD8gxCj5A6ht1wRqG1VPjc3CgwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '7a918963ce9103dd594c5d4992ef071c';

$pushID = 'C9bdc881c5b14ce5ec054aec0e9301e11';
// userId ของผู้ใช้ หลายๆ คน
$userIds = array(
    ' userId ของผู้ใช้ที่เราต้องการส่งข้อความ push ไปแสดง 1 ',
    ' userId ของผู้ใช้ที่เราต้องการส่งข้อความ push ไปแสดง 2 ',
    ' userId ของผู้ใช้ที่เราต้องการส่งข้อความ push ไปแสดง 3 ',      
);      

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดี');
$picFullSize = "https://info.pyo1.go.th/LineBot/images/4.jpg";
$picThumbnail = "https://info.pyo1.go.th/LineBot/images/4.jpg";
$replyData = new \LINE\LINEBot\MessageBuilder\ImageMessageBuilder($picFullSize,$picThumbnail);
$response = $bot->pushMessage($pushID, $replyData);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
/*
switch ($typeMessage){
    case 'text':
        switch ($userMessage) {
            case "t":
                $textReplyMessage = "Bot ตอบกลับคุณเป็นข้อความ";
                $replyData = new TextMessageBuilder($textReplyMessage);
                break;
            case "i":
                $picFullSize = 'https://www.mywebsite.com/imgsrc/photos/f/simpleflower';
                $picThumbnail = 'https://www.mywebsite.com/imgsrc/photos/f/simpleflower/240';
                $replyData = new ImageMessageBuilder($picFullSize,$picThumbnail);
                break;
            case "v":
                $picThumbnail = 'https://www.mywebsite.com/imgsrc/photos/f/sampleimage/240';
                $videoUrl = "https://www.mywebsite.com/simplevideo.mp4";                
                $replyData = new VideoMessageBuilder($videoUrl,$picThumbnail);
                break;
            case "a":
                $audioUrl = "https://www.mywebsite.com/simpleaudio.mp3";
                $replyData = new AudioMessageBuilder($audioUrl,27000);
                break;
            case "l":
                $placeName = "ที่ตั้งร้าน";
                $placeAddress = "แขวง พลับพลา เขต วังทองหลาง กรุงเทพมหานคร ประเทศไทย";
                $latitude = 13.780401863217657;
                $longitude = 100.61141967773438;
                $replyData = new LocationMessageBuilder($placeName, $placeAddress, $latitude ,$longitude);              
                break;
            case "s":
                $stickerID = 22;
                $packageID = 2;
                $replyData = new StickerMessageBuilder($packageID,$stickerID);
                break;    
*/






