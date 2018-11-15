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
                          <label for="address" class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ old('address') }}"/>
                            @if($errors->has('address'))
                              <em class="help-block text-danger">{{ $errors->first('address') }}</em>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="description" class="col-sm-2 col-form-label">Description</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" placeholder="Description" value="{{ old('description') }}"></textarea>
                            @if($errors->has('description'))
                              <em class="help-block text-danger">{{ $errors->first('description') }}</em>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="activities" class="col-sm-2 col-form-label">Activities</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="activities" name="activities" placeholder="Activities" value="{{ old('activities') }}"></textarea>
                            @if($errors->has('activities'))
                              <em class="help-block text-danger">{{ $errors->first('activities') }}</em>
                            @endif
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
                            <select class="form-control" id="serviceDetails" name="serviceDetails"></select>
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

@section('personalscripts')
    <script>
    $(function() {
        $('select[name=service]').change(function() {

            var url = '/serviceDetails/' + $(this).val();

            $.get(url, function(data) {
                var select = $('form select[name= serviceDetails]');

                select.empty();
                select.append('<option value="">--- Select Service Detail ---</option>');
                $.each(data, function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.description + '</option>');
                });
            });
        });
    });

    </script>
@endsection
