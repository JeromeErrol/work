var main = function(){

    function init(){
        $('.row .btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $collapse = $this.closest('.collapse-group').find('.collapse');
            $collapse.collapse('toggle');
        });
    }

    $(document).ready(init)
}
main();