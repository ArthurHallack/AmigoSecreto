<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigo Secreto</title> 
    @section('styles')
    <link rel="stylesheet" href="style.css">
    @endsection
    <style>
        
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
  }
  
  /* Estilo do Cabeçalho */
  
  header {
    background-color: #006699;
    color: #fff;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  h1 {
    font-size: 36px;
    margin: 0;
  }
  
  button {
    background-color: #fff;
    color: #006699;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    text-decoration: none;
  }
  
  button:hover {
    background-color: #006699;
    color: #fff;
  }
  
  /* Estilo do Formulário */
  
  main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }
  
  .Pesquisa {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }
  
  h1#Participantes {
    font-size: 24px;
    margin: 0;
  }
  
  input[type="search"] {
    padding: 10px;
    border-radius: 5px;
    border: none;
    font-size: 16px;
    width: 70%;
  }
  
  input[type="submit"] {
    background-color: #fff;
    color: #006699;
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-size: 24px;
  }
  
  input[type="submit"]:hover {
    background-color: #006699;
    color: #fff;
  }
  
  .Lista {
    padding: 20px;
  }
  
  fieldset {
    border: none;
    padding: 0;
    margin: 0;
  }
  
  .Botaos {
    text-align: center;
  }
  
  #BS {
    background-color: #fff;
    color: #006699;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    text-decoration: none;
  }
  
  #BS:hover {
    background-color: #006699;
    color: #fff;
  }
  
    </style>
</head>
<body>
    <header>
        <h1 id="T1">Amigo Secreto 🎁</h1>
        <button type="submit" id="Botaoc"><a href="cadastro.php">Cadastrar!</a></button>
    </header>
    <main>
        <div class="Pesquisa">
        <h1 id="Participantes">Participantes</h1>
        <input type="search" placeholder="Pesquisa" name="Pesquisa" id="P1">
        <input type="submit" for = "Pesquisa" value=" &#128270 " id="Lupa">
        </div>
        <div class="Lista">
            <Fieldset id="Field1"></Fieldset>
        </div>
        <div class="Botaos">
        <button type="submit" id="BS"><a href="">Sortear!</a></button>
        </div>
    </main>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
