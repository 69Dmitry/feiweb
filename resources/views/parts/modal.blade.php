<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: space-between;">
                    <h5 class="modal-title" id="myModalLabel">Заказать звонок</h5>
                    <button type="button" class="close button__close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success" style="display:none" role="alert">
                        Ваше сообщение отправлено!
                    </div>
                    <form method="post" class="callback" action="#">
                        <input type="text" name="name" placeholder="Ваше имя" class="form__input">
                        <input type="text"  name="phone" placeholder="Ваш телефон" class="form__input">
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="button js-send-button">Отправить </button>
                </div>
            </div>
        </div>
    </div>