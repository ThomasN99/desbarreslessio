<?php
//setcookie('nom','Dupont',time()+3600);
//setcookie("nom","Dupont",time()-1); 
$array1=[1,2,3];
var_dump($array1);
//echo '$array1 e0: '.$array1[0];
/*array_push($array1,4);
echo '$array1 e3 : '.$array1[3];


$array2=array("un"=>1, "deux"=>2);
var_dump($array2);
echo '$array2 clé un: '.$array2['un'];
$array3["trois"]=3;
var_dump($array3);
var_dump($array2);
array_push($array2,$array3);
var_dump($array2);
unset($array2[0]);
var_dump($array2);
foreach($array2 as $ligne){
    echo $ligne."<br>";
}

for($i=0;$i<count($array1); $i++){
    echo $array1[$i]."<br>";
}
//echo '$array1 e3 : '.$array2['trois'];


class Personne{
   public $nom;
   public $titre;
   public static $id=0;
   public function methode($i){
       $this->nom=$i;
   }
   
   public static function compter(){
       self::$id++;
    }
    
    public function __construct($titre, $nom){
        $this->nom=$nom;
        $this->titre=$titre;
        self::compter();
    }
}

$p1 = new Personne("nom", "M.");
echo $p1->nom;
 $p1->methode("Durand");
 echo $p1->nom;
echo Personne::$id;
?>
<br>
<form action ='# ' method='POST'>
<input type='texte' name='nom'  value ='Dupont' /><br>
<input type='texte' name='prenom'  value ='Jean' />
</form>

<?php 

//var_dump($_COOKIE['nom']);

var_dump($_COOKIE);
*/
?>