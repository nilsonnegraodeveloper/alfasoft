@extends('app._layouts.base')

@section('content')   

@section('title') 
    <h4 class="page-title">CONTACTS</h4>
@endsection

@section('sub_title')   
<h2>Delete Contact<small></small></h2>
@endsection

<form method="POST" action="/app/contacts/{{ $contact->id }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    @method('DELETE')
   
    <div class="item form-group">
        <label for="name" class="col-form-label col-md-3 col-sm-3 label-align">Name</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" value="{{ $contact->name }}" class="form-control" readonly>
        </div>
    </div>

    <div class="item form-group">
        <label for="contact" class="col-form-label col-md-3 col-sm-3 label-align">Contact</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" value="{{ $contact->contact }}" class="form-control" readonly>
        </div>
    </div>

    <div class="item form-group">
        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">E-mail</label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" value="{{ $contact->email }}" class="form-control" readonly>
        </div>
    </div>

    <div class="ln_solid"></div>

    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
        <div style="text-align:center">

        <button type="submit" name="save" class="btn btn-danger" onclick="return confirm('Are you Sure?');">
                <i class="fa fa-trash"></i> Delete
            </button>

            <a href="{{ route('indexContact') }}" class="btn btn-info">
                <i class="fa fa-arrow-left"></i> Back</a>
        </div>            
        </div>
    </div>    
</form>

@endsection
