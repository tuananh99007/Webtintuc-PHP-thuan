<div class="col-md-12">
    <!--    Context Classes  -->
    <div class="panel panel-default">

        <div class="panel-heading">
            MAN HÌNH ĐĂNG NHẬP
        </div>

        <div class="panel-body">
            <div class="table-responsive">
                <form action="{{ route('admin.users.postlogin') }}" method="POST">
                    @csrf
                    <table class="table" border="1">
                        <tr>
                            <th>
                                nhap email
                            </th>
                            <th>
                                nhap password
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="email">
                            </td>
                            <td>
                                <input type="text" name="password">
                            </td>
                        </tr>
                    </table>
                    <button type="submit">dang nhap</button>
                </form>
            </div>
        </div>
    </div>
    <!--  end  Context Classes  -->
</div>
