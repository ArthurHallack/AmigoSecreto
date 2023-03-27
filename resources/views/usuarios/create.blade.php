<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style2.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans&display=swap');
*{
    margin: 0%;
    padding: 0%;
    text-decoration: none;
}
header{
    background-color: rgb(90, 167, 255);
    display: block;

}
#T1 {
    margin-left: 20px;
    font-family: 'PT Sans', sans-serif;
}
main {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.Titulo {
    margin-top: 5vh;
}
form {
    margin-top: 2vh;
}
#Field {
    height: 4vh;
    width: 74vh;
    justify-content: center;
}
#confirm {
    background-color: rgb(49, 140, 243);
    border-radius: 4px;
}

#BotaoSS {
    margin-right: 20px;
    background-color: rgb(49, 140, 243);
    border-radius: 10px;
    height: 30px;
    width: 80px;
    transition: 0.2s;
    color: black;
    display: block;
    margin-top: 2vh;
    font-family: 'PT Sans', sans-serif;
    cursor: pointer;
}
#BotaoSS:hover {
    background-color: rgb(185, 216, 252);
}
    </Style>
    
</head>
<body>
    <header>
        <h1 id="T1">Amigo Secreto 🎁</h1>
    </header>
    <main>
        <div class="Titulo">
            <h1 id="T2">Cadastre os Participantes</h1>
        </div>
        <form action="{{ isset($usuario) ? url('/usuarios/'.$usuario->id) : url('/teste') }}" method="POST">
            @csrf
            @if(isset($usuario))
            @method('PUT')
            @endif
            <fieldset id="Field">
                <label><b>Nome:</b></label>
                <input type="text" name="nome" for="nome" required value="{{ isset($usuario) ? $usuario->nome : '' }}">
                <label><b>Email:</b></label>
                <input type="email" for="email" name="email" required value="{{ isset($usuario) ? $usuario->email : '' }}">
            </fieldset>
            <div>
            <button type="submit" id="BotaoSS">{{ isset($usuario) ? 'Atualizar' : 'Cadastrar' }}</button>
            </div>
            {{csrf_field()}}

        </form> 
        
    </main>
</body>
</html>