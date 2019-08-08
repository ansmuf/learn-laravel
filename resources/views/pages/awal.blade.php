@extends('layouts.master')
@section('title')

@section('header')
<header class="header h-fullscreen" style="background-image: url(../assets/img/bg/2.jpg)">
    <div class="overlay opacity-95" style="background-image: linear-gradient(135deg, #fff 0%, #fff 40%, transparent 100%);"></div>
    <div class="container">
      <div class="row align-items-center h-100">

        <div class="col-md-8 col-lg-6">
          <h1 class="display-4"><strong>We can lend a hand</strong></h1>
          <p class="lead-2 mt-5 mb-8">TheSaaS builds software for better customer support and relationships</p>
        </div>
      </div>
    </div>
  </header>
@endsection

@section('content')
<section class="section">
    <div class="container">
      <header class="section-header">
        <small>Products</small>
      </header>
      <div class="row gap-y">
          <a href="/produk/add/" class="btn btn-lg btn-round btn btn-secondary">Add</a>
          <table class="table table-striped-center">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product Code</th>
                  <th>Product Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($produk as $p)
                <tr>
                  <th scope="row">1</th>
                  <td>{{ $p->kd_produk }} </td>
                  <td>{{ $p->nm_produk }} </td>
                  <td> 
                    <a href="" class="btn btn-sm btn-round btn btn-secondary">View</a>
                    <a href="/produk/edit/{{ $p->kd_produk }}" class="btn btn-sm btn-round btn btn-primary">Edit</a>
                    <a href="/produk/delete/{{ $p->kd_produk }}" class="btn btn-sm btn-round btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

      </div>
    </div>
  </section>
@endsection
