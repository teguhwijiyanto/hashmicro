@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		
		
		  
            <div class="card">
			
                <div class="card-header">{{ __('Check Two Inputs') }}</div>
		 
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        Input 1: {{ $input_1 }} <br>
						Input 2: {{ $input_2 }} <br>
						Sliced Chars: {{ $sliced_chars }} <br>
						Num of Sliced Chars: {{ $sliced_chars_num }} <br>
						Sliced Chars Procentage: {{ $sliced_chars_procentage }} %
                    </div>
                    <p><a class="btn btn-success" href='{{ route("check_two_input.create") }}'><i class="fa fa-plus"></i> Try Again</a></p>
                </div>
				
				<div class="card-body">
				  @if ($errors->any())
					<div class="alert alert-danger">
					  <ul>
						@foreach ($errors->all() as $error)
						  <li>{{ $error }}</li>
						@endforeach
					  </ul>
					</div>
				  @endif
				 </div>		
				 
            </div>
        </div>
    </div>
</div>
@endsection