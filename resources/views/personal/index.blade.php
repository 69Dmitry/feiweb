@include('parts.header')
<div class="container">
    <div class="row">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная / </a></li>
            <li class="breadcrumbs__item breadcrumbs__item-active">Личный кабинет</li>
        </ul>
    </div>

    <div class="row">
        <div class="col-3">
        <div class="aside">
                <a href="{{route('personal.view')}}" class="aside__item ">
                    ЛИЧНАЯ ИНФОРМАЦИЯ
                </a>
                <a href="{{route('personal.index')}}" class="aside__item aside__item_active ">
                    ЗАЯВКИ
                </a>
                <a href="{{route('personal.update')}}" class="aside__item">
                    РЕДАКТИРОВАНИЕ ДАННЫХ
                </a>
            </div>
        </div>
        <div class="col-9">
            <h1 class="contacts__title">Заявки</h1>
            <div class="tabs d-flex">
                <div class="tabs__item">Активные</div>
                <div class="tabs__item">Завершенные</div>
            </div>

            <div class="orders">
                @if ($orders->count() > 0)
                @foreach ($orders as $order)
                <a href="#" class="order">
                    <div class="order__top d-flex justify-content-between">
                        <div class="order__date">
                            <div class="order__icon">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="5" cy="5" r="5" fill="#303F9F" />
                                </svg>
                            </div>
                            №{{$order->number}} от {{$order->created_at}}
                        </div>
                        <div class="order__status">Активная</div>
                    </div>
                    <div class="order__info d-flex justify-content-between">

                    @php 
                    $decodedOrder = json_decode($order->data, true);
                  
                    @endphp
                    @if ($decodedOrder['employer'])
                        <div class="order__item">
                          
                            <b>Сотрудник</b><br>
                            <span>{{implode(',', $decodedOrder['employer'])}}</span>
                           
                        </div>
                        @endif
                        @if ($decodedOrder['result'])
                        <div class="order__item">
                            <b>Результат</b><br>
                            <span>{{$decodedOrder['result']}}</span>
                        </div>
                        @endif
                        @if ($decodedOrder['services'])
                        <div class="order__item">
                            <b>Услуги</b><br>
                            <span>{{implode(',', $decodedOrder['services'])}}</span>
                        </div>
                        @endif

                    </div>
                </a>
                @endforeach
                @else
                <p>У вас пока нет заявок</p>
                @endif
            </div>
        </div>
    </div>
</div>
@include('parts.footer')