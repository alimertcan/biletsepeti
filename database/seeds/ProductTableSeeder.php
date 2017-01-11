<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $product = new \App\Product([
		'imagePath' => 'http://www.monashoressingingchristmastree.com/wp-content/uploads/2012/08/Tickets-in-hand.jpg',
		'title' => 'Duman',
		'description' => 'Lütfi Kırdar 05.01.2017 20:00',
		'price' => '20',
<<<<<<< HEAD
		'stok' => '1',
=======
		'stok' => '3',
>>>>>>> origin/master
		]);
		$product ->save();
		  $product = new \App\Product([
		'imagePath' => 'http://www.monashoressingingchristmastree.com/wp-content/uploads/2012/08/Tickets-in-hand.jpg',
		'title' => 'Bulutsuzluk Özlemi',
		'description' => 'Beyoğlu Hayal Kahvesi 06.01.2017 22:00',
		'price' => '30',
		'stok' => '5',
		]);
		$product ->save();
		  $product = new \App\Product([
		'imagePath' => 'http://www.monashoressingingchristmastree.com/wp-content/uploads/2012/08/Tickets-in-hand.jpg',
		'title' => 'Fenerbahçe - Anadolu Efes',
		'description' => 'Ülker Sports Arena 07.01.2017 19:00',
		'price' => '60',
<<<<<<< HEAD
		'stok' => '5',
=======
		'stok' => '4',
>>>>>>> origin/master
		]);
		$product ->save();
		
			  $product = new \App\Product([
		'imagePath' => 'http://www.monashoressingingchristmastree.com/wp-content/uploads/2012/08/Tickets-in-hand.jpg',
		'title' => 'Aşk ve Mucize',
		'description' => 'Süzer Plaza 09.01.2017 20:00',
		'price' => '120',
		'stok' => '4',
		]);
		$product ->save();
		
			  $product = new \App\Product([
		'imagePath' => 'http://www.monashoressingingchristmastree.com/wp-content/uploads/2012/08/Tickets-in-hand.jpg',
		'title' => 'Tiyatro Keyfi Etkinlikeri',
		'description' => 'Caddebostan Kültür Merkezi 07.01.2017 19:00',
		'price' => '35',
		'stok' => '1',
		]);
		$product ->save();
		
			  $product = new \App\Product([
		'imagePath' => 'http://www.monashoressingingchristmastree.com/wp-content/uploads/2012/08/Tickets-in-hand.jpg',
		'title' => 'Yıldız Tilbe',
		'description' => 'Caddebostan Kültür Merkezi 07.01.2017 19:00',
		'price' => '43',
<<<<<<< HEAD
		'stok' => '3',
=======
		'stok' => '0',
>>>>>>> origin/master
		]);
		$product ->save();
		
		
    }
}
