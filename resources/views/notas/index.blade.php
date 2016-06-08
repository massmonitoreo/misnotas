<a href="{{ route('notas.create') }}">crear nota</a>
<br>
<hr>

<h2>Notas</h2>
@foreach($notas as $nota)
    {{ $nota->notaradio }}
@endforeach