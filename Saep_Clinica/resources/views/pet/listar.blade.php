<!DOCTYPE html>
<html>
<head>
    <title>Pets</title>
</head>
<body>

    <h1>    Pets</h1>

    <a href="/principal">
        Voltar
    </a>

    <br><br>

    <a href="/pets/create">
        <button>Novo Pet</button>
    </a>

    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Raça</th>
            <th>tamanho</th>
            <th>nome</th>
            <th>Tutor</th>
            <th>Ações</th>
        </tr>

        @foreach($pets as $pet)

        <tr>

            <td>{{ $pet->id }}</td>

            <td>{{ $pet->raça }}</td>

            <td>{{ $pet->tamanho }}</td>

            <td>{{ $pet->nome }}</td>

            <td>
                {{ $pet->tutor->nome }}
            </td>

            <td>

                <a href="/pets/{{ $pet->id }}/edit">
                    Editar
                </a>

                <form
                    action="/pets/{{ $pet->id }}"
                    method="POST"
                    style="display:inline"
                >

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Excluir
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</body>
</html>