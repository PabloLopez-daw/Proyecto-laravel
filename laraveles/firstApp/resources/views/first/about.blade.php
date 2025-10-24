@extends('index')

@section('content')
<div>
    This is the new content: {{ $newContent . ' ' . $newContent }}
</div>
<div>
    {{ $nomellega ?? '' }}
</div>
@endsection