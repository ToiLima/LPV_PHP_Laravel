<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h3>Essa é a visão Contatos</h3>

        <!--As duplas chaves são um compativel ao php echo-->
        @foreach ($contatos as $contato)
            <p>{{ $contato['NM'] }} </p>
            <p>{{ $contato['DTA'] }} </p>
        @endforeach
    </body>
</html>
