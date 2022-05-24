@extends('layouts.app')

@section('content')

<div class="container">
    <h1>garages overzicht</h1><br>

    <table style="width: 100%;">
        <tr style="background:lightgray;">
          <th>Naam</th>
          <th>Plaats</th>
          <th>status</th>
          <th>Acties</th>
        </tr>
    
        @foreach ($garages as $garage)
        <tr>
            <td>{{$garage->name}}</td>
            <td>{{$garage->plaats}}</td>
            <td> 
                @if ($garage->status == 1)
                    <p style="color: green">actief</p>
                @else
                   <p style="color: red">niet actief</p>
                @endif
            </td>
            <td>
                @if ($garage->status == 0)
                <a href="{{ route('enable-garage', $garage->id)}}" class="btn btn-success">activeer</a>
                @else
                    <a href="{{ route('disable-garage', $garage->id)}}" class="btn btn-danger">de-activeer</a>
                @endif
            </td>
        </tr>
        @endforeach

    </table>

</div>
@endsection
