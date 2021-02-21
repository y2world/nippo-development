@extends('layouts.app')

@section('content')
<div class="mt-3"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MY PAGE') }}</div>

                <div class="card-body">
                   <section>
                    <p>更新しました</p>
                    <a href="{{ url('/posts') }}" class="btn btn-light">戻る</a>
                    </section>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
