@include('parts.header')
<div class="container">
  <div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная / </a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">Статьи</li>
    </ul>
  </div>
  <div class="row">
    <h1 class="contacts__title"> Статьи</h1>
    @foreach ($articles as $article)
    <div class="col-lg-3 col-sm-6">
      <a class="article" href="{{route('article.view', ['slug' => $article->slug ])}}">
        @if ($article->img)
        <div class="article__img">
          <img src="{{ asset('storage/' . $article->img) }}" alt="{{ $article->title }}">
        </div>
        @endif
        <div class="article__title">{{ $article->title }}</div>
        <div class="article__preview">{{ $article->previewText }}</div>
      </a>
    </div>
    @endforeach
  </div>
  <div class="row mt-5 d-flex justify-content-center">
    <div class="col-lg-4 col-lg-4 d-flex justify-content-center ">
      {{ $articles->links('vendor.pagination.tailwind')}}
    </div>
  </div>
</div>
@include('parts.footer')