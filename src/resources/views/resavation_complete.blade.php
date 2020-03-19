@extends('layouts.app')
@section('title', 'お問い合わせ')
@section('content')
    <form action="{{ url('/resavations')}}" method="POST" class="form-horizontal">
        @csrf
        @method('GET')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">予約完了</h1>
        </div>
        <div class="panel-body">
            <div class="well well-lg text-center">
                ご予約ありがとうございました
                <br>
            <button type="submit" name="action" value="back" class="btn btn-default">
                トップへ戻る
            </button>
            </div>
        </div>
    </div>
    </form>
@endsection