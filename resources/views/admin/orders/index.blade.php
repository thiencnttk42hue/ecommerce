@extends('admin.master');
@section('title', "List Order");
@section('content')

@if(session('message'))
<div class="alert alert-success" role="alert">
    {{ session()->get('success') }}
    {{ session('message') }}
</div>
@endif

<div class="card-body">
 <h4 class="card-title">DANH SÁCH ĐƠN HÀNG</h4>
 <br>
<form action="" method="get" class="form-inline">
  <div class="form-group">
    Từ &nbsp;<input type="date" name="txtdatefrom" id="txtdatefrom" value=""> &nbsp;
    Đến &nbsp;<input type="date" name="txtdateto" value="{{ 'Y-m-d' }}"> &nbsp;
  </div>&nbsp;
  <button type="submit" class="btn btn-primary">tim</button>
</form>
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã đơn hàng</th>
        <th>Tên đơn hàng</th>
        <!-- <th>Mô tả đơn hàng</th> -->
        <th>Trạng thái</th>
        <th>Tên Khách hàng</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td scope="row"> {{ $order->id }} </td>
            <td> <a href="{{ route('admin.orders.show', $order->id) }}"> {{ $order->name }} </a> </td>
            <!-- <td style="width: 100px"> {{ $order->desc }} </td> -->
            <td> {{ $order->status == 0 ? "chưa thanh toán" : "Đã thanh toán" }} </td>
            <td> {{ $order->customer->fullName }} </td>
            <td>
              <form action="{{ route('admin.orders.update', $order->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('put') }}
                @if($order->status == 0)
                  <input type="hidden" name="txtstatus" value='1'>
                @endif
                @if($order->status == 1)
                <input type="hidden" name="txtstatus" value='0'>
                @endif
                <button type="submit">Cập nhật</button>
              </form>
              <form action="{{ route('admin.orders.destroy', $order->id) }}" method="post" onsubmit="return confirm('Bạn có chắc muốn xoá hóa đơn')">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  <button type="submit"> Xóa</button>
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <br>
  {{ $orders->appends(request()->all())->links() }}
</div>

@endsection
