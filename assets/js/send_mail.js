(function ($) {
    "use strict";

    var SEND_MAIL;

    SEND_MAIL = {
        init: function () {
            this.ajaxSendForm();
        },

        ajaxSendForm: function () {
            $('.info_send_form').on('submit', function () {
                var $_self = $(this),
                    action = $_self.attr('action'),
                    method = $_self.attr('method'),
                    values = $_self.serialize();

                $.ajax({
                    url: action,
                    type: method,
                    data: values,
                    // успешная отправка
                    success: function (response) {
                       /* console.log(response)
                        if (response.success == true) {
                            response.data.anser
                        }*/
                    },
                    // перед отправкой
                    beforeSend: function () {},
                    // завершение работы
                    complete: function (){},
                    // глобальные ошибки
                    error: function () {}
                });
            });
        }
    };

    $(document).ready(function () {
        SEND_MAIL.init();
    })
})(jQuery);