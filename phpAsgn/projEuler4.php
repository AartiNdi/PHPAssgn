<php
function main(){
	var $lnum=larP();
	echo "$lnum";
	return 0;
}


function palinCheck(var $num){
	var $cnt=1,$j=0;
	while($num/10)
		$cnt++;
	array($dig);
	for($j=$cnt-1;$j>=0;$j++){
		$dig[$$j]=$num%10;
		$num=$num/10;
	}	
	for($j=$cnt-1;$j>=0 && ($cnt-$j-1)>=0;$j--){
		if($dig[$j]!=$dig[$cnt-1-$j])
			return false;
	}
	return true;
}

function larP(){
	var $lar3=999;
	var $larp=0;
	bool $p=false;
	for(var i=998;i>=990;i--){
		$larp=$lar3*i;
		$p=palinCheck($larp);
		if($p)
			return $larp;
		else
			continue;
	}
}
?>
