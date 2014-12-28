<?php
	class ProductsTableSeeder extends Seeder{
		public function run(){

			foreach(range(1, 100) as $number):
				Product::create([
					'title'=> 'Product ' . $number
				]);
			endforeach;
		}
	}

 ?>