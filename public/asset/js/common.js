$(document).ready(function(){
    $('.home-slider').slick({
        autoplay:true,
        dots:true,
        arrows:false,
        fade:true,
    });

    $('.shareBtn').click(function () {
            var link = $(this).data('url');
            if($(this).data('desc') != undefined && $(this).data('desc') != ''){
                link = link + '&description=' + $(this).data('desc');
            }
            window.open(link,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250');
    });
})
function toTop() {
    $('html, body').animate({scrollTop: 0}, 500);
}

function callFormApply(job_id){
    console.log(job_id);
    $("#job_apply").val(job_id);
    $("#application-canvas").show('fast');
}
function closeForm(){
    $("#application-canvas").hide();
}

function submitApply(){
    $("#block-submit-button").show();
    $("#block-wait-process").hide();
    var formData = new FormData($('#applicant_form')[0]);
    formData.append('tax_file', $('input[type=file]')[0].files[0]);
    $.ajax({
        url: '/recruitment/mailApply',
        type: 'POST',
        dataType: 'json',
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            $("#block-submit-button").show();
            $("#block-wait-process").hide();
            if(response.status == 0){
                $('#alert-form').text(response.msg);
            }else{
                $(".outer-canvas").hide();
                $('#applicant_form')[0].reset();
                $("#form-success").show();
                setTimeout(function(){
                    closeForm();
                    $("#form-success").hide();
                    $(".outer-canvas").show();
                }, 8000);
            }
        }
    });
}