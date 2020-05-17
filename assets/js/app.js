/* PLUGIN - MASK */
$(".mask-cpf").mask("000.000.000-00");
$(".mask-date").mask("00/00/0000");
$(".mask-cel").mask("(00) 00000-0000");
$(".mask-tel").mask("(00) 0000-0000");
$(".mask-cep").mask("00000-000");
$(".mask-num-short").mask("00");

/* NAVBAR - SCROLL UP BAR */
(function(e){"use strict";var t;e.scrollupbar=function(n,r){function i(){return o.scrollTop()<=n.offset().top}function s(){return o.scrollTop()<n.offset().top+n.outerHeight()}r=e.extend({enterViewport:e.noop,fullyEnterViewport:e.noop,exitViewport:e.noop,partiallyExitViewport:e.noop},r);var o=e(window),u=e(document),a=n.css("position")=="fixed"?0:n.offset().top,f=o.scrollTop(),l=n.position().top,c;return e.scrollupbar.isInViewport=s(),e.scrollupbar.isFullyInViewport=i(),o.on("scroll.scrollupbar",function(){var t=o.scrollTop(),h=n.outerHeight();if(t<0||t>u.height()-o.height())return;c&&clearTimeout(c),t<f?(!e.scrollupbar.isInViewport&&f-h>=a&&(n.css("top",f-h),e.scrollupbar.isInViewport=!0,r.enterViewport()),i()&&(t>=a?n.css({position:"fixed",top:0}):n.css({position:"absolute",top:l}),e.scrollupbar.isFullyInViewport||(e.scrollupbar.isFullyInViewport=!0,r.fullyEnterViewport())),c=setTimeout(function(){e.scrollupbar.isFullyInViewport||(n.css({position:"fixed",top:n.offset().top-t}),n.animate({top:0},100,function(){e.scrollupbar.isFullyInViewport=!0,r.fullyEnterViewport()}))},400)):t>f&&(e.scrollupbar.isFullyInViewport&&(n.css({transform:"translate3d(0, 0, 0)",position:"absolute",top:f>a?f:l}),i()||(e.scrollupbar.isFullyInViewport=!1,r.partiallyExitViewport())),e.scrollupbar.isInViewport&&!s()&&(e.scrollupbar.isInViewport=!1,r.exitViewport()),c=setTimeout(function(){s()&&t-h>=a&&n.animate({top:t-h},100,function(){e.scrollupbar.isInViewport=!1,r.exitViewport()})},400)),f=t}),t=function(){o.off(".scrollupbar"),n.css({position:"absolute",top:l})},n},e.scrollupbar.destroy=function(){if(t)return t()},e.fn.scrollupbar=function(t){return e.scrollupbar(this,t)}})(jQuery);
$('#navbar-menu').scrollupbar();

/* MÉTODOS ADICIONAL AO JQUERY VALIDATE */
$.validator.addMethod("trim_t", function(t, o) {
    return $.trim(t);
}, "Este campo é obrigatório.");

$.validator.addMethod("cep", function(t, o) {
    return this.optional(o) || /^\d{2}.\d{3}-\d{3}?$|^\d{5}-?\d{3}?$/.test(t);
}, "Por favor informe um CEP válido.");

$.validator.addMethod("s_age", function(t, o, a) {
    return this.optional(o) || t > 0 && ("M" === $(a).val() && t < 13 || "A" === $(a).val());
}, "Por favor informe uma idade válido.");

$.validator.addMethod("celBR", function(t, o) {
    return this.optional(o) || /\([\d]{2}\) [9][\d]{4}-[\d]{4}$/.test(t);
}, "Por favor informe um número de celular válido.");

$.validator.addMethod("telBR", function(t, o) {
    return this.optional(o) || /\([\d]{2}\) [\d]{4}-[\d]{4}$/.test(t);
}, "Por favor informe um número de telefone válido.");

$.validator.addMethod("dateITA", function(t, o) {
    var a, r, e, n, d, i = !1;
    return /^\d{1,2}\/\d{1,2}\/\d{4}$/.test(t) && (a = t.split("/"), r = parseInt(a[0], 10), e = parseInt(a[1], 10), n = parseInt(a[2], 10), (d = new Date(Date.UTC(n, e - 1, r, 12, 0, 0, 0))).getUTCFullYear() === n && d.getUTCMonth() === e - 1 && d.getUTCDate() === r && (i = !0)), this.optional(o) || i
}, "Por favor, informe uma data válido.");

$.validator.addMethod("cpf", function(t) {
    if (11 !== (t = t.replace(/[^0-9]/g, "")).length) return !1;
    var o, a, r, e, n = 0;
    if (o = parseInt(t.substring(9, 10), 10), a = parseInt(t.substring(10, 11), 10), r = function(t, o) {
            var a = 10 * t % 11;
            return 10 !== a && 11 !== a || (a = 0), a === o
        }, "" === t || "00000000000" === t || "11111111111" === t || "22222222222" === t || "33333333333" === t || "44444444444" === t || "55555555555" === t || "66666666666" === t || "77777777777" === t || "88888888888" === t || "99999999999" === t) return !1;
    for (e = 1; e <= 9; e++) n += parseInt(t.substring(e - 1, e), 10) * (11 - e);
    if (r(n, o)) {
        for (n = 0, e = 1; e <= 10; e++) n += parseInt(t.substring(e - 1, e), 10) * (12 - e);
        return r(n, a);
    }
    return !1;
}, "Este CPF não existe. Por favor informe um CPF válido.");
