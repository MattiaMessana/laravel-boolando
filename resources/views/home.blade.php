@extends('layouts.app')

@section('content')
    <section class="">
        <div class="container">
            <div class="row">
                @foreach ($products as $prod)
                    <div class="col-4">
                        @include('partials.cards')
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection