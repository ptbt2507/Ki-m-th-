<?php

namespace Tests\Unit\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Project;
use App\SanPham;
use App\Nhacungcap;
use App\Loaihang;
use App\Taikhoan;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;
class CateControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testgetList()
    {
        
    	$user= factory(Taikhoan::class)->make(['level' => 1]);
        $this->actingAs($user);
        $response = $this->get('admin/cate/list');
        // lấy all dữ liệu
        $content = $response->getOriginalContent();
        $content = $content->getData();
        // kiem tra xem có dữ liệu bán chạy
        $count_cate =  (count($content['data']->all()));
        $this->assertEquals(5, $count_cate );
         // kiem tra xem có dữ liệu moinhat
        $response->assertStatus(200);
    }

     public function testgetList_faild_with_not_admin()
    {
        
    	$user= factory(Taikhoan::class)->make(['level' => 0]);
        $this->actingAs($user);
          $middleware = new CheckAge;
        $request = Request::create('admin/cate/list', 'GET');
         $response = $middleware->handle($request, function () {});
        $this->assertEquals($response->getStatusCode(), 302);
    }

   	 public function testgetDelete_cate()
    {
        $user= factory(Taikhoan::class)->make(['level' => 1]);
        $this->actingAs($user);
        $SanPham= factory(SanPham::class)->create();
    	$response = $this->get('admin/cate/delete/'.$SanPham->MaSP, [
        ]);
      $response->assertRedirect('admin/cate/list');
        //this fails 
        $response->assertStatus(302);
    }
    public function testgetDelete_cate_notadmin()
    {
        $user= factory(Taikhoan::class)->make(['level' => 0]);
        $this->actingAs($user);
        $SanPham= factory(SanPham::class)->create();
    	$response = $this->get('admin/cate/delete/'.$SanPham->MaSP, [
        ]);
      $response->assertRedirect('admin/login1');
        //this fails 
        $response->assertStatus(302);
    }


     public function testgetDelete_cate_notfound()
    {
        $user= factory(Taikhoan::class)->make(['level' => 1]);
        $this->actingAs($user);
    	$response = $this->get('admin/cate/delete/11111111', [
        ]);
        $response->assertStatus(500);
    }

    public function testgetEdit_cate()
    {
        $user= factory(Taikhoan::class)->make(['level' => 1]);
        $this->actingAs($user);
        $SanPham= factory(SanPham::class)->create();

        $response = $this->get('admin/cate/edit/'.$SanPham->MaSP, [
        ]);
        $response->assertViewIs("admin.edit");


        $response->assertStatus(200);
        // return view('admin.edit',compact('loaihang','nhacungcap','sua'));
    }
     public function testgetEdit_cate_data()
    {
        $user= factory(Taikhoan::class)->make(['level' => 1]);
        $this->actingAs($user);
        $SanPham= factory(SanPham::class)->create();

        $response = $this->get('admin/cate/edit/'.$SanPham->MaSP, [
        ]);
        $content = $response->getOriginalContent();
        $content = $content->getData();
        $count_sua =  (count($content['sua']->all()));
        if($count_sua > 0){
            $count_sua = 1;
        }
        $this->assertEquals(1, $count_sua );

        $response->assertStatus(200);
        // return view('admin.edit',compact('loaihang','nhacungcap','sua'));
    }
}
