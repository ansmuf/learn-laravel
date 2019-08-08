@extends('layouts.master')

@section('content')
<section class="section">
        <div class="container">
          <header class="section-header">
            <h2>Product Input</h2>
          </header>
          <div class="row">
            <div class="col-md-4 mx-auto">
              <form action="/produk/list/" method="post" class="input-line">
                @csrf
                <div class="form-group">
                  <input class="form-control" name="nama" type="text" placeholder="Product Name">
                </div>  
                <input type="submit" class="btn btn-primary" value="Save">
                <a href="/produk" class="btn btn-primary" >Cancel</a>
                </form>
            </div>
          </div>
        </div>
      </section>
@endsection