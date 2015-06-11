var BASE_URL = "http://localhost/lr4/public/index.php";

/**
 * Create new language
 */
$('.create-language').on('click', function () {
    $.post(BASE_URL + '/admin/create-language', function (result) {
        if (!result) {
            throw Exception("Invalid")
        }

        bootbox.dialog({
            title: result.title,
            message: result.body,
            buttons: {
                success: {
                    label: "Save",
                    className: "btn-success",
                    callback: function () {
                        var name = $('#name').val();
                        var answer = $("input[name='awesomeness']:checked").val();
                        console.log(name);
                        console.log(answer);
                    }
                }
            }
        });
    });
});

$('.edit-language').on('click', function () {
    var itemId = $(this).data('id');
    console.log(itemId);

    $.get(BASE_URL + '/admin/edit-language/' + itemId, function (result) {
        console.log(result);

        bootbox.dialog({
            title: result.title,
            message: result.body,
            buttons: {
                success: {
                    label: "Save",
                    className: "btn-success",
                    callback: function () {
                        var data = {
                            name: $('#name').val(),
                            code: $('#code').val(),
                            order: $('#order').val()
                        };

                        $.post(BASE_URL + '/admin/edit-language/' + itemId, data, function (result) {
                            console.log(result);
                        });
                    }
                }
            }
        });
    });
});

$('.delete-language').on('click', function () {
    bootbox.confirm("Are you sure?", function(result) {
        console.log(result);
    });
});
