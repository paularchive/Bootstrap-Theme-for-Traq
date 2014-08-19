$('input').blur(function()
{
    if( !$(this).val() ) {
          $(this).parents('.form-group').addClass('has-warning');
    } else if ($(this).val()) {
          $(this).parents('.form-group').removeClass('has-warning');
    }
});