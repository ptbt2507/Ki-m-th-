<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
 
    public function testLogin(){
        $response = $this->post('dangnhap1', [
            'TaiKhoan' => 'admin',
            'password' => '123456789'          
        ]);
    
        //this works
        $response->assertRedirect('/CHshop');
    
        //this fails 
        $this->assertTrue(Auth::check());
    }
    public function testLogin_faild(){
        $response = $this->post('dangnhap1', [
            'TaiKhoan' => 'admin13123',
            'password' => '123456789'          
        ]);
    
        //this works
        $response->assertRedirect('/');
        $response->assertStatus(302);
        //this fails 
    }
    public function testlogout(){
        $response = $this->get('thoat');
        $response->assertRedirect('/CHshop');
        $response->assertStatus(302);
        $this->assertFalse(Auth::check());
    }
}
