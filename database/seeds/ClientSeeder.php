<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Phagie',
                'address' => 'Namek',
                'phone' => '09433599709',
                'capitalization' => 30000,
                'loan' => 10000
            ],
            [
                'name' => 'Noel',
                'address' => 'Denver',
                'phone' => '0913746895',
                'capitalization' => 90000,
                'loan' => 300000
            ],
            [
                'name' => 'Kenn Jay',
                'address' => 'Panglao',
                'phone' => '508-9117',
                'capitalization' => 70000,
                'loan' => 300000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
