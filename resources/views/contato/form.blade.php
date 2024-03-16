<form action='/contato' method='post'>
    {{ csrf_field() }}
    <!-- cria um input oculto com token -->
    <input type='text' name='nome' value='' placheholder='Nome'>
    <br><input type='password' name='senha' value='' placheholder = 'Senha'>
    <br><input type='submit' value='OK'>
</form>