<script>
    // this is the id of the form
    $("#static-form").submit(function (e) {

        $("#submit-static-form").attr("value", "");
        $("#submit-static-form").css(
            {
                "background-image": "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
                "background-size": "15%",
                "background-repeat": "no-repeat",
                "background-position-y": "50%",
                "background-position-x": "50%"
            }
        );
        var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#static-form").serialize(), // serializes the form's elements.
            success: function (data) {
                if (data == 1) {
                    $("#submit-static-form").attr("value", "Успешно отправлено");
                    $("#submit-static-form").css({"background-image": "none"});

                    jQuery('#static-form')[0].reset();

                    setTimeout(func, 10000);

                    function func() {
                        $("#submit-static-form").attr("value", "Отправить");
                        $("#submit-static-form").css({"background-image": "none"});
                    }
                }

                else {
                    $("#submit-static-form").attr("value", "Произошла ошибка");
                    $("#submit-static-form").css({"background-image": "none"});

                    setTimeout(func, 3000);

                    function func() {
                        $("#submit-static-form").attr("value", "Отправить");
                        $("#submit-static-form").css({"background-image": "none"});
                    }
                }
//                                            alert(data);
            },

            error: function (data) {
                $("#submit-static-form").attr("value", "Произошла ошибка");
                $("#submit-static-form").css({"background-image": "none"});

                setTimeout(func, 3000);

                function func() {
                    $("#submit-static-form").attr("value", "Отправить");
                    $("#submit-static-form").css({"background-image": "none"});
                }
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
</script>