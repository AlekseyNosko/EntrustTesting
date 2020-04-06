<div class="content">
    <div class="content-name">
        <h2>Управление ролями</h2>
        <hr>
    </div>
    <div class="table-moderators">
        <div class="name-block">
            <h2>Роли</h2>
            <hr>
        </div>
        <div class="table">
            @if(!empty($roles))
                <table>
                    <tbody>
                    <tr>
                        <th>Ид</th>
                        <th>Название</th>
                        <th>Название для пользователя</th>
                        <th>Описание</th>
                        <th>Действия</th>
                    </tr>
                    @foreach($roles as $k => $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->display_name }}</td>
                            <td>{{ $role->description }}</td>
                            <td><button><a href="">Редактировать</a></button> <button><a href="{{ route('roleDelete',[$role->id]) }}">Удалить</a></button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h4>Ролей нет!</h4>

            @endif
        </div>
        <div class="add-role">
            <button><a href="{{ route('roleAdd') }}">Добавить роль</a></button>
        </div>
        <hr>
    </div>
</div>