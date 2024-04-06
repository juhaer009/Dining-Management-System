<form  method="POST" action="/listings/{{$listing->id}}/edit">
    @csrf
    @method('PUT')
    <label for="name">Name</label><br>
    <input type="text" name="name" value="{{$listing->name}}"><br>
    <label for="email">Email</label><br>
    <input type="email" name ="email" value="{{$listing->email}}"><br>
    <label for="date">Date</label><br>
    <input type="date" name = "date" value="{{$listing->date}}"><br>
    <label for="phone">Phone</label><br>
    <input type="tel" name="phone" value="{{$listing->phone}}"><br>
    <label for="guests">No. of guests</label><br>
    <input type="number" name="guests" value="{{$listing->guests}}"><br>
    <label for="time">Time</label><br>
    <input type="time" name="time" value="{{$listing->time}}"><br>
    <label for="description">Description</label><br>
    <textarea name="description" rows="10">{{$listing->description}}</textarea><br>
    <button type="submit">Update</button>
</form>
