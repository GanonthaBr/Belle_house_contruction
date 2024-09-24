@extends('partials.admin.layout_admin')
@section('admin')
<div class="wrapper">
    @include('partials.admin.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        @include('partials.admin.mainheader')
        <div class="container ml-4">
            <h1>{{$message->topic}}</h1>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{__('Nom')}}: {{ $message->topic }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{__('Email')}}: {{ $message->email }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{__('Object')}}: {{ $message->topic }}</h6>
                        <p class="card-text">{{__('Message')}}: {{ $message->content }}</p>
                    </div>
                </div>
            </div>

        </div>
        @include('partials.admin.footer')
    </div>
</div>
@endsection