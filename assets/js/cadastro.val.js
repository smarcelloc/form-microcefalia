$("#form-cadastro").validate( {
    rules: {
        cpf: {
            required:!0, cpf:!0,
            remote: {
                url: "cadastro/consultacpf",
                type: "post",
                data: {cpf: function() {return $("#cpf").val();}}
            }
            
        }
        , cuidador: {
            trim_t: !0
        }
        , email: {
            email: !0
        }
        , tel: {
            required: {
                depends:function() {
                    return!$("#cel").val();
                }
            }
            , telBR:!0
        }
        , cel: {
            celBR: !0
        }
        , dtnasc: {
            required: !0, dateITA: !0
        }
        , cep: {
            required: !0, cep: !0
        }
        , endereco: {
            trim_t: !0
        }
        , numero: {
            required: !0
        }
        , bairro: {
            trim_t: !0
        }
        , cidade: {
            trim_t: !0
        }
        , observacao: {
            maxlength: 300
        }
        , crianca: {
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
        , ocupacao: {
            trim_t: {
                depends:function() {
                    return"NT"!==$("#trabalho").val();
                }
            }
        }
        , outrolocalidade: {
            trim_t: {
                depends:function() {
                    return"OU"===$("#localidade").val();
                }
            }
        }
        , qtdPessoas: {
            required: !0
        }
        , qtdBanheiro: {
            required: !0
        }
        , qtdExclusivo: {
            required: !0
        }
        , qtdIrmaos: {
            required: !0
        }
        , aparelhoSom: {
            required: !0
        }
        , dvd: {
            required: !0
        }
        , geladeira: {
            required: !0
        }
        , freezer: {
            required: !0
        }
        , maquinaLavar: {
            required: !0
        }
        , computador: {
            required: !0
        }
        , tablet: {
            required: !0
        }
        , telefonefixo: {
            required: !0
        }
        , telefonecelular: {
            required: !0
        }
        , tvassinatura: {
            required: !0
        }
        , automoveis: {
            required: !0
        }
        , motocicletas: {
            required: !0
        }
    }
    , messages: {
        cpf: {
            remote: "Este CPF já está cadastrado."
        }
        , tel: {
            required: "Por favor, informe um número de telefone ou celular."
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
    , invalidHandler:function() {
        $("button[type='submit'].btn-flouting").removeClass("d-none");
    }, submitHandler:function(form){
        $("button[type='submit']").attr("disabled", "disabled");
        form.submit();
    }
}

);

