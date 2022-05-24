@extends('layouts.app')

@section('content')

{{-- LAAT ALLE REVIEWS ZIEN --}}
<div class="container">
    <h1>Reviews</h1>
    <table style="width: 100%;">
        <tr style="background:lightgray;">
          <th>Naam</th>
          <th>Score</th>
          <th>Omschrijving</th>
          <th>status</th>
          <th>Actie</th>
        </tr>

        @foreach ($reviews as $review)
          <tr>
            <td>{{$review->name}}</td>
            <td> 
            @if ($review->score == '1') 
            <i class="fa-solid fa-star"></i>
            @endif
            @if ($review->score == '2') 
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            @endif
            @if ($review->score == '3') 
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            @endif
            @if ($review->score == '4') 
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            @endif
            @if ($review->score == '5') 
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            @endif
            </td>
            <td>{{$review->omschrijving}}</td>
            <td>
                @if ($review->status == 1)
                    <p style="color: green">actief</p>
                @else
                <p style="color: red">niet actief</p>
                @endif
            </td>
            <td>
                @if ($review->status == 0)
                    <a href="{{ route('enable-review', $review->id)}}" class="btn btn-success">Goedkeuren</a>
                @else
                    <a href="{{ route('disable-review', $review->id)}}" class="btn btn-danger">afkeuren</a>
                @endif
            </td>
        </tr>
        @endforeach

      </table>

</div>


@endsection