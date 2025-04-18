<?php

declare(strict_types=1);

namespace Zenorta\LaravelBrevoNotifier\Tests;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;
}
