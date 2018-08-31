<?php          
    // Inserir Arquivos do PHPMailer
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    // Usar as classes sem o namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Criaчуo do Objeto da Classe PHPMailer
    $mail = new PHPMailer(true); 


    try {
        
        //Retire o comentсrio abaixo para soltar detalhes do envio 
         $mail->SMTPDebug = 2;                                
        
        // Usar SMTP para o envio
        $mail->isSMTP();                                      

        // Detalhes do servidor (No nosso exemplo щ o Google)
        $mail->Host = 'smtp.gmail.com';

        // Permitir autenticaчуo SMTP
        $mail->SMTPAuth = true;                               

        // Nome do usuсrio
        $mail->Username = 'fitnessempresacom@gmail.com';        
        // Senha do E-mail         
        $mail->Password = 'Fitness@2018';                           
        // Tipo de protocolo de seguranчa
        $mail->SMTPSecure = 'tls';   

        // Porta de conexуo com o servidor                        
        $mail->Port = 587;

        
        // Garantir a autenticaчуo com o Google
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Remetente
        $mail->setFrom('fitnessempresacom@gmail.com', 'Mailer');
        
        // Destinatсrio
        $mail->addAddress('fitnessempresacom@gmail.com', 'Joe User');

        // Conteњdo

        // Define conteњdo como HTML
        $mail->isHTML(true);                                  

        // Assunto
        $mail->Subject = 'Insira o assunto';
        $mail->Body    = 'Insira o texto do e-mail';
        $mail->AltBody = 'Formato alternativo em texto puro para emails que nуo aceitam HTML';

        // Enviar E-mail
        $mail->send();
        echo 'Mensagem enviada com sucesso';
    } catch (Exception $e) {
        echo 'A mensagem nуo foi enviada pelo seguinte motivo: ', $mail->ErrorInfo;
    }
            
?>