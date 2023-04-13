function popup(t) {
    $.ajax({
        type: $(t).data("method"),
        url: $(t).data("url"),
        data: {
            _id: $(t).data("id"),
            _token: $('meta[name="csrf-token"]').attr("content"),
        },
        cache: false,
        beforeSend: function () {},
        success: function (data) {
            $("#popup").html(data);
            if ($("#popup").is(":visible") === false) {
                $("#popup").modal("show");
            }
        },
        error: function (data) {},
        complete: function () {},
    });
}
