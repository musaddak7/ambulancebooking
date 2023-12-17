@extends('master')
@section('content')



<body>

  <div class="container mt-3">
  <h2>Hospital List</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Hospital name</th>
        <th>Hospital Location</th>
        <th>Contact</th>
      </tr>
    </thead>

    <tbody>
    @foreach($hospital as $row)
      <tr>
        <td>{{$row['name']}}</td>
        <td>{{$row['location']}}</td>
        <td>{{$row['contact']}}</td>
        <td>
          <form action="addhospital" method="post">
            @csrf
            <input type="hidden" name="hospitalid" value="{{$row['id']}}">
          <button class="btn btn-success" type="submit">Confirm</button>
          </form>
        
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>



    
  </div>



</body>
@endsection