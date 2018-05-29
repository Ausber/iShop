<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 		=> 'Ausberto', 
				'last_name' => 'Medina', 
				'email' 	=> 'auszber92@gmail.com', 
				'user' 		=> 'ausber',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'address' 	=> 'Calle 14 # 30-15, Lorica',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime,
			],
			[
				'name'		=> 'Karina',
				'last_name'	=> 'Medina',
				'email'		=> 'karina@gmail.com',
				'user'		=> 'karina89',
				'password'	=>	\Hash::make('123456'),
				'type'		=> 'user',
				'address' 	=> 'Calle 14 # 30-15, Lorica',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime,

			],

		);

		User::insert($data);
    }
}
