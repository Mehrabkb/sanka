<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Management\ManagementTableFieldsTypes;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'user_role_id' => 1
        ]);
        $table_fields_types = [
            [
                'type_name' => 'ورودی',
            ],
            [
                'type_name' => 'عددی'
            ],
            [
                'type_name' => 'لیست'
            ],
            [
                'type_name' => 'لیست چند انتخابی'
            ]
        ];
        ManagementTableFieldsTypes::insert($table_fields_types);
    }
}
