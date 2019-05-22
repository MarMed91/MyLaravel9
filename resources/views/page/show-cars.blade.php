@extends('layout.cars-layout')

@section('content')
<div class="show">
    <h1>Cars Show</h1>
    <table border="1">
      @foreach($cars as $car)

      <tr>
          <td>{{ $car -> id }}</td>
          <td>{{ $car -> brand }}</td>
          <td>{{ $car -> model }}</td>
          <td>{{ $car -> displacement }}</td>
          <td>{{ $car -> max_speed }}</td>
          <td><a href="{{  route('cars.edit', $car->id) }}"><i class="fa fa-edit"></i></a></td>
          <td>
            <form method="post" action="{{ route('cars.destroy', $car->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" name="button">DELETE CAR</button>
            </form>
          </td>
      </tr>
      @endforeach
    </table>
    <a href="{{ URL::route('cars.create') }}"><h1>CREATE NEW CAR</h1></a>
</div>
@stop
