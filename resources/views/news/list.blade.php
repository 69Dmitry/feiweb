@include('parts.header')
<div class="container">
  <div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная / </a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">Новости</li>
    </ul>
  </div>
  <div class="row">
    <h1 class="contacts__title"> Новости</h1>
    @foreach ($news as $n)
    <div class="col-lg-3 col-sm-6">
      <a class="article" href="{{route('news.view', ['slug' => $n->slug ])}}">
        @if ($n->img)
        <div class="article__img">
          <img src="{{ asset('storage/' . $n->img) }}" alt="{{ $n->title }}">
        </div>
        @endif
        <div class="article__title">{{ $n->title }}</div>
        <div class="article__preview">{{ $n->previewText }}</div>
      </a>
    </div>
    @endforeach
  </div>
  <div class="row mt-5 d-flex justify-content-center">
    <div class="col-lg-4 col-lg-4 d-flex justify-content-center ">
      {{ $news->links('vendor.pagination.tailwind')}}
    </div>
  </div>
</div>
@include('parts.footer')