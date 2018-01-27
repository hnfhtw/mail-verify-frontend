$(document).ready(function () {
    var token = read('token');
    console.log(token);
    if (!token){
        window.location.replace("index.php");
    }
});

$(document).ready(function () {
    $.ajax({
        url: "https://" + $('script[src*=auth]').attr('data-backend') +"/history?token=" + read('token'),
        type: "GET",
        success: function (response) {
            response.items.forEach(function (data) {
                var resultClass = "";

                if(data.result.result == true){
                  resultClass = 'fa fa-check-square-o';
                }
                else{
                  resultClass = 'fa fa-square-o';
                }
                
                $('#historyTable tbody').append('<tr><td><i class="fa ' + resultClass + ' fa-2x" aria-hidden="true"></i></td><td style="text-align: center;">' + data.mailad + '</td><td style="text-align: center;">' + data.result.result + '</td><td>' + FormatDate(EpochToDate(data.requestdate)) + '</td></tr>');
            });
        },
        error: function (response) {
            alert('error loading data');
        },
    });
});

function EpochToDate(epoch) {
    if (epoch < 10000000000)
        epoch *= 1000; // convert to milliseconds (Epoch is usually expressed in seconds, but Javascript uses Milliseconds)
    var epoch = epoch + (new Date().getTimezoneOffset() * -1); //for timeZone
    return new Date(epoch);
}

function FormatDate(date) {
    var d = date.getDate();
    var m = date.getMonth() + 1;
    var y = date.getFullYear();
    var h = date.getHours();
    var mm = date.getMinutes();
    return '' + (d <= 9 ? '0' + d : d) + '.' + (m <= 9 ? '0' + m : m) + '.' + y + ' ' + (h <= 9 ? '0' + h : h) + ':' + (mm <= 9 ? '0' + mm : mm);
}