<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="background-image: url('/Elements/jungle-background.png');">
    <nav class="navbar navbar-expand-lg" style="background-color: #178f05; background:linear-gradient(to bottom, #0d5520 5%, #3a990a 100%);">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/Elements/Sapo_Mimoso.gif" alt="Logo" width="50" height="50" class="d-inline-block">
            </a>
            <a class="navbar-brand" style="color:white;" href="/">Home</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php if (! isset($_SESSION['user'])) {?>
                                <a class="btn" style="background-color: #22ff00; background:linear-gradient(to bottom, #16a33c 5%, #5bdf19 100%); color:white;" href="/Cadastro" role="button">Cadastra-se</a>
                                <a class="btn" style="background-color: #1b0fc7; background:linear-gradient(to bottom, #1622c2 5%, #0f4ed8 100%); color:white;" href="/Login" role="button">Login</a>
                            <?php }else{ ?>
                                <a href="/Logout" class="btn" style="background-color: #1b0fc7; background:linear-gradient(to bottom, #1622c2 5%, #0f4ed8 100%); color:white;">Sair</a>
                            <?php }?>
                        </li>
                    </ul>
                </div>
            
            
        </div>
    </nav>
    <?php if (isset($_SESSION['user'])) { ?>
        <div class="cotainer bg-light m-5">
            <center>
                <div class="mb-5">
                    <h1>Bem vindo <?php echo $_SESSION['user']?>!!</h1>
                    <hr>
                    <p>blablablablablablablablablablablablablablablablablablablablablablablablablablabla</p>
                </div>

                <hr>

                <h1>Enviar sua foto para a Galeria!!</h1>
            </center>

            <hr>

            <div class="container">

                <form method="POST" enctype="multipart/form-data">
                    <label class="form-label" for="conteudo">Enviar imagem:</label>
                    <input class="form-control form-control-lg" type="file" name="pic" accept="image/*">
                    <div align="center" class="my-5">
                        <button type="submit" class="btn btn-success">Enviar imagem</button>
                    </div>
                </form>

                <hr>

                <?php
                    if(isset($_FILES['pic'])){
                        $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
                        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
                        $dir = './Images/'; //Diretório para uploads
                        
                        move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
                        echo '<div class="alert alert-success" role="alert" align="center">
                                <img src="./Images/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> 
                                <br>
                                Imagem enviada com sucesso!
                                <br>
                                <a href="/"><button class="btn btn-default">Enviar nova imagem</button></a>
                                </div>';

                        save("INSERT INTO imgs ('name') values('{$new_name}')");                      
                    }
                ?>
                <hr>
                <h1>Galeria de Fotos!!</h1>
                <hr>
                <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <?php
                    $result = find("SELECT * FROM imgs order by id desc limit 1");
                    echo $result;
                    //for ($i=0; $i < $i++) { 
                        # code...
                    //}
                ?>
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                    </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    <?php }?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>