@extends('base')
@section('main')
<div class="row">
<div class="col-sm-8 col-md-8 col-lg-8 offset-sm-2">
<h1 class="display-3">Update A Contact</h1>
@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }} </li>
@endforeach
</ul>
</div>
<br />
@endif
<form method="POST" action="{{ route('contacts.update',$contact->id) }}">
@method('PATCH')
@csrf
<div class="form-group">
<label for="first_name">
First Name :
</label>
<input type="text" class="form-control" name="first_name" value= "{{ $contact->first_name }}" />
</div>
<div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value="{{ $contact->last_name }}" />
</div>
<div class="form-group">
<label>Email:</label>
<input type="email" class="form-control" name="email" value="{{ $contact->email }}" />
</div>
<div class="form-group">
<label for="city">City:</label>
<input type="text" class="form-control" name="city" value="{{ $contact->city}}" />
</div>
<div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" name="country" value={{ $contact->country }} />
            </div>
<div class="form-group">
<label for="username">Username:</label>
<input type="text" class="form-control" name="username" value="{{ $contact->username}}" />
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>
