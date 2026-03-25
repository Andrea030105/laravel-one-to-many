@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col my-3">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col my-3">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Add Title">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Add Description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection