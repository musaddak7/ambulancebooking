@extends('master')
@section('content')
<body>
  <div class="container">
    <h1>Ambulance Types</h1>


    @foreach($ambocat as $item)

    <ul class="list-group">
      <li class="list-group-item">
        <h4>Model Name : {{$item->cab_model}}</h4>
        <h6>Category : {{$item->ambocat}}</h6>
        <hr>
        <p>{{$item->description}}</p>
        <button type="button" class="btn btn-primary btn-sm">Confirm</button>
       
      </li>
    </ul>
    @endforeach

    
  </div>
</body>
@endsection