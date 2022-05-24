@extends('layouts.app')

@section('content')

{{-- LAAT ALLE REVIEWS ZIEN --}}
<div class="container">
    <h1>Reviews</h1>
    <table style="width: 100%;">
        <tr>
          <th>Naam</th>
          <th>Score</th>
          <th>Omschrijving</th>
        </tr>

        @foreach ($reviews as $review)
          @if ($review->status == '1')
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
        </tr>
          @endif
        @endforeach

      </table>

</div>


@endsection