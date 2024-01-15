@extends ('layouts/app')

@section('title', 'Home')

@section('content')
    <div class="subjectContainer">
        
        @foreach ($subjects as $subject)
            
            <div class="subjectLabel">
                <div class="subjectLabel-title">
                    <p>{{ $subject->body }}</p>
                    <button class="btnCategory">{{ $subject->category->name }}</button>
                </div>
                <div class="subjectLabel-links">
                    <a 
                        class="subjectLabel-edit" 
                        href="{{ route('subjects.edit', ['subject' => $subject->id]) }}"
                    >Edit
                    </a>   
                    <form 
                        action="{{ route('subjects.destroy', ['subject' => $subject->id]) }}" 
                        method="post"
                    >
                        @csrf
                        @method('DELETE')
                        <button class="btnSubjectDelete">Delete</button>
                    </form>
                </div>
            </div>

            <div class="tableBorder">
                <table id="{{ $subject->id }}">
                <thead>
                    <tr>
                        <th class="colProduct">
                            Product 
                            <a href="{{ route('calories.create', ['subject' => $subject->id]) }}">
                                <button class="btnSubjectAddProduct">Add</button>
                            </a>
                        </th>
                        <th class="colNumber">Kcal per 100 g/ml</th>
                        <th class="colNumber">Weight in g/ml</th>
                        <th class="colNumber">Kcal subtotal</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subject->calorie as $calorie)
                        <tr>
                            <td>{{ $calorie->product }}</td>
                            <td>{{ $calorie->kcal_per_100 }}</td>
                            <td>{{ round($calorie->weight_g_ml) }}</td>
                            <td>
                                @php
                                    $caloriesSubtotal = $calorie->kcal_per_100 
                                    / 100 * $calorie->weight_g_ml;
                                @endphp
                                {{ round($caloriesSubtotal) }}
                            </td>
                            <td>
                                <a href="{{ route('calories.edit', ['calorie' => $calorie->id]) }}"
                                >Edit
                                </a>
                            </td>
                            <td>
                                <form 
                                    action="{{ route('calories.destroy', ['calorie' => $calorie->id]) }}" 
                                    method="post"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btnDelete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Kcal Total</td>
                        <td>
                            @php
                                $caloriesTotal = $subject->calorie->reduce(function ($sum, $calorie) 
                                {
                                    return $sum += $calorie->kcal_per_100 / 100 * $calorie->weight_g_ml;
                                }, 0);
                                $caloriesDay += $caloriesTotal;
                            @endphp
                            {{ round($caloriesTotal) }}
                        </td>
                    </tr>
                </tfoot>
                </table>
            </div>

        @endforeach   

    </div> 
    <div class="caloriesDay">
        <p>Kcal per Day: {{ round($caloriesDay) }}</p>  
    </div>
@endsection