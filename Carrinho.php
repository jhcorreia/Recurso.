<?php 
  session_start();
  include 'config.php';

  if (isset($_SESSION['Carrinho'])) {

  	
  	if (isset($_GET['id'])) {
  		
	    $arreglo = $_SESSION['Carrinho'];
	    $encontro = false;     
	    $numero = 0;

	   
	    for ($i=0; $i < count($arreglo) ; $i++) { 
	    	if ($arreglo[$i]['id'] == $_GET['id']) {
	    		$encontro = true;
	    		
	    		$numero = $i;
	    	}
	    }

	    if ($encontro) {
	    	$arreglo[$numero]['quantidade']++;
	    	$_SESSION['Carrinho'] = $arreglo;
	    }
        
        else{
        	$nome = "";
       	    $preco = 0;
       	    $imagem = "";
       	    $resultado = mysqli_query($conexao,"select * from produto where id =". $_GET['id']);
            
            while($resulset=mysqli_fetch_array($resultado)){
            	$nome = $resulset['nome'];
            	$preco = $resulset['preco'];
            	$imagem = $resulset['imagem'];
            }
           
            $nuevoproducto = array('id'=>$_GET['id'],
            	               'nome'=>$nome,
            	               'preco'=>$preco,
            	               'imagem'=>$imagem,
                               'quantidade'=>1);

            // metemos al objeto producto en el vector
            array_push($arreglo, $nuevoproducto);
            
            
            $_SESSION['Carrinho'] = $arreglo;
        }
  	}
	  	 

  	 
  }else{
    
       if (isset($_GET['id'])) {
       	    $nome = "";
       	    $preco = 0;
       	    $imagem = "";
       	    $resultado = mysqli_query($conexao,"select * from produto where id =". $_GET['id']);
            while($resulset=mysqli_fetch_array($resultado)){
            	$nome = $resulset['nome'];
            	$preco = $resulset['preco'];
            	$imagem = $resulset['imagem'];
            }
    
            $arreglo[] = array('id'=>$_GET['id'],
            	               'nome'=>$nome,
            	               'preco'=>$preco,
            	               'imagem'=>$imagem,
            	               'quantidade'=>1);
            $_SESSION['Carrinho'] = $arreglo;
       }

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
    <link rel="stylesheet" href="Css/Carrinho.css">
   <link rel="shortcut icon" href="imgtop3.png" />
   <style>
      body{
        background-image: url(./img/carrinho.jpg);
        background-repeat: no-repeat;
        background-size: cover;
      }

      main{
        min-width:450px;
        max-width:1120px;
        margin:auto;
        padding:40px;
        box-shadow:0px 0px 10px #000000;
        border-bottom-left-radius:20px;
        border-bottom-right-radius:20px; 
        background-color: #0e691d81;
      }
    
      .carrinho-produtos{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            color: #0e691d;
            padding: .5rem;
            padding-right: 1.5rem;
            border-radius: 1rem;
            margin-bottom: 15px;
        }
        .carrinho-img{
            width: 4rem;
            border-radius: 1rem;
        }

        .eliminar{
            color: red;
            margin-top: 5px;
        }
       
        .carrinho-eliminar{
            border: 0;
            background-color: transparent;
            color: red;
            cursor: pointer;
        }

        .total-compras{
          color: #000000;
          border-radius: 20px;
          width: 400px;
          height: 70px;
          background-color: #e29f0de3;
          margin-bottom: 10px;    
          
        }  
        
        .total-letra{
          font-size: 1.5rem;
          text-decoration: none;
          color: white;
        }
    </style>
    <title>Carrinho</title>
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
                    <a class="nav-link" href="Produtos.php">Produtos  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
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
                        <a class="nav-link active" href="##" >Carrinho  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
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
      <section>
          <?php  
              $total = 0;
              if (isset($_SESSION['Carrinho'])){
                  
                  $total = 0;
                  $datos = $_SESSION['Carrinho'];
                  
                  for ($i=0; $i < count($datos); $i++) { 
          ?>     
                      <div >
                          <section class="carrinho-produtos">
                              <img class="carrinho-img" src="./produtos/<?php echo($datos[$i]['imagem']) ?>" alt=""><br>
                              <span class="carrinho-titulo"><?php echo($datos[$i]['nome']) ?></span><br>
                              <span class="carrinho-preco"> Preço:<?php echo "<br>"?> <?php echo($datos[$i]['preco']) ?> Akz</span><br>
                              <span class="carrinho-quantidad">Quantidade:
                              <?php echo "<br>"?>
                                  <input type="" value="<?php echo($datos[$i]['quantidade'])?>" size='1' data-preco="<?php echo($datos[$i]['preco']) ?>" data-id="<?php echo($datos[$i]['id']) ?>">
                                kg</span><br>
                              <span class="carrinho-subtotal">Subtotal:<?php echo "<br>"?><?php echo($datos[$i]['quantidade']*$datos[$i]['preco'])?> Akz</span>
                              <p ><a href="##" class="eliminar" data-id="<?php echo($datos[$i]['id']) ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                      <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                      </svg></a>
                              </p>
                          </section>
                      </div>   	

          <?php    
                      $total = $total + $datos[$i]['preco'] * $datos[$i]['quantidade'];    
                  }
          
              } // Mendagem de carrinho vazio
              else{
                  echo "<div><h2>Seu carrinho de compras está vazio </h2></div><br>";
              }
              // Calculo total dos produtos comprados 
              echo "<br><br><button  class='total-compras'><a  class='total-letra' id='total'>Total de Compras: " .$total. " Akz</a></button><br>";
          ?>	
          
          
        </section>
        
    </main>
</body>
</html>