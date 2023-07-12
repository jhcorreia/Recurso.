<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/Produtos.css">
    <link rel="shortcut icon" href="imgtop3.png" />
    <title>Produtos</title>
    <style>
      body{
        background-image: url(./img5.jpg);
        background-repeat: no-repeat;
        background-size: cover;
      }

      main{
        min-width:450px;
        max-width:1190px;
        margin:auto;
        padding:40px;
        background-color: #fff;
        box-shadow:0px 0px 10px #000000;
        border-bottom-left-radius:20px;
        border-bottom-right-radius:20px;
        
      }
        .produtos-grid{
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1rem;
        }
        
        .titulo{
          font-size: 1.1rem;
        }
        .container-produtos{
            width: 100%;
            height: 290px;
            margin-bottom: 30px;
        }
        .produtos{
            background-color: #e9ecea;
            border-radius: 15px;
            margin-left: 1%;
            margin-top: 6%;   
        }

        .produtos-img{
            width: 200px;
            height: 200px;
            border-radius: 1rem;
        }

        .produtos-img:hover{
            transform: scale(0.8) translateY(-3px);
            cursor: pointer;
            transition: 0.3s;
        }

        .produtos-detalhes{
            text-align: center;
            background-color:#0b9735;
            color: #fff;
            padding: .5rem;
            margin-top: -2rem;
            border-radius: 1rem;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: .25rem;  
        }

        .botao-comprar {
            border: 0;
            background-color: #eebb15;
            padding: .4rem;
            text-transform: uppercase;
            border-radius: 2rem;
            cursor: pointer;
            border: 2px solid white;
            transition: background-color .2s, color .2s;
        }

        .botao-comprar a{
            color: #000;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .botao-comprar:hover{
            background-color: #b48b03;
        }

        .botao-comprar a:hover{
            color: #fff;
        }
    </style>
    

    <!--Java script dar acção no botão + - ;;-->
    <script type="text/javascript">
        function id( el ){
            return document.getElementById( el );
          }
          window.onload = function(){
            id('plus').onclick = function(){
                    id('format').value = parseInt( id('format').value )+1;
            }
            id('minus').onclick = function(){
                    if( id('format').value>0 )
                            id('format').value = parseInt( id('format').value )-1;  
            }
          } 
        </script>
             
</head>
<body>
    <header>
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
                <a class="nav-link active" href="#">Produtos  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                </svg></a>
              </li>

                  <li class="nav-item">
                    <a class="nav-link" href="Login.php">Login</a>
                  </li>   

                  <li class="nav-item">
                    <a class="nav-link" href="Faleconosco.php">Fale Conosco</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="Carrinho.php" >Carrinho  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
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
              <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="produtos-grid">
          <?php
            include 'config.php';
            $resultado = mysqli_query($conexao,"select * from produto");
            while ($f = mysqli_fetch_array($resultado)) {
            ?>
            <div class="container-produtos">
                <div class="produtos">
                    <img class="produtos-img" src="./produtos/<?php echo $f['imagem'];?>"><br>
                    <div  class="produtos-detalhes">
                    <h3 class="titulo"><?php echo $f['nome'];?></h3>
                    <span><?php echo $f['kg'];?> kg</span>
                    <span><?php echo $f['preco'];?> Akz</span>
                    <button class="botao-comprar"><a  href="./Carrinho.php?id=<?php echo $f['id'] ?>">Comprar</a></button>
                </div>
                </div>
            </div>
        <?php
            }
        ?>    
            </div>
      </section>
    </main>
      
</body>
</html>