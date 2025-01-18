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
                <a href="{{route('personal.view')}}" class="aside__item aside__item_active">
                    ЛИЧНАЯ ИНФОРМАЦИЯ
                </a>
                <a href="{{route('personal.index')}}" class="aside__item ">
                    ЗАЯВКИ
                </a>
                <a href="{{route('personal.update')}}" class="aside__item">
                    РЕДАКТИРОВАНИЕ ДАННЫХ
                </a>
            </div>
        </div>
        <div class="col-9">
            <h1 class="contacts__title">Личная информация</h1>
            <div class="row">
                <div class="col-lg-4 personal__card">
                    <span class="personal__label">ФИО </span>
                    <span class="personal__value"> {{$user->name}} </span>
                </div>
                <div class="col-lg-4 personal__card">
                    <span class="personal__label">Телефон </span>
                    <span class="personal__value"> +7 928 837 37 38 </span>
                </div>
                <div class="col-lg-4 personal__card">
                <span class="personal__label"> Статус</span>
                <span class="personal__value"> Подтвержден </span>
                </div>
                <div class="col-lg-4 personal__card">
                <span class="personal__label"> Почта</span>
                <span class="personal__value"> {{$user->email}} </span>
                </div>
                <div class="col-lg-4 personal__card">
                <span class="personal__label"> Тип клиента</span>
                <span class="personal__value"> Физическое лицо </span>
                </div>
                <div class="col-lg-4 personal__card">
                <span class="personal__label"> Пол </span>
                <span class="personal__value"> Мужской </span>
                </div>
                <div class="col-lg-12 personal__card">
                <span class="personal__label"> Персональный менеджер </span>
                <span class="personal__value"> Ломова Габриэлла Геннадьевна </span>
                </div>
                <div class="col-lg-12 personal__card">
                <span class="personal__label"> Договор </span>
                <a href="#" class="personal__value personal__value_curly"> Договор с Admin №12984-кл от 20.10.2024 </a>
                </div>

            </div>
        </div>
    </div>
</div>
@include('parts.footer')