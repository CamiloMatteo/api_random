$(document).ready(function () {
    validarNumeros();
});
 
function validarNumeros() {
    $(".num").keydown(function (e) {
        if ($.inArray(e.keyCode, [171,187,189, 46, 8, 9, 27, 13]) !== -1 || (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) || (e.keyCode >= 35 && e.keyCode <= 40)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
}

function validateEmailREG(email) {
  var rexp = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
  return rexp.test(email);
}

function validateEmail(email) {
  if (validateEmailREG(email)) {
    $('#email').attr('style','border-radius: 5px; border-color: green;');
    $('#statusEmail').removeClass('hidden').html('OK');
  } else {
    $('#email').attr('style','border-radius: 5px; border-color: red;');
    $('#statusEmail').removeClass('hidden').html("Email no valido");
  }
  return false;
}

//validador rut personalizado
$('#rut').on('keyup', function(e){
    //this.value = this.value.toLocaleUpperCase();
    var rexp = new RegExp(/^([0-9\.])+\-([K0-9])+$/);
    var rut = this.value;
    if(rut.match(rexp)){
        var RUT = rut.split("-");
        var elRut = RUT[0];
        var elRut = elRut.replace(/\./g,'');
        var factor = 2;
        var suma = 0;
        var dv;
        for(i=(elRut.length-1); i>=0; i--){
            factor = factor > 7 ? 2 : factor;
            suma += parseInt(elRut[i])*parseInt(factor++);
        }
        dv = 11 -(suma % 11);
        if (dv == 11) {
            dv = 0;
        } else if (dv == 10) {
            dv = "k";
        }
        if (dv == RUT[1].toLowerCase()) {
            $('#statusRut').removeClass('hidden').html('OK');
            $('#rut').attr('style','border-radius:5px; border-color: green;');
            return true;

        } else { 
               
            $('#rut').attr('style','border-radius: 5px; border-color: red;');
            $('#statusRut').removeClass('hidden').html('*El Rut es incorrecto');
            return false;

        }
    } else {
        $('#rut').attr('style','border-radius: 5px; border-color: red;');
        $('#statusRut').removeClass('hidden').html('*Formato incorrecto');
        return false;
    }
});


function limpiaRut(r) {
    var e = replaceAll(r, ".", ""),
        e = replaceAll(e, "-", "");
    return e
}


function formatearRut(r) {
    var e = r.value,
        t = limpiaRut(e),
        a = formato_rut(t);
    r.value = a
}

function formato_rut(r) {
    var e = r,
        t = 0,
        a = "",
        n = "";
    if (e.length <= 1) return e.toUpperCase();
    for (var i = e.length - 1; i >= 0; i--) a += e.charAt(i), i == e.length - 1 ? a += "-" : 3 == t && (a += ".", t = 0), t++;
    for (var o = a.length - 1; o >= 0; o--) "." != a.charAt(a.length - 1) ? n += a.charAt(o) : o != a.length - 1 && (n += a.charAt(o));
    return n.toUpperCase()
}

function escapeRegExp(r) {
    return r.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&")
}


function replaceAll(r, e, t) {
    return r.replace(new RegExp(escapeRegExp(e), "g"), t)
}


function solorut(r, e) {
    if (window.event) e.indexOf("K") >= 0 && (107 == event.keyCode || 75 == event.keyCode) ? event.cancelable ? event.preventDefault() : event.returnValue = !1 : event.keyCode > 47 && event.keyCode < 58 || 75 == event.keyCode || 107 == event.keyCode ? event.returnValue = !0 : event.cancelable ? event.preventDefault() : event.returnValue = !1;
    else if (r.which) return keynum = r.which, keynum > 47 && keynum < 58 || 75 == keynum || 107 == keynum || 8 == keynum
}


function revisarDigito(r) {
    return dv = r + "", "0" == dv || "1" == dv || "2" == dv || "3" == dv || "4" == dv || "5" == dv || "6" == dv || "7" == dv || "8" == dv || "9" == dv || "k" == dv || "K" == dv || (alert("Debe ingresar un digito verificador valido"), !1)
}


function revisarDigito2(r) {
    if (largo = r.length, largo < 2) return alert("Debe ingresar su RUT en forma correcta."), !1;
    if (largo > 2 ? rut = r.substring(0, largo - 1) : rut = r.charAt(0), dv = r.charAt(largo - 1), revisarDigito(dv), null == rut || null == dv) return 0;
    var e = "0";
    for (suma = 0, mul = 2, i = rut.length - 1; i >= 0; i--) suma += rut.charAt(i) * mul, 7 == mul ? mul = 2 : mul++;
    return res = suma % 11, 1 == res ? e = "k" : 0 == res ? e = "0" : (dvi = 11 - res, e = dvi + ""), e == dv.toLowerCase() || (alert("EL rut es incorrecto"), !1)
}

function Rut(r) {
    var e = "";
    for (i = 0; i < r.length; i++) " " != r.charAt(i) && "." != r.charAt(i) && "-" != r.charAt(i) && (e += r.charAt(i));
    if (r = e, largo = r.length, largo < 2) return alert("Debe ingresar su RUT en forma correcta."), !1;
    for (i = 0; i < largo; i++)
        if ("0" != r.charAt(i) && "1" != r.charAt(i) && "2" != r.charAt(i) && "3" != r.charAt(i) && "4" != r.charAt(i) && "5" != r.charAt(i) && "6" != r.charAt(i) && "7" != r.charAt(i) && "8" != r.charAt(i) && "9" != r.charAt(i) && "k" != r.charAt(i) && "K" != r.charAt(i)) return alert("El valor ingresado no corresponde a un R.U.T valido"), !1;
    var t = "";
    for (i = largo - 1, j = 0; i >= 0; i--, j++) t += r.charAt(i);
    var a = "";
    for (a += t.charAt(0), a += "-", cnt = 0, i = 1, j = 2; i < largo; i++, j++) 3 == cnt ? (a += ".", j++, a += t.charAt(i), cnt = 1) : (a += t.charAt(i), cnt++);
    for (t = "", i = a.length - 1, j = 0; i >= 0; i--, j++) t += a.charAt(i);
    return !!revisarDigito2(r)
}

function validaRut(r) {
    if (r.match(/^([0-9])+\-([kK0-9])+$/)) {
        r = r.split("-");
        var e = r[0].split(""),
            t = 2,
            a = 0;
        for (i = e.length - 1; 0 <= i; i--) t = 7 < t ? 2 : t, a += parseInt(e[i]) * parseInt(t++);
        return e = 11 - a % 11, (11 == e ? 0 : 10 == e ? "k" : e) == r[1].toLowerCase()
    }
}

