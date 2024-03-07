<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="whidth=device-whidth, initial-scale=1"> <!--Aqui o navegador redimensiona a escala automaticamente-->
        <title>MultiPlataforma - Web</title><!--Nomeia a Aba-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><!--Ligação com o Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script><!--Todas as Classes estão incluidas agora-->
        <style>
            body{
                background-color: #708090;
            }
        </style>
    </head>
    <body>
        <center><h1><b>MultiPlataforma - Web</b></h1></center>
        <hr/><!--Linha divisória -->
        <br/><!--Pula Linha-->
        <br/>
        <main>
            <div class="container">
                <div class="row row-cols-2 row-cols-md-4 mb-4 text-center">
                    <div class="col-md-12">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#708090" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>&nbsp;<b>Edição da Pessoa</b></h4><!--&nbsp; é pra Pular espaço-->
                            </div>
                            <div class="card-body text-start">
                                <?php
                                    include 'conecta.php';
                                    $id= $_GET['id'];
                                    $sql = "SELECT * FROM pessoa WHERE id=$id";
                                    $query = $conn->query($sql);
                                    while ($dados = $query->fetch_array()) {
                                        $nome = $dados['nome'];
                                        $idade = $dados['idade'];
                                        $cidade = $dados['cidade'];
                                    }
                                ?>
                                    <form action="edpessoa.php?id=<?php echo $id;?>" method="post">
                                    <label>Nome:</label>
                                    <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>" required/><!--Esse Required é um campo requirido(obrigatório)-->
                                    <label>Idade:</label>
                                    <input type="number" class="form-control" name="idade" value="<?php echo $idade; ?>" required/>
                                    <label>Cidade:</label>
                                    <input tye="text" class="form-control" name="cidade" value="<?php echo $cidade; ?>" required/>
                                    <br/>
                                    <button type="submit" class="btn btn-outline-success"><b>Editar</b></button>
                                    </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>