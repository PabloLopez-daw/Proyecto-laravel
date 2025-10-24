@extends('app.bootstrap.template')
@section('title', 'Send Message')

@section('maintitle', 'Send new Message')

@section('subtitle')

@endsection

@section('content')
    <form action="{{ route('message.store') }}" method="post">
    <ul>
        <li>
            <label for="name">Nombre:</label>
            <input required class="form-control" type="text" id="name" name="user_name" placeholder="Name">
            <br>
        </li>
        <li>
            <label for="mail">Correo electrónico:</label>
            <input required class="form-control" type="email" id="mail" name="user_mail" placeholder="Email">
            <br>        
        </li>
        <li>
            <label for="message">Mensaje:</label>
            <textarea required class="form-control" id="message" name="message" placeholder="Message"></textarea>
        </li>
        
        <br>
        <button class="btn btn-primary" type="submit">Create Message</button>
    </ul>
    </form>

@endsection