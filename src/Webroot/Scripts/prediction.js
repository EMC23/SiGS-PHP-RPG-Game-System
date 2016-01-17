///////////////////////////////////////////////////////////////////////////////////////
//     event,delay,url,dataCallback,callback,dataType,action
////////////////////////////////////////////////////////////////////////////
(function($){
    // Instructions: http://phrogz.net/jquery-bind-delayed-get
    // Copyright:    Gavin Kistner, !@phrogz.net
    // License:      http://phrogz.net/js/_ReuseLicense.txt
    $.fn.bindDelayed = function(event,delay,url,dataCallback,callback,dataType,action){
        var xhr, timer, ct=0;
        return this.on(event,function(){
            clearTimeout(timer);
            if (xhr) xhr.abort();
            timer = setTimeout(function(){
                var id = ++ct;
                xhr = $.ajax({
                    type:action||'get',
                    url:url,
                    data:dataCallback && dataCallback(),
                    dataType:dataType||'json',
                    success:function(data){
                        xhr = null;
                        if (id==ct) callback.call(this,data);
                    }
                });
            },delay);
        });
    };
})(jQuery);


$(document).ready(function() {
    $('.prediction-input').bindDelayed('keyup', 200, '/zoeken/autocomplete/' +  $('.prediction-input').data('func'), function () {
        return {
            input: encodeURIComponent($('.prediction-input').val())
        };
    }, function (items) {
        var html = '';
        for (var i in items) {
            var item = items[i];
            html += '<a class="list-group-item" href="javascript:void(0);" onclick="$(\'.prediction-input\').val(\''
            + item.result.split("'").join("\\'") + '\');$(\'.prediction-list\').html(\'\');">' + item.result + '</a>'
        }
        $('.prediction-list').html(html);
    }, 'json', 'post');
});
