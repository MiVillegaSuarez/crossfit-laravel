@extends('testfolder.testfolder')
@section('contenido')

<h1>Hola desde la vista Test Folder 1</h1>
<br>
<br>
<p>Usando If</p>
@if(count($saludo) > 4)
    <p>Hay mas de 4 items</p>
@else
    <p>Hay {{count($saludo)}} items</p>
@endif
<br>
<br>
<p>Usando For</p>
@for($a = 0; $a < count($saludo); $a++)
    {{$saludo[$a]}}<br>
@endfor
<br>
<br>
<p>Usando Foreach</p>
@foreach($saludo as $s)
    {{$s}}<br>
@endforeach

@endsection
