<?php 
require_once 'CLASSES/usuarios.php';
$u = new Usuario();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS\estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Playfair+Display:ital,wght@0,400;1,400;1,500;1,600&family=Sen:wght@400;700;800&family=Ubuntu:ital,wght@0,500;0,700;1,500;1,700&display=swap" rel="stylesheet">
    <title>Login de Usúario</title>
</head>
<body>
<div class="alert alert-primary" role="alert" style="color:black; font-size:30px;">
 Seja bem vindo a area tec!
</div>
<header>
    <div class="principal">
      <img  class="logo" src="IMG\logo\logo.png"> <span>TecNews Noticias</span>
      
      <div class="sub-div">
        <nav class="nav-bar">
          <li><a href="https://olhardigital.com.br/">Últimas noticias</a></li>
          <li><a href="#">voltar</a></li>
          
        </nav>
      </div>
    </div>
  </header>
  
  <div class="container">
  <div id="corpo-form">
    <h1>Entrar</h1>
  <form method="POST">
  <input type="email" name="email" placeholder="Usuário" required>
  <input type="password" name="senha" placeholder="Digite sua senha"  required>
  <input type="submit" class="btn btn-primary" value="Acessar">
  <p>Ainda não é inscrito? <a class="cadastro" href="cadastrar.php"><strong>Cadastre-se</strong></a></p>
</form>
<a href="#"><i class="fa-brands fa-twitter"></i></a>

</div>
<?php
if(isset($_POST['email']))
{
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	
	if(!empty($email) && !empty($senha))
	{
		$u->conectar("tela_login","localhost","root","");
		if($u->msgErro == "")
		{
			if($u->logar($email,$senha))
			{
				header("location: AreaPrivada.php");
			}
			else
			{
				?>
				<div class="msg-erro">
					Email e/ou senha estão incorretos!
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro; ?>
			</div>
			<?php
		}
	}else
	{
		?>
		<div class="msg-erro">
			Preencha todos os campos!
		</div>
		<?php
	}
}
?>
</div>
<footer class="rodape">
  <p>@Todos os direitos reservados
  <?php
   echo date('Y')
  
  ?>
  </p>
  

  
  </footer>
  
</body>
</html>
