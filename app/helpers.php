<?php

use Illuminate\Support\Str;

function formatDate($time)
{
    return date('d.m.Y. G:i', strtotime($time));
}

function limitText($str, $n = 15)
{
    return Str::words($str, $n, '...');    
}


function orderNumber($order, $count)
{
    return $count - $order + 1;
}