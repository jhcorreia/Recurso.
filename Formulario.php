<?php

    if (isset($_POST['submit']))
    {         
         //Conectar a base de dados com php
         include 'config.php';

        //Criar varisveis que estão na base de dados
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone =$_POST['telefone'];
        $sexo =$_POST['genero'];
        $endereco =$_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,endereco)
        VALUES ('$nome','$email','$senha','$telefone','$sexo','$endereco')");
       
       //ALERTA SCRIPT
       echo"<script type='text/javascript'>alert('USUÁRIO CADASTRADO COM SUCESSO')</script>";
       header('refresh: 0; url=./formulario.php');  
    }
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/Login.css">
    <link rel="shortcut icon" href="imgtop3.png" />
    <title>Cadastro</title>
    <style>
      body{
        background-image: url(./img5.jpg);
        background-repeat: no-repeat;
        background-size: cover;
      }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="##">Menu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="Home.php">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="Produtos.php">Produtos  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                </svg></a>
              </li>

                  <li class="nav-item">
                    <a class="nav-link - active" href="#">Login</a>
                  </li>   

                  <li class="nav-item">
                    <a class="nav-link" href="Faleconosco.php">Fale Conosco</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="Carrinho.php" >Carrinho <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                    </svg></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg></a>
                  </li> 
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
            </form>
          </div>
        </div>
      </nav>
    
    <main>
        <div class="container-xxl">
            <form action="Formulario.php" method="POST">
                <fieldset>
                    <legend><b>CADASTRO</b></legend>
                    <br><br>
                    <!----------- Input  Nome ------------>
                        <label  class="input">Nome:</label>
                        <input type="text" name="nome" id="nome" class="inputBox" required>
                    <br><br>
                    <!------------ Input  Email ------------>
                        <label  class="input">Email:</label>
                        <input type="text" name="email" id="email" class="inputBox" required> 
                    <br><br>
                    <!------------ Input  Password ------------>
                        <label class="input">Password:</label>
                        <input type="password" name="senha" id="senha" class="inputBox" required>
                    <br><br>
                    <!------------ Input  Telefone ------------>
                        <label class="input">Telefone:</label>
                        <input type="tel" name="telefone" id="telefone" class="inputBox" required>
                    <br><br>
                        <!------------ Input  Sexo ------------>
                    <p class="input">Sexo:</p>
                    <input type="radio" id="feminino" class="inputB" name="genero" value="feminino" required>
                    <label for="feminino" class="input">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" class="inputB" name="genero" value="masculino" required>
                    <label for="masculino" class="input">Masculino</label>
                    <br><br>
                    <!------------ Input  Endereço ------------>
                    <label class="input">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" class="inputBox" required>
                    <br><br>
                        <a  class="fazer_login1" href="Login.php">&nbsp;&nbsp;&nbsp;Fazer Login &nbsp;&nbsp;&nbsp;</a>
                        <br><br>
                    <input type="submit" name="submit" id="submit" value="Cadastrar-se">
                    <br><br>
                </fieldset>
            </form>
         </div>         
        </div>
    </main>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>