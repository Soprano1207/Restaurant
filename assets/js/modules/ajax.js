class Ajax {

    _sendRequest(obj = {}) {
        $.ajax({
            url: obj['url'],
            method: obj['method'],
            dataType: 'json',
            data: obj['data'],
            success: function(data){
                if (data) {
                    console.log(data['msg']);
                }
            },
            error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                alert('Not connect. Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found (404).');
            } else if (jqXHR.status == 500) {
                alert('Internal Server Error (500).');
            } else if (exception === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (exception === 'timeout') {
                alert('Time out error.');
            } else if (exception === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('Uncaught Error. ' + jqXHR.responseText);
            }
            }
        });
    }

}

export default {Ajax}