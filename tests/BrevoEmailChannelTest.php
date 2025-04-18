<?php

declare(strict_types=1);

use Illuminate\Notifications\Notification;
use Zenorta\LaravelBrevoNotifier\BrevoEmailChannel;
use Zenorta\LaravelBrevoNotifier\BrevoEmailMessage;
use Zenorta\LaravelBrevoNotifier\BrevoService;
use Zenorta\LaravelBrevoNotifier\Tests\User;

it('send notification via BrevoEmailChannel should call BrevoService sendEmail method', function () {
    $mock = $this->mock(BrevoService::class)->shouldReceive('sendEmail')->once();
    $channel = new BrevoEmailChannel($mock->getMock());

    $channel->send(new User, new class extends Notification
    {
        public function via()
        {
            return [BrevoEmailChannel::class];
        }

        public function toBrevoEmail(User $notifiable): BrevoEmailMessage
        {
            return new BrevoEmailMessage;
        }
    });
});
