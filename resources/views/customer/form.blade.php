<label for="name">Name</label><br>
<input type="text"name="name"autocomplete="off"value="{{old('name')??$customer->name}}"><br>

@error('name')
<p style="color:red">{{$message}}</p>@enderror
<label for="email">Email</label><br>
<input type="text"name="email"autocomplete="off"value="{{old('email')??$customer->email}}"><br><br>
@error('email')
<p style="color:red">{{$message}}</p>@enderror
@csrf