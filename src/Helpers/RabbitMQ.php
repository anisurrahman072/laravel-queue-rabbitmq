<?php

namespace VladimirYuldashev\LaravelQueueRabbitMQ\Helpers;


use VladimirYuldashev\LaravelQueueRabbitMQ\Queue\Jobs\RabbitMQJob;

class RabbitMQ
{
    public $rabbitMqJob;

    /**
     * Set RabbitMq Job Instance
     *
     * @param RabbitMQJob $rabbitMqJob
     * @return void
     */
    public function setRabbitMqJob(RabbitMQJob $rabbitMqJob): void
    {
        $this->rabbitMqJob = $rabbitMqJob;
    }

    /**
     * Get RabbitMq Job Instance
     *
     * @return void
     */
    public function getRabbitMqJob(): RabbitMQJob
    {
        return $this->rabbitMqJob;
    }
}
