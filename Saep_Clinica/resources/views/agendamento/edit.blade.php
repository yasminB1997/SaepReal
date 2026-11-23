<!DOCTYPE html>
<html>
<head>
    <title>Novo Agendamento</title>
</head>
<body>

    <h1>Novo Agendamento</h1>

    <form action="/agendamentos" method="POST">

        @csrf

        <label>Data:</label>

        <input type="date" name="data">

        <br><br>

        <label>Hora:</label>

        <input type="time" name="hora">

        <br><br>

        <label>Descrição:</label>

        <input type="text" name="descricao">

        <br><br>

        <label>Veículo:</label>

        <select name="pet_id">

            <option value="">
                Selecione um pet
            </option>

            @foreach($pets as $pet)

                <option value="{{ $pet->id }}">
                    {{ $pet->raça }}
                </option>

            @endforeach

        </select>

        <br><br>

        <button type="submit">
            Cadastrar
        </button>

    </form>

    <br>

    <a href="/agendamentos/listar">
        Voltar
    </a>

</body>
</html>