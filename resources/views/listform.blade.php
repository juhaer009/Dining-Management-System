<form  method="POST" action="/reserve">
    @csrf
<label for="name">Name</label><br>
<input type="text" name="name"><br>
<label for="email">Email</label><br>
<input type="email" name ="email"><br>
<label for="date">Date</label><br>
<input type="date" name = "date"><br>
<label for="phone">Phone</label><br>
<input type="tel" name="phone" placeholder="01715-450678" pattern="[0-9]{5}-[0-9]{6}"><br>
<label for="guests">No. of guests</label><br>
<input type="number" name="guests"><br>
<label for="time">Time</label><br>
<input type="time" name="time"><br>
<label for="description">Description</label><br>
<textarea name="description" rows="10"></textarea><br>
<button type="submit">Submit</button>
</form>