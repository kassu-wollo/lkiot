@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit Makerspace</h1>
        <form action="{{ route('makerspace.update', $makerspace) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="maker_space_name">Maker Space Name</label>
                <input type="text" class="form-control" id="maker_space_name" name="maker_space_name" value="{{ $makerspace->maker_space_name }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $makerspace->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $makerspace->email }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $makerspace->phone }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="good" {{ $makerspace->status == 'good' ? 'selected' : '' }}>Good</option>
                    <option value="progress" {{ $makerspace->status == 'progress' ? 'selected' : '' }}>Progress</option>
                    <option value="inprogress" {{ $makerspace->status == 'inprogress' ? 'selected' : '' }}>In Progress</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Makerspace</button>
        </form>
    </div>
@endsection