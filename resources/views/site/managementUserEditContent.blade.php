<div class="content">
    <div class="name-div">
        <h2>Управление пользователем</h2>
        <hr>
    </div>
    <div class="creat">
        <form  method="post" action="" enctype="multipart/form-data">
            id: {{ $user->id }} <br>
            Имя: {{ $user->name }} <br>
            Email: {{ $user->email }} <br>
            Роль:
            <select name="role">
                <option selected disabled value="{{ $role }}">{{ $roleDisplay }}</option>
                @if(!empty($roles))
                    @foreach($roles as $k => $r)
                        @if($r->name != $role)
                            <option value="{{ $r->name }}">{{ $r->display_name }}</option>
                        @endif
                    @endforeach
                        @if($role != 'user')
                        <option value="user">User</option>
                        @endif
                @endif
            </select>
            <br>
            <hr>
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <button type="submit" value="">Изменить пользователя</button>
        </form>
        <hr>
    </div>
</div>