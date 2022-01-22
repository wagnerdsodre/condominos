@extends('layout.main')
        <h1 class=".header-top">Home - Painel principal</h1>
        @for($i=0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == 2)
                <p> i é igual a 2</p>
            @endif
              @endfor

       @php
       $name = 'Wagner';
       echo $name;
       @endphp
      <!-- Isso é um comentário -->

       {{-- Isso é um comentário do blade  --}}

       @foreach($names as $name)
       <p>{{$loop->index}} - {{$name}}</p>
      
       
       @endforeach

