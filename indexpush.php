<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<?php 
$strAccessToken = "inhBA/yRAa1Cuuju9G/CRP9XJdtMkncLbj5iflKRfIj8bWcuoGnKfpwJ3Qm8fT9zDijyJP6Ojsh3ZKY3cOBjh+mMCifHQBSY8s4xz8nvAxo2kvKsVwSqXesGFtl2hD8gxCj5A6ht1wRqG1VPjc3CgwdB04t89/1O/w1cDnyilFU=";
 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

$arrPostData = array();
$arrPostData['to'] = "C50626082693222280ab12a0df0290839";
//$arrPostData['messages'][0]['type'] = "text";
//$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";
$image_url = "<div id=\"showRemain\"></div>";
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
</body>
<script type="text/javascript">
  var x = 0;
  function countDown(){
      var timeA = new Date(); // วันเวลาปัจจุบัน
      var timeB = new Date("02/01/2020 00:00:01"); // วันเวลาสิ้นสุด รูปแบบ เดือน/วัน/ปี ชั่วโมง:นาที:วินาที
      var timeDifference = timeB.getTime()-timeA.getTime();
      if(timeDifference>=0){
          timeDifference=(timeDifference/1000)-(86400*x);
          timeDifference=Math.floor(timeDifference);
          var wan=Math.floor(timeDifference/86400);
          var l_wan=timeDifference%86400;
          var hour=Math.floor(l_wan/3600);
          var l_hour=l_wan%3600;
          var minute=Math.floor(l_hour/60);
          var second=l_hour%60;
          var showPart=document.getElementById('showRemain');
          showPart.innerHTML='https://www.pyo1.go.th/LineBot/images/'+wan+'.jpg';
              if(wan==0 && hour==0 && minute==0 && second==0){
                  clearInterval(iCountDown); // ยกเลิกการนับถอยหลังเมื่อครบ
                  // เพิ่มฟังก์ชันอื่นๆ ตามต้องการ
              }
      }
  }
  
  function countDown1(){
      var timeA = new Date(); // วันเวลาปัจจุบัน
      var timeB = new Date("02/11/2020 00:00:01"); // วันเวลาสิ้นสุด รูปแบบ เดือน/วัน/ปี ชั่วโมง:นาที:วินาที
      var timeDifference = timeB.getTime()-timeA.getTime();
      if(timeDifference>=0){
          timeDifference=(timeDifference/1000)+(86400*x);
          timeDifference=Math.floor(timeDifference);
          var wan=Math.floor(timeDifference/86400);
          var l_wan=timeDifference%86400;
          var hour=Math.floor(l_wan/3600);
          var l_hour=l_wan%3600;
          var minute=Math.floor(l_hour/60);
          var second=l_hour%60;
          var showPart=document.getElementById('showRemain1');
          showPart.innerHTML=wan;
              if(wan==0 && hour==0 && minute==0 && second==0){
                  clearInterval(iCountDown1); // ยกเลิกการนับถอยหลังเมื่อครบ
                  // เพิ่มฟังก์ชันอื่นๆ ตามต้องการ
              }
      }
  }
  
    function countDown2(){
      var timeA = new Date(); // วันเวลาปัจจุบัน
      var timeB = new Date("03/04/2020 00:00:01"); // วันเว6าสิ้นสุด รูปแบบ เดือน/วัน/ปี ชั่วโมง:นาที:วินาที
      var timeDifference = timeB.getTime()-timeA.getTime();
      if(timeDifference>=0){
          timeDifference=(timeDifference/1000)+(86400*x);
          timeDifference=Math.floor(timeDifference);
          var wan=Math.floor(timeDifference/86400);
          var l_wan=timeDifference%86400;
          var hour=Math.floor(l_wan/3600);
          var l_hour=l_wan%3600;
          var minute=Math.floor(l_hour/60);
          var second=l_hour%60;
          var showPart=document.getElementById('showRemain2');
          showPart.innerHTML=wan;
              if(wan==0 && hour==0 && minute==0 && second==0){
                  clearInterval(iCountDown2); // ยกเลิกการนับถอยหลังเมื่อครบ
                  // เพิ่มฟังก์ชันอื่นๆ ตามต้องการ
              }
      }
  }
  
      function countDown3(){
      var timeA = new Date(); // วันเวลาปัจจุบัน
      var timeB = new Date("03/18/2019 00:00:01"); // วันเวลาสิ้นสุด รูปแบบ เดือน/วัน/ปี ชั่วโมง:นาที:วินาที
      var timeDifference = timeB.getTime()-timeA.getTime();
      if(timeDifference>=0){
          timeDifference=(timeDifference/1000)+(86400*x);
          timeDifference=Math.floor(timeDifference);
          var wan=Math.floor(timeDifference/86400);
          var l_wan=timeDifference%86400;
          var hour=Math.floor(l_wan/3600);
          var l_hour=l_wan%3600;
          var minute=Math.floor(l_hour/60);
          var second=l_hour%60;
          var showPart=document.getElementById('showRemain3');
          showPart.innerHTML=wan;
              if(wan==0 && hour==0 && minute==0 && second==0){
                  clearInterval(iCountDown3); // ยกเลิกการนับถอยหลังเมื่อครบ
                  // เพิ่มฟังก์ชันอื่นๆ ตามต้องการ
              }
      }
  }
  // การเรียกใช้
  var iCountDown=setInterval("countDown()",1000);
  var iCountDown1=setInterval("countDown1()",1000);
  var iCountDown2=setInterval("countDown2()",1000);
  var iCountDown3=setInterval("countDown3()",1000);
  </script>
</html>