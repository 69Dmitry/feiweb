@include('parts.header')
<div class="container">
    <div class="row">
        
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная / </a></li>
            <li class="breadcrumbs__item breadcrumbs__item-active">Результаты поиска</li>
        </ul>
    </div>
    <div class="row">
        <h1 class="contacts__title">Результаты поиска</h1>
        <form action="{{route('search.index')}}" method="get" class="search__form d-flex justify-content-between" >
            <input class="form__input" name="q" placeholder="Введите запрос" value="{{$query}}">
            <button class="button button__form">Найти</button>
        </form>
       
        @if ($counter > 0)
            @foreach ($searchResults as $searchResult)
     
            <div class="col-lg-12">
                @if ($searchResult instanceof \App\Models\Article)
                <a class="search__item" href="{{route('article.view', ['slug' => $searchResult->slug ]) }}">
                    <div style="display: inline-block;" class="link__curly">{{$searchResult->title}}</div>
                    <p class="search__item-text">{{$searchResult->previewText}}</p>
                </a>
                @else
                <a class="search__item" href="{{route('news.view', ['slug' => $searchResult->slug ]) }}">
                    <div style="display: inline-block;" class="link__curly">{{$searchResult->title}}</div>
                    <p class="search__item-text">{{$searchResult->previewText}}</p>
                </a>
                @endif
            </div>
            @endforeach
        @else
        <p>По вашему запросу ничего не найдено </p>
        @endif
    </div>
</div>
@include('parts.footer')