<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Metadados da pagina OBS: Não sei o que faz -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Titulo da pagina -->
        <title>Cadastro</title>
    </head>
    <body>
        <nav>
            <a href="/">Home</a>
        </nav>

        <br>
        
        <section>
            <h1>Cadastro</h1>
            <p>Preencha o formulario para efetua o cadastro.</p>
            <p><i>OBS: Não preencha com informações vedadeiras</i></p>

            <br>
            
            <div>
                <form action="/User/Register" method="POST">
                    <input type="text" name="name" placeholder="Nome completo" >
                    <input type="email" name="email" placeholder="Email" >
                    <input type="password" name="password" placeholder="Senha" >
                    <button type="submit">Cadastra</button>
                </form>
            </div>
        </section>
    </body>
</html>