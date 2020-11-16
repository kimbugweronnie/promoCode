<?php

namespace Database\Factories;

use App\Models\promoCode;
use Illuminate\Database\Eloquent\Factories\Factory;

class codeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = promoCode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //return [
          return [


              'promoCode' => $this->faker->promoCode,
              'Amount' => $this->faker->Amount,
              'Radius' => $this->faker->Radius,
              'location' => $this->faker->location,
              'Event' => $this->faker->Event,
              'latitude' => $this->faker->latitude,
              'longtitude' => $this->faker->longtitude,
              'Status',=>$this->faker->Status,
              'Deactivated'=>$this->faker->Deactivated,
              'Expired'=>$this->faker->Expired,





          ];
            //
        //];


    }
}
