@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		
		
		  
            <div class="card">
			
                <div class="card-header">{{ __('Nested Loop') }}</div>
		 
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        Height : {{ $input_1 }} <br>
						The Tree : <br> {!! $str_tree !!}
                    </div>
                    <p><a class="btn btn-success" href='{{ route("nested_loop.create") }}'><i class="fa fa-plus"></i> Try Again</a></p>
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