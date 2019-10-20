<h1>Edit Customers</h1>
<form action="/customers/{{$customer->id}}"method="post">
@method('PATCH')
@include('customer.form')
<button>Save</button>
</form>