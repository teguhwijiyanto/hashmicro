@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nested If') }}</div>

                <div class="card-body">

                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <form method="POST" action='{{ route("nested_if.store") }}' enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
							<label>Max. Value :</label>
                            <input class="form-control" type="text" name="input_1" placeholder="Input number">
                            @error('input_1')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>
						
                        <div class="form-group">
                            <a class="btn btn-danger mr-1" href='{{ route("nested_if.index") }}' type="submit">Clear</a>
                            <button class="btn btn-success" type="submit">Print FizzBuzz</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection