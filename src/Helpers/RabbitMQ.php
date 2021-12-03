<?php

namespace VladimirYuldashev\LaravelQueueRabbitMQ\Helpers;


use VladimirYuldashev\LaravelQueueRabbitMQ\Queue\Jobs\RabbitMQJob;

class RabbitMQ
{
    public $rabbitMqJob;

    public function setRabbitMqJob(RabbitMQJob $rabbitMqJob): void
    {
        $this->rabbitMqJob = $rabbitMqJob;
    }

    public function getRabbitMqJob(): RabbitMQJob
    {
        return $this->rabbitMqJob;
    }
}
