<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\EmailSMSLimitRate;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default credentials
        User::insert([
            [
                'name' => 'admin',
                'slug' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Pa$$w0rd!'), // password
                'gender' => 'male',
                'active' => 1,
                'user_type' => 'Admin',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Customer',
                'slug' => 'customer',
                'email' => 'customer@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Pa$$w0rd!'), // password
                'gender' => 'male',
                'active' => 1,
                'user_type' => 'Customer',
                'remember_token' => Str::random(10),
            ],
        ]);

        EmailSMSLimitRate::insert([
            'owner_id' => 1,
            'email' => 100,
            'sms' => 100,
            'from' => Carbon::now(),
            'to' => Carbon::now()->addDay(),
            'status' => true,
        ]);
    }
}
