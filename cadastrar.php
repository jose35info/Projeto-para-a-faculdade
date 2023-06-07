<?php
	require_once 'CLASSES/usuarios.php';
	$u = new Usuario();
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Projeto Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS\estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Playfair+Display:ital,wght@0,400;1,400;1,500;1,600&family=Sen:wght@400;700;800&family=Ubuntu:ital,wght@0,500;0,700;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="principal">
      <img  class="logo" src="IMG\logo\logo.png"> <span>TecNews Noticias</span>
      <div class="sub-div">
        <nav class="nav-bar">
          <li><a href="#">Últimas noticias</a></li>
          <li><a href="login.php">logar</a></li>
          
        </nav>
      </div>
    </div>
  </header>
<div id="corpo-form">
	<h1>Cadastrar</h1>
	<form method="POST">
		<input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
		<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
		<input type="email" name="email" placeholder="Usuário" maxlength="40">
		<input type="password" name="senha" placeholder="Senha" maxlength="15">
		<input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
		<input type="submit" class="btn btn-primary" value="Cadastrar">
	</form>
</div>
<?php
//verificar se clicou no botao
if(isset($_POST['nome']))
{
	$nome = addslashes($_POST['nome']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	//verificar se esta preenchido
	if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
	{
		$u->conectar("tela_login","localhost","root","");
		if($u->msgErro == "")//se esta tudo ok
		{
			if($senha == $confirmarSenha)
			{
				if($u->cadastrar($nome,$telefone,$email,$senha))
				{
					?>
					<div id="msg-sucesso">
					Cadastrado com sucesso! Acesse para entrar!
					</div>
					<?php
				}
				else
				{
					?>
					<div class="msg-erro">
						Email ja cadastrado!
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div class="msg-erro">
					Senha e confirmar senha não correspondem
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro;?>
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
</body>
</html>