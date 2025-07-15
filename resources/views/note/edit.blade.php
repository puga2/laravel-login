<x-layout>

    <div class="note-container single-note">
        <h1>Edit your note</h1>
        <form action="{{route('note.update',$note)}}" method="post" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" id="" rows="10" class="note-body" placeholder="Enter your note">
                {{$note->note}}
            </textarea>
            <div class="note-buttons">
                <a href="{{route('note.index')}}">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form> 
    </div>
</x-layout>

