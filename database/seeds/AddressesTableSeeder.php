<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addresses')->delete();
        
        \DB::table('addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'area' => '1340, Rayerbag',
                'city' => 'Dhaka',
                'zip' => 1229,
            ),
            1 => 
            array (
                'id' => 2,
                'area' => 'Shonir-Akhra',
                'city' => 'Dhaka',
                'zip' => 1772,
            ),
            2 => 
            array (
                'id' => 3,
                'area' => 'Jatrabari',
                'city' => 'Dhaka',
                'zip' => 1223,
            ),
            3 => 
            array (
                'id' => 4,
                'area' => 'Modinabag',
                'city' => 'Dhaka',
                'zip' => 1233,
            ),
        ));
        
        
    }
}