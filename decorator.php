<?php

// Реализовать на PHP пример Декоратора, позволяющий отправлять уведомления несколькими различными способами (описан в этой методичке).

interface NotificationInterface
{
    public function sendAlert();
}

abstract class NoNotification implements NotificationInterface
{
    protected $message;      
}

class SmsNotification extends NoNotification
{
    public function sendAlert($message) {
        // отправка смс-оповещения
    }
}

class EmailNotification extends NoNotification
{
    public function sendAlert($message) {
        // отправка сообщения на почту
    }
}

class ChromeNotification extends NoNotification
{
    public function sendAlert($message) {
        // отправка уведомления в браузере
    }
}

