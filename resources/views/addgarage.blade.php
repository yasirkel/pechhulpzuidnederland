@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="garage-wrapper">
            <h1>Maak garage</h1>
                <p>Maak dynamisch een garage aan op basis van beschikbare gebruikers & omgevingen.</p>
            <div class="garageform-wrapper">
                <form action="{{ route('create-garage')}}" method="POST">
                    @csrf
                    <label for="">Gebruiker</label>
                    <select class="form-control" name="username">
                        @foreach ($users as $user)
                            @if ($user->role_id != 2)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endif
                        @endforeach
                    </select>
                    <br>
                    <label for="">omgeving</label>
                        <select class="form-control" name="plaats">
                            @foreach ($areas as $area)
                                <option value="{{$area->id}}">{{$area->plaats}}</option>
                            @endforeach
                        </select>
                    <br>
                    <label for="">status</label>
                        <select class="form-control" name="status" id="">
                            <option value="1">actief</option>
                            <option value="0">niet actief</option>
                        </select>
                    <br>
                    <label for="">Garage naam</label>
                        <input class="form-control" name="garage-naam" type="text">
                        <br>
                        <input type="submit" class="btn btn-dark">
                </form>
            </div>
        </div>
    </div>

@endsection