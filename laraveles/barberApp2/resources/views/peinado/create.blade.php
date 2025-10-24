@extends('app.bootstrap.template')

@section('content')

@error('general')
<div class="alert alert-danger">{{ $message }}</div>
@enderror


<form action="{{ route('peinado.store') }}" method="post">
    @csrf
    <div class="espacio">
        <label for="author">Author</label>
        <input class="form-control" minlength="2" maxlength="60" required name="author" id="author" placeholder="Author of the hairstyle" type="text" value="{{ old('author') }}">
    </div>
    <div class="espacio">
        <label for="name">Name</label>
        <input class="form-control" minlength="3" maxlength="100" required name="name" id="name" placeholder="Name of the hairstyle" type="text" value="{{ old('name') }}">
    </div>
    <div class="espacio">
        <label for="hair">Hair</label>
        <input class="form-control" minlength="3" maxlength="110" required name="hair" id="hair" placeholder="Hair of the hairstyle" type="text" value="{{ old('hair') }}">
    </div>
    <div class="espacio">
        <label for="description">Description</label>
        <textarea class="form-control" minlength="50"  required name="description" id="description" placeholder="Description of the hairstyle" cols="60" rows="8">{{ old('description') }}</textarea>
    </div>
    <div class="espacio">
        <label for="price">Price</label>
        <input class="form-control" step="0.01" min="0" max="999999.99" required name="price" id="price" placeholder="Price of the hairstyle" type="number" step="0.01" value="{{ old('price') }}">
    </div>
    <div>
        <input class="btn btn-primary" type="submit" value="Create hairstyle">
    </div>
</form>

@endsection