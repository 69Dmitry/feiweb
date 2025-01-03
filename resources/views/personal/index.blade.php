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
            <a href="#" class="aside__item">
                ЛИЧНАЯ ИНФОРМАЦИЯ
            </a>
            <a href="#" class="aside__item aside__item_active">
                ЗАЯВКИ
</a>
            <a href="#" class="aside__item">
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
            <div class="order">
                <div class="order__top d-flex justify-content-between">
                    <div class="order__date">№13546 от 01.11.2024</div>
                    <div class="order__status">Активная</div>
                </div>
                <div class="order__info d-flex justify-content-between">
                        <div class="order__item">
                         <b>Сотрудник</b><br>
                         <span>Головина Д.А.</span>
                        </div>
                        <div class="order__item">
                         <b>Результат</b><br>
                         <span>Обработка</span>
                        </div>
                        <div class="order__item">
                         <b>Услуги</b><br>
                         <span>Маркетинговая аналитика<br>
                         Налоговый аудит</span>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@include('parts.footer')