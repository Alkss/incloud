<?php


class StopWatchController
{
    function formatDate($number)
    {
        if ($number < 10) {
            $number = "0" . $number;
        }
        return $number;
    }
}