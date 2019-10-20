@extends('app')

@section('title','Services')


@section('content')

  <h1>Welcome to Laravel-6</h1>
  <form action="/service" method="post">
<input type="text"name="name"autocomplete="off">
@csrf
<button>Add service</button>
</form>
<p style="color:red">@error('name'){{ $message }}@enderror</p>

    <ul>
    <!-- <li>Services-1</li>
    <li>Services-2</li> 
    <li>Services-3</li> -->
    <!-- @foreach($errors as $service)
   <li>{{$service}}</li>
    @endforeach
    </ul> -->
    <!-- if no service exists -->
    @forelse($services as $service)
   <!-- {For a single service{dd($service)}} -->
   <li>{{$service->name}}</li>
   @empty
   <li>No Service available</li>
    @endforelse
    </ul>
@endsection