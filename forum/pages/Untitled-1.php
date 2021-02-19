

  // prepare("SELECT * FROM liste WHERE id='? '"); $detail -> execute([$_GET['okz']]); return ($detail-> fetch());} } DETAIL( ); echo [DETAIL( )]



  <?php
/*
require_once 'connexion.php';
if(isset($_GET['okz'])){
 //permet de connecter premierement a la base de donnée
$detail = $db->prepare("SELECT * FROM liste  WHERE id='okz '");
}*/
?>

    <?php/*
    require_once 'connexion.php'; //permet de connecter premierement a la base de données
    require_once 'liste.php';
    function DETAILS(){
        if(isset($_GET['okz'])){
        $db = new PDO("mysql:host=localhost;dbname=apprenants","root", '');
    $detail = $db->prepare("SELECT * FROM liste  WHERE id='? '");
    $detail -> execute([$_GET['okz']]);
    return ($detail-> fetch());}
    }
   DETAIL( );
    echo [DETAIL( )]*/
  ?>
  