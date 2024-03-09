<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form action='/contato' method='post'> 
        <!-- o nome do action vai ser nome da rota -->
            {{ csrf_field() }}
            <!-- cria um input oculto com token -->
            <input type='text' name='NM' value=''>
            <input type='password' name='DTA' value=''>
            <input type='submit' value='ok'>
        </form>        
    </body>
</html>
