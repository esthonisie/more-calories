@extends ('layouts/app')

@section('title', 'Edit Product')

@section('content')

    <form 
        class="formEdit" 
        action="{{ route('calories.update', ['calorie' => $calorie->id]) }}" 
        method="post"
    >
        @csrf
        @method('PATCH')

        <label for="product">Product:</label><br>
        <input 
            type="text" 
            name="product" 
            id="product" 
            value="{{ $calorie->product }}"
        ><br>

        @error('product')
        <p class="formError">{{ $message }}</p>
        @enderror

        <label for="subject">Subject:</label><br>
        <select name="subject_id" id="subject">
            <option value="{{ $calorie->subject->id }}">{{ $calorie->subject->body }}</option>
            @foreach ($subjects as $subject)
                @if ($subject->body != $calorie->subject->body)
                    <option value="{{ $subject->id }}">{{ $subject->body }}</option> 
                @endif   
            @endforeach
        </select><br>
        
        <label for="kcal_per_100">Kcal per 100 g/ml:</label><br>
        <input 
            type="text" 
            name="kcal_per_100" 
            id="kcal_per_100" 
            value="{{ $calorie->kcal_per_100 }}"
        ><br>

        @error('kcal_per_100')
        <p class="formError">{{ $message }}</p>
        @enderror
        
        <label for="weight_g_ml">Weight of product in g/ml:</label><br>
        <input 
            type="text" 
            name="weight_g_ml" 
            id="weight_g_ml" 
            value="{{ $calorie->weight_g_ml }}"
        ><br>

        @error('weight_g_ml')
        <p class="formError">{{ $message }}</p>
        @enderror
        
        <button class="btnForm" type="submit">Update Product</button>
    </form>
  
@endsection