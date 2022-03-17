@extends('admin.layouts.app')
@section('content')
@section('title', 'Profil')
<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">İstifadəçi məlumatları</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('change.password') }}">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
  
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ad</label>
  
                            <div class="col-md-6">
                                <input value="{{auth()->user()->name}}" id="name" type="text" class="form-control" name="name" autocomplete="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
  
                            <div class="col-md-6">
                                <input value="{{auth()->user()->email}}" id="email" type="email" class="form-control" name="email" autocomplete="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Hazırki parol</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="hazirki_parol">
                            </div>
                        </div>
                        <script>
                            setTimeout(
                                function() { $(':password').val(''); },
                                1000  //1,000 milliseconds = 1 second
                            );
                        </script>
                        <div class="form-group row">
                            <label for="new_password" class="col-md-4 col-form-label text-md-right">Yeni parol</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="yeni_parol">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="new_confirm_password" class="col-md-4 col-form-label text-md-right">Parolu təsdiqlə</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="yeni_parolu_tesdiqle">
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Yenilə
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
   </section>
@endsection