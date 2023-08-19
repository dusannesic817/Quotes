<?php
/// Random za prijateljstvo

$putanja=__DIR__."/prijateljstvo.txt";

$data=file($putanja);
$nizCitati=[];
$nizAutori=[];


for($i=0; $i<count($data); $i++){
    if($i%2==0){
        $citati=$data[$i];
        $nizCitati[]=$citati;
    }else{
        $autori=$data[$i];
        $nizAutori[]=$autori;
    }
}


$n=count($nizCitati);

$k=rand(0,$n-1);
$l=rand(0,$n-1);
$m=rand(0,$n-1);





$randomPrijateljstvo1="$nizCitati[$k]"."<br>"."$nizAutori[$k]";
$randomPrijateljstvo2="$nizCitati[$l]"."<br>"."$nizAutori[$l]";
$randomPrijateljstvo3="$nizCitati[$m]"."<br>"."$nizAutori[$m]";

/*
echo "$randomPrijateljstvo1 <br>";
echo "$randomPrijateljstvo2 <br>";
echo "$randomPrijateljstvo3 ";

echo "<hr>";
*/

//random za motivaciju
$putanja=__DIR__."/motivacija.txt";

$data=file($putanja);
$nizCitati=[];
$nizAutori=[];

for($i=0; $i<count($data); $i++){
    if($i%2==0){
        $citati=$data[$i];
        $nizCitati[]=$citati;
    }else{
        $autori=$data[$i];
        $nizAutori[]=$autori;
    }
}


$n=count($nizCitati);

$k=rand(0,$n-1);
$l=rand(0,$n-1);
$m=rand(0,$n-1);





$randomMotivacija1="$nizCitati[$k]"."<br>"."$nizAutori[$k]";
$randomMotivacija2="$nizCitati[$l]"."<br>"."$nizAutori[$l]";
$randomMotivacija3="$nizCitati[$m]"."<br>"."$nizAutori[$m]";

/*
echo "$randomMotivacija1 <br>";
echo "$randomMotivacija2 <br>";
echo "$randomMotivacija3";

echo "<hr>";
*/

///Random za ljubav
$putanja=__DIR__."/ljubav.txt";

$data=file($putanja);
$nizCitati=[];
$nizAutori=[];


for($i=0; $i<count($data); $i++){
    if($i%2==0){
        $citati=$data[$i];
        $nizCitati[]=$citati;
    }else{
        $autori=$data[$i];
        $nizAutori[]=$autori;
    }
}


$n=count($nizCitati);

$k=rand(0,$n-1);
$l=rand(0,$n-1);
$m=rand(0,$n-1);





$randomLjubav1="$nizCitati[$k]"."<br>"."$nizAutori[$k]";
$randomLjubav2="$nizCitati[$l]"."<br>"."$nizAutori[$l]";
$randomLjubav3="$nizCitati[$m]"."<br>"."$nizAutori[$m]";

/*
echo "$randomLjubav1 <br>";
echo "$randomLjubav2 <br>";
echo "$randomLjubav3";


echo "<hr>";
*/

/// Random posao
$putanja=__DIR__."/posao.txt";

$data=file($putanja);
$nizCitati=[];
$nizAutori=[];


for($i=0; $i<count($data); $i++){
    if($i%2==0){
        $citati=$data[$i];
        $nizCitati[]=$citati;
    }else{
        $autori=$data[$i];
        $nizAutori[]=$autori;
    }
}


$n=count($nizCitati);

$k=rand(0,$n-1);
$l=rand(0,$n-1);
$m=rand(0,$n-1);





$randomPosao1="$nizCitati[$k]"."<br>"."$nizAutori[$k]";
$randomPosao2="$nizCitati[$l]"."<br>"."$nizAutori[$l]";
$randomPosao3="$nizCitati[$m]"."<br>"."$nizAutori[$m]";

/*
echo "$randomPosao1 <br>";
echo "$randomPosao2 <br>";
echo "$randomPosao3";

echo"<hr>";
*/

$jednaRandom=array($randomPrijateljstvo1, $randomMotivacija1, $randomLjubav1, $randomPosao1 );
$brojac =count($jednaRandom);
$s=rand(0, $brojac-1);


$radnomCitat=$jednaRandom[$s];



?>