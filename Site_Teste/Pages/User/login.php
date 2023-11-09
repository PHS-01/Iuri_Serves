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
        <title>Login</title>
    </head>
        <style>
            section{
                position: relative;
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
                color:orange;
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

            @keyframes fly {
                from {
                    bottom: -20%;
                    left: -10%;

                }
                30%{
                    bottom: 65%;
                }

                to {
                    bottom: -20%;
                    left: 110%;
                }
                
            }
            
            @keyframes fly-line {
                from {
                    left: -10%;
                }

                to {
                    left: 110%;
                }
            }
        </style>
    <body>
        <div class="border border-warning" style="position:fixed; left: 85%; top:5%;z-index: 1000 !important; background-color:white">
            <a class="link-offset-2 link-underline link-underline-opacity-0 m-2" href="\">VOLTAR</a>
        </div>
        <section style="background-image: url('/Elements/ceu.png'); background-size: 100%; width: 100%; height: 100vh;">
            <div style="display:flex; justify-content: center; text-align: center; align-items: center; margin:20vh;">
                <div class="card border border-warning" style="width: 40vw; height: 70vh; z-index: 1000 !important;">
                    <div class="card-body">
                        <h1 class="card-title mb-5" style="text-align: center; color:orange">Login</h1>
                        <h6 class="card-subtitle mb-4" style="text-align: center;"> Nao perca tempo, crie o seu login! :) </h6>
                        <form action="/User/Login" method="POST" >
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">informe o seu e-mail:</label>
                            <input class="form-control mb-4" id="exampleInputEmail1" type="email" name="email" placeholder="usuário@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">informe a sua senha:</label>
                            <input class="form-control mb-4" id="exampleInputPassword1" input type="password" name="password" placeholder="Senha">
                        </div>
                        <div style="text-align: right; justify-content:right; align-items: right;">
                            <label class="mb-4 text-dark">ja possui um <a id="frase" class="link-offset-2 link-underline link-underline-opacity-0" href="/Register">cadastro</a>?</label>

                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn custom-orange w-50">Entrar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="character" style="bottom: -20%; left: -10%; animation: fly 8s 3s infinite;">
                <img src="/Elements/capinha.gif" alt="Logo" width="125" height="125">
            </div>

            <div id="character" style="animation: fly-line 18s 5s infinite; bottom: 80%; left: -10%;">
                <img src="/Elements/tails.gif" alt="Logo" width="120" height="120">
            </div> 
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>