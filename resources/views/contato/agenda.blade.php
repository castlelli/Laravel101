<h3> Olá, aqui é tudo em HTML. Sabia? </h3>

@foreach ($agenda as $contato)
    <p>{{$contato['nome']}}</p>
    <p>{{$contato['senha']}}</p><hr>
@endforeach