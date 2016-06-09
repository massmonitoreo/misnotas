<h2>Nota nueva</h2>
<a href="#">Nota de radio</a>
<a href="#">Nota de televisión</a>
<hr>
<form action="{{ route('notas.tv.store') }}" method="post">
  <input type="hidden" name="medio" value="Television"><br>

  <label for="Encabezado">Encabezado:</label>
  <input type="text" name="encabezado" placeholder="Ingresa encabezado"><br>

  <label for="Sintesis">Sintesis:</label>
  <textarea id="Sintesis" name="sintesis" cols="30" rows="10" placeholder="Ingresa la sintesis"></textarea><br>

  <label for="Conductor">Conductor:</label>
  <select id="Fuente" name="fuente">
    <option value="">Selecciona fuente</option>
    @foreach($tvs as $tv)
      <option value="{{ $tv->id }}">{{ $tv->conductor }} | {{ $tv->canal }}</option>
    @endforeach
  </select><br>
  {{ csrf_field() }}
  <input type="submit" value="Enviar">
</form>
