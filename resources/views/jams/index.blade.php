@extends('master')
@section('title', 'Kloter - CDIS')

@extends('layouts.main')

@section ('container')


<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Jam</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('jams.create') }}"> Tambah Jam</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Sesi</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jam as $j)
            <tr>
                <td>{{ $j->id }}</td>
                <td>{{ $j->sesi_jam }}</td>
                <td>
                    <form action="{{ route('jams.destroy', $j->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('jams.edit', $j->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $jam->links() !!}
</div>

@endsection