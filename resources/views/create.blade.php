@extends('layouts.app')

@section('title', 'Create Industry / Company')

@section('content')
    <div class="row row-cols-12">
       @foreach ($errors->all() as $error)
        <div class="col">
            <div class="alert alert-danger">{{ $error  }}</div>
        </div>
        @endforeach
        @if(Session::get('success'))
        <div class="col">
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        </div>
        @endif
    </div>
    <div class="row row-cols-12">
        <div class="col">
            <h3>Create Industry</h3>
            <form method="POST" action="/industry">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="section">Section</label>
                    <select class="custom-select" id="section" name="section">
                        <option selected>Open this select menu</option>
                        @foreach( range('A', 'Z') as $element) 
                        <option value="{{$element}}">{{$element}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Industry</button>
            </form>
        </div>
        <div class="col">
            <h3>Create Company</h3>
            <form method="POST" action="/company">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="cin">CIN</label>
                    <input type="name" class="form-control" id="cin" name="cin">
                </div>
                <div class="form-group">
                    <label for="class">Class</label>
                    <select class="custom-select" id="class" name="class">
                        <option selected>Open this select menu</option>
                        <option value="Public Company">Public Company</option>
                        <option value="Private Company">Private Company</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="custom-select" id="status" name="status">
                        <option selected>Open this select menu</option>
                        <option value="Active">Active</option>
                        <option value="Strike Off">Strike Off</option>
                        <option value="InActive">InActive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="industry">Industry</label>
                    <select class="custom-select" id="industry" name="industry">
                        <option selected>Open this select menu</option>
                        @foreach( $industries as $industry) 
                        <option value="{{$industry->id}}">{{$industry->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Industry</button>
            </form>
        </div>
    </div>

@endsection