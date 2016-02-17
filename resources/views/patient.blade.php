@extends('layouts.hms')

{{--| CONTENT |--}}
@section('content')
    <header class="page-header">
        <h3>Patients
            <small>Records of patients</small>
        </h3>
    </header>

    <div class="tile">
        <div class="t-header">
            <div class="th-title">Command Buttons
                <small>Add Command Buttons to Table Rows to perform custom actions such as Edit, Delete, View etc.
                </small>
            </div>
        </div>

        <table id="data-table-command" class="table table-bordered table-vmiddle">
            <thead>
            <tr>
                <th data-column-id="id" data-type="numeric">Patient ID</th>
                <th data-column-id="sender">Patient Name</th>
                <th data-column-id="received" data-order="desc">Patient Email</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
            </tr>
            </thead>
            <tbody>

            @foreach( $patients as $patient )
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->email }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection