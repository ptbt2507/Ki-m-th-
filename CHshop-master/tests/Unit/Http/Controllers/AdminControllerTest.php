<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Taikhoan;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;

class AdminControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
 	public function testgetLogin()
    {
        $response = $this->get('admin/login1');
        $response->assertStatus(200);
        $response->assertViewIs("admin.login");
    }
     public function test_notadmin_in_page_sanpham()
    {
      	$user= factory(\App\Taikhoan::class)->create();
        $this->actingAs($user);
        $request = Request::create('sanpham', 'GET');
        $middleware = new CheckAge;
        $response = $middleware->handle($request, function () {});
        $this->assertEquals($response->getStatusCode(), 302);

    }


     public function test_admin_in_page_sanpham()
    {
        $user= factory(\App\Taikhoan::class)->make(['level' => 1]);
        $this->actingAs($user);
        $request = Request::create('sanpham', 'GET');
        $middleware = new CheckAge;
        $response = $middleware->handle($request, function () {});
        $this->assertEquals($response, null);
    }
}
