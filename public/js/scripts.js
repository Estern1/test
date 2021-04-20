$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {
    $("#submitForm").on('click', function(){
        $.ajax({
            url: '/getGender',
            type: 'POST',
            data: { 'name': $("input[name=name]").val(), 'country_id': $("select[name=country_id] option:selected").val() },
            success: function( data ) {
                if (data.error != null) {
                    $('#gender').html('Error: ' + data.error);
                } else if (data.gender != null) {
                    $('#gender').html('Gender: ' + data.gender);
                } else {
                    $('#gender').html('Gender: unknown');
                }
            }
        });
    });
})
