@include('parts.header')


<div class="container">
    <div class="row">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная / </a></li>
            <li class="breadcrumbs__item breadcrumbs__item-active">Контакты</li>
        </ul>
    </div>
    <div class="row">
        <h1 class="contacts__title"> Контакты </h1>
        <div class="col-lg-6">

            <div class="phone__num">
                <div class="phone__label">Телефоны</div>
                <a class="phone__text" href="tel:79859993177">+7 985 999 31 77</a>
                <a class="phone__text" href="tel:79859993177">+7 985 999 31 77</a>
            </div>

            <div class="mail">
                <div class="mail__label">Почта</div>
                <a class="mail__text">order@fei.ru</a>
                <a class="mail__text">info@fei.ru</a>
            </div>

            <div class="form">
                <div class="form__title">
                    Обратная связь
                </div>
                <form action="" class="form__wrap" method="post">
                    <input class="form__input" type="text" placeholder="Ваше имя">
                    <input class="form__input" type="text" placeholder="Ваш email">
                    <textarea class="form__textarea" placeholder="Ваше сообщение"></textarea>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <img style="width:100%" src="{{ asset('images/contacts.png') }}">
        </div>
    </div>
</div>
</div>

@include('parts.footer')