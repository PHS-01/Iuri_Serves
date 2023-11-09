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
        <title>HOME</title>

        <style>
            section{
                position: relative;
                overflow: hidden;
            }

            h1{
                font-family: '04B_30__'; 
                font-size: 20vh; 
                color: orange;
            }

            p{
                font-family: 'Minecraft'; 
                font-size: 5vh;
            }

            a{
                font-family: 'Mario-Kart-DS'; 
                font-size: 5vh; 
            }

            #character{
                position: fixed;
            }

            @keyframes run {
                from {
                    left: -10%;
                }

                to {
                    left: 110%;
                }
            }

        </style>
    </head>
    <body>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="/Elements/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    HOME
                </a>
            </div>
        </nav>
       
        <section style="background-image: url('/Elements/paisagem.jpg'); background-size: 100%; width: 100%; height: 95vh;">
            <center>
                <h1>Home</h1>
                <?php if(!hasUser()){?>
                    <p>Seja bem vindo, <a class="link-offset-2 link-underline link-underline-opacity-0" href="/Login">entrar</a>!!</p>
                    <p>ou <a class="link-offset-2 link-underline link-underline-opacity-0" href="/Register">cadastre-se</a>.</p>
                <?php }else{?>
                    <p>Seja bem vindo, <?php echo $_SESSION['user']?></p>
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="/User/Logout">LOGOUT</a>
                <?php }?>
            </center>

            <div id="character" style="bottom: 4%; left: -10%; animation: run 5s linear 3s infinite;">
                <img src="/Elements/mario.gif" alt="Logo" width="150" height="150">
            </div>
            
            <div id="character" style="bottom: 4%; left: -110%; animation: run 3s linear 6s infinite;">
                <img src="/Elements/sonic.gif" alt="Logo" width="100" height="100">
            </div>

        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>