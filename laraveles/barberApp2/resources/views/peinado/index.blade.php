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
          <a href="{{ route('peinado.edit', $peinado) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('peinado.destroy', $peinado) }}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
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