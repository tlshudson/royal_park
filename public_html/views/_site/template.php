<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="Content-Language" content="pt-br"/>
	<meta http-equiv="Cache-Control" content="max-age=200" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="robots" content="index,follow"/>
	<meta name="generator" content="" />
	<meta name="author" content="" />
	<meta name="copyright" content="<?php echo CLIENTE ?>" />
	<meta name="description" content="<?php echo $header['description']?>" /> 
	<meta name="keywords" content="<?php echo $header['keywords']?>" />

	<meta name="twitter:card" content="summary">
	<meta name="twitter:creator" content="@">
	<meta name="twitter:site" content="@">
	<meta name="twitter:domain" content="<?php echo $header['url'] ?>">
	<meta name="twitter:title" content="<?php echo $header['title'] ?>">
	<meta name="twitter:description" content="<?php echo  $header['description'] ?>">
	
	<meta property="og:locale" content="pt-BR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $header['title'] ?>">
	<meta property="og:description" content="<?php echo $header['description'] ?>">
	<meta property="og:url" content="<?php echo $header['url'] ?>">
	<meta property="og:image" content="<?php echo $header['imagem'] ?>">
	<meta property="og:site name" content="<?php echo CLIENTE ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo CSS ?>master.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS ?>animacao.css"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo IMG ?>favicon.png">

	<title><?php echo $header['title'].' :: '?><?php echo CLIENTE ?></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script type="text/javascript" src="https://google.com/recaptcha/api.js"></script>

	<!-- Meta Pixel Code -->
	<meta name="facebook-domain-verification" content="kmzm1l2kglkhvwry53aa2dm9t8uce3" />
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '425244469583711');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=425244469583711&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Meta Pixel Code -->
</head>

