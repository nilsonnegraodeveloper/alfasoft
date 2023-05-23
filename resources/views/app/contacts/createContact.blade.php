@extends('app._layouts.base')

@section('content')

@section('title')    
      <h4 class="page-title">CONTACTS</h4>
@endsection

@section('sub_title')
<h2>New Contact<small></small></h2>
@endsection

  <form method="POST" action="{{ route('store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    @csrf  
    
    <div class="item form-group">
        <label for="name" class="col-form-label col-md-3 col-sm-3 label-align">Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" value="{{ old('name') }}" name="name" maxlenght="100" class="form-control" required=""/>
        </div>
    </div>

    <div class="item form-group">
        <label for="contact" class="col-form-label col-md-3 col-sm-3 label-align">Contact <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="tel" value="{{ old('contact') }}" id="contact" name="contact" onkeyup="mascara(this, mtel);" maxlenght="15" class="form-control" required=""/>
        </div>
    </div>

    <div class="item form-group">
        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">E-mail <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input type="email" value="{{ old('email') }}" id="email" name="email" maxlenght="200" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="mail@examplo.com, mail@examplo.com.br" class="form-control" required="" />
        </div>
    </div>

    <div class="ln_solid"></div>
    
    <br />
    
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
        <div style="text-align:center">
        <button type="submit" name="salvar" class="btn btn-info">
                <i class="fa fa-save"></i> Save
            </button>

            <a href="{{ route('dashboard') }}" class="btn btn-info">
                <i class="fa fa-arrow-left"></i> Back</a>
        </div>            
        </div>
    </div>
</form>
@endsection
