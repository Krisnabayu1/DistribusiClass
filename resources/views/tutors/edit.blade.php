@extends('master')
@section('title', 'Edit Tutor - CDIS')
@section('menu')
@extends('layouts.main')

@section ('container')
@endsection
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Tambah Tutor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tutors.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('tutors.update', $tutor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sesi Tutor:</strong>
                    <input type="text" name="nama_tutor" value="{{ $tutor->nama_tutor }}" class="form-control" placeholder="Nama Tutor">
                    @error('nama_tutor')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>
@endsection