<?php


use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;  

class usersTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
       
        $train->azienda = 'Trenitalia';
        $train->stazione_partenza = 'Messina';
        $train->stazione_arrivo = 'Catania';
        $train->orario_partenza = '2022-08-06 15:30:00';
        $train->orario_arrivo = '2022-08-06 17:00:00';
        $train->codice_treno = 15694;
        $train->num_carrozze = 4;
        $train->in_orario = true;
        $train->Cancellato = false;
        $train->save();
    }
}
