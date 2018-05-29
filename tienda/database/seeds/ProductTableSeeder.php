<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder
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
				'name' 			=> 'Playera 1',
				'slug' 			=> 'playera-1',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
				'category_id' 	=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
			],
			[
				'name' 			=> 'Playera 2',
				'slug' 			=> 'playera-2',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 255.00,
				'image' 		=> 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Blue_Distressed_Superman_Logo_T_Shirt_hi_res.jpg',
				'category_id' 	=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
			],
			[
				'name' 			=> 'Playera 3',
				'slug' 			=> 'playera-3',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 300.00,
				'image' 		=> 'http://img5a.flixcart.com/image/t-shirt/f/g/q/fsbk-bruce-lee-sayitloud-xl-700x700-imadtkffxfhgsday.jpeg',
				'category_id' 	=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,				
			],
			[
				'name' 			=> 'Playera 4',
				'slug' 			=> 'playera-4',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 475.00,
				'image' 		=> 'http://rlv.zcache.com/funny_computer_geek_t_shirt_tshirt-r537052a6a7b94b028e47b274c099fe24_804g5_324.jpg',
				'category_id' 	=> 2,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
			],
			[
				'name' 			=> 'Playera 5',
				'slug' 			=> 'playera-5',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 280.00,
				'image' 		=> 'https://media.elpalaciodehierro.com/media/catalog/product/cache/1/image/1800x1800/9df78eab33525d08d6e5fb8d27136e95/3/8/38900101_palaciodehierro_playera_nike_vista_1.jpg',
				'category_id' 	=> 2,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				
			],
			[
				'name' 			=> 'Playera 6',
				'slug' 			=> 'playera-6',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcNF-xgivz8ADYSmsT7XPSR8_aCecgw_Ti-2L5_UNIrfiYdqP4',
				'category_id' 	=> 2,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				
			],
			[
				'name' 			=> 'Playera 7',
				'slug' 			=> 'playera-7',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSczgJtz3vB3Ey92m-z0pL_bnI3Uw-nADA7b6nztdz99q9as-Sk6A',
				'category_id' 	=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				
			],
			[
				'name' 			=> 'Playera 8',
				'slug' 			=> 'playera-8',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract'		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'http://cdn.somethinggeeky.com/assets/images/products/amazonlarge/4ffed02898033.jpg',
				'category_id' 	=> 2,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				
			],
			
		);
 
		Product::insert($data);
    }
}
