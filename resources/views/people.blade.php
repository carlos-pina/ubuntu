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

                    <form method="POST" action="/profile">
                        @csrf
                        <input type="hidden" name="userid" value="0">
                        <div class="form-group row">
                          <label for="name" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Name"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="lastname" placeholder="Last Name"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="documentType" class="col-sm-2 col-form-label">Document Type:</label>
                          <div class="col-sm-5">
                            <select class="form-control" id="documentType"></select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="document" class="col-sm-2 col-form-label">Document:</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control" id="document" placeholder="Document"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" placeholder="Phone"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="email" class="col-sm-2 col-form-label">Email:</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Email"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="documentFile" class="col-sm-2 col-form-label">Document:</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" id="documentFile"/>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
