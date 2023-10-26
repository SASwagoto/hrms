<?php
use Carbon\Carbon;

if (!function_exists('myCustomFunction')) {
    function calWorkingHours($startTime, $endTime)
    {
        $startTime = Carbon::parse($startTime);
        $endTime = Carbon::parse($endTime);
        if ($endTime < $startTime) {
            // If end time is earlier than start time, swap the times
            $temp = $startTime;
            $startTime = $endTime;
            $endTime = $temp;
        }
        $workingHours = $endTime->diffInHours($startTime);
        $workingMinutes = $endTime->diffInMinutes($startTime) - $workingHours * 60;
        return $workingHours.' hours '.$workingMinutes. ' minutes';
    }
}

?>