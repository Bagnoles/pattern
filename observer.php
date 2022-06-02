<?php

/* Наблюдатель: есть сайт HandHunter.gb. На нем работники могут подыскать себе вакансию
РНР-программиста. Необходимо реализовать классы искателей с их именем, почтой и стажем
работы. Также реализовать возможность в любой момент встать на биржу вакансий
(подписаться на уведомления), либо же, напротив, выйти из гонки за местом. Таким образом,
как только появится новая вакансия программиста, все жаждущие автоматически получат
уведомления на почту (можно реализовать условно).
*/

interface Observer
{
    public function handle($user);
}
class NotificationObserver implements Observer
{
    public function handle($user) {
        // отправка уведомления на почту соискателю $user->email
    }
}


class User 
{
    private $name;
    private $email;
    private $experiance;

    protected $observers = [];

    public function getName() {
        return $this->name;
    }
    public function getMail() {
        return $this->email;
    }
    public function getExperiance() {
        return $this->experiance;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function setMail($email) {
        $this->email = $email;
    }
    public function setExperiance($experiance) {
        $this->experiance = $experiance;
    }

    public function attachObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detachObserver(Observer $observer) {
        foreach ($this->observers as $obsrv) {
            if ($obsrv == $observer) {
                unset($obsrv);
            }
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->handle($user);
        }
    }
}

$user = new User();
$observer = new NotificationObserver();

//добавление подписки на уведомления
$user->attachObserver($observer);

//отправление уведомления
$user->notify();

//отмена подписки
$user->detachObserver($observer);