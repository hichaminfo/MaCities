<?php

use Illuminate\Database\Seeder;

class MaCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions =  [
				        "Tanger-Tétouan-Al Hoceïma",
				        "Oriental",
				        "Fès-Meknès",
				        "Rabat-Salé-Kénitra",
				        "Béni Mellal-Khénifra",
				        "Casablanca-Settat",
				        "Marrakech-Safi",
				        "Drâa-Tafilalet",
				        "Souss-Massa",
				        "Guelmim-Oued Noun",
				        "Laâyoune-Sakia El Hamra",
				        "Dakhla-Oued Ed-Dahab"
			        ];

		foreach ($regions as $region) {

			DB::table('regions')->insert([
	            'name' => $region,
	            'slug' => str_slug($region),
	        ]);

		}
    }
}
