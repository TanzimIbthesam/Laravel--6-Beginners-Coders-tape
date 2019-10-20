<h1>Customer Details</h1>

<div>
<a href="/customers">Back</a>
</div>
<p>{{$customer->name }}</p>
<p>{{$customer->email}}</p>
<div>
<a href="/customers/{{$customer->id}}/edit">Edit</a>
<form action="/customers/{{$customer->id}}"method="post">

@method('DELETE')
@csrf
<button>Delete</button>
</form>
</div>