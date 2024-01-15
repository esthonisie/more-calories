@extends ('layouts/app')

@section('title', 'Edit Subject')

@section('content')

    <form 
        class="formEdit" 
        action="{{ route('subjects.update', ['subject' => $subject->id]) }}" 
        method="post"
    >
        @csrf
        @method('PATCH')

        <label for="subject">Subject:</label><br>
        <textarea name="body" id="subject">{{ $subject->body }}</textarea><br>

        @error('body')
        <p class="formError">{{ $message }}</p>
        @enderror

        <label for="category">Category:</label><br>
        <select name="category_id" id="category">
            <option value="{{ $subject->category->id }}">{{ $subject->category->name }}</option>
            @foreach ($categories as $category)
                @if ($category->name != $subject->category->name)
                    <option value="{{ $category->id }}">{{ $category->name }}</option> 
                @endif   
            @endforeach
        </select><br>
        
        <button class="btnForm" type="submit">Update Subject</button>
    </form>
  
@endsection