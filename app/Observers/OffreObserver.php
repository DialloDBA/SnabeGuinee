<?php

namespace App\Observers;

use App\Models\Offre;

class OffreObserver
{
    /**
     * Handle the Offre "created" event.
     */
    public function created(Offre $offre): void
    {
        //
    }

    /**
     * Handle the Offre "updated" event.
     */
    public function updated(Offre $offre): void
    {
        //
    }

    /**
     * Handle the Offre "deleted" event.
     */
    public function deleted(Offre $offre): void
    {
        //
    }

    /**
     * Handle the Offre "restored" event.
     */
    public function restored(Offre $offre): void
    {
        //
    }

    /**
     * Handle the Offre "force deleted" event.
     */
    public function forceDeleted(Offre $offre): void
    {
        //
    }
}
