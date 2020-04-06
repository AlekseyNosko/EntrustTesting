<div class="content">
    <div class="content-name">
        <h2>Статьи</h2>
        <hr>
    </div>
    @if(!empty($articles))
        @foreach($articles as $k => $article)
            <div class="article">
                <div class="images-a">
                    <img src="{{ URL::asset('/img/'.$article->images) }}" alt="article-img">
                </div>
                <div class="name-a">
                    Название: {{ $article->name }}
                </div>
                <div class="alias-a">
                    Заголовок: {{ $article->alias }}
                </div>
                <div class="view-a">
                    <button><a href="#">Читать</a></button>
                </div>
                <hr>
            </div>
        @endforeach
    @else
        Статей нет!
    @endif
</div>