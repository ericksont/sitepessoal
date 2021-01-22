var App = function(){

	var layoutCarregado = false;
	var sessao = "";

	this.pagina = function(p){
		if(p == "home") {
			if(layoutCarregado == true)
				this.descarregarLayout();
			
		} else {
			if(layoutCarregado == false)
				this.carregarLayout(p);
			else {
				$(".loader").show();
				this.carregarPagina(p);
			}
		}
	};
	
	this.carregarPagina = function(p){
		if(this.sessao != ""){
			_gaq.push(['_trackPageview', '/'+p]); // Analytcs
		}
		$.post(p+".php",
			function(html){
				$(".paginas").html(html);
				$(".loader").hide();
				Cufon.refresh();
			}
		);
	};
	
	this.carregarLayout = function(p) {
	
		layoutCarregado = true;
		
		$(".content-home").animate(
			{left:"-200px",opacity:"0"}, 
			function(){ 
				$(".content-home").hide();
				$(".content").show();
				$("#topo").show();
				$("#topo").animate({opacity:"1", top: 0});
				$(".content").animate({opacity:"1", left: 0});
				$(".loader").show();
				objApp.carregarPagina(p);
			}
		);
	};
	
	this.descarregarLayout = function() {
	
		layoutCarregado = false;
		
		$("#topo").animate(
			{opacity:"0", top: "-50px"}, 
			function(){
				$("#topo").hide();
			}
		);
			
		$(".content").animate(
			{opacity:"0", left: "200px"},
			function(){
				$(".content").hide();
				$(".paginas").html("");
				$(".content-home").show();
				$(".content-home").animate({left:0,opacity:1});						
			}
		);
	};
	
	this.enviarMensagem = function() {
		var nome = $("#input_nome").val();
		var email = $("#input_email").val();
		var assunto = $("#input_assunto").val();
		var mensagem = $("#textarea_mensagem").val();
		
		var validar = this.validarCampos([["Nome",nome],["E-mail",email,"mail"],["Assunto",assunto],["Mensagem",mensagem]]);
		
		if(validar.valido == false){
			
			$(".message-in").show();
			$(".message-in").html(validar.mensagem);
			$('html,body').animate({
				scrollTop: $(".message-in").offset().top},
				'slow');
			
		} else {
			// passou da validação
			$.post("request.php", {acao:"enviar-contato", nome:nome, email:email, assunto:assunto, mensagem:mensagem},
				function(data){
					if(data == 1) {
						$(".message-in").removeClass("message-alert");
						$(".message-in").addClass("message-success");
						$(".message-in").show();
						$(".message-in").html("<ul><li> Mensagem Enviada com sucesso! </li></ul>");
						$('html,body').animate({
							scrollTop: $(".message-in").offset().top},
							'slow');
					}
				}
			);
		}
		
	};
	
	/*
	 * -- Utils --
	 */
	 
	/*  Campos - Array([[nome_campo, valor, tipo]])
	 *  Return obj {valido, mensagem}
	 */ 
	this.validarCampos = function(campos) {
		
		var campo;
		var retorno = new Object();
		retorno.valido = true;
		retorno.mensagem = "<ul>";

		for(i in campos){
		
			// Exp Reg p/ remover espaços em branco
			campo = campos[i][1].replace(/\s/g, '');
			if(campo == "") {
				retorno.valido = false;
				retorno.mensagem += "<li> O campo "+campos[i][0]+" não pode estar vazio! </li>";
			} else {
				// validando email
				if(campos[i][2] == "mail") {
				
					// Exp Reg p/ validar email
					var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

					if(!filtro.test(campos[i][1])){
						retorno.valido = false;
						retorno.mensagem += "<li> O campo "+campos[i][0]+" não é um e-mail válido! </li>";
					}
				}
			}
		}
		retorno.mensagem += "</ul>";
		return retorno;
	}

}

var objApp = new App();