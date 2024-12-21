@include('parts.header')
<div class="container">
<div class="row">
  <ul class="breadcrumbs">
    <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
    <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="{{route('vacancy.list')}}">Вакансии</a></li>
    <li class="breadcrumbs__item breadcrumbs__item-active">{{$vacancy->title}}</li>
  </ul>
  <div class="col-lg-12">
    <h1 class="main__h1">{{ $vacancy->title}}</h1>
    <span>{{ $vacancy->formattedDateCreated}}</span>
    <hr class="hr" />


    <p style="margin-top: 20px "> {{strip_tags($vacancy->description)}} </p>
  </div>
</div>
</div>
@include('parts.footer')