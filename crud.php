

            <!DOCTYPE html>
        <html lang="pt">
        <link rel="shortcut icon" href="imgsp/Escudo.png" width="20" height="20"/>
        <head>
           <meta charset="utf-8"/>
            <meta content="Author" content="Caio Burgos 41512650"/> 
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="css/cad_index.css"/>
            <title> Cadastro </title>    
        </head>
            <body>
            <header>
              <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             <a class="navbar-brand" href="index.php"><img height="30" width="30" src="imgsp/Escudo.png"/></a>
        </div>

       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="Historia.php">História <span class="sr-only">(current)</span></a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notícias<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="Proxima_rodada.php">Próxima Rodada</a></li>
                <li><a href="Tabela_Brasileiro.php">Tabela do Brasileirão</a></li>
                <li><a href="Historia.php">Novidades</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="Mercado.php">Mercado</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
                <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clube<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="Escudo.php">Escudo</a></li>
                <li><a href="Estrutura.php">Estrutura</a></li>
                <li><a href="Elenco.php">Elenco</a></li>
                </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acompanhe os jogos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.radiocoringao.com.br/">Radio</a></li>  
            </ul>
            </li>    
            <li><a href="index1.php">CRUD</a></li>  
            <li><a href="Fale_conosco.php">Fale conosco</a></li>  
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="  ">
                </div>
                <button type="submit" class="btn btn-default">Pesquisar</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.fieltorcedor.com.br/">Sócio</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parceiros <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

           
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
           
            <script src="js/bootstrap.min.js"></script>  
            </header>
              <aside id="nave">
                 <ul class="nav nav-pills nav-stacked">

                <li role="presentation"><a href="index.php">Inicio</a></li>
             <li role="presentation"><a href="novidades.php">Novidades</a></li>
             <li role="presentation"><a href="http://www.fieltorcedor.com.br /">Sócio Torcedor</a></li>
             <li role="presentation"><a href="Historia.php">História</a></li>
             <li role="presentation"><a href="http://www.radiocoringao.com.br/">Radio</a></li>
             <li role="presentation"><a href="Tabela_Brasileiro.phpBrasileiro.php">Tabela</a></li>
             <li role="presentation"><a href="#"><img src="imgsp/fb.jpg" width="20" height="20"/></a></li>
             <li role="presentation"><a href="#"><img src="imgsp/twitter.jpg" width="20" height="20"/></a></li>


        </ul>
            </aside>
          
            
        
<body>
    <div class="d1">
        <div class="d2"> 
     
    <?php
    
        $headers = "Content-type: text/html";
    $opcao = $_POST['tipoCRUD'];
    switch($opcao)
    {
        case "C":
            $formulario = "<h3>CRIAR</h3>
                <form action='create.php' method='POST'>
                    nome: <input type='text' name='nome'/><br/>
                    idade: <input type='text' name='idade'/><br/>
                    Tia: <input type='text' name='login'/><br/>
                    senha: <input type='text' name='senha'/><br/><br/>
                    <input type='submit' value='INSERIR'/>
                </form>";
        break;
        
                
        case "R":
            $formulario = "<h3>BUSCAR</h3>
                <form action='read.php' method='POST'><br/>
                    <input type='submit' value='BUSCAR'/>
                </form>";
        break;
        
        case "U":
            $formulario = "<h3>ATUALIZAR</h3>
                <form action='update.php' method='POST'>
                     nome: <input type='text' name='nome'/><br/>
                    idade: <input type='text' name='idade'/><br/>
                    login: <input type='text' name='login'/><br/>
                    senha: <input type='text' name='senha'/><br/><br/>
                    <input type='submit' value='ATUALIZAR'/>
                </form>";
        break;
        
        case "D":
           $formulario = "<h3>APAGAR</h3>
                <form action='delete.php' method='POST'>
                    Tia: <input type='text' name='login'/><br/><br/>
                    <input color='#000000' type='submit' value='REMOVER'/>
                </form>";
        break; 
    }
    echo $formulario;

?>
            </div>
    </div>
        

           
        <footer id="baixo">
 Desenvolvido por: Caio Burgos| Criação/Layout: Caio Burgos SCCP.Net 2016 - Todos os direitos reservados © Para um grande clube, um grande site! 26/04/2016
        </footer>

        </html>