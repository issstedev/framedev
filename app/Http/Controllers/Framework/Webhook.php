<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Helpme;

class Webhook extends Controller
{
  public function __construct()
  {
      $this->middleware('permiso:Webwook|index', ['only' => ['index']]);
  }
  static public function index(){}

  static public function syncUser(){

      $secret=env('SYSTEM_KEY');
      $system_id=env('SYSTEM_ID');
  		$webhook_signature = $_SERVER ['HTTP_SYSTEMVERIFY_SIGNATURE'];
      $remote_ip = $_SERVER ['HTTP_IP'];
  		$body = file_get_contents('php://input');
  		$expected_signature = hash_hmac( 'sha256', $body, $secret, false );
  		if($webhook_signature == $expected_signature) {


          /*
          
          $data = json_decode($body);
          $data->usuario;
          $data->password;
          $loginData = Login::logearClienteRemoto($data->usuario,$data->password,$remote_ip,$system_id);
          $loginData = json_encode($loginData);
          header($loginData);

          */
  			header("Status: 200 OK!");

  		} else {
  			header("Status: 401 Not authenticated".$app_secret);
  		}

  }
}
