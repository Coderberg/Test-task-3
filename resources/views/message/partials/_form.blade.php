<form action="{{route('store')}}" method="post">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="" required>
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-outline-secondary">Submit</button>
</form>
