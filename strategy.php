<?php

/* Стратегия: есть интернет-магазин по продаже носков. Необходимо реализовать возможность
оплаты различными способами (Qiwi, Яндекс, WebMoney). Разница лишь в обработке запроса
на оплату и получение ответа от платёжной системы. В интерфейсе функции оплаты
достаточно общей суммы товара и номера телефона */

interface PaymentInterface 
{
    public function pay(int $sum);
}

class QiwiPayment implements PaymentInterface 
{
    public function pay(int $sum) {
        // оплата суммы заказа через Qiwi
    }
}

class YandexPayment implements PaymentInterface 
{
    public function pay(int $sum) {
        // оплата суммы заказа через Яндекс
    }
}

class WebmoneyPayment implements PaymentInterface 
{
    public function pay(int $sum) {
        // оплата суммы заказа через WebMoney
    }
}

class Order
{
    public function payOrder(PaymentInterface $paymentMethod, int $sum) {
        $paymentMethod->pay($sum);
    }
}

$order = new Order();
$order->payOrder(new YandexPayment(), $sum);