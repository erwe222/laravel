<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $date = date('Y-m-d H:i:s');
        // 添加一个用户
        $intAdminId = DB::table('users')->insertGetId([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin888'),
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
