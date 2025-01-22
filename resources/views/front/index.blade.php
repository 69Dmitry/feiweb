@include('parts.header')

<main>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img style="width: 100%;" src="{{asset('images/banner.png')}}" alt="banner">
                </div>
            </div>
    </section>
    <section class="section">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <span class="adv__label">30+</span>
                    <p>Лет успешной практики </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <span class="adv__label">>950</span>
                    <p>Довольных клиентов</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <span class="adv__label">2 тыс.</span>
                    <p>Выигранных дел</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <span class="adv__label">22 года</span>
                    <p>Контроля качества услуг</p>
                </div>
            </div>
        </div>
    </section>
@if ($services->count() > 0)
    <section class="section">
        <div class="container">
            <h2 class="main__h2">Услуги</h2>
            <div class="adv">
                <div class="row">
                    @foreach ($services as $k => $service)
                    <div class="col-lg-3 d-flex">
                        <a href="{{route('service.view', ['id' => $service->id ]) }}" class="adv__item flex-fill">
                            <div class="adv__wrap">
                                <div class="adv__icon">
                                    <img src="{{asset('images/circle.svg')}}" alt="adv">
                                </div>
                                <div class="adv__title">
                                    {{ $service->title }}
                                </div>
                            </div>

                            <div class="adv__sub">
                            
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="section">
        <div class="container">
            <h1 class="main__h2">Партнеры</h1>
            <div class="row">
                <div class="col-lg-4">
                    <a class="partner">
                        <img class="partner__img" src="{{asset('images/1.png')}}" alt="partner">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="partner">
                        <img class="partner__img" src="{{asset('images/2.png')}}" alt="partner">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="partner">
                        <img class="partner__img" src="{{asset('images/3.png')}}" alt="partner">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="partner">
                        <img class="partner__img" src="{{asset('images/4.png')}}" alt="partner">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="partner">
                        <img class="partner__img" src="{{asset('images/5.png')}}" alt="partner">
                    </a>
                </div>
                <div class="text-center button__wrap" style="margin-top: 50px;">
                <a href="/about" class="button button__revert"> Узнать больше </a>
                </div>
            </div>
        </div>
    </section>
@if ($articles->count() > 0)
    <section class="section">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="main__h2">Статьи</h2>
                <a class="link link__curly" href="{{route('article.list')}}">Смотреть все</a>
            </div>
            <div class="row">
                @foreach ($articles as $k => $article)
                <div class="col-lg-3">
                    <a class="article" href="{{route('article.view', ['slug' => $article->slug ])}}">
                        <div class="article__img">
                            <img src="{{ asset('storage/' . $article->img) }}" alt="{{ $article->title }}">
                        </div>
                        <div class="article__title">{{ $article->title }}</div>
                        <div class="article__preview">{{ $article->previewText }}</div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</main>

@include('parts.footer')