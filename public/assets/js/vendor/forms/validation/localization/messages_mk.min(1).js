/*! jQuery Validation Plugin - v1.19.5 - 7/1/2022
 * https://jqueryvalidation.org/
 * Copyright (c) 2022 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"Полето е задолжително.",remote:"Поправете го ова поле.",email:"Внесете правилна e-mail адреса.",url:"Внесете правилен URL.",date:"Внесете правилен датум.",dateISO:"Внесете правилен датум (ISO).",number:"Внесете правилен број.",digits:"Внесете само бројки.",creditcard:"Внесете правилен број на кредитната картичка.",equalTo:"Внесете ја истата вредност повторно.",extension:"Внесете вредност со соодветна екстензија.",maxlength:a.validator.format("Внесете максимално {0} знаци."),minlength:a.validator.format("Внесете барем {0} знаци."),rangelength:a.validator.format("Внесете вредност со должина помеѓу {0} и {1} знаци."),range:a.validator.format("Внесете вредност помеѓу {0} и {1}."),max:a.validator.format("Внесете вредност помала или еднаква на {0}."),min:a.validator.format("Внесете вредност поголема или еднаква на {0}.")}),a});