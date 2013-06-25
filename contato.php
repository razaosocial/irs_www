<?php include("inc/head.php"); ?>
<script src="scripts/validaForm.js" type="text/javascript"></script>
<script src="scripts/jquery.validate.js" type="text/javascript"  ></script>
<?php
include("inc/cabecalho.php");
include("inc/menu.php");
?>
<div class="conteudo">
    <div>
        <div class="titulo_green">Contato</div>
        <div class="titulo_projeto"><img src="images/contact.png"/> (11) 5213-4981</div>
        <br />
        <div> Caso queira fazer alguma pergunta, comentário ou sugestão, sinta-se a vontade, preencha
            os campos abaixo e envie sua mensagem! </div>
        <br />
        <form  id="form1" name="form1" method="post" action="">
            <table border="0" cellspacing="10">
                <tr>
                    <td><label for="txtNome">Nome:</label></td>
                    <td><input type="text" name="txtNome" id="txtNome" style=" width: 300px" maxlength="50"></td>
                </tr>
                <tr>
                    <td><label for="txtEmail">E-mail:</label></td>
                    <td><input type="text" name="txtEmail" id="txtEmail"style=" width: 300px" maxlength="35"></td>
                </tr>
                <tr>
                    <td><label for="txtAssunto">Assunto:</label></td>
                    <td><input type="text" name="txtAssunto" id="txtAssunto" style=" width: 300px" maxlength="40"></td>
                </tr>
                <tr>
                    <td><label for="txtMensagem">Mensagem:</label></td>
                    <td><textarea name="txtMensagem" id="txtMensagem" cols="20" rows="2" style="width: 350px; height: 80px;"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" id="bntEnviar" value="Enviar"  style="<?php $styleBnt = '';echo $styleBnt; ?>" />

                        <!-- <asp:Button ID="btnEnviar" runat="server" Text="Enviar" OnClick="btnEnviar_Click" /><asp:Label
                                    ID="lblMensagem" runat="server" CssClass="msg" />--></td>
                </tr>
            </table>
            <?php
            if (isset($_SERVER['REQUEST_METHOD']) and ($_SERVER['REQUEST_METHOD'] == 'POST')) {
                extract($_POST);
                
             //definindo  mensagem que vai ser enviado no e-mail
              $mensagem = "<strong>Nome:  </strong>".$txtNome;
              $mensagem .= "<br> <strong>Assunto: </strong>".$txtAssunto;
              $mensagem .= "<br> <strong>E-Mail: </strong>".$txtEmail;
              $mensagem .= "<br>  <strong>Mensagem: </strong> <br>".$txtMensagem;

                //estanciando a classe phpMailer
                require("./vendor/php_mailer/class.phpmailer.php");
                $mail = new PHPMailer;
                
                //definindo dados do servidor smtp
                $mail->IsSMTP(); //definindo que o enviou vai  ser smtp;
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = 'XXXXXXXXXX';
                $mail->Password = 'XXXXXXXXXX';
                $mail->SMTPSecure = "tls";
                //dados do e-mail
                $mail->Subject = "Contato SITE - IRS";
                $mail->From = $txtEmail; 
                $mail->FromName = $txtNome ;
                $mail->AddAddress('suporte@institutorazaosocial.org.br');
                $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
               $mail->Body =$mensagem;

                if ($mail->Send()) {
                    echo '<div class="msg_enviado">Mensagem enviada com Sucesso!</div>';
                    echo '
                                <script type="text/javascript">
                                $(function(){
                                       $("#bntEnviar").hide(),
                                       $("#erro_enviar").hide()
                                   });
                                   </script>';
                } else {
                    echo '<span id="erro_enviar" class=\'msg_erro\'>Mensagem não enviada tente novamente!</span>';
                }
            }
            ?>
        </form>
    </div>
    <br />
    <br />
    <div class="titulo_green"> Localização</div>
    <div class="google_maps">
        <iframe width="600" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=d&amp;source=s_d&amp;saddr=Av.+Pres.+Juscelino+Kubitschek,+S%C3%A3o+Paulo,+1830&amp;daddr=&amp;hl=pt&amp;geocode=&amp;aq=t&amp;sll=-23.590913,-46.687488&amp;sspn=0.001684,0.00284&amp;dirflg=w&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=-23.59093,-46.687474&amp;spn=0.007866,0.012853&amp;z=16&amp;output=embed"></iframe>
    </div>
</div>
<?php
include("inc/parceiros.php");
include("inc/rodape.php");
?> 