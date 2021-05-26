var icons = {
    'success' : 'la la-check-circle',
    'danger' : 'la la-times-circle',
    'info' : 'la la-info-circle',
    'warning' : 'la la-exclamation-triangle'
};

function responseModal(status, message){
    $('#response-modal .modal-content').attr('class','modal-content border-0 bg-'+status);
    $('#response-modal #response-modal-title').html(status);
    $('#response-modal #response-modal-icon').attr('class', icons[status]);
    $('#response-modal .modal-body').html("<span class=''>"+message.replace(/!/g, "")+"</span>");
    $('#response-modal').modal('toggle');
    if(debug === true)
        console.log(icons[status]);
}
/*
    * (string) callback: The JS function to be called afterwards. If process is not provided a process with the name name a the func will be called. Previously called func.
    * (json) data: Serialised data to be sent to the ajax call.
    * (yes|no) silent: Determine whether or not the ajax call to be executed silent.
    * (get|post|put|delete) method: Method that the ajax call should be called.
    * (string) process: If you need a different JS function to be called at 'func' you can specify the common process here.
    * (bool true|false) async: whether or not the ajax call to be executed as async
* */
function ajaxDirect({callback: callback, data: serialized, silent: silent = false, method:method = 'post', process:process = callback+'-process', async:async = true} = {}){
    if(debug === true)
        console.log('ajax-init~'+process);
    if(silent === false){
        var spinner = ' <i class="la la-circle-o-notch la-spin" id="spinner"></i>';
        $('.nav-title').after(spinner);
        $('button, input[type="submit"]').attr('disabled','true');
    }

    $.ajax({
        data: serialized,
        type: method,
        url: site_url + 'ajax.php?process=' + process,
        async:async,
        success: function (response) {
            let json;
            try {
                json = JSON.parse(response);
            } catch (e) {
                json = response;
            }

            if(debug === true)
                console.log(json);

            if(json.status === 'sessionexpired'){
                location.reload();
                return;
            }
            //console.log(func);
            after_functions[callback](json);
            if(silent === false){
                $('button, input[type="submit"]').prop("disabled", false);
                $('#spinner').remove();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            let json;
            if(debug === true) {
                console.log('AJAX call failed.');
                console.log(textStatus + ': ' + errorThrown);
            }

            let response = '';
            if(jqXHR.hasOwnProperty('responseText')) {
                response = jqXHR.responseText;
            }else{
                response = {error:'Nothing returned'};
            }

            try {
                json = JSON.parse(response);
            } catch (e) {
                json = response;
            }

            if(debug === true) {
                console.log(json);
            }

            after_functions[callback](json);

            if(silent === false){
                $('button, input[type="submit"]').prop("disabled", false);
                $('#spinner').remove();
            }
        },
        complete: function () {
            //console.log('AJAX call completed');
        }
    });

    return false;
}

/*========================================================================*/

$(document).ready(function () {
    $('#action-menu-wrap').on('click', 'a', function (event) {
        event.preventDefault();

        var thisMenuElem = $(this);
        var menuFunc = thisMenuElem.data('menu-button');
        console.log('menu-action-'+menuFunc+'-triggered');
        before_functions[menuFunc](menuFunc);
    });

    $('form.ajax').on('submit', function (event) {
        event.preventDefault();
        const callback = $(this).data('callback') || $(this).attr('name'); //JS function to run after the process
        const process = $(this).data('process'); //php process to run
        const serializedForm = $(this).serialize();
        const method = $(this).attr('method');
        const silent = $(this).data('silent');
        const async = $(this).data('async');
        ajaxDirect({
            callback:callback,
            data: serializedForm,
            process:process,
            silent:silent,
            method:method,
            async:async
        });
    });
});

/*===================================================*/
var validate = [];
var after_functions = [];
var before_functions = [];

validate['functionNameHere'] = function () {

};

before_functions['functionNameHere'] = function (){

};

after_functions['weather'] = function (json){
    //console.log(json);
    $('.api-response').html(JSON.stringify(json));
};

after_functions['login'] = function (json){
    if(json.status === 'success'){
        location.reload();
    }else{
        responseModal('danger', json.message);
    }
};
/*=========================================================*/

after_functions['monarchy-add'] = function (json) {
    responseModal(json.status, json.message);
}

after_functions['monarchy-list'] = function (json) {
    if(json.status === 'success'){
        let str = '';
        $.each(json.records, function (key, monarchy) {
            str += '<div class="row mt-4">';
                str += '<div class="col-md-4 ps-4"><i class="la la-crown"></i> '+monarchy.monarchy_name+'</div>';
                str += '<div class="col-md-8 text-end">';
                    str += '<a href="line-succession?monarchy='+monarchy.id+'" class="btn btn-success text-small me-1"><i class="la la-chain"></i> Line of Succession</a>';
                    str += '<a href="member-add?monarchy='+monarchy.id+'" class="btn btn-light-grey text-small me-1"><i class="la la-user-plus"></i> Add Member</a>';
                    str += '<a href="family-tree?monarchy='+monarchy.id+'" class="btn btn-light-grey text-small me-1"><i class="la la-user-friends"></i> Family Tree</a>';
                    str += '<a href="monarchy-edit?monarchy='+monarchy.id+'" class="btn btn-light-grey text-small me-1"><i class="la la-pencil"></i> Edit</a>';
                str += '</div>';
            str += '</div>';
        });
        $('#monarchy-list').html(str);
    }
}

after_functions['monarchy-get'] = function (json) {
    if (json.status === 'success'){
        $('#monarchy-name').html('| <i class="la la-crown"></i> '+json.records[0].monarchy_name);
    }
}

after_functions['member-list-get'] = function (json) {
    let str = '<option value="0">Please select a parent</option>';
    if (json.status === "success"){
        $.each(json.records, function (key, member) {
            str += '<option value="'+member.id+'">'+member.member_name+'</option>';
        })
        $('#parent').html(str);
    }else{
        console.log('failed')
        $('#parent').html(str);
    }
}

after_functions['member-add'] = function (json) {
    responseModal(json.status, json.message);
}
