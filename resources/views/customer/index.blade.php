<h1>Hello WOrld,customers</h1>
<a href="/customers/create">Add new customers</a>
@forelse($customers as $customer)
 <p><strong>
     <a href="/customers/{{$customer->id}}"> {{$customer->name}}</a>
    </strong>({{$customer->email}})</p> 
@empty
<p>No Customer to show</p>
 @endforelse