<?php

namespace App\Models;

use function Illuminate\Events\queueable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Facades\Storage;
use Laravel\Cashier\Billable;

class Workspace extends Model
{
    use HasFactory, HasUuids, Billable;

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::updated(queueable(function (Workspace $workspace) {
            if ($workspace->hasStripeId()) {
                $workspace->syncStripeCustomerDetails();
            }
        }));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'api_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->using(UserWorkspace::class)
            ->withPivot('role')
            ->as('membership')
            ->withTimestamps();
    }

    public function invites()
    {
        return $this->hasMany(Invite::class);
    }
}
