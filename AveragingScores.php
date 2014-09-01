<?php
function array_average_nonzero($scores) { 
   return array_sum($scores) / count(array_filter($scores)); 
}
$scores["Tim"] = 98;
$scores["Tom"] = 80;
$scores["Mike"] = 50;
$scores["Jason"] = 25;
foreach( $scores as $key => $value)

        if($value < 70){
	echo "$key scored a $value which is less than 70. <br />\n";
unset($scores[$key]);
	}
        elseif
            ($value < 70);
			{
echo "The average score of those who scored over 70 is: " .array_sum($scores) / count($scores) . "<br />";
}
        
    
?>