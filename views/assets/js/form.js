$(window).on("load", function(){
    $("form").submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var action = form.attr("action");
        var data = form.serialize();

        $.ajax({
            url: action,
            data: data,
            type: "post",
            dataType: "json",
            beforeSend: function (load) {
                ajax_load("open");
            },
            success: function (su) {
                ajax_load("close");

                setTimeout(function(){  

                if (su.message) {
                                    
                        M.toast({
                            html: '' + su.message.message + '',
                            displayLength: 3500,
                            classes:'' + su.message.type + ''
                        }) 
                    
                    return;
                }

                if (su.redirect) {
                    window.location.href = su.redirect.url;
                }

            },730)
            
            }
        });

        function ajax_load(action) {
            ajax_load_div = $(".ajax_load");

            if (action === "open") {
                ajax_load_div.fadeIn(500).css("display", "flex");
            }

            if (action === "close") {
                ajax_load_div.fadeOut(500);
            }
        }
    });
});