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
use DB,Cart;
use App\Taikhoan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
class WelcomeControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testgiaodientrangchu()
    {
        $response = $this->get('/CHshop');
        $response->assertStatus(200);
        $response->assertViewIs("user.index");
    }
    public function test_data_giaodientrangchu()
    {
        $response = $this->get('/CHshop');
        // lấy all dữ liệu
        $content = $response->getOriginalContent();
        $content = $content->getData();
        // kiem tra xem có dữ liệu bán chạy
        $count_banchay =  (count($content['banchay']->all()));
        if($count_banchay > 0){
            $count_banchay = 1;
        }
        $this->assertEquals(1, $count_banchay );
         // kiem tra xem có dữ liệu product
        $count_product =  (count($content['product']->all()));
        if($count_product > 0){
            $count_product = 1;
        }
        $this->assertEquals(1, $count_product );
         // kiem tra xem có dữ liệu moinhat
        $count_moinhat =  (count($content['moinhat']->all()));
        if($count_moinhat > 0){
            $count_moinhat = 1;
        }
        $this->assertEquals(1, $count_moinhat );
        $response->assertStatus(200);
    }
    public function testdangkithongtin()
    {
        $response = $this->post('/dangki', [
            'ten' => 'myku123',
            'gt' => 'myku123',
            'dc' => '3123123',
            'sdt' => '222',
            'tk' => 'mydaica',
            'mk' => '12344',
            'Gioitinh' => ''     
        ]);
      
        //this works
      $response->assertRedirect('CHshop');
        //this fails 
        $response->assertStatus(302);
    }
    public function testpostdangki_sai()
    {
        $response = $this->post('/dangki', [
            'ten' => 'myku123',
            'gt' => 'myku123',
            'dc' => '3123123',
            'sdt' => '222',
            'tk' => '',
            'mk' => '',
            'Gioitinh' => ''     
        ]);
      
        //this works
      $response->assertRedirect('dangki');
        //this fails 
        $response->assertStatus(302);
    }
    public function testviewdangki()
    {
        $response = $this->get('dangki');
        $response->assertStatus(200);
        $response->assertViewIs("user.dangki")->assertSee('Đăng ký tài khoản!');
    }
  
   
    // public function testpostthongtin()
    // {
    //     $user = Taikhoan::find(49);
    //     $result = $user->update([
    //         'email' => 'admin11@test.com',
    //     ]);
    //     $this->assertEquals(true, $result);
    // }
    public function testDetele()
    {
        $user = Taikhoan::create([
            'TaiKhoan' => '2222',
            'password' => '2222222222222',
        ]);
        $result = $user->delete();
        $this->assertEquals(true, $result);
    }
}
