<?php

class Main {

    public function reqQuote($data) {
        require_once './vendor/autoload.php';
        if (isset($_POST['btn'])) {
            if (isset($_POST['check'])){
                $transport = (new \Swift_SmtpTransport('ssl://test.getwobo.com', 465))
                    ->setUsername("mail@test.getwobo.com")
                    ->setPassword('6?bxd~bMW,7j');

                $mailer = new \Swift_Mailer($transport);

                $message = new \Swift_Message('Anbonaki - Requested Quote');
                $message->setFrom(['support@getwobo.com' => 'Anbonaki - Requested Quote']);
                $message->setTo(['mushfiqur.rahman06@gmail.com']);
                $message->setBody('<html><body>'.
                    '<h1>Hello Admin !</h1>'.
                    '<p style="font-size:18px;">Name : '.$data['name'].'</p>'.
                    '<p style="font-size:18px;">Email : '.$data['email'].'</p>'.
                    '<p style="font-size:18px;">Contact : '.$data['number'].'</p>'.
                    '<p style="font-size:18px;">Link : '.$data['link'].'</p>'.
                    '<p style="font-size:18px;">Coupon : '.$data['coupon'].'</p>'.
                    '<p style="font-size:18px;">Remark : '.$data['remark'].'</p>'.
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
             </table>'.
                    '<br><br>Thank You<br>Anbonaki<br>Automated System</body></html>',
                    'text/html');

                $result = $mailer->send($message);
            }
        }
    }

}
