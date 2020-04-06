<div class="content">
    @if(Auth::user()->can(['edit-admin','edit-users','edit-post']))
    <div class="content-name">
        <h2>Управление пользователями и статьями</h2>
        <hr>
    </div>
    <div class="menu-block">
        @if(Auth::user()->can('edit-admin'))
        <div class="admin-block">
            <button><a href="{{ route('admins') }}"><h2>Администраторы</h2></a></button>
        </div>
        @endif
        @if(Auth::user()->can('edit-users'))
        <div class="user-block">
            <button><a href="{{ route('users') }}"><h2>Пользователи</h2></a></button>
        </div>
            @endif
            @if(Auth::user()->can('edit-post'))
        <div class="article-block">
            <button><a href="{{ route('articles') }}"><h2>Статьи</h2></a></button>
        </div>
            @endif
    </div>
    <div class="info">
        <hr>
        <h4>Информация</h4>
        <hr>
        <div class="info-block">
            @if(Auth::user()->can('edit-admin'))
            <div class="info-admins">
                Всего администраторов: {{ $countAdmins }}
            </div>
            @endif
            @if(Auth::user()->can('edit-users'))
            <div class="info-users">
                Всего пользователей: {{ $countUsers }}
            </div>
                @endif
            @if(Auth::user()->can('edit-post'))
            <div class="info-articles">
                Всего статей:        {{ $countArticles }}
            </div>
                @endif
        </div>
        <hr>
    </div>
    @endif
    @if(Auth::user()->can(['edit-roles','view-permissions']))
    <div class="content-name">
        <h2>Управление ролями и разрешениями</h2>
        <hr>
    </div>
    <div class="menu-block">
        @if(Auth::user()->can('edit-roles'))
        <div class="roles-block">
            <button><a href="{{ route('roles') }}"><h2>Роли</h2></a></button>
        </div>
        @endif
            @if(Auth::user()->can('view-permissions'))
        <div class="permissions-block">
            <button><a href="{{ route('permissions') }}"><h2>Разрешения</h2></a></button>
        </div>
            @endif
    </div>
    <div class="info">
        <hr>
        <h4>Информация</h4>
        <hr>
        <div class="info-block">
            @if(Auth::user()->can('edit-roles'))
            <div class="info-roles">
                Всего ролей: {{ $countRoles }}
            </div>
            @endif
            @if(Auth::user()->can('view-permissions'))
            <div class="info-permissions">
                Всего разрешений: {{ $countPermissions }}
            </div>
            @endif
        </div>
        <hr>
    </div>
    @endif
</div>