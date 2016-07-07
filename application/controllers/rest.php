<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
$users = [
            ['id' => 1, 'name' => 'sen', 'pass' => 'sen', 'email' => 'phamthihuongsen0608@gmail.com', 
			'about' => "Hi, my name's Sen. Im a senior student at University Of Information Technology. My major is Information System.
            I'm a person who have a high sense of responsibility and I alway want to learn and research new things. 
			If I have an opportunity to attend your company, i will try my best to do my job. If not, i will try again ^^. Hope to see you soon!"],
			['id' => 2, 'name' => 'wsgroup', 'pass' => 'proudtobehere', 'email' => 'w&s@mail.com', 'about' => 'W&S Company']
        ];
class Rest extends CI_Controller {
	 function __construct()
    {
        parent::__construct();
    }
	public function index()
    {
		$this->load->view('welcome');
	}
	public function get($user=NULL)
    {
       
		$data = Array();
		//$user = $this->get('user');
		$user = $this->uri->segment(4);
        if ($user!=NULL){
			$data['content'] = 'pass required';
			$data['userName'] = $user;
			$key = array_search($user, array_column($GLOBALS['users'], 'name'));
			$data['getuser'] = 'one';
		}
		else{
			$data['content'] = $GLOBALS['users'];
			$data['getuser'] = 'all';
		}
		$this->load->view('users',$data);
    }
	public function getpassword($pass){
		$userName = $_POST['userName'];
		$key = array_search($userName, array_column($GLOBALS['users'], 'name'));
		$password = $GLOBALS['users'][$key]['pass'];
		$data = '';
		if($userName == 'wsgroup'){
			if($pass == 'proudtobehere'){
				$data['content'] = $GLOBALS['users'][$key];
			}
			else{
				$data['content'] = 'false';
			}
		}
		else{
			if($pass == $password){
				$data['content'] = $GLOBALS['users'][$key];
			}
			else{
				$data['content'] = 'false';
			}
		}
		echo json_encode($data);
	}
	public function post($user=NULL)
    {
		$user = $this->uri->segment(3);
        if($user){
			if(isset($_POST['user_name'])){
				$count = count($GLOBALS['users']);
				$id = end($GLOBALS['users'])['id']+1;
				$GLOBALS['users'][$count]['name'] = $_POST['user_name'];
				$GLOBALS['users'][$count]['email'] = $_POST['email'];
				$GLOBALS['users'][$count]['pass'] = $_POST['password'];
				$GLOBALS['users'][$count]['about'] = $_POST['about'];
				$exist = array_search($id,array_column($GLOBALS['users'],'id'));
				while($exist){
					$id=$id+1;
				}
				$GLOBALS['users'][$count]['id']=$id;
				$data['getuser']='all';
				$data['content'] = $GLOBALS['users'];
				$this->load->view('users',$data);
			}
			else{
				$this->load->view('register');
			}
		}
		else{
			$this->load->view('register');
		}
		
    }
	public function put($user=NULL)
    {
		$user = $this->uri->segment(4);
        if($user!=NULL){
			$key = array_search($user,array_column($GLOBALS['users'],'name'));
			if(isset($_POST['user_name'])){
				$name = $GLOBALS['users'][$key]['name'];
				$about = $GLOBALS['users'][$key]['about'];
				$email = $GLOBALS['users'][$key]['email'];
				$pass = $GLOBALS['users'][$key]['pass'];
				if($_POST['user_name']!=$name||$_POST['about']!=$about||$_POST['email']!=$email||$_POST['password']!=$pass){
					$GLOBALS['users'][$key]['name'] = $_POST['user_name'];
					$GLOBALS['users'][$key]['email'] = $_POST['email'];
					$GLOBALS['users'][$key]['pass'] = $_POST['password'];
					$GLOBALS['users'][$key]['about'] = $_POST['about'];
				}
				$data['getuser'] = 'one';
				$data['content'] = $GLOBALS['users'][$key];
				$this->load->view('users',$data);
			}
			else{
				$data['content'] = $GLOBALS['users'][$key];
				$this->load->view('update',$data);
			}
		}
		
    }
}
