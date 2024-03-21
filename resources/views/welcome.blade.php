@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Klasemen</h5>
                <button class="btn btn-primary"><a href="{{ route('club-scores.create') }}" style="color:white">Input Score Pertandingan</a></button>
                <button class="btn btn-primary"><a href="{{ route('club2-scores.create') }}" style="color:white">Input Score Multiple</a></button>
            </div>
            <div class="card-body">
                <table class="table table-striped-column text-center">
                    <tr>
                        <th>No.</th>
                        <th>Klub</th>
                        <th>Main</th>
                        <th>Menang</th>
                        <th>Seri</th>
                        <th>Kalah</th>
                        <th>Goal Menang</th>
                        <th>Goal Kalah</th>
                        <th>Point</th>
                    </tr>

                    <tbody>
                        @foreach ($clubs as $team)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->played }}</td>
                                <td>{{ $team->wins }}</td>
                                <td>{{ $team->draws }}</td>
                                <td>{{ $team->losses }}</td>
                                <td>{{ $team->goalsFor }}</td>
                                <td>{{ $team->goalsAgainst }}</td>
                                <td>{{ $team->points }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection