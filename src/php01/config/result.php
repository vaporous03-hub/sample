<?php
// もし、$_POST['name'] が「空っぽじゃなかったら」実行する
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    print "私の名前は、" . $name . "";
} else {
    print "名前を入力して送信してください。";
}
if (isset($_POST['set'])) {
    $set = htmlspecialchars($_POST['set'], ENT_QUOTES);
    print "ご希望の商品は、" . $set . "";
} else {
    print "ご希望の商品を入力してください。";
}
if (isset($_POST['number'])) {
    $number = htmlspecialchars($_POST['number'], ENT_QUOTES);
    print "注文数は、" . $number . ;
} else {
    print "注文数を入力して送信してください。";
}