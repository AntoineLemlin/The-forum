<?php 

// avater (blob) - email - nickname - password - signature

 


class register {
    

    public function ValidateNickname($name,$mail,$password,$signature) {
       
       if (empty($mail)|| empty($name) || empty($password) || empty($signature) )  {
        echo "tous les champs requis ne sont pas complétés";



       }
       else {

        require "../App/Model/register_check.php";
            if ( nickname_unique($name) === false ) {
                echo "mauvais identifiant";
            }
            else {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    require "../App/Model/insert_data.php";
                    insert($mail,$name,$password,$signature);
                }
                else {
                    echo "{$mail}: Not a valid email"."<br>";
                }
            }

       }
      

    }

}

if(isset($_POST["register"])){
    $email = $_POST['email']; 
    echo $email;
    $nickname= $_POST['username']; 
    $password = $_POST['password']; 
    $signature = $_POST['signature'];
    $appel = new register ();

    $appel -> ValidateNickname($nickname,$email,$password,$signature);  
}


?>