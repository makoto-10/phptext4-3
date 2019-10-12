<?php
//練習問題１
echo '<meta charset="utf-8">';

$r = 50;
$a = 30;
$b = 80;
$c = 100;

if($r >= $a && $r < $b){
    echo '普通';
}elseif($r >= $b){
    echo '優秀';
}elseif($r < $a){
    echo '赤点';
}elseif($r > $c || $r < 0){
    echo 'エラー';
}


?>

<?php
//練習問題２
echo '<meta charset="utf-8">';

$a = '1月';
$b = '2月';
$c = '3月';
$d = '4月';
$e = '5月';
$f = '6月';
$g = '7月';
$h = '8月';
$i = '9月';
$j = '10月';
$k = '11月';
$l = '12月';

switch($a){
    case '1月':
        echo '1月の誕生石はガーネットです';
        break;
    case '2月':
        echo '2月の誕生石はアメジストです';
        break;
    case '3月':
        echo '3月の誕生石はアクアマリン・ブラッドストーン・サンゴです';
        break;
    case '4月':
        echo '4月の誕生石はダイヤモンドです';
        break;
    case '5月':
        echo '5月の誕生石はエメラルド・ヒスイです';
        break;
    case '6月':
        echo '6月の誕生石はムーンストーン・パールです';
        break;
    case '7月':
        echo '7月の誕生石はルビーです';
        break;
    case '8月':
        echo '8月の誕生石はペリドット・サードニクスです';
        break;
    case '9月':
        echo '9月の誕生石はサファイアです';
        break;
    case '10月':
        echo '10月の誕生石はオパール・トルマリンです';
        break;
    case '11月':
        echo '11月の誕生石はトパーズ・シトリンです';
        break;
    case '12月':
        echo '12月の誕生石はトルコ石・ラピスラズリ・タンザナイトです';
        break;
}
?>