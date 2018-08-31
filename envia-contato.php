<?php          
    // Inserir Arquivos do PHPMailer
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    // Usar as classes sem o namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;



    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Criação do Objeto da Classe PHPMailer
    $mail = new PHPMailer(true);
    $mail->CharSet="UTF-8"; 


    try {
        
        //Retire o comentário abaixo para soltar detalhes do envio 
        // $mail->SMTPDebug = 2;                                
        
        // Usar SMTP para o envio
        $mail->isSMTP();                                      

        // Detalhes do servidor (No nosso exemplo é o Google)
        $mail->Host = 'smtp.gmail.com';

        // Permitir autenticação SMTP
        $mail->SMTPAuth = true;                               

        // Nome do usuário
        $mail->Username = 'fitnessempresacom@gmail.com';        
        // Senha do E-mail         
        $mail->Password = 'Fitness@2018';                           
        // Tipo de protocolo de segurança
        $mail->SMTPSecure = 'tls';   

        // Porta de conexão com o servidor                        
        $mail->Port = 587;

        
        // Garantir a autenticação com o Google
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Remetente
        $mail->setFrom('fitnessempresacom@gmail.com', 'Fitness');
        
        // Destinatário
        $mail->addAddress('fitnessempresacom@gmail.com', 'Academias');

        // Conteúdo

        // Define conteúdo como HTML
        $mail->isHTML(true);                                  

        // Assunto
        $mail->Subject = 'Compra de serviço';
        $mail->Body    = ("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
        $mail->AltBody = 'de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}';

        // Enviar E-mail
        $mail->send();
        header("location: index.php");
        die('Não ignor');
        echo 'Mensagem enviada com sucesso';
    } catch (Exception $e) {
        echo 'A mensagem não foi enviada pelo seguinte motivo: ', $mail->ErrorInfo;
    }
            
?>