@extends('layouts.app')

@section('content')
    <h1>Search Flights</h1>

    <form method="GET" action="{{ route('flights.index') }}">
        <label for="origin">Origin:</label>
        <input type="text" name="origin" id="origin" placeholder="CGK">

        <label for="destination">Destination:</label>
        <input type="text" name="destination" id="destination" placeholder="DPS">

        <label for="departure_time">Departure Time:</label>
        <input type="time" name="departure_time" id="departure_time">

        <button type="submit">Search</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Airline</th>
                <th>Flight Number</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($flights as $flight)
                <tr>
                    <td>{{ $flight->airline->name }}</td>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->origin }}</td>
                    <td>{{ $flight->destination }}</td>
                    <td>{{ $flight->departure_time }}</td>
                    <td>{{ $flight->arrival_time }}</td>
                    <td>{{ $flight->price }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No flights found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
