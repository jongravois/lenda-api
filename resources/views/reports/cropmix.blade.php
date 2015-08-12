@extends('reports')
    @section('contents')
        <h2>CROP MIX</h2>
        <table class="table table-striped rowed">
            <tr>
                <th>Regions</th>
                <th>Loc</th>
                <th>Year</th>
            </tr>
            @foreach($loans as $loan)
                <tr>
                    <td>{!! $loan->location->regions->region !!}</td>
                    <td>{!! $loan->location->loc_abr !!}</td>
                    <td>{!! $loan->crop_year !!}</td>
                </tr>
            @endforeach
        </table>
    @stop