$(window).on('load', function () {
    //filter();
});

function filter()
{
    $('.filter' ).on( 'click', function() {
        if( $(this).is(':checked') ){
            filterActive(this.value);
        }
    });

}

function filterActive(data)
{
    alert(data);
}
