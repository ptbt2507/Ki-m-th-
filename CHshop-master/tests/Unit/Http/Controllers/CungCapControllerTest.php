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
class CungCapControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
      public function testgetList_NhaCungCap()
    {
        $user= factory(Taikhoan::class)->make(['level' => 1]);
        $this->actingAs($user);
        $SanPham= factory(SanPham::class)->create();
        $response = $this->get('admin/cungcap/addcungcap');
        $response->assertViewIs("admin.nhacungcap");
        $response->assertStatus(200);
        // return view('admin.edit',compact('loaihang','nhacungcap','sua'));
    }
      public function testgetList_NhaCungCap_data()
    {
        
    	$user= factory(Taikhoan::class)->make(['level' => 1]);
        $this->actingAs($user);
        $response = $this->get('admin/cungcap/addcungcap');
        $content = $response->getOriginalContent();
        $content = $content->getData();
        $count_cate =  (count($content['nhacungcap']->all()));
        if($count_cate >0 ){
        	$count_cate = true;
        }else{
        	$count_cate = false;
        }

        $this->assertTrue( $count_cate );
        $response->assertStatus(200);
    }

     public function test_SaveNhaCungCap()
    {
        
    	$user= factory(Taikhoan::class)->make(['level' => 1]);
        $this->actingAs($user);
        $response = $this->post('/admin/cungcap/addcungcap', [
            'TennhaCC' => 'myku123',
            'SDT' => 'myku123',
            'Diachi' => '3123123',
        ]);
      	$response->assertRedirect('admin/cungcap/addcungcap');
    }
}
