<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Metadados da pagina OBS: Não sei o que faz -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="/Fonts/fonts.css">

        <!-- Titulo da pagina -->
        <title>Cadastro</title>
    </head>
        <style>
            section{
                position: static;
                overflow: hidden;
            }
             #frase {
                color:blue;
                font-size: 3vh; 
            }

            a {
                font-family: 'Mario-Kart-DS'; 
                font-size: 5vh;
                color:orange;
            }

            h1{
                font-family: '04B_30__'; 
                font-size: 5vh; 
            }

            h6{
                font-family: '04B_30__'; 
                font-size: 2vh; 
            }


            label, button{
                font-family: 'Mario-Kart-DS'; 
                font-size: 3vh; 
                color:orange
            }

            .custom-orange {
                background-color: #FFA500; 
                border-color: #FFA500; 
                color: #fff; 
            }

            .custom-orange:hover {
                background-color: #FF8C00; 
                border-color: #FF8C00;
                color: #fff;
            }

            #character{
                position: fixed;
            }

            @keyframes run {
                from {
                    bottom: 40%;
                    left: -10%;
                }
                35%{
                    bottom: 6%;
                }

                to {
                    bottom: 40%;
                    left: 110%;
                }
            }
        </style>
    <body>
        <div class="border border-warning" style="position:fixed; left: 85%; top:5%;z-index: 1000 !important; background-color: #541c0a">
            <a class="link-offset-2 link-underline link-underline-opacity-0 m-2" href="\">VOLTAR</a>
        </div>
        <section style="background-image: url('/Elements/subsolo.png'); background-size: 100%; width: 100%; height: 100vh;">
            <div style="display:flex; justify-content: center; text-align: center; align-items: center; margin:10vh;">
                <div class="card border border-warning" style="width: 40vw; height: 80vh;z-index: 1000 !important;">
                    <div class="card-body">
                        <h1 class="card-title mb-5" style="text-align: center; color:orange">Cadastro</h1>
                        <h6 class="card-subtitle mb-4" style="text-align: center;">preencha o formulario corretamente!</h6>
                        <form action="/User/Register" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">informe o seu nome completo:</label>
                            <input class="form-control mb-2" id="exampleInputEmail1" type="text" name="name" placeholder="Nome completo" >
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">informe o seu e-mail:</label>
                            <input class="form-control mb-2" id="exampleInputEmail1" type="email" name="email" placeholder="usuário@gmail.com">
                        </div>

                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">crie a sua senha:</label>
                            <input class="form-control" id="exampleInputPassword1" input type="password" name="password" placeholder="Senha">
                        </div>
                        <div style="text-align: right; justify-content:right; align-items: right;">
                            <label class="mb-2 text-dark">ja possui um <a id="frase" class="link-offset-2 link-underline link-underline-opacity-0" href="/Login">login</a>?</label>

                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn custom-orange w-50">Criar</button>
                        </div>
                        </form>
                    </div>
                </div>  
            </div>
            <div id="character" style="animation: run 10s 3s infinite;bottom: 40%;left: -10%;">
                <img src="/Elements/burrinha.gif" alt="Logo" width="150" height="150">
            </div>   
            <div id="character" style="bottom: 65%;left: 70%;">
                <img src="/Elements/knuckles.gif" alt="Logo" width="150" height="150">
            </div>   
        </section>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>