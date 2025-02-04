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
                <a href="{{route('personal.index')}}" class="aside__item ">
                    ЗАЯВКИ
                </a>
                <a href="{{route('personal.update')}}" class="aside__item aside__item_active">
                    РЕДАКТИРОВАНИЕ ДАННЫХ
                </a>
            </div>
        </div>
        <div class="col-9">
            <h1 class="contacts__title">Редактирование данных</h1>
            <div class="row">
                <div class="col-6 personal__block">
                    <label class="form__label" for="name">ФИО</label>
                    <input type="text" id="name" name="name" value="{{$user->name ?? ''}}" class="form__input">
                </div>
                <div class="col-6 personal__block">
                    <label class="form__label" for="gender">Пол</label>
                    <div class="form__group">

                        <input type="radio" id="gender_f" name="gender_f" value="Женский" class="">
                        <label class="form__label form__label_thin" for="gender_f">Женский </label>

                        <input type="radio" id="gender_m" checked name="gender_f" value="" class="">
                        <label class="form__label form__label_thin" for="gender_m">Мужской </label>
                    </div>
                </div>
                <div class="col-6 personal__block">
                    <label class="form__label" for="phone">Телефон</label>
                    <input type="text" id="phone" name="phone" value="{{$user->phone ?? ''}}" placeholder="+7(XXX)-XX-XX" class="form__input">
                </div>
                <div class="col-6 personal__block">
                    <label class="form__label" for="mail">Почта</label>
                    <input type="text" id="mail" name="mail" value="{{$user->email ?? ''}}" placeholder="example@mail.ru" class="form__input">
                </div>
                <div class="col-6 personal__block">
                    <label class="form__label" for="type">Тип клиента</label>
                    <div class="form__group">
                        <input type="radio" id="jur" name="jur" value="Юридическое лицо" class="">
                        <label class="form__label form__label_thin" for="jur">Юридическое лицо </label>
                        <input type="radio" id="fiz" checked name="fiz" value="Физическое лицо" class="">
                        <label class="form__label form__label_thin" for="fiz">Физическое лицо </label>
                    </div>
                </div>
                <div class="col-6 personal__block">
                    <label class="form__label">Подтвержающий документ</label><br>
                    <button class="button">Загрузить файл</button>
                    <span style="color: #CACACA; display:block">
                    Подтверждающим документом могут быть водительские права, паспорт
                    </span>
                </div>
                <div class="col-6 personal__block">
                    <button class="button">Сохранить</button>
                    <button class="button button__revert">Сбросить</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('parts.footer')