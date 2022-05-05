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
        $area = (M_PI * $diagonal**2)/4;
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

// Домашнее задание. Адаптер.

class SquareAdapter implements ISquare
{
    private $SquareAreaLib;

    public function __construct(SquareAreaLib $SquareAreaLib) {
        $this->$SquareAreaLib = $SquareAreaLib;
    }

    public function squareArea(int $sideSquare) {
        $diagonalSquare = sqrt($sideSquare**2 * 2);
        $this->$SquareAreaLib->getSquareArea($diagonalSquare);
    }
}

class CircleAdapter implements ICircle
{
    private $CircleAreaLib;

    public function __construct(CircleAreaLib $CircleAreaLib) {
        $this->$CircleAreaLib = $CircleAreaLib;
    }

    public function circleArea(int $circumference) {
        $diagonalCircle = $circumference / M_PI;
        $this->$CircleAreaLib->getCircleArea($diagonalCircle);
    }
    
}


