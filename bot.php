<?php
error_reporting(0);
if(!file_exists('admin.json')){
$token = readline('Enter Token : ');
$id = readline('Enter Id : ');
$save['info'] = [
'token'=>$token,
'id'=>$id
];
file_put_contents('admin.json',json_encode($save),64|128|256);
}
function save($array){
file_put_contents('admin.json',json_encode($array),64|128|256);
}
$token = json_decode(file_get_contents('admin.json'),true)['info']['token'];
$id = json_decode(file_get_contents('admin.json'),true)['info']['id'];
include 'index.php';
if($id == ""){
echo "Error Id";
}
try {
 $callback = function ($update, $bot) {
  global $id;
  if($update != null){
   if(isset($update->message)){
    $message = $update->message;
    $chat_id = $message->chat->id;   
    $name = $message->from->first_name;
    $message_id = $message->message_id;
    $text = $message->text;
$admin = json_decode(file_get_contents('admin.json'),true);
if($text == '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*
- Hello And Welcome ( $name ) .
- To Your Insta Up Followers Sender Bot .
- Please Send Me Your InstaUpId:InstagramId !! .
*",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- اللغه العربية .','callback_data'=>'ar']],
]
])
]);
}
if($text != '/start'){
$exp = explode(":",$text);
$swap = follo($exp['0'],$exp['1']);
$suii = explode(" ",$swap);
$ses4 = $suii['1'];
if($suii['0'] == 'true'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- Done Send Followers Count : $ses4 . \n - InstaUp Id : $uid . \n - Your Instagram Id : $uidx . \n - Dev : @CP_1N .",
]);
}elseif($swap == 'false'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"Error With Sending !! ",
]);
}
}
}
if(isset($update->callback_query)) {
    $chat_id1 = $update->callback_query->message->chat->id;
    $mid = $update->callback_query->message->message_id;
    $data = $update->callback_query->data;
    $message = $update->message;
    $chat_id = $message->chat->id;
    $text = $message->text;
    $name = $update->callback_query->from->first_name;
if($data == 'ar'){
bot('editMessageText',[
'chat_id'=>$chat_id1,
'message_id'=>$mid,
'text'=>"*
- اهلاً بك ( $name )
- في بوت رشق متابعين عن طريق انستا اب .
- رجاءً قم ب ارسال instaupid:instagramid .
*",
'parse_mode'=>'markdown',
]);
}
}
      }
    };
         $bot = new EzTG(array('throw_telegram_errors'=>true,'token' => $token, 'callback' => $callback));
  }
    catch(Exception $e){
 echo $e->getMessage().PHP_EOL;
 sleep(1);
}


