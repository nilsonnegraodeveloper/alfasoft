@extends('app._layouts.base')

@section('title')
<h4 class="page-title">CONTACTS</h4>
@endsection

@section('sub_title')
<h2>View Contact<small></small></h2>
@endsection

@section('content')

<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

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
                <a href="{{ route('indexContact') }}" class="btn btn-info">
                    <i class="fa fa-arrow-left"></i> Back</a>

                <a href="/app/contacts/{{ $contact->id }}/edit/" class="btn btn-info">
                    <i class="fa fa-edit"></i> Edit</a>

                <form action="/app/contacts/{{ $contact->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-info"><a href="/app/contacts/{{ $contact->id }}">
                            <i class="fa fa-trash" onclick="return confirm('Are you Sure?');" title="Delete Contact"></i></a></button>
                </form>
            </div>
        </div>
       
    </div>
</form>

@endsection