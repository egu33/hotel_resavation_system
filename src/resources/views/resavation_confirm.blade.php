@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
    <form action="{{ url('/resavations/store')}}" method="POST" class="form-horizontal">
        @csrf
        @method('GET')
          <div class="panel panel-default">
              <div class="panel-heading"> {{ $name ?? old('name') }} </div>
                @include('common.errors')
                  <div class="panel-body">
                  <input type="hidden" value="{{ $name ?? old('name')}}" name="name">
                      チェックイン<input type="date" value= "<?php echo date('Y-m-d');?>" name="start_date">
                      チェックアウト<input type="date" value= "<?php echo date('Y-m-d');?>" name="end_date">
                  </div>
                  <div>
                    <div class="form-group">
                        <div class="col-sm-offset-3">
                            <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i> 予約
                            </button>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </form>
    </div>
</div>
@endsection