<body>

	<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/3f05902c-2ff9-44e2-a081-5aa0e89c5248-loader.js" ></script>

	<header>
		<div class="container flex">
			<div class="headerMarca">
		 		<img src="<?php echo IMG ?>marca.svg" alt="Marca <?php echo CLIENTE ?>" title="Marca <?php echo CLIENTE ?>">
			</div>
			<div class="headerMenu">
				<ul class="flex">
					<li class="headerMenuCta"><a href="#home">Solicite seu orçamento</a></li>
				</ul>
			</div>
			<div class="headerMenuMobile" id="menuMobile">
				<p>☰ MENU</p>
			</div>
		</div>
	</header>

	<?php $this->loadSite($pagina, $info)?>

	<section class="cookies">
		<div class="cookiesAviso">
			<div class="container flex">
				<p>Ao acessar o nosso site, você está de acordo com a política de cookies utilizada por nós.</p>
				<p id="cookiesMais">Saiba Mais</p>
				<p id="cookiesAceito">Aceito</p>
			</div>
		</div>
		<div class="cookiesPopUp">
			<div class="container flex">
				<div class="cookiesPopUpConteudo">
					<div class="cookiesPopUpFechar">
						<p>✖</p>
					</div>
					<div class="cookiesPopUpTexto">
						<h2>Política de cookies</h2>
						<h3>O que são cookies?</h3>
						<p>Cookies são pequenos arquivos de texto usados para armazenar pequenas informações. Eles são armazenados em seu dispositivo quando o site é carregado em seu navegador. Esses cookies nos ajudam a fazer o site funcionar corretamente, torná-lo mais seguro, fornecer uma melhor experiência do usuário e entender como o site funciona e analisar o que funciona e onde precisa ser melhorado.</p>
						<h3>Como usamos cookies?</h3>
						<p>Como a maioria dos serviços online, nosso site usa cookies primários e de terceiros para diversos fins. Os cookies primários são principalmente necessários para o funcionamento correto do site e não coletam nenhum de seus dados de identificação pessoal.</p>
						<p>Os cookies de terceiros usados em nosso site são principalmente para entender como o site funciona, como você interage com nosso site, mantendo nossos serviços seguros, fornecendo anúncios que são relevantes para você e, em suma, proporcionando-lhe um usuário melhor e melhor experiência e ajudar a acelerar suas futuras interações com nosso site.</p>
						<h3>Que tipos de cookies usamos?</h3>
						<p>Essencial: Alguns cookies são essenciais para que você possa experimentar todas as funcionalidades do nosso site. Eles nos permitem manter as sessões do usuário e prevenir quaisquer ameaças à segurança. Eles não coletam ou armazenam nenhuma informação pessoal. Por exemplo, esses cookies permitem que você faça login em sua conta, adicione produtos à sua cesta e finalize a compra com segurança.</p>
						<p>Estatísticas: Esses cookies armazenam informações como o número de visitantes do site, o número de visitantes únicos, quais páginas do site foram visitadas, a origem da visita, etc. Esses dados nos ajudam a compreender e analisar o desempenho do site e onde precisa de melhorias.</p>
						<p>Marketing: Nosso site exibe anúncios. Esses cookies são usados para personalizar os anúncios que mostramos a você para que sejam significativos para você. Esses cookies também nos ajudam a acompanhar a eficiência dessas campanhas publicitárias.</p>
						<p>As informações armazenadas nesses cookies também podem ser usadas por provedores de anúncios de terceiros para mostrar anúncios em outros sites no navegador também.</p>
						<p>Funcional: Estes são os cookies que auxiliam certas funcionalidades não essenciais em nosso site. Essas funcionalidades incluem a incorporação de conteúdo como vídeos ou o compartilhamento de conteúdo do site em plataformas de mídia social.</p>
						<p>Preferências: Esses cookies nos ajudam a armazenar suas configurações e preferências de navegação, como preferências de idioma, para que você tenha uma experiência melhor e eficiente em futuras visitas ao site.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="whatsapp">
		<a href="https://api.whatsapp.com/send/" target="_blank">
			<img src="<?php echo IMG ?>iconeWhatsapp.png" alt="Whatsapp" alt="Whatsapp">
		</a>
	</div>

	<section class="fixo">
		<div class="container flex">
			<div class="fixoBgTitulo flex">
				<p>Central de atendimento</p>
			</div>
			<a href="https://api.whatsapp.com/send/" target="_blank" class="fixoBgBotao01 flex">
				<img src="">
				<p>Fale conosco agora</p>
			</a>
			<a href="" target="_blank" class="fixoBgBotao02 flex">
				<img src="">
				<p>(38) 3365-0100</p>
			</a>
		</div>
	</section>

	<footer>
		<div class="container flex">
			<div class="footer01">
				<h2>Quem Somos</h2>
				<p>O Centro Empresarial Royal Park Paracatu, além de ser o lugar perfeito para os negócios de sua empresa, destaca-se como um ótimo investimento.</p>
			</div>			
			<div class="footer02">
				<h2>Localização</h2>
				<p>Av. Olegário Maciel, 714 - Centro, Paracatu - MG, 38600-000</p>
				<p>(38) 3365-0100</p>
			</div>
			<div class="footer03 flex">
				<h2>Social</h2>
				<a href="https://www.instagram.com//" target="_blank" class="footerRSocial">
					<img src="<?php echo IMG ?>iconeInstagram.png" alt="Instagram" title="Instagram">
				</a>
				<a href="https://www.facebook.com/" target="_blank" class="footerRSocial">
					<img src="<?php echo IMG ?>iconeFacebook.png" alt="Facebook" title="Facebook">
				</a>
			</div>
		</div>
		<div class="container flex">
			<div class="footer05 flex">
				<div class="footer05Bg">
					<p>Realização</p>
				</div>
				<div class="footer05Bg">
					<img src="<?php echo IMG ?>marcaSimaoSarkis.svg" alt="Simão Sarkis" title="Simão Sarkis">			
				</div>
				<div class="footer05Bg">
					<img src="<?php echo IMG ?>marcaInovar.svg" alt="Inovar Construtura e Incorporadora" title="Inovar Construtura e Incorporadora">
				</div>
			</div>
			<div class="footer06">
			</div>
		</div>
		<div class="container">
		</div>
	</footer>

	<script src="<?php echo JS ?>script.js"></script>
	<script type="text/javascript" src="<?php echo JS ?>zoom.js"></script>
</body>
</html>