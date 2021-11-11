<?php

namespace App\Http\Controllers;

use App\User;
use Session;
use Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ApiUserController extends Controller
{
    public function recuperar(Request $request){
        $email = $request->email;
        $novaSenha = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -15); 
        $novaSenha = substr(rand(), 0, 8);
        $usuario = User::where("email", $email)->get();
        $usuario[0]->password = Hash::make($novaSenha);
        $usuario[0]->save();

        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                   // Enable verbose debug output
            $mail->isSMTP();                                        // Send using SMTP
            $mail->CharSet    = 'UTF-8';
            $mail->Host       = 'mail.imugi.com.br';                  // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                               // Enable SMTP authentication
            $mail->Username   = 'recovery.password@imugi.com.br';                // SMTP username
            $mail->Password   = '93lr5yzIfZ';                       // SMTP password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;                               // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('contato@imugi.com.br', 'Imugi Tecnologia e Educação');
            //$mail->setFrom('vendas@fpeduc.com', 'FPeduc');
            $mail->addAddress($email);                              // Add a recipient
            //$mail->addCC('pombocriativo@gmail.com');

            // Content
            $mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject = 'Alteração de senha Imugi Tecnologia e Educação';
            $mail->Body .= '    <div style="padding: 26px;display: block;font-family: Arial, Helvetica, sans-serif;">';
            $mail->Body .= '        <img src="https://site.imugi.com.br/assets/site/images/logo.png" alt="logo fpeduc" style="display: block;margin: 0 auto;">';
            $mail->Body .= '        <img src="https://site.imugi.com.br/assets/site/images/aprimorar_lateral.png" alt="banner sculpture" style="display: block;margin: 0 auto;margin-top: 16px;box-shadow: 0px 0px 25px rgba(56, 172, 84,.6);border-radius: 15px;">';
            $mail->Body .= '        <h3>';
            $mail->Body .= '            Você solicitou a recuperação de senha,';
            $mail->Body .= '        </h3>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Conforme solicitado segue sua nova senha: <b>'. $novaSenha.'</>';
            $mail->Body .= '            <br>';
            $mail->Body .= '            Obs: Caso não tenha solicitado essa alteração entre em contato com a administração.';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>';
            $mail->Body .= '            Muito obrigado por confiar em nosso trabalho. Todo o conteúdo foi criado com muito carinho e dedicação. Bons estudos.';
            $mail->Body .= '        </p>';
            $mail->Body .= '        <p>- Equipe Imugi</p>  ';
            $mail->Body .= '    </div>';

            if($mail->send()){
               // return "1";
               Session::flash('message', "Você recebera a nova senha no seu email");
            return Redirect::back();
                
            }else{
                return "2";
            }
        } catch (Exception $e) {
            // echo "Email não enviado. Erro: {$mail->ErrorInfo}";
            return $e;
        }

    }
}
