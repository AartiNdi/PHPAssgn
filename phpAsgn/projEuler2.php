<php

function sum_Fibo(){
	var $sum=0,$i=0;
	var const $UL=4E6;
	var ar[]={1,2,3};
	while(ar[3]<UL){
		ar[0]=ar[1];
		ar[1]=ar[2];
		ar[2]=ar[0]+ar[1];
		if(ar[2]%2==0)
			$sum=$sum+ar[2];
	}
	return $sum;

function main(){
	int s=sum_Fibo();
	echo "sum";
	return 0;
}
?>
