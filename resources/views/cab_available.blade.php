@extends('master')
@section('content')


<body>
  <div class="container">
    <h1>Ambulance Types</h1>


    @foreach($data as $row)

    <ul class="list-group">
      <li class="list-group-item">

      <form action="/bookingambulance" type="get">
        <h4>Model Name : {{$row->cab_model}}</h4>
        <h6>Category : {{$row->ambocat}}</h6>
        <hr>
        <p>{{$row->description}}</p>
        <div class="" style="float:right"><button type="submit" class="btn btn-primary btn-sm">Confirm</button></div>
        

        </form>
       
      </li>
    </ul>
    @endforeach

    
  </div>

</body>
@endsection
