<?php
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'consulta');

try {
    $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    exit();
}

$sql = "SELECT * FROM consulta; 

try {
    $result = $PDO->query($sql);
    $contatos = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Erro na consulta ao banco de dados: ' . $e->getMessage();
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body style="background-color: grey;">
    <div class="container" style="background-color: white; padding: 0;">
        <header>
    <html lang="pt-br">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>pw0603</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        </head>
         
         <div class="d-flex flex-column wrapper" >
                <nav class="navbar navbar-expand-lg  bg-lg  border-bottom shadow-sm mb-3" style="background-color: rgb(31, 87, 192);">
                    <div class="container">
                             <a class="navbar-brand text-white" href="/">SISTEMA WEB</a>
                         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target=".navbar-collapse">
                             <span class="navbar-toggler-icon"></span>
                         </button>
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav flex-grow-1">
                                     <li class="nav-item">
                                        <a class="nav-link text-white active " href="index.php">Cadastrar</a>
                                    </li>
                                    <li class="nav-item">
                                     <a class="nav-link text-white" href="consultar.php">Consultar</a>
                                    </li>
                             </ul>
                            </div>
                    </div>
                </nav>

                <br>

        <div class=" container text-center table ">
            <div class="row">
                <div class="col">
                  <h4 class="text-start"> Consultar - Contatos Agendados </h4>
                    <div class=" table-2">
                        <div class=" bg-primary ">
                            <h5>Nome</h5>
                        </div>
                        <div class="bg-primary ">
                            <h5>Telefone</h5>
                        </div class="bg-primary ">
                        <div class="bg-primary ">
                            <h5>Origem</h5>
                        </div>
                        <div class="bg-primary ">
                            <h5>Contato</h5>
                        </div>
                        <div class="bg-primary ">
                            <h5>Observação</h5>
                        </div>
                        <div class="bg-primary ">
                            <h5>Ação</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?php echo $row['Nome']; ?></td>
                <td><?php echo $row['Telefone']; ?></td>
                <td><?php echo $row['Origem']; ?></td>
                <td><?php echo $row['Contato']; ?></td>
                <td><?php echo $row['Observacao']; ?></td>
                <td><?php echo $row['Acao']; ?></td>
            </tr>
        <?php endforeach;

    </div>
</body>
</html>
