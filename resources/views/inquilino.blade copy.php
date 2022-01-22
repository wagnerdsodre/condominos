@extends('templates.main')
@section('content')

<div class="container">
  @if($pesq != '')
 <p>buscando por {{$pesq}}</p>
  @endif
</div>


@endsection