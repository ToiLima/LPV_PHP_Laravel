@extends("layout.site")

@section("titulo", "contatos")

@section("conteudo")
    <h3>Essa é a visão Contatos</h3>

    @foreach ($contatos as $contato)
        <p>{{ $contato['NM'] }}</p>
        <p>{{ $contato['DTA'] }}</p>
    @endforeach 
@endsection