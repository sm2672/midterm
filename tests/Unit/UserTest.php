<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new User();
        $user->name = 'Lionel Messi';
        $user->email = 'okro@example';
        $user->password = 'qwerty';


        $this->assertTrue($user->save());
    }
    public function testChange()
    {
        $user = User:: find(1);
        $user->name = 'Steve Smith';
        $this->assertTrue($user->save());
    }
}




