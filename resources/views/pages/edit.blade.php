@extends('layouts.master')

@section('content')
<section class="section">
        <div class="container">
          <header class="section-header">
            <h2>Product Edit</h2>
          </header>
          <div class="row">
            <div class="col-md-4 mx-auto">
              <form action="/produk/update" method="POST" class="input-line">
                @csrf
                <div class="form-group">
                <input type="hidden" name="kd" value="{{ $produk->kd_produk }}"> <br>
                Product Name <input value="{{ $produk->nm_produk }}" class="form-control" name="nama" type="text">
                </div>  
                <input type="submit" class="btn btn-primary" value="Save">
                <a href="/produk" class="btn btn-primary" >Cancel</a>
                </form>
            </div>
          </div>
        </div>
      </section>
@endsection