@forelse ($messages as $message)
    <div class="row">
        <div class="col-sm-12">
            <strong>
                {{$message->name}},
                {{$message->created_at->format('j.m.Y')}}
                {{$message->email}}
            </strong>

            <p>{{$message->message}}</p>
            <hr>
        </div>
    </div>
@empty
    <h2 class="text-center">No items found</h2>
@endforelse

{{$messages->links()}}
