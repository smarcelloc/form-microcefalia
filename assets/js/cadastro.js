function getSelect(e, a) {
    $(document.getElementById(e)).change(function() {
        "A" !== this.value && "M" !== this.value || $(a).removeClass("is-invalid").val("");
    });
}

function getRadioDisabled(e, a) {
    $(document.getElementsByName(e)).change(function() {
        "S" !== this.value ? $(a).val("").attr("disabled", "disabled").removeClass("is-invalid") : $(a).removeAttr("disabled", "disabled").focus();
    });
}

function getRadioDisabledSelectInput(e, a, t) {
    $(document.getElementsByName(e)).change(function() {
        "S" !== this.value ? ($(a).attr("disabled", "disabled").val("").removeClass("is-invalid"), $(t).attr("disabled", "disabled")) : ($(a).removeAttr("disabled", "disabled").focus(), $(t).removeAttr("disabled", "disabled").val("A"));
    });
}

function getSelectDisabled(e, a, t) {
    $(document.getElementsByName(e)).change(function() {
        this.value !== t ? $(a).val("").attr("disabled", "disabled").removeClass("is-invalid") : $(a).removeAttr("disabled", "disabled").focus();
    });
}

function getSelectDisabled2(e, a, t) {
    $(document.getElementsByName(e)).change(function() {
        this.value === t ? $(a).val("").attr("disabled", "disabled").removeClass("is-invalid") : $(a).removeAttr("disabled", "disabled").focus();
    });
}

function getRadioDisabledSelect(e, a) {
    $(document.getElementsByName(e)).change(function() {
        "S" === this.value ? $(a).removeAttr("disabled", "disabled").focus() : $(a).attr("disabled", "disabled");
    });
}

$(document.getElementsByName("dentista")).change(function() {
    var e, a = document.getElementsByName("tratamento[]");
    if ("S" !== this.value)
        for (e = 0; e < a.length; e++) a[e].checked = !1, a[e].disabled = !0;
    else
        for (e = 0; e < a.length; e++) a[e].disabled = !1;
});

getRadioDisabled("cuidaBoca", "#q_cuidaBoca"), 
getRadioDisabled("doenca", "#q_doenca"), 
getRadioDisabled("maiscrianca", "#q_maiscrianca"), 
getRadioDisabled("probNeuro", "#q_probNeuro"), 
getRadioDisabled("remedio", "#q_remedio"), 
getSelect("s_amamentacao", "#q_amamentacao"), 
getSelect("s_mamadeira", "#q_mamadeira"), 
getSelect("s_chupeta", "#q_chupeta"), 
getSelect("s_chupouDedo", "#q_chupouDedo"), 
getRadioDisabledSelectInput("amamentacao", "#q_amamentacao", "#s_amamentacao"), 
getRadioDisabledSelectInput("mamadeira", "#q_mamadeira", "#s_mamadeira"), 
getRadioDisabledSelectInput("chupeta", "#q_chupeta", "#s_chupeta"), 
getRadioDisabledSelectInput("chupouDedo", "#q_chupouDedo", "#s_chupouDedo"), 
getSelectDisabled("localidade", "#outrolocalidade", "OU"), 
getSelectDisabled2("trabalho", "#ocupacao", "NT"), 
getRadioDisabledSelect("infecgarg", "#infecgargSim"), 
getRadioDisabledSelect("bateurosto", "#bateurostoSim"),

$("#nacionalidade").change(function() {
    "1" !== this.value ? $("#estadoOrigem").val(0).attr("disabled", "disabled") : $("#estadoOrigem").val($("#estado").val()).removeAttr("disabled", "disabled");
});

$("#cel").change(function() {
    "Por favor, informe um número de telefone ou celular." === $("#tel-error").text() && "" !== $(this).val() && $("#tel").removeClass("is-invalid");
});

$("#cep").focusout(function() {
    var e = $("#endereco"),
        a = $("#compl"),
        t = $("#bairro"),
        i = $("#cidade"),
        l = $("#estado"),
        d = $("#estadoOrigem"),
        o = $("#municipio");
    $.ajax({
        url: "https://viacep.com.br/ws/" + $(this).val().replace("-", "") + "/json/",
        type: "get",
        dataTypes: "json"
    }).done(function(s) {
        s.hasOwnProperty("erro") ? (e.val(""), a.val(""), t.val(""), i.val("")) : (e.val(s.logradouro).removeClass("is-invalid"), a.val(s.complemento).removeClass("is-invalid"), t.val(s.bairro).removeClass("is-invalid"), i.val(s.localidade).removeClass("is-invalid"), l.val(s.uf), d.val() && d.val(s.uf), "AREA RURAL" === s.logradouro.toUpperCase().replace("Á", "A") ? ($("#numero").val("0"), o.val("R")) : (o.val("U")));
    }).fail(function() {
        e.val(""), a.val(""), t.val(""), i.val("");
    });
});


