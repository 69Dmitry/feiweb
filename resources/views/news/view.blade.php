@include('parts.header')
<div class="container">
<div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная /</a></li>
      <li class="breadcrumbs__item">   <a href="{{route('news.list')}}" class="breadcrumbs__link" href="">Новости / </a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">{{ $news->title}} </li>
    </ul>
    <div class="col-lg-9 col-sm-12">
      <div class="article">
      <h1 class="h1 h1_small">{{ $news->title}}</h1>
      <span class="article__date">{{ $news->formattedDateCreated}}</span>
      
        @if ($news->img)
        <img class="article__img" src="{{ asset('storage/' . $news->img) }}"/>
        @endif

        <div class="article__top">
          <a style="color:#303F9F !important; margin-top: 20px" class="link__curly" href="{{route('article.list')}}" >Назад к списку</a>
        </div>
        <div class="article__text">
        {{strip_tags($news->description)}}
        </div>
  
      </div>
    </div>
  </div>
</div>

@include('parts.footer')