@extends('template.main')

@section('titulo') Cidades @endsection

@section('conteudo')

<h2>Lista de Municipios</h2>

<a href="{{route('municipio.create')}}"> <h4>Nova cidade</h4></a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Porte</th>
            <th>Info</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
    </thead>

    <!-- <tbody>
        @for($a=0; $a < count ($cidades); $a++)
            <tr>
                <td>{{ $cidades[$a]['id'] }}</td>
                <td>
                    @if(strcmp($cidades[$a]['cidade'], "Paranaguá") == 0)
                        <b>{{ $cidades[$a]['cidade'] }}</b>
                    @elseif(strcmp($cidades[$a]['cidade'], "Morretes") == 0)
                        <i>{{ $cidades[$a]['cidade'] }}</i>
                    @else
                        {{ $cidades[$a]['cidade']}}
                    @endif
                </td>
                <td>{{ $cidades[$a]['porte'] }}</td>
                <td><a href="{{ route('cidade.show', $cidades[$a]['id'])  }}">info</a></td>
                <td><a href="{{ route('cidade.edit', $cidades[$a]['id'])  }}">editar</a></td>
                <td>
                    <form action="{{ route('cidade.destroy', $cidades[$a]['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="remover">
                    </form>
                </td>

            </tr>
        @endfor
    </tbody> -->
</table>