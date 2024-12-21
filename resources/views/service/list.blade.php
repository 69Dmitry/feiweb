@include('parts.header')
<div class="container">
    <div class="row">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная / </a></li>
            <li class="breadcrumbs__item breadcrumbs__item-active">Услуги</li>
        </ul>
    </div>

    <div class="row">
        <h1 class="contacts__title">Услуги</h1>
                    @foreach ($services as $k => $service)
                    <div class="col-lg-12 d-flex">
                        <a class="adv__item flex-fill" href="{{route('service.view', ['id' => $service->id ])}}">
                            <div class="adv__wrap">
                                <div class="adv__icon">
                                    <img src="{{asset('images/circle.svg')}}" alt="adv">
                                </div>
                                <div class="adv__title">
                                    {{ $service->title }}
                                </div>
                            </div>

                            <div class="adv__sub">
                            {{ $service->description }}
                            </div>
</a>
                    </div>
                    @endforeach
                </div>
</div>
@include('parts.footer')