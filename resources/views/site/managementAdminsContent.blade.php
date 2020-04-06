<div class="content">
    <div class="content-name">
        <h2>Управление администраторами</h2>
        <hr>
    </div>
    <div class="table-moderators">
        <div class="name-block">
            <h2>Администраторы</h2>
            <hr>
        </div>
        <div class="table">
            @if(!empty($admins))
                <table>
                    <tbody>
                    <tr>
                        <th>Ид</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Дата регистрации</th>
                        <th>Действия</th>
                    </tr>
                    @foreach($admins as $k => $admin)
                        <tr>
                            <td>{{ $admin->id }}</td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->created_at }}</td>
                            <td><button><a href="{{ route('adminsEdit',['edit'=> $admin->id ]) }}">Редактировать</a></button> <button><a href="{{ route('adminsDelete',['edit'=> $admin->id ]) }}">Удалить</a></button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h4>Администраторов нет!</h4>

            @endif
        </div>
        <hr>
    </div>
</div>