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
                        <th>Amigo 1</th>
                        <th>Amigo 2</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pares as $par)
                        <tr>
                            <td>{{ $par[0]->nome }}</td>
                            <td>{{ $par[1]->nome }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>