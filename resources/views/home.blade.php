@extends("layout.site")

@section('titulo', 'IMC')

@section("conteudo")
    <form action='/calcular' method='post'> 
    <!-- o nome do action vai ser nome da rota -->
        {{ csrf_field() }}
        <!-- cria um input oculto com token -->
        <input type='number' name='altura' value=''>
        <input type='number' name='peso' value=''>
        <input type='submit' value='ok'> <!-- View -> Route-->
    </form>        
@endsection