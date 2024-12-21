@include('parts.header')
<div class="container">
<div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная /</a></li>
      <li class="breadcrumbs__item">   <a href="{{route('service.list')}}" class="breadcrumbs__link" href="">Статьи / </a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">{{ $service->title}} </li>
    </ul>
    <div class="col-lg-9 col-sm-12">
      <div class="service">
      <h1 class="h1 h1_small">{{ $service->title}}</h1>
      <span class="service__date">{{ $service->formattedDateCreated}}</span>
      
        @if ($service->img)
        <img class="service__img" src="{{ asset('storage/' . $service->img) }}"/>
        @endif

        <div class="service__top">
          <a style="color:#303F9F !important; margin-top: 20px" class="link__curly" href="{{route('service.list')}}" >Назад к списку</a>
        </div>
        <div class="service__text">
        {{strip_tags($service->description)}}
        </div>
  
      </div>
    </div>
  </div>
</div>

@include('parts.footer')