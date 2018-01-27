$(document).ready(function () {
    var token = read('token');
    console.log(token);
    if (!token){
        window.location.replace("index.php");
    }
});

$(function() {
    $('#verifyBtn').on('click', function (e) {
        e.preventDefault(); // disable the default form submit event

        // disable button until data is loaded
        $('#verifyBtn').prop("disabled",true);
        $('#verifyBtn').html('Loading...');

        $.ajax({
            url: "http://" + $('script[src*=auth]').attr('data-backend') +"/verify",
            type: "POST",
            data: {
                mailad: $('#mailAddr').val(),
                token: read('token')
            },
            success: function (response) {

                if(response.result == true){
                  $('#isValid').attr('class', 'fa fa-check-square-o');
                  $('#validText').text("Valid Address");
                }
                else{
                  $('#isValid').attr('class', 'fa fa-square-o');
                  $('#validText').text("Invalid Address");
                }
                
                //alert(response.mailAddr);
            },
            error: function (response) {
                alert('THIS error loading data');
            },
            complete: function(data) {
                $('#verifyBtn').prop("disabled",false);
                $('#verifyBtn').html('Verify');
            }
        });
    });
});