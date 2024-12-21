@include('parts.header')
<div class="container">
<div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная /</a></li>
      <li class="breadcrumbs__item">   <a href="{{route('article.list')}}" class="breadcrumbs__link" href="">Статьи / </a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">{{ $article->title}} </li>
    </ul>
    <div class="col-lg-9 col-sm-12">
      <div class="article">
      <h1 class="h1 h1_small">{{ $article->title}}</h1>
      <span class="article__date">{{ $article->formattedDateCreated}}</span>
      
        @if ($article->img)
        <img class="article__img" src="{{ asset('storage/' . $article->img) }}"/>
        @endif

        <div class="article__top">
          <a style="color:#303F9F !important; margin-top: 20px" class="link__curly" href="{{route('article.list')}}" >Назад к списку</a>
        </div>
        <div class="article__text">
        {{strip_tags($article->description)}}
        </div>
  
      </div>
    </div>
  </div>
</div>

@include('parts.footer')