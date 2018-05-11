<?php
namespace app\index\Controller;
use think\Controller;
class Index extends Controller{
    public function index(){
        return $this->fetch();
        // echo "hello world";
        //return "123";
        //return $this->display();
        
    }
}
// class Admin extends Controller{
// 	public function admin(){
// 		return $this->fetch();
// 	}
// }