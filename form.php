<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Cadastro do Aluno</h1>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <form action="recebe.php" method="post">
            <label for="text_rm">RM do Aluno</label>
            <input class="form-control" type="text" name="text_rm" id="text_rm">

            <label for="text_nome">Nome do Aluno</label>
            <input class="form-control"type="text" name="text_nome" id="text_nome">

            <label for="data_matricula"></label>
            <input class="form-control"type="date" name="data_matricula" id="data_matricula">
        
            <input class="btn btn-primary" type="submit" value="Enviar">
            <input class="btn btn-secondary" type="reset" value="Cancelar">
        </form>

        </div>
        <div class="col-3"></div>
    </div>

    </div>
    
    
        
        

</body>
</html>