<?php 
	define("SITE", "http://ericksontavares.lan/"); 
	$url = explode("/", @$_REQUEST['url']);
	$sessao = $url[0];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="charset" content="utf-8">
	<meta http-equiv="description" content="Desenvolvimento de web sites e sistemas web utilizando as melhores e mais ageis tecnologias do mercado." />
	<meta http-equiv="keywords" content="Desenvolvimento, Web site, portifolio, contato, sistemas, site" />
	<meta http-equiv="TITLE" content="Erickson Tavares" />
	<meta http-equiv="abstract" content="Erickson Tavares" />
	<meta http-equiv="robots" content="INDEX,FOLLOW" />
	<meta http-equiv="copyright" content="© Erickson Tavares" />
	<meta http-equiv="author" content="Erickson Tavares - www.ericksontavares.com.br" />
	<meta name="google-site-verification" content="AzKLw8CacvLooBt_LO9sOd8zewYQLS9Xhp70-Eips1c" />

	<title> Erickson Tavares </title>

	<link rel="icon" type="image/png" href="<?php print SITE; ?>images/favicon.png" />
	<link type="text/css" rel="stylesheet" media="screen"  href="<?php print SITE; ?>css/style.css"  />
	<link type="text/css" rel="stylesheet" media="screen"  href="<?php print SITE; ?>css/tiptip.css"  />
	
	<script type="text/javascript" src="<?php print SITE; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php print SITE; ?>js/plugins/tiptip/jquery.tipTip.js"></script>
	<script type="text/javascript" src="<?php print SITE; ?>js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php print SITE; ?>js/cufon-replace.js"></script>
	<script type="text/javascript" src="<?php print SITE; ?>js/Aller_400.font.js"></script>
	<script type="text/javascript" src="<?php print SITE; ?>js/Aller_700.font.js"></script>
	<script type="text/javascript" src="<?php print SITE; ?>js/Aller_italic_400.font.js"></script>
	<script type="text/javascript" src="<?php print SITE; ?>js/app.js"></script>

	<script type="text/javascript">	
		$(function(){
			<?php if($sessao == "contato") { print "objApp.sessao = '".$sessao."'; objApp.pagina('".$sessao."'); "; } ?>
		});
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-33443391-1']);
		_gaq.push(['_setDomainName', 'ericksontavares.com.br']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body>

	<div id="topo">
		<img src="<?php print SITE; ?>images/logo.png" class="topo-logo" />
		<div class="menu">
			<div class="menu-conteudo" style="width: 345px;">
				<ul>
					<li>
						<a href="javascript:void(0);" onClick="objApp.pagina('home');"> Home </a>
					</li>
					<li>
						<a title="LinkedIn" href="https://br.linkedin.com/pub/erickson-tavares/30/955/987" target="_blank" > LinkedIn </a>
					</li>
					<li class="last">
						<a class="current" href="javascript:void(0);" onClick="objApp.pagina('contato');"> contato </a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="content-home">
		<img src="<?php print SITE; ?>images/logo.png" />
		<div class="home-menu menu">
			<ul style="margin: 0 auto;">
				<li>
					<!-- <a class="tiptip" title="Formulário de Contato" href="javascript:void(0)" onClick="objApp.pagina('contato');" > Contato </a>-->
					<a class="tiptip" title="Contato" href="javascript:void(0)" onClick="objApp.pagina('contato');"><img src="<?php print SITE; ?>images/icons/contact.png" /></a> 
					<!-- <a class="tiptip" title="Formulário de Contato" href="javascript:void(0)" onClick="objApp.pagina('contato');" > <img src="<?php print SITE; ?>images/icons/form.png" /> </a> -->
				</li>
				<li>
					&nbsp;
				</li>
				<li class="last">
					<a class="tiptip" title="LinkedIn" href="https://br.linkedin.com/pub/erickson-tavares/30/955/987" target="_blank"><img src="<?php print SITE; ?>images/icons/ico-linkedin.png" /></a> 
				</li>
			</ul>
		</div>
	</div>
	
	<div class="content">
		<div class="loader">
			<img src="<?php print SITE; ?>images/loading.gif" />
		</div>
	
		<div class="mensagem"> </div>
		
		<div class="paginas"> </div>
	</div>
    
	<div id="rodape" > 
		<div id="bar-rodape" > </div>
		Contato: 085 9 8709.2904 
		<img class="indent" src="<?php print SITE; ?>images/li_foot.gif" alt="">
		Erickson Tavares &copy; 2010. 
	</div>
</body>
</html>
