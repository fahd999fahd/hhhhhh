<?php
error_reporting(0);
function RandomNumber($length){
    $str="";
    for($i=0;$i<$length;$i++){
    $str.=mt_rand(0,9);
    }
    return $str;
    }
    
    
    function rando($length) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
function follo($uidx,$uid){
$x16=rando(16);
$x40=rando(40);

$ts=time();
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';


$url1='https://instaup.marsapi.com/get_likes/user/coins';



$data0='market=Bazaar&user_id='.$uid.'&iad='.$x40.'&user_name='.$name;

$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;


$access=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$uid);


$headers1=['market: Bazaar',
'access: '.$access,
'lng: en',
'api_key: ABCXYZ123TEST',
"Nagent: null/02:00:00:00:00:00/'.$ts.'/$x16/null/$x40",
'cnt: unknown',
'version: 51',
'pkg: f2c6d7a5b030a1542f7eb589d5013340',
'aid: '.$x40,
'Content-Type: application/x-www-form-urlencoded',
'Host: instaup.marsapi.com',
'Connection: Keep-Alive',
'Accept-Encoding: gzip',
'User-Agent: okhttp/3.12.1',
'X-Forwarded-For: '.$ipz.''];


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
	   curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	$output1= curl_exec ($ch);
	
	curl_close ($ch);

    $json1=json_decode($output1,true);
  $c=$json1['coins'];
  $c1 = $c / 4;
  $aapi = explode(".",$c1)['0'];
      $url0="https://instaup.marsapi.com/get_likes/order/follow";




$idx=$uid+3423;

$d=$idx.'ig';

$i='3rFz>|)VHl-w+5I0';




$k='#p0yJmVK/@($nX?#';
$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$k,OPENSSL_RAW_DATA,$i));
$tkv=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');


$dx=urlencode($dx);
 


$ll='https%3A%5C%2F%5C%2Finstagram.fccu3-1.fna.fbcdn.net%5C%2Fv%5C%2Ft51.2885-15%5C%2Fe35%5C%2Fs150x150%5C%2F264420143_435496831548995_8076441957316773167_n.jpg%3F_nc_ht%3Dinstagram.fccu3-1.fna.fbcdn.net%26_nc_cat%3D111%26_nc_ohc%3DvWrY6qsKOOAAX9ZgJLH%26edm%3DAPU89FABAAAA%26ccb%3D7-4%26oh%3D00_AT_GHVnpr10j1bCs8Dx5unohvTyp_1DgOtu8It7P_Nmpfw%26oe%3D61B616B1%26_nc_sid%3D86f79a';

 $data0='gift=0&order_count='.$aapi.'&user_id='.$uid.'&tokenV2='.$tkv.'&start_value=1700&media_url=%7B%22media_url%22%3A%22'.$ll.'%22%2C%22user_name%22%3A%22'.$fname.'%22%7D&order_id='.$uidx;

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $cc= curl_exec ($ch);
 curl_close ($ch);
  $json1=json_decode($cc,true);
  $c=$json1['status'];
  if($c == 'Successful'){
  return 'true '.$aapi.'';
} else {
 return 'false';
 }
 }
 
/*
function GUID(){
    if (function_exists('com_create_guid') === true){
        return trim(com_create_guid(), '{}');
    }
    }

*/

