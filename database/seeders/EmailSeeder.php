<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Email;
use App\Models\Domain;

use App\Enums\Email\Status as EmailStatus;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Email::create([
            'email' => 'paulo@clearsend.io',
            'first_name' => 'Paulo',
            'last_name' => 'Castellano',
            'position' => 'CEO',
            'twitter' => 'https://twitter.com/paulocastellano',
            'linkedin' => 'https://linkedin.com/paulocastellano',
            'status' => EmailStatus::STATUS_VALID,
            'score' => 100,
            'regexp' => false,
            'gibberish' => false,
            'bounced' => false,



            'domain_id' => Domain::where('name', 'clearsend.io')->first()->id
        ]);

    }
}
