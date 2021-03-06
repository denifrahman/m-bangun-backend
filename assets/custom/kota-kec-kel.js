$(document).ready(function () {

    $("#kecamatan").prop("readonly", true);
    $("#kelurahan").prop("readonly", true);

    $("#kota").on("click change", function (event) {

        mApp.blockPage({
            overlayColor: "#000000",
            type: "loader",
            state: "success",
            message: "Tunggu Sebentar..."
        });

        $("#kecamatan").prop("readonly", true);
        $("#kelurahan").prop("readonly", true);

        $.ajax({
            type: "POST",
            url: baseURL + "master/list_kecamatan",
            data: { id_kota: $("#kota").val() },
            dataType: "json",
            beforeSend: function (e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function (response) {
                $("#kecamatan").html(response.list_kecamatan).show();
                $("#kecamatan").prop("readonly", false);
                $("#kelurahan").html('');
                mApp.unblockPage();

            }
        });
    });

    $("#kecamatan").on("change", function (event) {
        $("#kelurahan").select2("val", "");

        mApp.blockPage({
            overlayColor: "#000000",
            type: "loader",
            state: "success",
            message: "Tunggu Sebentar..."
        });

        $.ajax({
            type: "POST",
            url: baseURL + "master/list_kelurahan",
            data: { id_kecamatan: $("#kecamatan").val() },
            dataType: "json",
            beforeSend: function (e) {
                if (e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function (response) {
                $("#kelurahan").html(response.list_kelurahan).show();
                $("#kelurahan").prop("readonly", false);
                mApp.unblockPage();
            }
        });

    });
});
