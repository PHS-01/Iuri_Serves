
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body style="background-image: url('/Imagens/doutora.jpg'); background-size: 100%;">
    <nav class="navbar navbar-expand-lg" style="background-color: #033942; background:linear-gradient(to bottom, #04b2d1 5%, #00d9ff 100%);">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="/">
                    <img src="/Imagens/logo.jpg" alt="Logo" style="border-radius: 2vh;" width="50" height="50" borde-radius="2px" class="d-inline-block">
                </a>
                <a class="navbar-brand" style="color:white;" href="/">Página de consultas</a>
            </div>
        </div>
            <div class="container-fluid justify-content-end">
                <a href="/logout" class="btn btn-primary">Sair</a>
            </div>
    </nav>

    <div class="container justify-content-center" style="padding-top: 10vh;" >
            <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
            <div class="carousel-item active">
            <img src="/Imagens/vacina.jpg" style=" width: 180vh; height: 70vh;" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block" >
                <h5 class="text-primary" >Venha se vacinar!</h5>
                <p class="text-primary" >Estamos realizando a vacinação todos os dias.</p>
            </div>
        </div>
            <div class="carousel-item">
            <img src="/Imagens/dentista.avif" style=" width: 180vh; height: 70vh;" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-primary">Marque a sua consulta ortodôntica!</h5>
                <p class="text-primary">Consultas de Segunda à Quinta.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="/Imagens/pediatra.jpg" style=" width: 180vh; height: 70vh;" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-primary" >Sua criança já fez o check-up?</h5>
                <p class="text-primary" >Consultas de Segunda à Sexta!.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>