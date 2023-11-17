<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Enums\Email\Status as EmailStatus;

class Email extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'position',
        'twitter',
        'linkedin',
        'status',
        'score',
        'regexp',
        'gibberish',
        'bounced',
        'domain_id'
    ];

    protected $casts = [
        'status' => EmailStatus::class,
        'regexp' => 'boolean',
        'gibberish' => 'boolean',
        'bounced' => 'boolean',
    ];

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
