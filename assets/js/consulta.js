$('#estado').val('Selecione um estado');

$('#estado').change(function () {
    $.ajax({
        url: 'consulta/consultar_cuidador',
        type: 'post',
        data:{
            estado: $(this).val()
        }
    }).done(function (resultado) {
        $('#table-cuidador tbody').remove();
        if(!resultado)
            $("#table-cuidador").append('<tbody><tr class="bg-white text-center"><td colspan="12">Não encontramos nenhum dado registrado.</td></tr></tbody>');
        else
            $("#table-cuidador").append("<tbody>"+resultado+"</tbody>");
        return true;
    });
});

$('#btn-fechar').click(function () {
    window.close();
});

function replaceSpecialChars(str)
{
    str = str.replace(/[àáâãäå]/g,"a");
    str = str.replace(/[éèëê]/g,"e");
    str = str.replace(/[ìíïî]/g,"i");
    str = str.replace(/[ôóòöõ]/g,"o");
    str = str.replace(/[úùüû]/g,"u");
    str = str.replace(/[ýÿ]/g,"y");    
    str = str.replace(/[ñ]/g,"n");
    str = str.replace(/[ç]/g,"c");
    return str.replace(/[^a-z0-9]/g,''); 
}


$('#pesquisar').on('keyup', function () {
   var buscar = replaceSpecialChars($(this).val().toLowerCase());
   $('#table-cuidador tbody tr').filter(function() {
       $(this).toggle(replaceSpecialChars($(this).text().toLowerCase()).indexOf(buscar)>-1);
    });
});


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
getSelect("s_mamadeira", "#q_mamadeira"), getSelect("s_chupeta", "#q_chupeta"),
getSelect("s_chupouDedo", "#q_chupouDedo"), 
getRadioDisabledSelectInput("amamentacao", "#q_amamentacao", "#s_amamentacao"), 
getRadioDisabledSelectInput("mamadeira", "#q_mamadeira", "#s_mamadeira"), 
getRadioDisabledSelectInput("chupeta", "#q_chupeta", "#s_chupeta"), 
getRadioDisabledSelectInput("chupouDedo", "#q_chupouDedo", "#s_chupouDedo"), 
getSelectDisabled2("trabalho", "#ocupacao", "NT"), 
getRadioDisabledSelect("infecgarg", "#infecgargSim"), 
getRadioDisabledSelect("bateurosto", "#bateurostoSim");