<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Celular;

class CelularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Celular::create([
            'nome' => 'Samsung Galaxy A22 128GB',
            'valor' => '1259.10'
        ]);

        Celular::create([
            'nome' => 'Samsung Galaxy A52s 128GB',
            'valor' => '1699.00'
        ]);

        Celular::create([
            'nome' => 'Samsung Galaxy A32s 128GB',
            'valor' => '1599.00'
        ]);

        Celular::create([
            'nome' => 'Samsung Galaxy A02 32GB',
            'valor' => '1199.00'
        ]);

        Celular::create([
            'nome' => 'Samsung Galaxy S20 128GB',
            'valor' => '1979.00'
        ]);

        Celular::create([
            'nome' => 'Samsung Galaxy M12 64GB',
            'valor' => '1599.00'
        ]);

        Celular::create([
            'nome' => 'Samsung Galaxy A22 128GB',
            'valor' => '1299.00'
        ]);

        Celular::create([
            'nome' => 'Samsung Galaxy M22 128GB',
            'valor' => '1299.00'
        ]);

        //
    }
}
