    (function($){
    $(document).ready(function() {
    var success_text = $('#response').text();
    $('.myform').on('submit',function(){
         
        // Add text 'loading...' right after clicking on the submit button. 
         $('#response').hide('fast');
         
        var form = $(this);
        var result = " ";
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(result){
                if (result == 'success'){
                    $('#response').html(success_text);
                    $('#response').show('slow');  
                } else if(result == 'run_url'){
                   var sub_url = $('.ssm_sub_url').val();
                   $('#response').html(success_text);
                    $('#response').show('slow'); 
                    window.location.assign(sub_url);
                } else if(result == 'Subscriber Already Exists') {
                    $('#response').text('Subscriber Already Exists');
                    $('#response').show('slow');
                } else if(result == 'Invalid Input') {
                    $('#response').text('Input invalid.');
                    $('#response').show('slow');
                } else if(result == 'Invalid API Key Or List Name') {
                    $('#response').text('Invalid API Key Or List Name');
                    $('#response').show('slow');
                } else {
                    $('#response').text('Unknown Error Occurred');
                    $('#response').show();
                }
            }
        });
         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
    });
});
})(jQuery);