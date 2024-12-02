<?php


namespace App\Providers;

use App\Interfaces\PaymentGatewayInterface;
use App\Services\PaymobPaymentService;
use App\Services\TapPaymentService;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {


//        $this->app->bind(PaymentGatewayInterface::class, PaymobPaymentService::class);
        $this->app->bind(PaymentGatewayInterface::class, TapPaymentService::class);


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
