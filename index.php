<?php
$arr1=["我祝大家都能金榜題名圓夢","希望你能在2026年6月考場上盡情揮灑汗水","用奮鬥舞出夏花之絢爛","在此期間","也許你將迎來你的18歲","在這個年紀","身上會有壹個不可戰勝的夏天","只願歷經千帆歸來時仍是少年","高考加油","願努力不負追夢人","立高誌遠","腳踏實地","刻苦鉆研","勤學苦思","穩定心態","不餒不棄","全力以赴","奪取勝利","祝高考成功","祝你前程似錦","加油","高考順利","心態平和","壹舉奪魁","相信你會考出最好的成績","加油啊","拿個狀元","不必太糾結當下","也不必太憂慮未來","當你經歷過壹些事情的時候","眼前的風景已經和從前不壹樣了","不要只因壹次挫敗","就忘記你原先決定想達到的遠方","祝我們高考順利","我們的青春會永遠熱淚盈眶","希望你考試順利","在哪個蟬鳴不止的夏天","奔跑的少年都能金榜題名","壹舉高中","熬過最黑暗的日子","接下來會有壹個個的好消息向你砸來","我們終會上岸","陽光萬裏","希望你的高考成績","期待你高考時的超常發揮","高考後的欣喜若狂","祝大家都能金榜題名圓夢","蟾宮折桂","乘風破浪","願每壹位高考生都有你們的星辰大海","祝學長學姐們高考加油","金榜題名","人生","從來不只壹場考試","你","只管向前","希望在某壹個夏日的午後","無比愜意","當然啦","祝你拿到滿意的高考成績","高考加油啊","祝高考生們6月高考順利","度過這個美好的高三生活","在7月滿意收到喜歡學校的錄取通知","高考上岸","我也是高考生","壹起加油","希望你能夠在最好的年紀做最好的自己","希望各位都能考到心儀的大學","你要相信奇跡","因為你就是那個奇跡","希望你們考上心儀的大學","高考大捷","乾坤未定","你我皆是黑馬","我們總要忍受壹段日子","才能真正成為自己的光","我們都是最棒的","前途無量","寶貝們","炎炎夏日","你的無愧成績","加油吧","迎接新生的考生們","讓我們沖刺前進吧","希望你考個好成績","親愛的陌生人","很高興能為你寫下祝福","希望你考試的時候不要緊張","相信自己","希望你高考順利","加油,陌生人","你努力的樣子真的很迷人","壹路以來的所有堅持","都將在此刻綻放","不負努力","不留遺憾","不畏考驗","奔向山高海闊的明天","我們既然預謀已久","最終必會得償所願","天再熱","熱不過心","有信心","壹切皆有可能","鵬程萬裏今朝始","宏圖大展合法時","十年寒窗奮展翅","豪情淩雲遂壯誌","書山勤磨劍鋒利","學海苦遊花香襲","寒窗苦讀","今朝場上試","展翅正當時","壯誌在胸","前程鋪錦繡","豪情不改","未來倍精彩","高考日","願你昂首向前沖","壹舉實現心中夢","祝君高考題金榜","前程似錦福迢遞","希望結果比你預想的更好壹點","希望你是六月的風穿過窄窄的峽谷","天地開朗暢快走四方","臨近高考","相信你也非常緊張","不過","今天","我想告訴你的是: 請相信自己","努力了便好","高考沒有想象的那麽可怕","或許就像普通的壹次模擬考","你要做的就是相信自己","調整自己的心態","以最好的狀態備戰高考","希望你在這個蟬鳴不止的盛夏","落筆無悔","希望高考成績如同夏日壹樣耀眼","高考順利上岸","人生最大的遺憾就是遺憾過去的遺憾","咬緊牙關堅持最後的堅持","人定勝天","希望你能金榜題名","成功上岸","祝你們考上理想的大學","帶著夢想遠航吧","上岸吧別總是漂泊","驕陽正好","蟬聲不斷","我趴在堆滿書籍的課桌上朝窗外望去","陽光很好","灑於每個角落照","亮著少年們的風華正茂的青春","希望你的成績可以照亮整個夏天","帶著你的期許去見從未見過的風景","也祝大家圓圓滿滿","取得理想成績","在九月奔赴下壹個書海","夜色難免黑涼","前行必有曙光","2026高考必勝","你是最棒的不要放棄","祝願你們鯉躍龍門、金榜題名"];//1183828269种情况
$randomKeys = array_rand($arr1, rand(3, 5));
$selectedElements = array(); 
foreach ($randomKeys as $key) {
    $selectedElements[] = $arr1[$key]; 
$says =  implode(', ', $selectedElements)."! "; 
}
$school_info = ["河北", "山西", "黑龍江", "吉林", "遼寧", "江蘇", "浙江", "安徽", "福建", "江西", "山東", "河南", "湖北", "湖南", "廣東", "海南", "四川", "貴州", "雲南", "陜西", "甘肅", "青海", "內蒙古", "廣西", "西藏", "寧夏", "新疆", "北京", "天津", "上海", "重慶", "南京"];
$school_info = $school_info[array_rand($school_info)];
$relationship_array = array("學長", "學姐", "學妹", "學哥", "學弟", "老師"); 
$random_index = rand(0, count($relationship_array) - 1);
$relationship = $relationship_array[$random_index];
function generateName($length) {
    $consonants = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $name = '';
    $num_vowels = 0;
    for ($i = 0; $i < $length; $i++) {
        if ($i % 2 == 0) {
            $name .= $consonants[array_rand($consonants)];
        } else {
            $name .= $vowels[array_rand($vowels)];
            $num_vowels++;
        }
    }
    if ($num_vowels <= 1) {
        for ($i = strlen($name) - 1; $i >= 0; $i--) {
            if (in_array($name[$i], $consonants)) {
                $name[$i] = $vowels[array_rand($vowels)];
                break;
            }
        }
    }

    return ucfirst($name);
} 
$name= generateName(rand(4,8));
$text = $says."～来自{$school_info}的{$relationship}{$name}";
/*
$fontFile = '1.ttf';
$fontSize = 43;
$angle = 0;
$padding = 10;
$textSize = imagettfbbox($fontSize, $angle, $fontFile, $text);
$canvasWidth = $textSize[2] - $textSize[0] + $padding * 2;
$canvasHeight = $textSize[3] - $textSize[5] + $padding * 2;
$canvas = imagecreatetruecolor($canvasWidth, $canvasHeight);
$backgroundColor = imagecolorallocate($canvas, 255, 255, 255);
imagefill($canvas, 0, 0, $backgroundColor);
$textColor = imagecolorallocate($canvas, 0, 0, 0);
imagettftext($canvas, $fontSize, $angle, $padding, $fontSize + $padding, $textColor, $fontFile, $text);
header('Content-Type: image/png');
imagepng($canvas);
imagedestroy($canvas);
*/
if($_GET["from"]=="fromwallpaper") $imageaa = "Temp_gkfu_wallpaper.png"; else $imageaa = "Temp_gkfu.png";
$image = imagecreatefrompng($imageaa);
$point1 = array(108, 1078);
$point2 = array(108, 1350);
$point3 = array(696, 1350);
$point4 = array(696, 1078);
if($_GET["from"]=="fromwallpaper"){
$point1 = array(148, 608);
$point2 = array(148, 979);
$point3 = array(736, 979);
$point4 = array(736, 608);
//$points = array($point1[0], $point1[1], $point2[0], $point2[1], $point3[0], $point3[1], $point4[0], $point4[1]);
//imagepolygon($image, $points, 4, $textColor); 
$text = "      >高考語錄<
".$text;
}
$backgroundColor = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);
$fontFile = 'Temp_1.ttf';
$fontSize = 29;
$angle = 0;
$padding = 10;
$textLines = explode("\n", wordwrap($text, 20, "\n"));


