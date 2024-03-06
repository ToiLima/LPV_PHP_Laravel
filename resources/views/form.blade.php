<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form action='/contato' method='post'> 
        <!-- o nome do action vai ser nome da rota -->
            {{ csrf_field() }}
            <!-- cria um input oculto com token -->
            <input type='text' name='nome' value=''>
            <input type='password' name='senha' value=''>
            <input type='submit' value='ok'>
        </form>        
    </body>
</html>
