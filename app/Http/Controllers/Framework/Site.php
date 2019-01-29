<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Helpme;

class Site extends Controller
{
  public function index()
  {

        $postdata='{"created_at": "2017-07-16T21:45:17.458000", "event_data": {"campaign": {"description": "Invite your friends to join us.", "id": 12345, "name": "Test Click Campaign"}, "click": {"created_at": "2017-07-16T21:45:17.458000", "ip": "127.0.0.1", "referring_url": null, "social_name": null}, "contact": {"email": "test@example.com", "first_name": "Test", "id": 1234567, "internal_id": null, "last_name": "Contact"}, "url": {"short_code": "dcBb"}}';
        $secret='MY_SECRET';
        $key = 'j23jk4h23897323';
        $sign = hash_hmac('sha256', $postdata, $secret, false);
        $headers = array(
           'systemverify-Signature:'.$sign,
           'Apiauth-Key:'.$key
        );
        $curl = null;
        $curl = curl_init('http://10.1.25.41/webhook/auth');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);

        $res = curl_exec($curl);
        $data = explode("\n",$res);
        $status = $data[0];
        $post = $data[9];
        return view('site/plantilla/index')->with('res', $post);
  }
  public function site()
  {
      return view('site/plantilla/index');
  }
}
