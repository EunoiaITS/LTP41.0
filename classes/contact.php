<?php

class Contact
{

    public function contData($data)
    {
        require_once './vendor/autoload.php';
        if (isset($_POST['btn'])) {
            $transport = (new \Swift_SmtpTransport('ssl://mail.anbonaki.com', 465));
                //->setUsername('info@anbonaki.com')
                //->setPassword('acTion#fuc18');

            $mailer = new \Swift_Mailer($transport);

            $message = new \Swift_Message('Anbonaki - Contact');
            $message->setFrom(['info@anbonaki.com' => 'Anbonaki - Contact']);
            $message->setTo(['info@anbonaki.com']);
            $message->setBody('<html><body>' .
                '<h1>Hello Admin !</h1>' .
                '<p style="font-size:18px;">Name : ' . $data['name'] . '</p>' .
                '<p style="font-size:18px;">Email : ' . $data['email'] . '</p>' .
                '<p style="font-size:18px;">Contact : ' . $data['number'] . '</p>' .
                '<p style="font-size:18px;">Subject : ' . $data['subject'] . '</p>' .
                '<p style="font-size:18px;">Messsage : ' . $data['message'] . '</p>' .
                '<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                      <td>
                          <div>
                          <!--[if mso]>
                              <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://litmus.com" style="height:36px;v-text-anchor:middle;width:150px;" arcsize="5%" strokecolor="#EB7035" fillcolor="#EB7035">
                              <w:anchorlock/>
                              <center style="color:#ffffff;font-family:Helvetica, Arial,sans-serif;font-size:16px;">I am a button &rarr;</center>
                              </v:roundrect>
                              <![endif]-->
                          </div>
                      </td>
                  </tr>
             </table>' .
                '<br><br>Thank You<br>Anbonaki<br>Automated System</body></html>',
                'text/html');

            if($mailer->send($message)){
                $text = 'Thank you for your inquiry. We will come back to you shortly ! ';
            }else{
                $text = 'Can not send Email at this moment !';
            }
            return $text;
        }
    }
}
