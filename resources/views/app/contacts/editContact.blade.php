@extends('app._layouts.base')

@section('content')   

@section('title') 
    <h4 class="page-title">CONTACTS</h4>
@endsection

@section('sub_title')   
<h2>Edit Contact<small></small></h2>
@endsection

<form method="POST" action="/app/contacts/{{ $contact->id }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    @method('PUT')
   
    <div class="item form-group">
        <label for="name" class="col-form-label col-md-3 col-sm-3 label-align">Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="name" value="{{ $contact->name }}" name="name" maxlenght="100" class="form-control" required="">
        </div>
    </div>

    <div class="item form-group">
        <label for="contact" class="col-form-label col-md-3 col-sm-3 label-align">Contact <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="contact" name="contact" value="{{ $contact->contact }}" onkeyup="mascara(this, mtel);" maxlenght="15" class="form-control" required="">
        </div>
    </div>

   
    <div class="item form-group">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">E-mail <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input type="email" id="email" name="email" value="{{ $contact->email }}" maxlenght="200" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="mail@exemplo.com, mail@exemplo.com.br" class="form-control" required>
        </div>
    </div>

    <div class="ln_solid"></div>

    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
        <div style="text-align:center">
        <button type="submit" name="save" class="btn btn-info">
                <i class="fa fa-save"></i> Save
            </button>

            <a href="{{ route('indexContact') }}" class="btn btn-info">
                <i class="fa fa-arrow-left"></i> Back</a>
        </div>            
        </div>
    </div>    
</form>

@endsection
