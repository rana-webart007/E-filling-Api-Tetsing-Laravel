@extends('legalconnect.commons.header')
@section('content')

<h2 class="text-center">Registration Form</h2>
<form class="form-horizontal m-5" action="{{ route('legal.register.action') }}" method='POST'
     autocomplete="off">
    @csrf
    <div class="form-group row">
        <label for="inputName" class="col-md-2 col-form-label">Name</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="name" name="name"
                placeholder="Your Name" value="{{ old('name') }}">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="inputName" class="col-md-2 col-form-label">Address 1</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="address1" name="address1"
                placeholder="Address 1" value="{{ old('address1') }}">
            @if ($errors->has('address1'))
            <span class="text-danger">{{ $errors->first('address1') }}</span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="inputName" class="col-md-2 col-form-label">Address 2</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="address2" name="address2"
                placeholder="Address 2" value="{{ old('address2') }}">
            @if ($errors->has('address2'))
            <span class="text-danger">{{ $errors->first('address2') }}</span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="inputName" class="col-md-2 col-form-label">City</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="city" name="city"
                placeholder="City" value="{{ old('city') }}">
            @if ($errors->has('city'))
            <span class="text-danger">{{ $errors->first('city') }}</span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="inputName" class="col-md-2 col-form-label">State</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="state" name="state"
                placeholder="State" value="{{ old('state') }}">
            @if ($errors->has('state'))
            <span class="text-danger">{{ $errors->first('state') }}</span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="inputName" class="col-md-2 col-form-label">Zip</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="zip" name="zip"
                placeholder="Zip" value="{{ old('zip') }}">
            @if ($errors->has('zip'))
            <span class="text-danger">{{ $errors->first('zip') }}</span>
            @endif
        </div>
    </div>
    


    <div class="form-group mb-0 mt-2 row justify-content-end">
        <div class="col-md-8">
            <button type="submit" class="btn btn-info">Register</button>
        </div>
    </div>
</form>

@endsection