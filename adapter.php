<?php

// Внешняя бибилиотека
class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal**2)/2;
        return $area;
    }
}

class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal**2))/4;
        return $area;
    }
}

// Интерфейсы имеющегося кода
interface ISquare
{
    function squareArea(int $sideSquare);
}

interface ICircle
{
    function circleArea(int $circumference);
}

// Домашнее задание

interface AreaAdapterInterface 
{
    public function getArea(int $diagonal);
}


