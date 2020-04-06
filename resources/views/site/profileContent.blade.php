<div class="content">
    <div class="content-name">
        <h2>Профиль</h2>
        <hr>
    </div>
    <div class="profile">
        Имя: {{ $name }}<br>
        емайл: {{ $email }}<br>
        Роль: {{ $role }}<br>
        <hr>
        @foreach($permissions as $k => $permission)
            Разрешенное действие: {{ $permission }} <br>
        @endforeach
        <hr>
    </div>
</div>