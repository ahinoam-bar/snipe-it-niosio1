<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // כאן נעשה את יצירת ה-Faker

        Company::truncate(); // איפוס הטבלה במקרה שהיא כבר קיימת

        for ($i = 0; $i < 4; $i++) {
            Company::create([
                'name' => $faker->company,
                'email' => $faker->companyEmail,
                'address' => $faker->address,
                'website' => $faker->domainName,
            ]);
        }
    }
}
