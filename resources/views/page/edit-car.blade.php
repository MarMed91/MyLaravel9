@extends('layout.cars-layout')

@section('content')
  <h1>CREATE NEW CAR</h1>
  <div class="edit">
      <form method="post" action="{{ route('cars.update', $car->id) }}">
        @csrf
        @method ('PATCH')
        <div>
          <label for="brand">Brand</label>
          <input type="text" name="brand" value="{{ $car->brand }}">
        </div>
        <div>
          <label for="model">Model</label>
          <input type="text" name="model" value="{{ $car->model }}">
        </div>
        <div>
          <label for="displacement">Displacement</label>
          <input type="text" name="displacement" value="{{ $car->displacement }}">
        </div>
        <div>
          <label for="max_speed">Max Speed</label>
          <input type="text" name="max_speed" value="{{ $car->max_speed }}">
        </div>
        <button type="submit" name="SAVE NEW CAR">SAVE NEW CAR</button>
      </form>
  </div>
@stop
