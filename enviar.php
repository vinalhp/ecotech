<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $celular = addcslashes($_POST['celular']);
    $endereço = addcslashes($_POST['endereço']);

    $para = "ecotecht4@gmail.com";
    $assunto = "Form EcoTech";

    $corpo = "nome: ".$nome."\n"."email: ".$email."\n". "celular: ".$celular."\n". "endereço: ".$endereço;  

    $cabeça = "from: "ecotecht4@gmail.com"."\n"."reply-to: ".$email."\n"."x=mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeça)){
        echo("email enviado com sucesso!");
    } else{
        echo("Houve um problema!");
    }
?>