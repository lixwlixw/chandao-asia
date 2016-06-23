$(function()
{
    var $showdata = $('#showdata');
    $showdata.load($showdata.data('url') + ' #dataWrapper', function()
    {
        if(typeof($('#datatable').datatable) == 'function')
        {
            $('#datatable').datatable({fixedLeftWidth: 200, scrollPos: 'out'});
            fixScroll();
        }
    });
});
