<div class="content">
    <div class="content-name">
        <h2>Создать роль</h2>
        <hr>
    </div>
    <div class="creat">
        <form  method="post" action="" enctype="multipart/form-data">
            <P>Название</p>
            <textarea name="name" cols="100" rows="1"></textarea>
            <P>Название для пользователя</p>
            <textarea name="display_name" cols="100" rows="1"></textarea>
            <p>Описание</P>
            <textarea name="description" id="" cols="100" rows="10"></textarea>
            @if(!empty($permissions))
                <hr>
            <h4>Выберите разрешения для роли</h4>
                <hr>
                @foreach($permissions as $k => $permission)
            <input type="checkbox" name="{{ $permission->name }}" value="{{ $permission->id }}"> {{ $permission->display_name }} ( {{ $permission->description }} ) <br>
                @endforeach
            <hr>
            @endif
            <br>
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <button type="submit">Создать роль</button>
        </form>
    </div>
</div>