<?php
$arr = explode(', ', readline());
$count = count($arr);
$sprints = [];
$result = [];
for($i = 0; $i < $count; $i++) {
    if($count < 3) {
        echo "error";
        exit;
    }
    if($i <= $count - 3) {
       array_push($sprints, $arr[$i], $arr[$i+1], $arr[$i+2]);
       if(array_sum($sprints) >= array_sum($result)) {
            $result = $sprints;
       }
       $sprints = [];
    }
}

echo implode(", ", $result);