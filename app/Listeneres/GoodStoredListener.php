<?php

namespace App\Listeneres;

use App\Events\GoodStored;
use App\Http\Controllers\GoodController;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class GoodStoredListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  GoodStored  $event
     * @return void
     */
    public function handle(GoodStored $event)
    {
        GoodController::sendmail($event->good);
    }
}
