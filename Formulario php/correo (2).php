<?php

if (isset ($_POST['enviar'])) {
        if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty ($_POST['email'])){
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header ="MIME-Version: 1.0 \r\n";
        $header.="Conten - type : text/plain ; charset=UTF-8 \r\n";
        $header.= "FROM: $name <$email> \r\n";
        $header.="To: correosebas@\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail= @mail("sebasthianmj14@gmail.com",$asunto,$msg,$header);
        if ($mail){
            echo "<h4>¡Formulario enviado exitosamente!</h4>";
        } 
    }
}