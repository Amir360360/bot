<?php
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
define('API_KEY','5068138048:AAGRs3jj14GVtQEztPliQoIBknD3X3s-37o');//توکن
//-----------------------------------------------------------------------------------------
$telegram_ip_ranges = [
['lower' => '149.154.160.0', 'upper' => '149.154.175.255'], // literally 149.154.160.0/20
['lower' => '91.108.4.0',    'upper' => '91.108.7.255'],    // literally 91.108.4.0/22
];

$ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
$ok=false;

foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
    // Make sure the IP is valid.
    $lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
    $upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
    if ($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok=true;
}
if (!$ok) die("No spam ðŸ™ƒ");
//-----------------------------------------------------------------------------------------------
//functions
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
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
function sendmessage($chat_id,$text){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$text,'parse_mode'=>"html"]);
}

//Variables
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$chat_id1 = $message->forward_from->id;
$chat_id2 = $message->forward_from_chat->id;
$text = $message->text;
$tc = $message->chat->type;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$from_id = $message->from->id;
$first = $message->from->first_name;
$first1 = $message->forward_from->first_name;
$last = $message->from->last_name;
$last1 = $message->forward_from->last_name;
$username = $message->from->username;
$username1 = $message->forward_from->username;
$username2 = $message->forward_from_chat->username;
$first2 = $update->callback_query->message->chat->first_name;
$last2 = $update->callback_query->message->chat->last_name;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$kanal = "channel";//ایدی چنل
$tch = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$kanal&user_id=".$from_id))->result->status;
$message_id2 = $update->callback_query->message->message_id;
$photo = $message->photo;
$tedadmsg = $update->message->message_id;
$text2 = str_replace(' ','+',$text);
$link = json_decode(file_get_contents("http://api.codebazan.ir/font/?text=$text2"),true);
$link2 = $link["result"];
$and1 = $link2['1'];
$and2 = $link2['2'];
$and3 = $link2['3'];
$and4 = $link2['4'];
$and5 = $link2['5'];
$and6 = $link2['6'];
$and7 = $link2['7'];
$and8 = $link2['8'];
$and9 = $link2['9'];
$and10 = $link2['10'];
$and11 = $link2['11'];
$and12 = $link2['12'];
$and13 = $link2['13'];
$and14 = $link2['14'];
$and15 = $link2['15'];
$and16 = $link2['16'];
$and17 = $link2['17'];
$and18 = $link2['18'];
$and19 = $link2['19'];
$and20 = $link2['20'];
$and21 = $link2['21'];
$and22 = $link2['22'];
$and23 = $link2['23'];
$and24 = $link2['24'];
$and25 = $link2['25'];
$and26 = $link2['26'];
$and27 = $link2['27'];
$and28 = $link2['28'];
$and29 = $link2['29'];
$and30 = $link2['30'];
$and31 = $link2['31'];
$and32 = $link2['32'];
$and33 = $link2['33'];
$and34 = $link2['34'];
$and35 = $link2['35'];
$and36 = $link2['36'];
$and37 = $link2['37'];
$and38 = $link2['38'];
$and39 = $link2['39'];
$and40 = $link2['40'];
$and41 = $link2['41'];
$and42 = $link2['42'];
$and43 = $link2['43'];
$and44 = $link2['44'];
$and45 = $link2['45'];
$and46 = $link2['46'];
$and47 = $link2['47'];
$and48 = $link2['48'];
$and49 = $link2['49'];
$and50 = $link2['50'];
$and51 = $link2['51'];
$and52 = $link2['52'];
$and53 = $link2['53'];
$and54 = $link2['54'];
$and55 = $link2['55'];
$and56 = $link2['56'];
$and57 = $link2['57'];
$and58 = $link2['58'];
$and59 = $link2['59'];
$and60 = $link2['60'];
$and61 = $link2['61'];
$and62 = $link2['62'];
$and63 = $link2['63'];
$and64 = $link2['64'];
$and65 = $link2['65'];
$and66 = $link2['66'];
$and67 = $link2['67'];
$and68 = $link2['68'];
$and69 = $link2['69'];
$and70 = $link2['70'];
$and71 = $link2['71'];
$and72 = $link2['72'];
$and73 = $link2['73'];
$and74 = $link2['74'];
$and75 = $link2['75'];
$and76 = $link2['76'];
$and77 = $link2['77'];
$and78 = $link2['78'];
$and79 = $link2['79'];
$and80 = $link2['80'];
$and81 = $link2['81'];
$and82 = $link2['82'];
$and83 = $link2['83'];
$and84 = $link2['84'];
$and85 = $link2['85'];
$and86 = $link2['86'];
$and87 = $link2['87'];
$and88 = $link2['88'];
$and89 = $link2['89'];
$and90 = $link2['90'];
$and91 = $link2['91'];
$and92 = $link2['92'];
$and93 = $link2['93'];
$and94 = $link2['94'];
$and95 = $link2['95'];
$and96 = $link2['96'];
$and97 = $link2['97'];
$and98 = $link2['98'];
$and99 = $link2['99'];
$and100 = $link2['100'];
$and101 = $link2['101'];
$and102 = $link2['102'];
$and103 = $link2['103'];
$and104 = $link2['104'];
$and105 = $link2['105'];
$and106 = $link2['106'];
$and107 = $link2['107'];
$and108 = $link2['108'];
$and109 = $link2['109'];
$and110 = $link2['110'];
$and111 = $link2['111'];
$and112 = $link2['112'];
$and113 = $link2['113'];
$and114 = $link2['114'];
$and115 = $link2['115'];
$and116 = $link2['116'];
$and117 = $link2['117'];
$and118 = $link2['118'];
$and119 = $link2['119'];
$and120 = $link2['120'];
$and121 = $link2['121'];
$and122 = $link2['122'];
$and123 = $link2['123'];
$and124 = $link2['124'];
$and125 = $link2['125'];
$and126 = $link2['126'];
$and127 = $link2['127'];
$and128 = $link2['128'];
$and129 = $link2['129'];
$and130 = $link2['130'];
$and131 = $link2['131'];
$and132 = $link2['132'];
$and133 = $link2['133'];
$and134 = $link2['134'];
$and135 = $link2['135'];
$and136 = $link2['136'];
$and137 = $link2['137'];
$and138 = $link2['138'];
	if (strlen($text) <50){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"فونت متن شما بصورت زیر است :
$and1
$and2
$and3
$and4
$and5
$and6
$and7
$and8
$and9
$and10
$and11
$and12
$and13
$and14
$and15
$and16
$and17
$and18
$and19
$and20
$and21
$and22
$and23
$and24
$and25
$and26
$and27
$and28
$and29
$and30
$and31
$and32
$and33
$and34
$and35
$and36
$and37
$and38
$and39
$and40
$and41
$and42
$and43
$and44
$and45
$and46
$and47
$and48
$and49
$and50
$and51
$and52
$and53
$and54
$and55
$and56
$and57
$and58
$and59
$and60
$and61
$and62
$and63
$and64
$and65
$and66
$and67
$and68
$and69
$and70
$and71
$and72
$and73
$and74
$and75
$and76
$and77
$and78
$and79
$and80
$and81
$and82
$and83
$and84
$and85
$and86
$and87
$and88
$and89
$and90
$and91
$and92
$and93
$and94
$and95
$and96
$and97
$and98
$and99
$and100
$and101
$and102
$and103
$and104
$and105
$and106
$and107
$and108
$and109
$and110
$and111
$and112
$and113
$and114
$and115
$and116
$and117
$and118
$and119
$and120
$and121
$and122
$and123
$and124
$and125
$and126
$and127
$and128
$and129
$and130
$and131
$and132
$and133
$and134
$and135
$and136
$and137
$and138
",
]);
}
elseif($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
⚠️ لطفا یک لحظه صبر کنید !

شما برای استفاده و حمایت از ما باید در کانال زیر عضو شوید 👇🏻

▫️@$kanal             ▫️@$kanal
▪️@$kanal             ▪️@$kanal

سپس بر روی ( /start ) یا
( ✅ عضو شدم ✅ ) کلیک کنید.
", 'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'💠 عضویت در کانال 💠','url'=>"https://t.me/$kanal"]],
[['text'=>'✅ عضو شدم ✅','url'=>"https://t.me/$userbot?start"]],
]])]);return false;}
//========
if($tc == 'private' and $text == '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'سلام خوش آمدید
لطفا ابتدا متنی را که می‌خواهید فونت دار کنید بفرستید',
'parse_mode'=>"Markdown"]);
}
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
if(file_exists(error_log))
	unlink(error_log);
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
?>