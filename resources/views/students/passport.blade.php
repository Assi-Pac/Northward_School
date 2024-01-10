@extends('layouts.layout')
@section('title') <title>School | Student Passport</title> @endsection
@section('content') 

{{-- TODO INCLUDE partials to student links --}}

    <div class="container">
        @if (session()->has('mssg'))
            {{ session('mssg')}}
        @endif
        <div ></div>
            <form
                 action="{{ Route('update.img', $student->id)}}"
                 method="POST"
                 enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <div class="row">
                    <div class="col">
                        <label for="passport">Edit Image</label>
                        <input type="file" accept="image/jepg, image/png,  image/jpg" name="passport" id='passport' class="form-control @error('passport') is-invalid @enderror">
                        @error('passport')
                            <div class="invalid-feedback">
                                <span>{{ $message}} </span>
                            </div>
                        @enderror
                    </div>
                    <div class="col mt-3">
                        <button class="btn btn-primary">Update Image {{ $student->id}} </button>
                    </div>
                </div>

            </form>
    </div>
@endsection

