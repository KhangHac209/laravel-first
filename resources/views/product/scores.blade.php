<h1>Scores Blade Template</h1>

@php
    $scores = [1, 4, 6, 8, 3, 9, 10, 7];
    // $scores = [];
@endphp

<table border="1">
    <tr>
        <th>Id</th>
        <th>Score</th>
        <th>Note</th>
    </tr>
    {{-- @foreach ($scores as $score)
        <tr style="background-color: {{ $loop->even ? 'grey' : '' }}">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $score }}</td>
            <td>{{ $score > 6 ? 'Dat' : 'Ko dat' }}</td>
        </tr>
    @endforeach
    @if (!count($scores))
        <tr>
            <td colspan="3">No Data</td>
        </tr>
    @endif --}}

    @forelse ($scores as $score)
        <tr style="background-color: {{ $loop->even ? 'grey' : '' }}">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $score }}</td>
            <td>{{ $score > 6 ? 'Dat' : 'Ko dat' }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="3">No Data</td>
        </tr>
    @endforelse
</table>
