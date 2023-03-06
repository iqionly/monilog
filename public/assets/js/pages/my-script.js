$.extend( $.fn.dataTable.defaults, {
    preDrawCallback: function( settings ) {
        KTApp.block($(this).closest('.card'));
    }
    , drawCallback: function(settings) {
        KTApp.unblock($(this).closest('.card'));
    }
});