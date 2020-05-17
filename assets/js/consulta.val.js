$("#form-portador").validate( {
    rules: {
        crianca: {
            trim_t: !0
        }
        , dtnasc_crianca: {
            required: !0, dateITA: !0
        }
        , q_amamentacao: {
            required: {
                depends:function() {
                    return"S"===$("input[name='amamentacao']:checked").val();
                }
            }
            , s_age:"#s_amamentacao"
        }
        , q_mamadeira: {
            required: {
                depends:function() {
                    return"S"===$("input[name='mamadeira']:checked").val();
                }
            }
            , s_age:"#s_mamadeira"
        }
        , q_chupeta: {
            required: {
                depends:function() {
                    return"S"===$("input[name='chupeta']:checked").val();
                }
            }
            , s_age:"#s_chupeta"
        }
        , q_chupouDedo: {
            required: {
                depends:function() {
                    return"S"===$("input[name='chupouDedo']:checked").val();
                }
            }
            , s_age:"#s_chupouDedo"
        }
        , qtdPessoas: {
            required: !0
        }
        , ocupacao: {
            trim_t: {
                depends:function() {
                    return"NT"!==$("#trabalho").val();
                }
            }
        }
    }
    , errorElement:"div", errorPlacement:function(e, r) {
        e.addClass("invalid-feedback"),  e.insertAfter(r);
    }
    , highlight:function(e) {
        $(e).addClass("is-invalid");
    }
    , unhighlight:function(e) {
        $(e).removeClass("is-invalid");
    }
    , invalidHandler:function(e, r) {
        $("button[type='submit'].btn-flouting").removeClass("d-none");
    }, submitHandler:function(form){
        $("button[type='submit']").attr("disabled", "disabled");
        form.submit();
    }
}

);

