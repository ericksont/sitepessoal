<div class="contato">
	<h3> Contato </h3>
	<p> Para que melhor possamos atendê-lo, deixe sua dúvida, dica ou sugestão e assim estaremos sempre melhorando a qualidade dos serviços e produtos. </p>

	<div class="message-in message-alert">
		<ul>
			<li>  </li>
		</ul>
	</div>
	
	<div class="formcontato">
		<form onSubmit="return false">
			<div class="campo">
				<p>Nome: </p> <input type="text" class="w78" name="nome" id="input_nome" />
			</div>
			<div class="campo">
				<p> E-mail: </p><input type="text"  class="w78" name="email" id="input_email" />
			</div>
			<div class="campo">
				<p> Assunto: </p> <input type="text" class="w78" name="assunto" id="input_assunto" />
			</div>
			<div>
				<p> Mensagem: </p>
				<textarea name="mensagem" id="textarea_mensagem" ></textarea>
			</div>
			<button onclick="objApp.enviarMensagem();"> Enviar </button>
		</form>
	</div>
</div>
<script>
$(function(){
	Cufon.refresh();
});
</script>