@extends ('layouts/app')

@section('title', 'Add Product')

@section('content')

    <form class="formCreate" action="{{ route('calories.store') }}" method="post">
        @csrf

        <input type="hidden" name="subject_id" value="{{ $subject->id }}">

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" value="{{ $subject->body }}" readonly><br>

        <label for="product">Product:</label><br>
        <input 
            type="text" 
            name="product" 
            id="product" 
            value="{{ old('product')}}" 
            placeholder="e.g. Dark chocolate"
        ><br>

        @error('product')
            <p class="formError">{{ $message }}</p>
        @enderror
        
        <label for="kcal_per_100">Kcal per 100 g/ml:</label><br>
        <input 
            type="text" 
            name="kcal_per_100" 
            id="kcal_per_100" 
            value="{{ old('kcal_per_100')}}"
            placeholder="e.g. 543" 
        ><br>

        @error('kcal_per_100')
            <p class="formError">{{ $message }}</p>
        @enderror
        
        <label for="weight_g_ml">Weight of product in g/ml:</label><br>
        <input 
            type="text" 
            name="weight_g_ml" 
            id="weight_g_ml" 
            value="{{ old('weight_g_ml')}}" 
            placeholder="e.g. 7 or 7.2"
        ><br>

        @error('weight_g_ml')
            <p class="formError">{{ $message }}</p>
        @enderror
        
        <button class="btnForm" type="submit">Add new Product</button>
    </form>
  
@endsection