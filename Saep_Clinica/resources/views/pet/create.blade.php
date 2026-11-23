<!DOCTYPE html>
<html>
<head>
    <title>Novo Pet</title>
</head>
<body>

    <h1>Novo Pet</h1>

    <form action="/pets" method="POST">

        @csrf

        <label>Raça:</label>
        <input type="text" name="raça">

        <br><br>

        <label>tamanho:</label>
        <input type="text" name="tamanho">

        <br><br>

        <label>nome:</label>
        <input type="text" name="nome">

        <br><br>

        <label>Tutor:</label>

        <select name="tutor_id">

            <option value="">
                Selecione um tutor
            </option>

            @foreach($tutores as $tutor)

                <option value="{{ $tutor->id }}">
                    {{ $tutor->nome }}
                </option>

            @endforeach

        </select>

        <br><br>

        <button type="submit">
            Cadastrar
        </button>

    </form>

    <br>

    <a href="/pets/listar">
        Voltar
    </a>

</body>
</html>