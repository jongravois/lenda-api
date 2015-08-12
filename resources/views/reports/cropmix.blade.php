@extends('reports')
    @section('contents')
        <h2>CROP MIX</h2>
        <table class="table table-striped rowed">
            <tr>
                <th>Heading</th>
                <th>Regions</th>
            </tr>
            @foreach($loans as $loan)
                <tr>
                    <td>Dunno</td>
                    <td>{!! $loan->location->regions->region !!}</td>
                </tr>
            @endforeach
        </table>
    @stop