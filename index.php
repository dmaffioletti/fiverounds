<?php
/*
require_once "class/ismobile.class.php";

$ismobi = new IsMobile();

if( $ismobi->CheckMobile() ) {
   // header('location:/mobile');
}*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="author" content="Daniel Machado Maffioletti, Ricardo Fiore">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="A Academia de Lutas 5 ROUNDS representa a concretização de um ideal que vem, oportunamente, atender às expectativas de demanda de um mercado exigente e eclético que se traduz desde o cidadão comum, apreciador das artes marciais, até o atleta de alta performance que busca o refinamento das suas aptidões, desenvolvimento da técnica e crescimento no processo de profissionalização como lutador.">
<meta name="keywords" content="mma, jiu-jitsu, jiujitsu, boxe, muay thai, hapkido, treinamento, ufc, shooto, jungle fight, strikeforce, rounds, five rounds, brazilian jiujitsu, brasília-df, brasília, brasil, brazil, pedro galiza, lula guerreiro, roberto simões baiano, sandro luiz, edgar santos, cláudio moreira">
<meta name="robots" content="index,follow">
<meta http-equiv="content-language" content="pt-br">

<title>Five Rounds</title>

<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<!-- <link rel="stylesheet" type="text/css" href="css/style.mobile.css" media="handheld"> -->
<script src="js/jquery-1.5.min.js"></script>
<script src="js/jquery.cooltipbox-1.2.1.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/function.js"></script>
</head>
<body>

	<!--
	<div id="blog">
        <a href="http://www.fiverounds.com.br/blog">
	        <img src="img/blog-five-rounds.png" width="276" height="351">
        </a>
    </div>
    -->

	<h1>Five Rounds</h1>

	<div id="bgPrimary"></div>
	<div id="bgSecond"></div>
	
	<!-- begin menu -->
	<div id="menu">
		<ul>
			<li><a style="margin-left:30px;" href="javascript:;" id="linkhome">HOME</a></li>
			<li><a style="margin-left:40px;" href="javascript:;" id="linkblog">BLOG</a></li>
			<li><a style="margin-left:40px;" href="javascript:;" id="linkprofessores">PROFESSORES</a></li>
			<li><a style="margin-left:30px;" href="javascript:;" id="linkfiverounds">&nbsp;&nbsp;</a></li>
			<li><a href="javascript:;" id="linkmatricule">MATRICULE-SE</a></li>
			<li><a href="javascript:;" id="linkmodalidades">MODALIDADE</a></li>
			<li><a href="javascript:;" id="linkcontato">CONTATO</a></li>
		</ul>
	<!-- end menu -->
	</div>
	
	<!-- begin teachers -->
	<div id="teachers">
	
		<div id="teacher01">
			<h2>Cristiano Monte</h2>
			<ul>
				<li>Especializado em Treinamento Funcional</li>
				<li>Lutas</li>
                <li>Condicionamento Físico</li>
			</ul>
		</div>
		
		<div id="teacher02">
			<h2>Roberto Simões "Baiano"</h2>
			<ul>
				<li>Tricampeão Baiano de Boxe</li>
				<li>Bicampeão Brasileiro de Boxe</li>
				<li>Participação no Campeonato Mundial de Boxe</li>
			</ul>
		</div>
		
		<div id="teacher03">
			<h2>Pedro Galiza</h2>
			<ul>
				<li>Faixa Preta Brazilian Jiu-jitsu 3 Grau</li>
				<li>Lutador de MMA</li>
			</ul>
		</div>
		
		<div id="teacher04">
			<h2>Sandro Luiz</h2>
			<ul>
				<li>Mestre Hapkido</li>
				<li>Hexacampeão Mundial de Hapkido</li>
				<li>Muay Thay - Técnico da Seleção Brasileira na Tailândia de 2009 a 2011</li>
			</ul>
		</div>
		
		<div id="teacher05">
			<h2>Edgar Santos</h2>
			<ul>
				<li>Faixa Preta Brazilian Jiu-jitsu e Lutador de MMA</li>
				<li>3 lugar na Copa do Mundo de Jiu-jitsu</li>
				<li>3 lugar no Campeonato Brasileiro de Jiu-jitsu</li>
				<li>Campeão do Naga EUA</li>
			</ul>
		</div>
		
		<div id="teacher06">
			<h2>Cláudio Moreira</h2>
			<ul>
				<li>Faixa Preta Brazilian Jiu-jitsu 3 Grau</li>
				<li>MMA Coach - 10 anos</li>
				<li>Árbitro Internacional de MMA</li>
				<li>Policial de Operações Especiais - 18 anos</li>
				<li>Bacharel em Direito e Psicologia</li>
			</ul>
		</div>
        
        <div id="teacher07">
			<h2>Leonardo Barros</h2>
			<ul>
				<li>Especialista em Treinamento Desportivo</li>
				<li>Preparador Físico "Alta Performance"</li>
			</ul>
		</div>
		
	<!-- end teachers -->
	</div>

	<!-- begin container -->
	<div id="container">
		
		<div id="contato">
			
			<h2>Contato</h2>
			
			<div id="msg"></div>
			
			<form name="frmContatos" id="frmContatos" method="post">
				<label>Nome:</label>
				<input type="text" name="txtNome" id="txtNome">
				
				<label>Email:</label>
				<input type="text" name="txtEmail" id="txtEmail">
				
				<label>Telefone:</label>
				<input type="text" name="txtTelefone" id="txtTelefone">
				
				<label>Modalidade:</label>
				<select name="select_modalidades" id="select_modalidades">
					<option value="MMA">MMA</option>
					<option value="Jiu-jitsu">Jiu-jitsu</option>
					<option value="Boxe">Boxe</option>
					<option value="Hapkido">Hapkido</option>
					<option value="Karatê">Karatê</option>
					<option value="Krav-maga">Krav Maga</option>
					<option value="Kung-fu">Kung Fu</option>
				</select>
				
				<label>Assunto:</label>
				<input type="text" name="txtAssunto" id="txtAssunto">
				
				<label>Mensagem:</label>
				<textarea name="txtMensagem" id="txtMensagem" rows="3"></textarea>
				
				<input class="btnSubmit" type="submit" id="btnSubmit" name="btnSubmit" value="ENVIAR MENSAGEM">
				
			</form>
			
			<p>
				SIG Quadra 6, Brasília-DF (Em frente ao Stadt Bier)<br>
				pedrogaliza@hotmail.com - (61) 81767638
			</p>
			
		</div>
		
		<div id="modalidades">
			
			<h2>Modalidades</h2>
			
	<table width="500" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>Modalidade</td>
            <td>Segunda</td>
            <td>Terça</td>
            <td>Quarta</td>
            <td>Quinta</td>
            <td>Sexta</td>
            <td>Sábado</td>
          </tr>
          <tr>
            <td>Jiu-jitsu</td>
            <td>09:30h<br />
              17:30h<br />
              19:00h</td>
            <td>07:00h<br />
              09:30h<br />
              12:30h<br />
              20:30h</td>
            <td>09:30h<br />
        17:30h<br />
        19:00h</td>
            <td>07:00h<br />
        09:30h<br />
        12:30h<br />
        20:30h</td>
            <td>09:30h<br />
        17:30h<br />
        19:00h</td>
            <td>12:30h</td>
          </tr>
          <tr>
            <td>Boxe</td>
            <td>12:00h</td>
            <td>-</td>
            <td>12:00h</td>
            <td>-</td>
            <td>12:00h</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Kick Boxing</td>
            <td>18:00h</td>
            <td>-</td>
            <td>18:00h</td>
            <td>-</td>
            <td>18:00h</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Muay Thai</td>
            <td>20:30h</td>
            <td>-</td>
            <td>20:30h</td>
            <td>-</td>
            <td>20:30h</td>
            <td>-</td>
          </tr>
          <tr>
            <td>MMA</td>
            <td>11:00h<br />
            16:00h</td>
            <td>11:00h<br />
        19:00h</td>
            <td>11:00h<br />
        16:00h</td>
            <td>11:00h<br />
        19:00h</td>
            <td>11:00h<br />
        16:00h</td>
            <td>11:00h</td>
          </tr>
          <tr>
            <td>Def. Pessoal</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>10:00h</td>
          </tr>
          <tr>
            <td>Karatê</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Judô</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Krav Maga</td>
            <td>07:00h</td>
            <td>-</td>
            <td>07:00h</td>
            <td>-</td>
            <td>07:00h</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Hapkido</td>
            <td>21:30h</td>
            <td>-</td>
            <td>21:30h</td>
            <td>-</td>
            <td>21:30h</td>
            <td>-</td>
          </tr>
        </table>
			
		</div>

		<div id="fiverounds">
		
			<h2>Five Rounds</h2>
			
			<p>
			A Academia de Lutas <span>5 ROUNDS</span> representa a concretização de um ideal que vem, oportunamente, atender às expectativas de demanda de um mercado exigente e eclético que se traduz desde o cidadão comum, apreciador das artes marciais, até o atleta de alta performance que busca o refinamento das suas aptidões, desenvolvimento da técnica e crescimento no processo de profissionalização como lutador.
			</p>
			<p>
			A proposta apresentada pela <span>5 ROUNDS</span>, em uma primeira análise, visa propiciar aos amantes de muitas modalidades de lutas a oportunidade de colocar em prática e dar vazão ao desejo de experimentar a vivência cotidiana da luta na amplitude aplicada em caráter individual, ou seja, cada aluno/atleta será explorado da melhor maneira possível de forma a ter ensejadas ainda mais suas qualidades e trabalhados seus pontos menos eficientes a fim de criar o necessário equilíbrio para a evolução dos seus objetivos em um embasamento personalizado.
			</p>
			<p>
			Àqueles que buscam a profissionalização nas artes marciais encontram disponíveis a atenção e dedicação de professores experientes e qualificados para suprir toda e cada uma de suas necessidades no que diz respeito à qualidade de treino, orientação na alimentação e suplementação, treinamentos específicos, variedade de técnicas em um ambiente acolhedor e de alto nível tendo, inclusive, a possibilidade de praticar e desenvolver suas habilidades em modalidades distintas e complementares.
			</p>
			<p>
			Não perca a oportunidade de vivenciar uma experiência única. Venha nos visitar e participe de uma aula experimental de qualquer modalidade disponibilizada pela ACADEMIA DE LUTAS <span>5 ROUNDS!!!</span>
			</p>
			
		</div>
		
	<!-- end container -->
	</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21166563-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>