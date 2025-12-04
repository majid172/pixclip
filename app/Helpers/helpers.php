<?php

use Illuminate\Support\Carbon;

function dateFormat($date)
{
    return Carbon::parse($date)->format('d M, Y');
}