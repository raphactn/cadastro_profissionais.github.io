<?php
if(isset($_POST['submit']))
{
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $lagradouro = $_POST['lagraouro'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $estado = $_POST['estado'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,cep,cidade,lagradouro,bairro,numero,estado) 
    VALUES ('$nome','$email','$telefone','$cep','$cidade','$lagradouro','$bairro','$numero','$estado')");  
}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Pintor</title>
</head>

<body>

    <div class="container conteudo">
        <div class="row">
            <div class="col-md-6 second">
            </div>
            <div class="col-md-6 form">
                <!--FORM-->
                <form action="index.php" method="POST">
                <h3>Cadastro de</h3>
                <h1>Profissional</h1>
                <div class="col-auto">
                    <label class="form-label">Nome</label>
                    <input name="nome" id="nome" type="text" class="form-control" required>
                </div>
                <div class="col-auto">
                    <label class="form-label">E-mail</label>
                    <input name="email" id="email" type="email" class="form-control" required>
                </div>
                <div class="col-auto">
                    <label for="inputTel" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" onkeypress="mask(this, mphone);"
                        onblur="mask(this, mphone);" required>
                </div>
                <div class="col-auto">
                    <label for="inputCep" class="form-label">CEP</label>
                    <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                        required onblur="pesquisacep(this.value);" />
                </div>
                <div class="col-auto">
                    <label for="inputAddress" class="form-label">Lagradouro</label>
                    <input name="lagraouro" type="text" class="form-control" id="rua" required>
                </div>
                <div class="col-auto">
                    <label for="inputCity" class="form-label">Cidade</label>
                    <input name="cidade" type="text" class="form-control" id="cidade" required>
                </div>
                <div class="col-auto">
                    <label for="inputEstado" class="form-label">Estado</label>
                    <input name="estado" type="text" class="form-control" id="uf" required>
                </div>
                <div class="col-auto">
                    <label for="inputZip" class="form-label">Numero</label>
                    <input type="text" name="numero" class="form-control" id="inputNum" placeholder="Opcional">
                </div>
                <div class="col-auto">
                    <label for="inputBairro" class="form-label">Bairro</label>
                    <input name="bairro" type="text" class="form-control" id="bairro" required>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <button type="submit" name="submit" class="btn">Cadastrar</button>
                    </div>
                    <div class="col-auto">
                    <a href="procura.php" class="btn" >Consultar</a>
                    </div>
                </div>
                
            </div>
        </form>
        </div>
        <input name="ibge" type="text" class="form-control" id="ibge" style="display: none;">
    </div>


    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>