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
            
        </div>
    </div>
</div>
@include('parts.footer')