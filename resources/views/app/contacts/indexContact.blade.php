@extends('app._layouts.base')

@section('content')

@section('title')
<h4 class="page-title">CONTACTS</h4>
@endsection

@section('sub_title')
<h2>INDEX<small></small></h2>
@endsection

<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <div class="item form-group">
                <div class="pull-left">
                    <a href="{{ route ('create') }}" class="btn btn-info">
                        <i class="fa fa-plus"></i> New</a>
                    <a href="{{ route ('dashboard') }}" class="btn btn-info">
                        <i class="fa fa-arrow-left"></i> Back</a>
                    <br />
                </div>
            </div>
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>E-mail</th>
                        <th width="7%">View</th>
                        <th width="7%">Edit</th>
                        <th width="7%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->contact }}</td>
                        <td>{{ $contact->email }}</td>
                        <td style="text-align:center"><a href="/app/contacts/{{ $contact->id }}/show/">
                                <i class="fa fa-eye" title="View Contact"></i></a>
                            </a></td>

                        <td style="text-align:center"><a href="/app/contacts/{{ $contact->id }}/edit/">
                                <i class="fa fa-edit" title="Edit Contact"></i></a>
                        </td>

                        <td style="text-align:center">
                            <form action="/app/contacts/{{ $contact->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=""><a href="/app/contacts/{{ $contact->id }}">
                                        <i class="fa fa-trash" onclick="return confirm('Are you Sure?');" title="Delet Contact"></i></a></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<br />
@endsection