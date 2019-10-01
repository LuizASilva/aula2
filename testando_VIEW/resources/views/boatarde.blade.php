<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Boa Tarde, {{$nome}}</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!--
    <h1>Boa tarde, {{$nome}}! <br>Sua idade é: {{$idade}} </h1>  Tipo de passagem com blade - mais seguro
    <h1>Boa tarde, <?php echo htmlentities($nome) ?>! <br>Sua idade é: <?= $idade ?> </h1> <!-- Tipo de passagem com sintaxe php /-->

    @if($idade)
        <h1>Boa tarde, {{$nome}}! <br>Sua idade é: {{$idade}} </h1>
    @else 
        <h1>Boa tarde, {{$nome}}! <br>Idade é apenas uma número...</h1>
    @endif    

    @json($tabela);

    <table class="table table-dark">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>    
    @foreach($tabela as $linha)
        <tr>
            <td>{{$linha['nome']}}</td>
            <td>{{$linha['idade'] ?? 'Idade é apenas um número...'}}</td>            
        </tr>
    @endforeach

    @FORELSE()    

    </table>

</body>
</html>