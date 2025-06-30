<?php
function getSquareArea($base,$height)
{
    return $base * $height;
}
function getTriangleArea($base,$height)
{
    return $base * $height /2;
}
function getTrapezoidArea($superbase,$lowbase,$height)
{
    return ($superbase + $lowbase) *$height/2;
}

echo getSquareArea(5,5). "\n";
echo getTriangleArea(5,6). "\n";
echo getTrapezoidArea(3,5,2)."\n";

