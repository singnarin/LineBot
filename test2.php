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

$now=time(); //เวลาปัจจุบัน
$target=strtotime('2020-02-01 00:00:00'); //เวลาในอนาคต
$remainTime=remainTime($now,$target);
//var_dump($remainTime);
//echo $remainTime['day'];

//$seconds = floor($target - $now);
//echo floor($seconds / 86400)." วัน ".floor(($seconds % 86400)/3600)." ชั่วโมง ".floor(($seconds % 3600)/60)." นาที ".$seconds % 60 ." วินาที";

?>