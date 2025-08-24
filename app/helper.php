<?php

function formatDate(string $date): string
{
    return date('M j, Y', strtotime($date));
}


function formatAmount(float $amount): string
{
    return ($amount < 0 ? '-' : '') . '$' . number_format(abs($amount), 2);
}
