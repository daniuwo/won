<?php
namespace Lib;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Email{
    public function __construct()
    {
        require_once 'PHPMailer/src/Exception.php';
        require_once 'PHPMailer/src/PHPMailer.php';
        require_once 'PHPMailer/src/SMTP.php';
    }
    /**
     * 邮件发送,传入
     * @param string $title     标题
     * @param string $content   内容
     * @param string $email     收信人
     * @param array $conf       配置信息
     */
    public function send($title,$content,$email,$conf){
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug  = 0;                                      // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = $conf['config_email']['smtp'];          // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $conf['config_email']['user'];          // SMTP username
            $mail->Password   = $conf['config_email']['pass'];          // SMTP password
            $mail->SMTPSecure = $conf['config_email']['secure'];        // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = $conf['config_email']['port'];          // TCP port to connect to
            $mail->CharSet    = 'utf-8';                                // 设置邮件编码
            $mail->setLanguage('zh_cn');                                // 设置语言
            //Recipients
            $mail->setFrom($conf['config_email']['sendemail'], $conf['wwwname']);// 发信邮件地址和发信人名称
            $mail->addAddress($email);                                  // Add a recipient
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = $title;                                    // 邮件标题
            $mail->Body    = $content;                                  // 邮件内容
        
            $mail->send();
            return [
                'error'     => true,
                'msg'       => '发送成功'
            ];
        } catch (Exception $e) {
            return [
                'error'     => false,// 失败
                'msg'       => $mail->ErrorInfo
            ];
        }
        
    }
}