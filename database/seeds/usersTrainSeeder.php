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
    public function run(Faker $faker)
    {
        $citta = ['Messina','Catania','Ragusa','Siragusa','Palermo','Trapani'];
        
        for($i=0; $i<1000; $i++)
        {   
            $citta1 = $faker->randomElement($citta);
            $orario = $faker->boolean();
            
            $train = new Train();
            $train->azienda = 'Trenitalia';
            $train->stazione_partenza = $citta1;
            
            do{
                $citta2 = $faker->randomElement($citta);
            }while($citta1 == $citta2);
            $train->stazione_arrivo=$citta2;
            
            $train->orario_partenza = '2022-08-06 15:30:00';
            $train->orario_arrivo = '2022-08-06 17:00:00';
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->num_carrozze = $faker->randomDigit();
            $train->in_orario = $faker->boolean();
            
            if($orario == true){
                $train->Cancellato = false;
            }else{
                $train->Cancellato = $faker->boolean();
            }

            $train->save();
        }
    }
}
