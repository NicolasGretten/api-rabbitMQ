<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Account;
use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
             'id'=>'user689730634',
         ]);

        Account::factory()->create([
            'id'=> 'account790202756',
            'userId' => 'user689730634',
            'accountNumber' => '284840000',
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'john@doe.com',
            'phone' => '33602010302',
        ]);

        Address::factory()->create([
            'id'=> 'address241915941',
            'userId' => 'user689730634',
            'title'=> 'bureau',
            'addressLine1'=> '15 route de manom',
            'addressLine2'=> '',
            'zipCode'=> '57100',
            'city'=> 'Thionville',
            'country'=> 'FR',
        ]);
    }
}
