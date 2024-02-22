<form action="/formulario" method="POST">
    @csrf
    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="text" name="asunto" id="asunto" placeholder="Asunto">
    <textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
    <input type="submit" value="Enviar">

</form>