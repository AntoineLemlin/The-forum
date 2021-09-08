<?php 

// avater (blob) - email - nickname - password - signature
$avatar = $_POST['']; 
$email = $_POST['']; 
$nickname= $_POST['']; 
$password = $_POST['']; 
$signature = $_POST['']; 


class register {
    

    public function ValidateNickname($name) {
        require "../Model/nickname_check.php";
       $nickName_final = nickname_unique($name) ;

       if ( $nickName_final == false ) {
           echo "mauvais identifiant";
       }

    }
    public function validateEmail($mail) {
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo "{$mail}: A valid email"."<br>";
        }
        else {
            echo "{$mail}: Not a valid email"."<br>";
        }
    }
}

$appel = new register ();
$appel -> ValidateNickname('spiderman');

?>