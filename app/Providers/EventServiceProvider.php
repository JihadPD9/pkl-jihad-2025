<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Events\Login;
use App\Listeners\MergeCartListener;
use App\Events\OrderPaidEvent;
use App\Listeners\SendOrderPaidEmail;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Login::class => [
            MergeCartListener::class,
        ],
        OrderPaidEvent::class => [
            SendOrderPaidEmail::class,
        ],

    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }
}
