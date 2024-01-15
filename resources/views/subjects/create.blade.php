@extends ('layouts/app')

@section('title', 'Add Subject')

@section('content')

    <form class="formCreate" action="{{ route('subjects.store') }}" method="post">
        @csrf

        <label for="subject">Subject:</label><br>
        <textarea name="body" id="subject" placeholder=
        "For example:
- My favourite lunch for in the weekends. 
- Food I take with me when I go to the gym.
- The name of your dinner. 
- etc."></textarea><br>

        @error('body')
        <p class="formError">{{ $message }}</p>
        @enderror

        <label for="category">Category:</label><br>
        <select name="category_id" id="category">
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>   
        @endforeach
        </select><br>
        
        <button class="btnForm" type="submit">Submit new Subject</button>
    </form>
  
@endsection