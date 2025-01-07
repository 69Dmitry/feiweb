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
                <a href="#" class="aside__item ">
                    ЛИЧНАЯ ИНФОРМАЦИЯ
                </a>
                <a href="#" class="aside__item ">
                    ЗАЯВКИ
                </a>
                <a href="#" class="aside__item aside__item_active">
                    РЕДАКТИРОВАНИЕ ДАННЫХ
                </a>
            </div>
        </div>
        <div class="col-9">
            <h1 class="contacts__title">Редактирование данных</h1>
            <div class="row">
                <div class="col-6 personal__block">
                    <label class="form__label" for="name">ФИО</label>
                    <input type="text" id="name" name="name" class="form__input">
                </div>
                <div class="col-6 personal__block">
                    <label class="form__label" for="gender">Пол</label>
                    <div class="form__group">

                        <input type="radio" id="gender_f" name="gender_f" value="Женский" class="">
                        <label class="form__label form__label_thin" for="gender_f">Женский </label>

                        <input type="radio" id="gender_m" name="gender_f" value="" class="">
                        <label class="form__label form__label_thin" for="gender_m">Мужской </label>
                    </div>
                </div>
                <div class="col-6 personal__block">
                    <label class="form__label" for="phone">Телефон</label>
                    <input type="text" id="phone" name="phone" placeholder="+7(XXX)-XX-XX" class="form__input">
                </div>
                <div class="col-6 personal__block">
                    <label class="form__label" for="name">Почта</label>
                    <input type="text" id="name" name="name" placeholder="example@mail.ru" class="form__input">
                </div>
                <div class="col-6 personal__block">
                    <label class="form__label" for="name">Тип клиента</label>
                    <div class="form__group">

                        <input type="radio" id="name" name="name" value="Женский" class="">
                        <label class="form__label form__label_thin" for="name">Юридическое лицо </label>

                        <input type="radio" id="name" name="name" value="" class="">
                        <label class="form__label form__label_thin" for="name">Физическое лицо </label>
                    </div>
                </div>
                <div class="col-6 personal__block">
                    <label class="form__label">Подтвержающий документ</label><br>
                    <button class="button">Загрузить файл</button>
                    <span style="color: #CACACA; display:block">
                    Подтверждающим документом могут быть водительские права, паспорт
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@include('parts.footer')