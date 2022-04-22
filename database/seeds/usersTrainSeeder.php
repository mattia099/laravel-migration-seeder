<?php


use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use app\Train;

class usersTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train=new Train();
       
        $train->azienda = 'Trenitalia';
        $train->stazionePartenza = 'Messina';
        $train->stazioneArrivo = 'Catania';
        $train->orarioPartenza = 15.20;
        $train->orarioArrivo = 17.00;
        $train->codiceTreno = 15694;
        $train->numCarrozze = 4;
        $train->inOrario = true;
        $train->Cancellato = false;
        $train->save();
    }
}
