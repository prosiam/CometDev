(function ($) {
    $(document).ready(function() {
        $(document).on('click','#logout-btn',function (event) {
            event.preventDefault();
            $("#logout-form").trigger("submit");
            
            
            
        })
        
    })
})(jQuery)