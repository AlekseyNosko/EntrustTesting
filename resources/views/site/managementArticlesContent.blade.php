<div class="content">
    <div class="content-name">
        <h2>Управление статьями</h2>
        <hr>
    </div>
    <div class="table-moderators">
        <div class="name-block">
            <h2>Статьи</h2>
            <hr>
        </div>
        <div class="table">
            @if(!empty($articles))
                <table>
                    <tbody>
                    <tr>
                        <th>Ид</th>
                        <th>Название</th>
                        <th>Заголовок</th>
                        <th>Дата создания</th>
                        <th>Действия</th>
                    </tr>
                    @foreach($articles as $k => $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->name }}</td>
                            <td>{{ $article->alias }}</td>
                            <td>{{ $article->created_at }}</td>
                            <td><button><a href="">Редактировать</a></button> <button><a href="{{ route('articlesDelete',[$article->id]) }}">Удалить</a></button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h4>Статьей нет!</h4>

            @endif
        </div>
        <div class="add-article">
            <button><a href="{{ route('creatArticle') }}">Добавить статью</a></button>
        </div>
        <hr>
    </div>
</div>