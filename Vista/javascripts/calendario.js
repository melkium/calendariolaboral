//RECIBIR UN JSON PARA DEFINIR EL TIPO DE CALENDARIO QUE MOSTRAR



var Festivos = [[3, 20, 2013], [3, 21, 2013], [3, 22, 2013]];


$(document).ready(function(){
    $("#datepickerCentro").datepicker({
        beforeShowDay: nonWorkingDates,
        numberOfMonths: 2,
        firstDay: 1
    });

    function nonWorkingDates(date){
        var dias = date.getDay(), Sunday = 0, Monday = 1, Tuesday = 2, Wednesday = 3, Thursday = 4, Friday = 5, Saturday = 6;
        
        //var Vacaciones = [[4, 24, 2013], [4, 25, 2013], [4, 26, 2013]];
        //var BajasLaborales = [[5, 6, 2013], [5, 7, 2013], [5, 8, 2013], [5, 9, 2013], [5, 10, 2013]];

        var DiasNoLaborales = [[Sunday], [Saturday]];
        for (var i = 0; i < DiasNoLaborales.length; i++) {
            if (dias == DiasNoLaborales[i][0]) {
                return [false];
            }

        }

        for (i = 0; i < Festivos.length; i++) {
            if (date.getMonth() == Festivos[i][0] - 1 &&
            date.getDate() == Festivos[i][1] &&
            date.getFullYear() == Festivos[i][2]) {
                return [true,'diaFestivo', Festivos[i][3]];
            }
        }
        return [true];
    }
});

$(document).ready(function(){
    $("#datepickerTrabajador").datepicker({
        beforeShowDay: nonWorkingDates,
        numberOfMonths: 1,
        firstDay: 1
    });

    function nonWorkingDates(date){
        var dias = date.getDay(), Sunday = 0, Monday = 1, Tuesday = 2, Wednesday = 3, Thursday = 4, Friday = 5, Saturday = 6;
        var Festivos = [[3, 20, 2013], [3, 21, 2013], [3, 22, 2013]];
        var Vacaciones = [[4, 24, 2013], [4, 25, 2013], [4, 26, 2013]];
        var BajasLaborales = [[5, 6, 2013], [5, 7, 2013], [5, 8, 2013], [5, 9, 2013], [5, 10, 2013]];

        var DiasNoLaborales = [[Sunday], [Saturday]];
        for (var i = 0; i < DiasNoLaborales.length; i++) {
            if (dias == DiasNoLaborales[i][0]) {
                return [false];
            }

        }

        for (i = 0; i < Festivos.length; i++) {
            if (date.getMonth() == Festivos[i][0] - 1 &&
            date.getDate() == Festivos[i][1] &&
            date.getFullYear() == Festivos[i][2]) {
                return [false,'diaFestivo', Festivos[i][3]];
            }
        }


        for (i = 0; i < Vacaciones.length; i++) {
            if (date.getMonth() == Vacaciones[i][0] - 1 &&
            date.getDate() == Vacaciones[i][1] &&
            date.getFullYear() == Vacaciones[i][2]) {
                return [true,'diaVacaciones', Vacaciones[i][3]];
            }
        }

        for (i = 0; i < BajasLaborales.length; i++) {
            if (date.getMonth() == BajasLaborales[i][0] - 1 &&
            date.getDate() == BajasLaborales[i][1] &&
            date.getFullYear() == BajasLaborales[i][2]) {
                return [true,'diaBajaLaboral', BajasLaborales[i][3]];
            }
        }
        return [true];
    }
});



$(document).ready(function(){
    $("#datepickerSeleccionarFecha").datepicker({
        beforeShowDay: nonWorkingDates,
        numberOfMonths: 1,
        firstDay: 1
    });

    function nonWorkingDates(date){
        var dias = date.getDay(), Sunday = 0, Monday = 1, Tuesday = 2, Wednesday = 3, Thursday = 4, Friday = 5, Saturday = 6;
        var Festivos = [[3, 20, 2013], [3, 21, 2013], [3, 22, 2013]];
        var Vacaciones = [[4, 24, 2013], [4, 25, 2013], [4, 26, 2013]];
        var BajasLaborales = [[5, 6, 2013], [5, 7, 2013], [5, 8, 2013], [5, 9, 2013], [5, 10, 2013]];

        var DiasNoLaborales = [[Sunday], [Saturday]];
        for (var i = 0; i < DiasNoLaborales.length; i++) {
            if (dias == DiasNoLaborales[i][0]) {
                return [false];
            }

        }

        for (i = 0; i < Festivos.length; i++) {
            if (date.getMonth() == Festivos[i][0] - 1 &&
            date.getDate() == Festivos[i][1] &&
            date.getFullYear() == Festivos[i][2]) {
                return [false,'diaFestivo', Festivos[i][3]];
            }
        }


        for (i = 0; i < Vacaciones.length; i++) {
            if (date.getMonth() == Vacaciones[i][0] - 1 &&
            date.getDate() == Vacaciones[i][1] &&
            date.getFullYear() == Vacaciones[i][2]) {
                return [true,'diaVacaciones', Vacaciones[i][3]];
            }
        }

        for (i = 0; i < BajasLaborales.length; i++) {
            if (date.getMonth() == BajasLaborales[i][0] - 1 &&
            date.getDate() == BajasLaborales[i][1] &&
            date.getFullYear() == BajasLaborales[i][2]) {
                return [true,'diaBajaLaboral', BajasLaborales[i][3]];
            }
        }
        return [true];
    }
});
