@include('parts.header')
<div class="container">
  <div class="row">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="/">Главная /</a></li>
      <li class="breadcrumbs__item breadcrumbs__item-active">Вакансии</li>
    </ul>
    <div class="col-lg-4">
      <h1 class="h1"> Вакансии</h1>
    </div>
  </div>
  <div class="row">
    @foreach ($vacancies as $vacancy)
    <div class="col-lg-3 d-flex">
      <a href="{{route('vacancy.view', ['id' => $vacancy->id ])}}" class="adv__item flex-fill">
        <div class="adv__wrap">
          <div class="adv__icon">
            <img src="{{asset('images/circle.svg')}}" alt="adv">
          </div>
          <div class="adv__title">
            {{ $vacancy->title}}
          </div>
        </div>

        <div class="adv__sub">
          от {{ $vacancy->salary}} руб.
        </div>
      </a>
    </div>

    @endforeach



  </div>
</div>

@include('parts.footer')