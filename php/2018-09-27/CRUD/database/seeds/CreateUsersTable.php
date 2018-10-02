<?php

use Illuminate\Database\Seeder;
use App\User;
class CreateUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            User::create([
                'name' => 'dat' .$i,
                'password' => 'matkhau'.$i
            ]);
        }

    }
}
