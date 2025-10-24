@extends('app.bootstrap.template')


@section('content')


<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Author</th>
      <th>Hair</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($peinados as $peinado)
      <tr>
        <td>{{ $peinado->id }}</td>
        <td>{{ $peinado->author }}</td>
        <td>{{ $peinado->name }}</td>
        <td>
          <a href="{{ route('peinado.show', $peinado->id) }}" class="btn btn-success btn-sm">Show</a> 
          <a href="{{ route('peinado.edit', $peinado->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <a href="{{ route('peinado.destroy', $peinado->id) }}" class="btn btn-danger btn-sm">Edit</a>
        </td>
      </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th colspan="2">Número de peinados</th>
      <th colspan="2">{{ $peinados->count() }}</th>
    </tr>
  </tfoot>
</table>
@endsection