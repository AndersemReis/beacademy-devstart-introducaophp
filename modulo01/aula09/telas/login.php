<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="./style.css" rel="stylesheet">
    <title>Login</title>

</head>


<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form>
            <img class="mb-4" src="C:\Users\ander\OneDrive\Área de Trabalho\devstart\beacademy-devstart-introducaoaophp\modulo01\imagens\login.jpeg" alt width="72" heigth="57">
            <h1 class="h3 mb-3 fw-normal">Faça seu Login</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="emailLogin" placeholder="Email">
                <label for="emailLogin">Email</label>
            
            </div>
            <br/>
            
            <div class="form-floating">
                <input type="password" class="form-control" id="passwordLogin" laceholder="Senha">
                <label for="passwordLogin">Password</label>
            </div>

            <div class="check-box mb-3">
                <label>
                    <input type="checkbox" value="relembre-me">
                     Relembre-me 
                </label>

            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>

    </main>    
</body>
</html>