<?php

namespace Tests\Unit\Http\Middleware;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Taikhoan;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;
class MiddlewareTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //kiem tra xem ko phải admin
     public function test_middleware_not_admin()
    {
      	//tạo user fake 
      	$user= factory(\App\Taikhoan::class)->create();
        $this->actingAs($user);
        $request = Request::create('/admin/cate/list', 'GET');
        $middleware = new CheckAge;
        $response = $middleware->handle($request, function () {});
        $this->assertEquals($response->getStatusCode(), 302);

    }

    //kiem tra xem là admin
    public function test_middleware_is_admin()
    {
      	//tạo user fake với level admin
      	$user= factory(Taikhoan::class)->make(['level' => 1]);
        $this->actingAs($user);
        $request = Request::create('/admin/cate/list', 'GET');
        $middleware = new CheckAge;
        $response = $middleware->handle($request, function () {});
        $this->assertEquals($response, null);
    }
}
