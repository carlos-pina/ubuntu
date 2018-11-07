@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Personal Data</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('people.store') }}">
                        @csrf
                        <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
                        <div class="form-group row">
                          <label for="name" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}"/>
                            @if($errors->has('name'))
                              <em class="help-block text-danger">{{ $errors->first('name') }}</em>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}"/>
                            @if($errors->has('lastname'))
                              <em class="help-block text-danger">{{ $errors->first('lastname') }}</em>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="documentType" class="col-sm-2 col-form-label">Document Type</label>
                          <div class="col-sm-5">
                            <select class="form-control" id="documentType" name="documentType">
                              <option value=""></option>
                              @foreach ($documents as $document)
                                @if (old('documentType') == $document->id)
                                  <option value="{{ $document->id }}" selected>{{ $document->document }}</option>
                                @else
                                  <option value="{{ $document->id }}">{{ $document->document }}</option>
                                @endif
                              @endforeach
                            </select>
                            @if($errors->has('documentType'))
                              <em class="help-block text-danger">{{ $errors->first('documentType') }}</em>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="document" class="col-sm-2 col-form-label">Document</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" id="document" name="document" placeholder="Document" value="{{ old('document') }}"/>
                            @if($errors->has('document'))
                              <em class="help-block text-danger">{{ $errors->first('document') }}</em>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}"/>
                            @if($errors->has('phone'))
                              <em class="help-block text-danger">{{ $errors->first('phone') }}</em>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="email" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="documentFile" class="col-sm-2 col-form-label">Document</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" id="documentFile" name="documentFile"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-default">Save</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
