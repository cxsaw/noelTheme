<?php
    if(
        empty($_POST["form_prenom"]) || 
        empty($_POST["form_nom"]) ||
        empty($_POST["form_email"]) ||                
        empty($_POST["form_wish"])
    ){
            
        echo "Rien n'a été soumis.";
        return http_response_code(400);
            
    } else {
        
        $nom     = $_POST["form_nom"];
        $prenom  = $_POST["form_prenom"];
        $email   = $_POST["form_email"];
        $wish    = $_POST["form_wish"];
        
        echo "Soumis.";
        return http_response_code(200);     
    }   
?>
