<?php          
    // Inserir Arquivos do PHPMailer
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    // Usar as classes sem o namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Cria��o do Objeto da Classe PHPMailer
    $mail = new PHPMailer(true); 


    try {
        
        //Retire o coment�rio abaixo para soltar detalhes do envio 
         $mail->SMTPDebug = 2;                                
        
        // Usar SMTP para o envio
        $mail->isSMTP();                                      

        // Detalhes do servidor (No nosso exemplo � o Google)
        $mail->Host = 'smtp.gmail.com';

        // Permitir autentica��o SMTP
        $mail->SMTPAuth = true;                               

        // Nome do usu�rio
        $mail->Username = 'fitnessempresacom@gmail.com';        
        // Senha do E-mail         
        $mail->Password = 'Fitness@2018';                           
        // Tipo de protocolo de seguran�a
        $mail->SMTPSecure = 'tls';   

        // Porta de conex�o com o servidor                        
        $mail->Port = 587;

        
        // Garantir a autentica��o com o Google
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Remetente
        $mail->setFrom('fitnessempresacom@gmail.com', 'Mailer');
        
        // Destinat�rio
        $mail->addAddress('fitnessempresacom@gmail.com', 'Joe User');

        // Conte�do

        // Define conte�do como HTML
        $mail->isHTML(true);                                  

        // Assunto
        $mail->Subject = 'Insira o assunto';
        $mail->Body    = 'Insira o texto do e-mail';
        $mail->AltBody = 'Formato alternativo em texto puro para emails que n�o aceitam HTML';

        // Enviar E-mail
        $mail->send();
        echo 'Mensagem enviada com sucesso';
    } catch (Exception $e) {
        echo 'A mensagem n�o foi enviada pelo seguinte motivo: ', $mail->ErrorInfo;
    }
            
?>