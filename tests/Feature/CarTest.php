<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = new Car();
        $car->make = 'Ford';
        $car->model = 'n';
        $car->year = '1999';


        $this->assertTrue($car->save());
    }

    public function testChange()
    {
        $car = Car::find(ford);
        $car->Update(['year' => '2000']);
        $this->assertTrue($car->save());
    }

    public function testCount(){

    $cars = Car:: All();
    $carnumber = $cars->count();

    $this->assertequals(51, $carnumber);
    }
}
./