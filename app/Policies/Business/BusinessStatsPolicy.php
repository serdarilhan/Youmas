<?php

namespace App\Policies\Business;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BusinessStatsPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
