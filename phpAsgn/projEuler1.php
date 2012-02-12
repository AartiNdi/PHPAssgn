<php
function sum_th(){
	var $sum=0;
	var $i=0;
	for($i=1;$i<=333;$i++)
		$sum=$sum+3*$i;
	for($i=1;$i<=200;$i++)
		if((5*$i)%3==0)
			continue;
		else
			$sum=$sum+5*$i;
	return $sum;
	}
	
function main(){
	int s=sum_th();
	echo "$s";
	return 0;
}
	

?>
