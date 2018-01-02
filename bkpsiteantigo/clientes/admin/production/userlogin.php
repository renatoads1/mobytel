<?php
if(isset($_COOKIE['loginAutomatico'])){
	header("Location: validaLogin.php");
}
else if(isset($_COOKIE['senhaLogin'])){
	$userName = $_COOKIE['loginCliente'];
	$senhaUser = $_COOKIE['senhaLogin'];
}else if(isset($_COOKIE['loginCliente'])){
	$userName= $_COOKIE['loginCliente'];
} else {
	$userName = "";
}

include("headerUm.php");
?>
<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <section class="well">
                 <h3 class="bg-primary text-center">Faça seu Login - Clientes</h3>
                <form id="formLogin" class="form-sigin" action="validaLogin.php" method="POST" role="form">
                <div class="form-group">
                        <label for="emailClienteLogin">Usuário: </label>
                        <input type="text" class="form-control" id="userLogin" name="userLogin" placeholder="Digite seu Usuário" value="<?php echo $userName; ?>" />
                    </div>
                <div class="form-group">
                        <label for="senhaClienteLogin">Senha: </label>
                        <input type="password" class="form-control" id="userSenhaLogin" name="userSenhaLogin" placeholder="Digite sua Senha" value="<?php if(isset($senhaUser)) echo $senhaUser; ?>" />
                    </div>
                    <div class="checkbox">
                        <label for="conectado">
                          <input type="checkbox" name="loginAutomatico" id="loginAutomatico" value="aut" /> Login Automático
                        </label><br />
                        <label for="lembrarSenha">
                          <input type="checkbox" name="lembrarLogin" id="lembrarLogin" value="lmb"/> Lembrar Senha
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" >Acessar</button>
                        <button type="reset" class="btn btn-info" >Limpar Dados</button>

                    </div>         
                </form>
            </section>
                </div>
                </div>
    </div>


<?php
include("footerUm.php");
?>