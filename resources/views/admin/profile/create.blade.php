{{-- layouts/admin.blade.php --}}
@extends('layouts.profile')

{{-- admin.blade.phpのyield('title')に'ニュースの新規作成'を埋め込む　--}}
@section('title','MYプロフィール')

{{-- admin.blade.phpの@yield('content')に以下にタグを埋め込み --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>MYプロフィール</h2>
            </div>
        </div>
    </div>
@endsection
<!---->