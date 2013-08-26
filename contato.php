<?php
include_once'inc/header.php';
include_once 'inc/menu.php';
?>

<div class="title-div">
        <h2><strong>Contato</strong></h2>
        <h5>Caso queira fazer alguma pergunta, comentário ou sugestão, sinta-se a vontade, preencha os campos abaixo e envie sua mensagem.</h5>
</div>
</section>
<!-- Mensagens de aviso do envio de email -->
<div id="msg" class="success-message" style="display: none">E-mail Enviado Com sucesso!!</div>
<div id="msg_erro" class="falha-de-envio" style="display: none">Falha ao enviar o E-mail!!</div>


<div id="google-map">
	<h5>Try to Enable Your JavaScript!</h5>
</div>
<section id="content" class="container">
	<div class="one">
<!-- 	<div class="post-title-text">
		<h1>Contato Razão Social</h1>
		
	</div> -->
	<div class="one-fourth">
		<h4>Endereço</h4>
		<p>
			Av. Pres. Juscelino Kubitschek, 1830 <br> Itaim Bibi, São Paulo.
		</p>
		<br/>
		<h4>Formas de Contato</h4>
		<p style="margin-bottom:0;">
			T: (11) 5213-4981 <br/> E: <a href="mailto:razaosocial@razaosocial.org.br">razaosocial@razaosocial.org.br</a>
		</p>
	</div>
	<form  id="contato" name="contato" class="simple-form" method="post" action="">
		
		<div class="one-fourth contact-form">
			<fieldset>
				<label><span>* </span>Nome </label>
				<input type="text" required="Campo obrigatorio" class="text requiredField" placeholder="José Roberto" id="name" name="name"/>
			</fieldset>
		</div>
		<div class="one-fourth contact-form">
			<fieldset>
				<label><span>* </span>Email </label>
				<input type="email"  required="Campo obrigatorio" class="requiredField email" placeholder="exemplo@razaosocial.org.br" id="email" name="email"/>
			</fieldset>
		</div>
		<div class="one-fourth contact-form">
			<fieldset>
				<label><span>* </span>Assunto</label>
				<input type="text" required="Campo obrigatorio" class="requiredField text" placeholder="Razão Social" id="assunto" name="assunto"/>
			</fieldset>
		</div>
		<div class="three-fourth last">
			<fieldset>
				<label><span>* </span>Mensagem </label>
				<textarea cols="30" rows="6" required="Campo obrigatorio" class="text requiredField" id="message" placeholder="Digite sua Mensagem..." name="message"></textarea>
			</fieldset>
			<fieldset>

				<?php
        if(isset($_SERVER['REQUEST_METHOD']) AND ($_SERVER['REQUEST_METHOD'] == 'POST')){
            
            extract($_POST);
             //Definimos o corpo da mensagem resgatando os inputs
              $mensagem = "<strong>Nome:  </strong>".$name;
              $mensagem .= "<br> <strong>Assunto: </strong>".$assunto;
              $mensagem .= "<br> <strong>E-Mail: </strong>".$email;
              $mensagem .= "<br>  <strong>Mensagem: </strong> <br>".$message;

			   //estanciando a classe phpMailer
                require("vendor/php_mailer/class.phpmailer.php");
                $mail = new PHPMailer;
                
                //definindo dados do servidor smtp
                 $mail->IsSMTP(); //definindo que o enviou vai  ser smtp;
                $mail->Host = "XXXX";
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = 'XXXXX';
                $mail->Password = 'XXXX';
                $mail->SMTPSecure = "TLS";
                //dados do e-mail
                $mail->Subject = "Contato - Razaosocial";
                $mail->From = $email; 
                $mail->FromName = $name ;
                $mail->AddAddress('XXXXXX');
                $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
                $mail->Body =$mensagem;

                if ($mail->Send()) {
                	?>
                	<script>
                		jQuery(document).ready( function(){
                			jQuery('#msg').fadeIn();
                		});
                	</script>
               <?php
				}

			else{
				?>
				<script>
                		jQuery(document).ready( function(){
                			jQuery('#msg_erro').fadeIn();
                		});
                </script>
                	<?php
				}//função que faz o envio do email.
		}
?>
				<input type="submit" value="Enviar" class="button small circle green"/>
			</fieldset>
		</div>
	</form>
</div>
</section> 

<?php 
	include_once 'inc/footer.php';
?>

