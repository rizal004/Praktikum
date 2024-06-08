@extends('layout.main')
@push('css')
@endpush
@section('content')
<div class="container">
    <div class="card my-4">
        <div class="card-body">
            <h1>Selamat Datang {{Auth::user()->name}}</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia expedita ratione suscipit neque libero recusandae officia illo? Neque doloribus mollitia vel eligendi facere repellendus omnis fuga, eum eius commodi ipsam?</p>
            <a href="/" class="btn btn-secondary"> Logout </a>
        </div>
    </div>
</div>

<p> ini isi halaman home</p>
@endsection