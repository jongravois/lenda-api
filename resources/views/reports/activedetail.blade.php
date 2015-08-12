@extends('reports')
    @section('contents')
        <h2>ACTIVE DETAIL</h2>
        <blockquote>
        <table class="table table-bordered table-condensed table-hover table-responsive rowed">
            <tr class="table-header-container" style="font-size:11px">
                <th>Regions</th>
                <th>Loc</th>
                <th>Year</th>
                <th>Season</th>
                <th>Analyst</th>
                <th>Farmer</th>
                <th>Applicant</th>
                <th>Type</th>
                <th>Dist</th>
                <th>Orig Date</th>
                <th>Due Date</th>
                <th>Agency</th>
                <th>Status</th>
                <th>Date</th>
                <th>Type</th>
                <th>Category</th>
                <th>Amount</th>
            </tr>
            @foreach($loans as $loan)
                <tr style="font-size:12px">
                    <td class="text-center">{!! $loan->location->regions->region !!}</td>
                    <td class="text-center">{!! $loan->location->loc_abr !!}</td>
                    <td class="text-center">{!! $loan->crop_year !!}</td>
                    <td class="text-center">{!! $loan->season !!}</td>
                    <td class="text-center"></td>
                    <td class="text-left">{!! $loan->farmer_id !!}</td>
                    <td class="text-left">{!! $loan->applicant_id !!}</td>
                    <td class="text-center">{!! $loan->loan_type_id !!}</td>
                    <td class="text-center">{!! $loan->distributor_id !!}</td>
                    <td class="text-center">{!! date("d-m-Y", strtotime($loan->app_date)) !!}</td>
                    <td class="text-center">{!! date("d-m-Y", strtotime($loan->due_date)) !!}</td>
                    <td class="text-center"></td>
                    <td class="text-center">{!! $loan->status_id !!}</td>
                    <td class="text-center"></td>
                    <td class="text-left"></td>
                    <td class="text-left"></td>
                    <td class="text-right"></td>
                </tr>
            @endforeach
        </table>
        </blockquote>
    @stop