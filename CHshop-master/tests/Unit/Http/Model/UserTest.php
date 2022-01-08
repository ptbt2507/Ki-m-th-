<?php

namespace Tests\Unit\Http\Model;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
    //    kiểm tra tồn tại email admin@gmail.com trong bản ghi
        $this->assertDatabaseHas('nguoidung', [
            'email' => 'admin@gmail.com'
        ]);      
        
    }
}
