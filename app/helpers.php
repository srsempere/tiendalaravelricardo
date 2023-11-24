<?php

function truncar($s, $long = 20)
{
    if (mb_strlen($s) > $long) {
        return mb_substr($s, 0, $long) . '...';
    }

    return $s;
}

function dinero($s)
{
    return number_format($s, 2, ',', ' ') . ' €';
}

function porcentaje($s)
{
    return number_format($s, 0) . ' %';
}