class EzTGException extends Exception
{
}
function bot($method,$datas=[]){
    global $token;
$url = "https://api.telegram.org/bot".$token."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}


class EzTG
{
    private $settings;
    private $offset;
    private $json_payload;
    public function __construct($settings, $base = false)
    {
        $this->settings = array_merge(array(
      'endpoint' => 'https://api.telegram.org',
      'token' => '1234:abcd',
      'callback' => function ($update, $EzTG) {
          echo 'no callback' . PHP_EOL;
      },
      'objects' => true,
      'allow_only_telegram' => true,
      'throw_telegram_errors' => true,
      'magic_json_payload' => false
    ), $settings);
        if ($base !== false) {
            return true;
        }
        if (!is_callable($this->settings['callback'])) {
            $this->error('Invalid callback.', true);
        }
        if (php_sapi_name() === 'cli') {
            $this->settings['magic_json_payload'] = false;
            $this->offset = -1;
            $this->get_updates();
        } else {
            if ($this->settings['allow_only_telegram'] === true and $this->is_telegram() === false) {
                http_response_code(403);
                echo '403 - You are not Telegram,.,.';
                return 'Not Telegram';
            }
            if ($this->settings['magic_json_payload'] === true) {
                ob_start();
                $this->json_payload = false;
                register_shutdown_function(array($this, 'send_json_payload'));
            }
            if ($this->settings['objects'] === true) {
                $this->processUpdate(json_decode(file_get_contents('php://input')));
            } else {
                $this->processUpdate(json_decode(file_get_contents('php://input'), true));
            }
        }
    }
    private function is_telegram()
    {
        if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { //preferisco non usare x-forwarded-for xk si può spoof
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        if (($ip >= '149.154.160.0' && $ip <= '149.154.175.255') || ($ip >= '91.108.4.0' && $ip <= '91.108.7.255')) { //gram'''s ip : https://core.telegram.org/bots/webhooks
            return true;
        } else {
            return false;
        }
    }
    private function get_updates()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->settings['endpoint'] . '/bot' . $this->settings['token'] . '/getUpdates');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        while (true) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, 'offset=' . $this->offset . '&timeout=10');
            if ($this->settings['objects'] === true) {
                $result = json_decode(curl_exec($ch));
                if (isset($result->ok) and $result->ok === false) {
                    $this->error($result->description, false);
                } elseif (isset($result->result)) {
                    foreach ($result->result as $update) {
                        if (isset($update->update_id)) {
                            $this->offset = $update->update_id + 1;
                        }
                        $this->processUpdate($update);
                    }
                }
            } else {
                $result = json_decode(curl_exec($ch), true);
                if (isset($result['ok']) and $result['ok'] === false) {
                    $this->error($result['description'], false);
                } elseif (isset($result['result'])) {
                    foreach ($result['result'] as $update) {
                        if (isset($update['update_id'])) {
                            $this->offset = $update['update_id'] + 1;
                        }
                        $this->processUpdate($update);
                    }
                }
            }
        }
    }
    public function processUpdate($update)
    {
        $this->settings['callback']($update, $this);
    }
    protected function error($e, $throw = 'default')
    {
        if ($throw === 'default') {
            $throw = $this->settings['throw_telegram_errors'];
        }
        if ($throw === true) {
            throw new EzTGException($e);
        } else {
            echo 'Telegram error: ' . $e . PHP_EOL;
            return array(
        'ok' => false,
        'description' => $e
      );
        }
    }
    public function newKeyboard($type = 'keyboard', $rkm = array('resize_keyboard' => true, 'keyboard' => array()))
    {
        return new EzTGKeyboard($type, $rkm);
    }
    public function __call($name, $arguments)
    {
        if (!isset($arguments[0])) {
            $arguments[0] = array();
        }
        if (!isset($arguments[1])) {
            $arguments[1] = true;
        }
        if ($this->settings['magic_json_payload'] === true and $arguments[1] === true) {
            if ($this->json_payload === false) {
                $arguments[0]['method'] = $name;
                $this->json_payload = $arguments[0];
                return 'json_payloaded'; //xd
            } elseif (is_array($this->json_payload)) {
                $old_payload = $this->json_payload;
                $arguments[0]['method'] = $name;
                $this->json_payload = $arguments[0];
                $name = $old_payload['method'];
                $arguments[0] = $old_payload;
                unset($arguments[0]['method']);
                unset($old_payload);
            }
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->settings['endpoint'] . '/bot' . $this->settings['token'] . '/' . urlencode($name));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arguments[0]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($this->settings['objects'] === true) {
            $result = json_decode(curl_exec($ch));
        } else {
            $result = json_decode(curl_exec($ch), true);
        }
        curl_close($ch);
        if ($this->settings['objects'] === true) {
            if (isset($result->ok) and $result->ok === false) {
                return $this->error($result->description);
            }
            if (isset($result->result)) {
                return $result->result;
            }
        } else {
            if (isset($result['ok']) and $result['ok'] === false) {
                return $this->error($result['description']);
            }
            if (isset($result['result'])) {
                return $result['result'];
            }
        }
        return $this->error('Unknown error', false);
    }
    public function send_json_payload()
    {
        if (is_array($this->json_payload)) {
            ob_end_clean();
            echo json_encode($this->json_payload);
            header('Content-Type: application/json');
            ob_end_flush();
            return true;
        }
    }
}
class EzTGKeyboard
{
    public function __construct($type = 'keyboard', $rkm = array('resize_keyboard' => true, 'keyboard' => array()))
    {
        $this->line = 0;
        $this->type = $type;
        if ($type === 'inline') {
            $this->keyboard = array(
        'inline_keyboard' => array()
      );
        } else {
            $this->keyboard = $rkm;
        }
        return $this;
    }
    public function add($text, $callback_data = null, $type = 'auto')
    {
        if ($this->type === 'inline') {
            if ($callback_data === null) {
                $callback_data = trim($text);
            }
            if (!isset($this->keyboard['inline_keyboard'][$this->line])) {
                $this->keyboard['inline_keyboard'][$this->line] = array();
            }
            if ($type === 'auto') {
                if (filter_var($callback_data, FILTER_VALIDATE_URL)) {
                    $type = 'url';
                } else {
                    $type = 'callback_data';
                }
            }
            array_push($this->keyboard['inline_keyboard'][$this->line], array(
        'text' => $text,
        $type => $callback_data
      ));
        } else {
            if (!isset($this->keyboard['keyboard'][$this->line])) {
                $this->keyboard['keyboard'][$this->line] = array();
            }
            array_push($this->keyboard['keyboard'][$this->line], $text);
        }
        return $this;
    }
    public function newline()
    {
        $this->line++;
        return $this;
    }
    public function done()
    {
        if ($this->type === 'remove') {
            return '{"remove_keyboard": true}';
        } else {
            return json_encode($this->keyboard);
        }
    }
}

