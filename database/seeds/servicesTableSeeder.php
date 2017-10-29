<?php

use Illuminate\Database\Seeder;

class servicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table( 'services' )->insert(
		    array([
			    'title' => "Вернуть мужа",
			    'short' => "Вернуть мужа краткий текст",
			    'full'  => "Вернуть мужа полный текст"
		    ],
			    [
				    'title' => "Вернуть мужа 2",
				    'short' => "Вернуть мужа краткий текст 2",
				    'full'  => "Вернуть мужа полный текст 2"
			    ],
			    [
				    'title' => "Вернуть мужа 3",
				    'short' => "Вернуть мужа краткий текст 3",
				    'full'  => "Вернуть мужа полный текст 3"
			    ],
		    )
	    );
    }
}
