<?php

use PHPMailer\PHPMailer\PHPMailer;

    require_once('../vendor/phpmailer/PHPMailer.php');
    require_once('../vendor/phpmailer/SMTP.php');
    require_once('../vendor/phpmailer/Exception.php');

    $ok = 0;

    try{
        if(isset($_POST["email"])){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $fone = $_POST["telefone"];
            $mensagem = $_POST["mensagem"];
            $assunto = "CONTATO VIA SITE";

            //echo $nome . $email . $fone . $mensagem . $assunto;
 
            $phpmail = new PHPMailer();
 
            $phpmail -> isMail();
            $phpmail -> SMTPDebug = 0;
            $phpmail -> Debugoutput = 'html';
            $phpmail -> Host = "smtp.gmail.com";
            $phpmail -> Port = 465;
            $phpmail -> SMTPSecure = 'ssl';
            $phpmail -> SMTPAuth = true;
            $phpmail -> Username = "jfelipe.jfss@gmail.com";
            $phpmail -> Password = "rlqa rymc mmwy ihzs";
            $phpmail -> isHTML(true);
            $phpmail -> setFrom ("jfelipe.jfss@gmail.com", $nome);
            $phpmail -> addAddress("jfelipe.jfss@gmail.com", $assunto);
            $phpmail -> Subject = $assunto;
            $phpmail -> msgHTML(
               "nome: $nome <br>
               E-mail: $email <br>
               Telefone: $fone <br>
               Mensagem: $mensagem <br> "
            );
            $phpmail -> AltBody = "
                 Nome: $nome \n 
                 E-mail: $email \n
                 Telefone: $fone \n
                 Mensagem: $mensagem
                 ";

            if($phpmail->send()){

                $pk = 1;
                echo "Sua mensagem foi enviada com sucesso";
                require_once("index.php");
            }else{
                $pk =2;
                echo "Não foi possivel enviar a mensagem! erro: ".$sphpmail->ErrorInfo;

            }

            /********Email resposta***********************/

            $phpmailResposta = new PHPMailer();
 
            $phpmailResposta -> isMail();
            $phpmailResposta -> SMTPDebug = 0;
            $phpmailResposta -> Debugoutput = 'html';
            $phpmailResposta -> Host = "smtp.gmail.com";
            $phpmailResposta -> Port = 465;
            $phpmailResposta -> SMTPSecure = 'ssl';
            $phpmailResposta -> SMTPAuth = true;
            $phpmailResposta -> Username = "jfelipe.jfss@gmail.com";
            $phpmailResposta -> Password = "rlqa rymc mmwy ihzs";
            $phpmailResposta -> isHTML(true);
            $phpmailResposta -> setFrom ("jfelipe.jfss@gmail.com", "KIBELEZA - ESTETICA");
            $phpmailResposta -> addAddress($email, $assunto);
            $phpmailResposta -> Subject = $assunto;
            $phpmailResposta -> msgHTML(
               "Olá $nome, em breve retornaremos seu contato "
            );
            $phpmailResposta -> AltBody = "
                 Olá $nome, em breve retornaremos seu contato
                 ";

            $phpmailResposta->send();

        }
    }
    catch(Exception $erro){
 
        echo "Error: " .$erro;
    }
?>