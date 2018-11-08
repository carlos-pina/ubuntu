@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Company Data</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('companies.store') }}">
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
                          <label for="owner" class="col-sm-2 col-form-label">Owner</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="owner" name="owner" placeholder="Owner" value="{{ old('owner') }}"/>
                            @if($errors->has('owner'))
                              <em class="help-block text-danger">{{ $errors->first('owner') }}</em>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="documentType" class="col-sm-2 col-form-label">Document Type</label>
                          <div class="col-sm-5">
                            <select class="form-control" id="documentType" name="documentType">
                              <option value="">--- Select Document Type ---</option>
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
                          <label for="service" class="col-sm-2 col-form-label">Service</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="service" name="service">
                              <option value="">--- Select Service ---</option>
                              @foreach ($services as $service)
                                @if (old('service') == $service->id)
                                  <option value="{{ $service->id }}" selected>{{ $service->description }}</option>
                                @else
                                  <option value="{{ $service->id }}">{{ $service->description }}</option>
                                @endif
                              @endforeach
                            </select>
                            @if($errors->has('service'))
                              <em class="help-block text-danger">{{ $errors->first('service') }}</em>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="serviceDetails" class="col-sm-2 col-form-label">Service Details</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="serviceDetails" name="serviceDetails">
                              <option value="">--- Select Service Detail ---</option>
                              @foreach ($serviceDetails as $detail)
                                @if (old('serviceDetails') == $detail->id)
                                  <option value="{{ $detail->id }}" selected>{{ $detail->description }}</option>
                                @else
                                  <option value="{{ $detail->id }}">{{ $detail->description }}</option>
                                @endif
                              @endforeach
                            </select>
                            @if($errors->has('serviceDetails'))
                              <em class="help-block text-danger">{{ $errors->first('serviceDetails') }}</em>
                            @endif
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
