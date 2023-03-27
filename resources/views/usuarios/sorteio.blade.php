<!DOCTYPE html>
<html>
<head>
    <title>Sorteio</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .Pares {
            max-width: 600px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .Pares table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .Pares th,
        .Pares td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .Pares th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1 id="T1">Sorteio</h1>
    </header>
    <main>
        <div class="Pares">
            <h1 id="Pares">Pares de Amigos Secretos</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pares as $par)
    <tr>
        @foreach ($par as $usuarios)
            <td>{{ $usuarios->nome }}</td>
        @endforeach
    </tr>
@endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
