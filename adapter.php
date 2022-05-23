<?php

// Внешняя бибилиотека
class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        return ($diagonal ** 2) / 2;
    }
}

class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        return (M_PI * $diagonal ** 2) / 4;
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
    private $squareAreaLib;

    public function __construct(SquareAreaLib $squareAreaLib) {
        $this->squareAreaLib = $squareAreaLib;
    }

    public function squareArea(int $sideSquare) {
        $diagonalSquare = sqrt($sideSquare**2 * 2);
        $this->squareAreaLib->getSquareArea($diagonalSquare);
    }
}

class CircleAdapter implements ICircle
{
    private $circleAreaLib;

    public function __construct(CircleAreaLib $circleAreaLib) {
        $this->circleAreaLib = $circleAreaLib;
    }

    public function circleArea(int $circumference) {
        $diagonalCircle = $circumference / M_PI;
        $this->circleAreaLib->getCircleArea($diagonalCircle);
    }
    
}


