@extends('layouts.app')

@section('content')

<div class="container">
    <div class="dasboard-menu">
        <nav>
            <a href="{{ route('garages-overzicht')}}" class="btn btn-dark">Alle garages</a>
                <a href="{{ route('reviews-overzicht')}}" class="btn btn-dark">Alle reviews</a>
            <a href="{{ route('view-create-garage')}}" class="btn btn-primary">Garage toevoegen +</a>
            <a onclick="printNow()"target="blank" href="">print</a>
        </nav>
    </div>

    <div class="dashboard-content">
        <div class="box-item">
            <h3>pechmeldingen per garage</h3>
            <ul>
                <li> car center herres</li>
                <li> car center herres</li>
                <li> car center herres</li>
            </ul>
        </div>

        <div class="box-item">
            <h3>pechmeldingen %</h3>
            <p>{{ round($activePrecentage, 1)}}%</p>
        </div>

        <div class="box-item">
            <h3>Meldingen langer dan 1d</h3>
            <p>{{$difference}}</p>
        </div>

        <div class="box-item">
            <h3>Gemiddelde reviewcijfer</h3>
            <p><i class="fa-solid fa-star"></i> {{$averageScore}} </p>
        </div>  

        
    </div>
</div>

<script>

    function printNow() {
        window.print();
    }

</script>
@endsection
