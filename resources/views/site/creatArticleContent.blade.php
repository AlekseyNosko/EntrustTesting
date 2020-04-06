<div class="content">
    <div class="name-div">
        <h2>Написать статью</h2>
        <hr>
    </div>
    <div class="creat">
        <form  method="post" action="{{ route('creatArticle') }}" enctype="multipart/form-data">
            <P>Название</p>
            <textarea name="name" cols="100" rows="1"></textarea>
            <P>Описание</p>
            <textarea name="alias" cols="100" rows="1"></textarea>
            <p>Статья</P>
            <textarea name="text" id="" cols="100" rows="10"></textarea>
            <input type="file" accept="image/*" name="images"> <br>
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <button type="submit">Опубликовать статью</button>
        </form>
    </div>
</div>