$lineHeight = $fontSize + $padding;
$textHeight = count($textLines) * $lineHeight;

$textPosX = $point1[0] + 10;
$textPosY = $point1[1] + ($point2[1] - $point1[1] - $textHeight) / 2 + $fontSize;

foreach ($textLines as $line) {
    $textSize = imagettfbbox($fontSize, $angle, $fontFile, $line);
    $textWidth = $textSize[2] - $textSize[0];
    $textHeight = $textSize[3] - $textSize[5];
    imagettftext($image, $fontSize, $angle, $textPosX, $textPosY, $textColor, $fontFile, $line);
    $textPosY += $lineHeight;
}


$cz = array("〇","壹","贰","叁","肆","伍","陆","柒","捌","玖");
for ($i=0; $i < strlen(date("Y")); $i++) {$Year .= $cz[date("Y")[$i]];}$Year .= "年";
for ($i=0; $i < strlen(date("n")); $i++) {$Year .= $cz[date("n")[$i]];}$Year .= "月";
for ($i=0; $i < strlen(date("j")); $i++) {$Year .= $cz[date("j")[$i]];}$Year .= "日";
$text = $Year." 禮拜".array("天","壹","贰","叁","肆","伍","陆")[date("w")];
$point1 = array(171, 47);
$point2 = array(614, 47);
$point3 = array(614, 102);
$point4 = array(529, 102);
$fontSize = 40;
if($_GET["from"]=="fromwallpaper"){
$point1 = array(171, 121);
$point2 = array(614, 121);
$point3 = array(614, 176);
$point4 = array(529, 176);
$fontSize = 36;
}

$fontFile = 'Temp_1.ttf';
$angle = 0;
$textSize = imagettfbbox($fontSize, $angle, $fontFile, $text);
$textWidth = $textSize[2] - $textSize[0];
$textHeight = $textSize[3] - $textSize[5];
$textPosX = ($point1[0] + $point2[0] - $textWidth) / 2 +6;
$textPosY = ($point1[1] + $point3[1] - $textHeight) / 2 + $fontSize;
imagettftext($image, $fontSize, $angle, $textPosX, $textPosY, $textColor, $fontFile, $text);



$textColor = imagecolorallocate($image, 255, 0, 0);
$point1 = array(270, 607);
$point2 = array(529, 607);
$point3 = array(270, 717);
$point4 = array(529, 717);
if($_GET["from"]=="fromwallpaper"){
$point1 = array(270, 445);
$point2 = array(529, 445);
$point3 = array(270, 592);
$point4 = array(529, 592);
}
$fontFile = 'Temp_SB.ttf';
$fontSize = 80;
$angle = 0;
$text = floor((1780761600 - time()) / 86400);
if($text<0)$text=0;
$textSize = imagettfbbox($fontSize, $angle, $fontFile, $text);
$textWidth = $textSize[2] - $textSize[0];
$textHeight = $textSize[3] - $textSize[5];

$textPosX = ($point1[0] + $point2[0] - $textWidth) / 2 ;
$textPosY = ($point1[1] + $point3[1] - $textHeight) / 2 + $fontSize;

imagettftext($image, $fontSize, $angle, $textPosX, $textPosY, $textColor, $fontFile, $text);


header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
