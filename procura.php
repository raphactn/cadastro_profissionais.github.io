<?php
if(isset($_POST['submit']))
{
include_once('config.php');
$cidade = $_POST['cidade'];
$sql = "SELECT * FROM usuarios WHERE cidade = '$cidade'";
$result = $conexao->query($sql);
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
    <title>procurar por Pintor</title>
</head>

<body>

    <div class="container conteudo">
        <div class="row">
            
            <div class="col-md-6 form">
                <!--FORM-->
                <form action="procura.php" method="POST">
                <h3>Procure Profissionais</h3>
                <h1>Na sua Região!</h1>
                <div class="col-auto">
                    <label for="inputCep" class="form-label">CEP</label>
                    <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                        required onblur="pesquisacep(this.value);" />
                </div>
                <div class="col-auto">
                    <input name="lagraouro" type="text" class="form-control" id="rua" style="display: none;">
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
                    <input name="bairro" type="text" class="form-control" id="bairro" style="display: none;">
                </div>
                <div class="row">
                    <div class="col-auto">
                        <button  type="submit" name="submit" class="btn " id="btnP" onclick="pesquisa()">Procurar</button>
                    </div>
                    <div class="col-auto">
                       <a href="index.php" class="btn">Cadastrar Novo</a>
                    </div>
                </div>
                
            </div>
        </form>
        <div class="col-md-6 second2">
            <div class="col-auto" id="resultado">
                <?php
                if(isset($_POST['submit'])){
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<p>". "Nome: " .$user_data['nome']."<br>"."Contato: ".$user_data['telefone']."</p>". "<a>";
                }
              
            }
          
                ?>
            </div>
        </div>
        </div>
        <input name="ibge" type="text" class="form-control" id="ibge" style="display: none;">
    </div>


    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>