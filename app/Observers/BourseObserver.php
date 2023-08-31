<?php

namespace App\Observers;

use App\Models\Bourse;

class BourseObserver
{
    /**
     * Handle the Bourse "created" event.
     */
    public function created(Bourse $bourse): void
    {
        //
    }

    /**
     * Handle the Bourse "updated" event.
     */
    public function updated(Bourse $bourse): void
    {
        //
    }

    /**
     * Handle the Bourse "deleted" event.
     */
    public function deleted(Bourse $bourse): void
    {
        //
    }

    /**
     * Handle the Bourse "restored" event.
     */
    public function restored(Bourse $bourse): void
    {
        //
    }

    /**
     * Handle the Bourse "force deleted" event.
     */
    public function forceDeleted(Bourse $bourse): void
    {
        //
    }
}
