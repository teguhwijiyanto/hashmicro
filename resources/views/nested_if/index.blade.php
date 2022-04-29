@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		
		
		  
            <div class="card">
			
                <div class="card-header">{{ __('Nested If') }}</div>
		 
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
					<i>
                        Multiple of 2 will print Fizz<br>
						Multiple of 3 will print Buzz<br>
						Multiple of both 2 AND 3 will print FizzBuzz<br>
						Otherwise, only print "-"<br><br>
					</i>
						Max. Value : {{ $input_1 }} <br><br>
						The FizzBuzz : <br> {!! $str_result !!}
                    </div>
                    <p><a class="btn btn-success" href='{{ route("nested_if.create") }}'><i class="fa fa-plus"></i> Try Again</a></p>
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