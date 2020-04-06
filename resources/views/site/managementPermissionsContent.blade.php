<div class="content">
    <div class="content-name">
        <h2>Управление разрешениями</h2>
        <hr>
    </div>
    <div class="table-moderators">
        <div class="name-block">
            <h2>Разрешения</h2>
            <hr>
        </div>
        <div class="table">
            @if(!empty($permissions))
                <table>
                    <tbody>
                    <tr>
                        <th>Ид</th>
                        <th>Название</th>
                        <th>Название для пользователя</th>
                        <th>Описание</th>
                    </tr>
                    @foreach($permissions as $k => $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->display_name }}</td>
                            <td>{{ $permission->description }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h4>Разрешений нет!</h4>

            @endif
        </div>
        <hr>
    </div>
</div>