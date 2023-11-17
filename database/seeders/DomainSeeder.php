<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Domain;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domain::create([
            'name' => 'clearsend.io',
            'organization' => 'Clearsend',
            'description' => 'Clearsend is a transactional email service that helps you send and track emails easily.',
            'industry' => 'Software',
            'twitter' => 'https://twitter.com/clearsend',
            'linkedin' => 'https://linkedin.com/in/clearsend',
            'facebook' => 'https://facebook.com/clearsend',
            'instagram' => 'https://instagram.com/clearsend',
            'youtube' => 'https://youtube.com/clearsend',
            'country' => 'US',
            'state' => 'CA',
            'city' => 'San Francisco',
            'address' => '123 Main St',
            'zip_code' => '94105',
            'technologies' => ['laravel', 'php', 'mysql', 'redis', 'nginx', 'vuejs', 'tailwindcss'],
            'disposable' => false,
            'webmail' => false,
            'accept_all' => false,
            'mx' => true,
            'smtp' => true,
            'blocked' => false,
            'pattern' => '{first}',
        ]);
    }
}
