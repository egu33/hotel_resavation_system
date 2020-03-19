@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- パネル部分 -->
        <form action="{{ url('/resavations/resavation_confirm')}}" method="POST" class="form-horizontal">
          @csrf
          @method('GET')
            <div class="panel panel-default">
                <div class="panel-heading">予約フォーム</div>
                    <div class="panel-body">
                        <p><span class="mgr-20"><strong>宿泊先</strong></span>
                            <select name="name" class="cp_ipselect cp_sl05">
                                <option hidden value="" input type="hidden">選択してください</option>
                                <option value="ホテル1">ホテル1</option>
                                <option value="ホテル2">ホテル2</option>
                                <option value="ホテル3">ホテル3</option>
                            </select>
                        </p>
                    </div>
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
        <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>no</th>
            <th>ホテル名</th>
            <th>チェックイン</th>
            <th>チェックアウト</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 0?>
          @foreach ($resavations as $resavation)
          <tr class="table-text">
            <td>
              <?php $count++ ?>
              {{ $count }}
            </td>
              <td >
                  <div>{{ $resavation->name }}</div>
              </td>
              <td>
                <div>{{ $resavation->start_date }}</div>
              </td>
              <td>
                <div>{{ $resavation->end_date }}</div>
              </td>
                <td>
                  <form action="{{ url('resavations/' . $resavation->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-btn fa-trash"></i> 削除
                    </button>
                  </form>
                </td>
          </tr>
      @endforeach
        </tbody>
      </table>
    </div>
    </div>

@endsection