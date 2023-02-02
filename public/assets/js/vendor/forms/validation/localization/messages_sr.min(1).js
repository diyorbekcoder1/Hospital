/*! jQuery Validation Plugin - v1.19.5 - 7/1/2022
 * https://jqueryvalidation.org/
 * Copyright (c) 2022 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"Поље је обавезно.",remote:"Средите ово поље.",email:"Унесите исправну и-мејл адресу.",url:"Унесите исправан URL.",date:"Унесите исправан датум.",dateISO:"Унесите исправан датум (ISO).",number:"Унесите исправан број.",digits:"Унесите само цифе.",creditcard:"Унесите исправан број кредитне картице.",equalTo:"Унесите исту вредност поново.",extension:"Унесите вредност са одговарајућом екстензијом.",maxlength:a.validator.format("Унесите мање од {0} карактера."),minlength:a.validator.format("Унесите барем {0} карактера."),rangelength:a.validator.format("Унесите вредност дугачку између {0} и {1} карактера."),range:a.validator.format("Унесите вредност између {0} и {1}."),max:a.validator.format("Унесите вредност мању или једнаку {0}."),min:a.validator.format("Унесите вредност већу или једнаку {0}."),step:a.validator.format("Унесите вредност која је умножак броја {0}.")}),a});