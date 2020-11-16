<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
namespace App\Http\Controllers;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

      public function promoAmountTest()
      {
        $response = $this->call('GET', '/amount/promoCode');
        $this->assertResponseOk();
        $response=$response->getData(true);
        $this->assertNotNull($response);


      }

        public function checkvalidtestMethod()
          {
              $validresults=$this->call('GET', '/checkvalid');

              $this->assertResponseOk();
              $validresults=$validresults->getData(true);
              $this->assertNotNull($validresults);
          }

          public function checkvalidtestMethod()
            {
              $response = $this->call('GET', '/amount/promoCode');
              $this->assertResponseOk();
              $response=$response->getData(true);
              $this->assertNotNull($response);
            }


      public function checkExpirytestMethod()
        {
          $response = $this->call('GET', '/timer');
          $this->assertResponseOk();
          $response=$response->getData(true);
          $this->assertNotNull($response);
        }

        public function DeactivatetestMethod()
          {
            $response = $this->call('GET', '/deactivate/promoCode');
            $this->assertResponseOk();
            $response=$response->getData(true);
            $this->assertNotNull($response);
          }

          public function promoCodetestPOST()
        {
            // ...
            $request = $client->post('/promocode', null, json_encode($data));
            $response = $request->send();
            $this->assertEquals(201, $response->getStatusCode());

        }
        public function promoCodetestPOST()
      {
          // ...
          $request = $client->post('/promocode', null, json_encode($data));
          $response = $request->send();
          $this->assertEquals(201, $response->getStatusCode());

      }

      public function radiustestPOST()
    {
        // ...
        $request = $client->post('/radius', null, json_encode($data));
        $response = $request->send();
        $this->assertEquals(201, $response->getStatusCode());

    }
    public function destinationtestPOST()
  {
      // ...
      $request = $client->post('//destination', null, json_encode($data));
      $response = $request->send();
      $this->assertEquals(201, $response->getStatusCode());

  }





public function ActivePromoCodesTest()
{
  // Mock dependencies
  $mockDependency = \Mockery::mock(SomeDependency::class);
  $mockDependency
      ->shouldReceive('someMethod')
      ->andReturn('Some result');
  // Create controller
  $ActivePromoCodes = new ActivePromoCodes($mockDependency);

  // Act
  $response = $ActivePromoCodes->CheckActive();

  // Assert
  $this->assertNotNull($response);
}


public function CodeGeneratorTest()
{
  // Mock dependencies
  $mockDependency = \Mockery::mock(SomeDependency::class);
  $mockDependency
      ->shouldReceive('someMethod')
      ->andReturn('Some result');
  // Create controller
  $CodeGenerator = new CodeGenerator($mockDependency);

  // Act
  $response = $CodeGenerator->getCode();

  // Assert
  $this->assertNotNull($response);
}
//Controller test
public function DeactivatedTest()
{
  // Mock dependencies
  $mockDependency = \Mockery::mock(SomeDependency::class);
  $mockDependency
      ->shouldReceive('someMethod')
      ->andReturn('Some result');
  // Create controller
  $Deactivated = new Deactivated($mockDependency);

  // Act
  $response = $Deactivated->changeToDeactivated('DDAADA5');

  // Assert
  $this->assertNotNull($response);
}

public function geoCodeTest()
{
  // Mock dependencies
  $mockDependency = \Mockery::mock(SomeDependency::class);
  $mockDependency
      ->shouldReceive('someMethod')
      ->andReturn('Some result');
  // Create controller
  $geoCode = new Deactivated($mockDependency);

  // Act
  $response = $geoCode->findlocation('
  Kololo Acacia Avenue Kampala Central Kampala Kampala Uganda');
  $response2 = $this->call('GET', '"https://us1.locationiq.com/v1/search.php?key=pk.7afbfee4f83beb994c1619f0728a256e&q=.$address&format=json";');
  $this->assertResponseOk();
  $response2=$response->getData(true);
  $this->assertNotNull($response2);

  // Assert
  $this->assertNotNull($response);
}
//Controller test
public function MileTest()
{
  // Mock dependencies
  $mockDependency = \Mockery::mock(SomeDependency::class);
  $mockDependency
      ->shouldReceive('someMethod')
      ->andReturn('Some result');
  // Create controller
  $mileCalculation= new Deactivated($mockDependency);

  // Act
  $response = $$mileCalculation->mileCalculation(0.3359265, 32.5874571, 0.3359265, 32.5874571,'M');

  // Assert
  $this->assertNotNull($response);
}

public function PromoMoneyTest()
{
  // Mock dependencies
  $mockDependency = \Mockery::mock(SomeDependency::class);
  $mockDependency
      ->shouldReceive('someMethod')
      ->andReturn('Some result');
  // Create controller
  $PromoAmount = new Deactivated($mockDependency);

  // Act
  $response = $PromoAmount->currentAmount('DDAADA5');

  // Assert
  $this->assertNotNull($response);
}

public function CodeTimerTest()
{
  // Mock dependencies
  $mockDependency = \Mockery::mock(SomeDependency::class);
  $mockDependency
      ->shouldReceive('someMethod')
      ->andReturn('Some result');
  // Create controller
  $Timer = new CodeGenerator($mockDependency);

  // Act
  $response = $Timer->getCode();

  // Assert
  $this->assertNotNull($response);
}


}
