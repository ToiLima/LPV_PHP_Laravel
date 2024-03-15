<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h3>Essa é a visão Contatos</h3>

        <!--As duplas chaves são um compativel ao php echo-->

        <!--Para o exercício do PDF de controladores e rotas.-->
        @foreach ($matriz as $m)
            <p>{{ $m['tema'] }}</p>
            <p>{{ $m['titulo'] }}</p>
        @endforeach

        <!-- @foreach ($contatos as $contato)
            <p>{{ $contato['NM'] }}</p>
            <p>{{ $contato['DTA'] }}</p>
        @endforeach -->
    </body>
</html>
