@extends('users.layouts.index')
@section('main-content')
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>tinh trang</th>
        </tr>
        @foreach ($wait_for_confirmations as $index => $wait_for_confirmation)
            <tr>
                <td>{{ $wait_for_confirmation->id }}</td>
                <td>{{ $wait_for_confirmation->name }}</td>
                <td>{{ $wait_for_confirmation->status }}</td>
                <td>
                    @if ($wait_for_confirmation->status == 1)
                        chờ xác nhận
                    @else
                        đã được xác nhận
                    @endif
                </td>
                <td>
                    <a href="{{ route('users.components.detail_cart', ['id' => $wait_for_confirmation->id]) }}"
                        class="btn btn-primary btn-sm">Chi tiết</a>
                </td>
                <td>
                    @if ($wait_for_confirmation->status == 2)
                        <a href="{{ route('users.confirm', ['id' => $wait_for_confirmation->id]) }}"
                            class="btn btn-danger btn-sm">đã nhận được hàng</a>
                    @endif
                </td>
            </tr>
        @endforeach

    </table>
@endsection
