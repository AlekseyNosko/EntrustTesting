<div class="content">
    <div class="content-name">
        <h2>Управление пользователями</h2>
        <hr>
    </div>
    <div class="table-moderators">
        <div class="name-block">
            <h2>Модераторы</h2>
            <hr>
        </div>
        <div class="table">
            @if(!empty($moderators))
                <table>
                    <tbody>
                    <tr>
                        <th>Ид</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Дата регистрации</th>
                        <th>Действия</th>
                    </tr>
                        @foreach($moderators as $k => $moderator)
                            <tr>
                                <td>{{ $moderator->id }}</td>
                                <td>{{ $moderator->name }}</td>
                                <td>{{ $moderator->email }}</td>
                                <td>{{ $moderator->created_at }}</td>
                                <td><button><a href="{{ route('userEdit',['edit'=> $moderator->id ]) }}">Редактировать</a></button> <button><a href="{{ route('userDelete',['edit'=> $moderator->id ]) }}">Удалить</a></button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h4>Модераторов нет!</h4>

            @endif
        </div>
        <hr>
    </div>
    <div class="table-users">
        <div class="name-block">
            <h2>Пользователи</h2>
            <hr>
        </div>
        <div class="table">
            @if(!empty($users))
                <table>
                    <tbody>
                    <tr>
                        <th>Ид</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Дата регистрации</th>
                        <th>Действия</th>
                    </tr>
                        @foreach($users as $k => $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td><button><a href="{{ route('userEdit',['edit'=> $user->id ]) }}">Редактировать</a></button> <button><a href="{{ route('userDelete',['edit'=> $user->id ]) }}">Удалить</a></button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
               <h4>Пользователей нет!</h4>
            @endif
        </div>
        <hr>
    </div>
</div>