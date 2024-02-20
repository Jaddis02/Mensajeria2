<div>
    <h1>Acceso a la app de mensajería</h1>
    <form action="{{ url('login') }}" method="post">
        @csrf
        <label for="nombre">Nombre de usuario</label>
        <br>
        <input type="text" name="nombre" />
        <br>
        <input type="submit" value="Acceder" />
    </form>

</div>