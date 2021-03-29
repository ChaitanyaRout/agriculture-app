var SaAddScheme = function() {};

SaAddScheme.prototype.onSelectRadio = function() {
    $("input[name$='type']").click(function() {
        var value = $(this).val();
        if (value == 0) {
            $("#file").hide();
            $("#link").show();
        } else {
            $("#file").show();
            $("#link").hide();
        }
    });
}

SaAddScheme.prototype.onSubmitSchemeForm = function() {
    $("#scheme_form").on('submit', function(e) {
        var state_name = $(this).find("select[name='state_name']").val();
        var scheme_name = $(this).find("input[name='scheme_name']").val();
        var type = $(this).find("input[name='type']:checked").val();
        var link = $(this).find("input[name='link']").val();
        var file = $(this).find("input[name='file']").val();

        if (!id && !state_name) {
            e.preventDefault();
            return false;
        } else if (!id && !scheme_name) {
            e.preventDefault();
            return false;
        } else if (!id && type == 0 && !link) {
            e.preventDefault();
            return false;
        } else if (!id && type == 1 && !file) {
            e.preventDefault();
            return false;
        }
        return true;
    });
}

$(function() {
    var obj_add_scheme = new SaAddScheme;
    obj_add_scheme.onSelectRadio();
    obj_add_scheme.onSubmitSchemeForm();
});