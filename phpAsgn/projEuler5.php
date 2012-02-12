<php

var main(){
	var $pro=minPro();
	cout<<$pro;
	return 0;
}

var change(var $num[],var $n){
	for(var $j=2;$j<$n/2;$j++)
		if($n%$j==0)
			$num[$i]=true;
}

function check(var $num[]){
	for(var $i=0;$i<21;$i++)
		if($num[$i]==false)
			return 0;
		else
			continue;
}

var minPro(){
	var $pro=1;
	var $num[21];
	for($i=0;$i<21;$i++)
		$num[$i]=false;
	$num[1]=true;
	for($i=20;$i>=0;$i++){
		if($i>10)
			{
			if($num[$i]==false)
				{
					$pro=$pro*$i;
					change($num,$i);
				}	
			}	
		if(check($num))
			return $pro;
	}
}

?>
