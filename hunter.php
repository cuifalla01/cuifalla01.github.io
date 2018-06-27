<?
$d= mb_strlen($c,'utf-8'); //$c是我們輸入過來的假名字串，要先看這串字元有多長
for ($i=0;$i<$d;$i++){//依照字串長度跑迴圈
	$e=mb_substr($c,$i,2,'utf8');//先抓兩個字元
	for ($j=1;$j<=212;$j++){//將字串與資料庫比對
		if($e==$a[$j]){//$a存放日文的假名
			echo "<img src=hunter_word/".$b[$j].".jpg>";//是拗音則輸出
			$f=1;//$f=1就不改抓一個字元
		}			
	}
	if($f!=1){//$f不等於1，所以改抓一個字元
		for ($j=1;$j<=212;$j++){
			if(mb_substr($c,$i,1,'utf8')==$a[$j]){	
				echo "<img src=hunter_word/".$b[$j].".jpg>";//輸出非拗音的字元
			}			
		}
	}
	$f=0;//關閉單一字元的判斷式
}
?>