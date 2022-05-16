<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Http\Controllers\FeedController;

class FeedControllerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return FeedController::class;
    }
}
