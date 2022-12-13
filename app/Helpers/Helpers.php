<?php
    function percent($original_price, $promotional_price)
    {
    $percent = (($original_price - $promotional_price) / $original_price) * 100;
    return $percent;
    }
