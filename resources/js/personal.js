alert("I am an alert box!");
$(function() {
    $('select[name=service]').change(function() {

        var url = '{{ url('country') }}' + $(this).val() + '/states/';

        $.get(url, function(data) {
            var select = $('form select[name= serviceDetails]');

            select.empty();

            $.each(data, function(key, value) {
                select.append('<option value=' + value.id + '>' + value.description + '</option>');
            });
        });
    });
});
