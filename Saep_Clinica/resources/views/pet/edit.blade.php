<!DOCTYPE html>
<html>
<head>
    <title>Editar Pet</title>
</head>
<body>

    <h1>Editar Pet</h1>

    <form action="/pets/{{ $pet->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>Raça:</label>

        <input
            type="text"
            name="raça"
            value="{{ $pet->raça }}"
        >

        <br><br>

        <label>tamanho:</label>

        <input
            type="text"
            name="tamanho"
            value="{{ $pet->tamanho }}"
        >

        <br><br>

        <label>Modelo:</label>

        <input
            type="text"
            name="modelo"
            value="{{ $pet->modelo }}"
        >

        <br><br>

        <label>Tutor:</label>

        <select name="tutor_id">

            @foreach($tutores as $tutor)

                <option
                    value="{{ $tutor->id }}"
                    {{ $pet->tutor_id == $tutor->id ? 'selected' : '' }}
                >
                    {{ $tutor->nome }}
                </option>

            @endforeach

        </select>

        <br><br>

        <button type="submit">
            Salvar
        </button>

    </form>

    <br>

    <a href="pets/listar">
        Voltar
    </a>

</body>
</html>