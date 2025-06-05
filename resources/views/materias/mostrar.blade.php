<x-layout>
    <h2>Mostrar</h2>
</x-layout>


<div>
    @foreach ( $materias as $materia )
        <h4>{{ $materia['nombre'] }}</h4>
        <h6>{{ $materia['ciclo'] }}</h6>
    @endforeach
</div>