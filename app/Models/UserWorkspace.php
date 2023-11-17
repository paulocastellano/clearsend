<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserWorkspace extends Pivot
{
    protected $table = 'user_workspace';

    public $timestamps = null;
}
