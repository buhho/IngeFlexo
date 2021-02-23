@extends('plantilla')

@section('seccion')

    <h1>Equipo de trabajo</h1>

    @foreach ($equipo as $persona)
        <a href="{{ route('nosotros', $persona) }}" class="h4 text-danger">{{ $persona }}</a><br>
    @endforeach

    @if (!empty($nombre))
        <h2>Nombre: {{ $persona }}</h2>
        <h3>Curriculum:</h3>
        @switch($nombre)
            @case('Juanito')
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe repellendus dolorum facere ratione iste, earum
                non nulla ipsam aut deserunt, deleniti cumque unde neque, necessitatibus excepturi blanditiis amet nobis eos.
            </p>
            @break
            @case('Pedrito')
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores harum saepe dolor id nesciunt sit quis aut
                maiores accusantium eum explicabo quibusdam temporibus, perspiciatis corporis excepturi illo nam qui sapiente.
            </p>
            @break
            @case('Menganito')
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus totam voluptatem ad cupiditate fugit fuga
                explicabo error velit dignissimos inventore harum hic officia, labore commodi laboriosam non quis sequi dolorum?
            </p>
            @break
            @default
        @endswitch
    @endif

@endsection
