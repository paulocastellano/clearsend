<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Domain extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        'name',
        'organization',
        'description',
        'industry',
        'twitter',
        'linkedin',
        'facebook',
        'instagram',
        'youtube',
        'country',
        'state',
        'city',
        'address',
        'zip_code',
        'technologies',
        'disposable',
        'webmail',
        'accept_all',
        'mx',
        'smtp',
        'blocked',
        'pattern'
    ];

    protected $casts = [
        'technologies' => 'json',
        'disposable' => 'boolean',
        'webmail' => 'boolean',
        'accept_all' => 'boolean',
        'mx' => 'boolean',
        'smtp' => 'boolean',
        'blocked' => 'boolean',
    ];

    public function emails()
    {
        return $this->hasMany(Email::class);
    }
}
