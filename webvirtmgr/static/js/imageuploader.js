$(function(){

    var host = location.protocol + '//' + location.host;
    var root = location.protocol + '//' + location.host + window.location.pathname;

    $('#download').on('click',function(){
        var url = $('#source').val();
        $.ajax({
            type: "GET",
            url: host+"/request.php?u="+url,
            success: function(data){
            }
        });
    });

    function getIP(){

        console.log(host);

        $('#dlqueue tr').detach();
        $.ajax({
            type: "GET",
            url: host+"/getstatus.php",
            dataType: "json",
            data: "",
            success: function(data){
                for (var i = 0; i < data.length; i++) {
                    getStatus(i,data[i]);
                    console.log(data[i]);
                }
            },
            error: function(){
            }
        });
        setTimeout(getIP, 2000);
    }

    function getStatus(index,query){
        if (query.length == 0){
            return;
        }
        $.ajax({
            type: "GET",
            url: host+"/getstatus.php?q="+query,
            dataType: "json",
            data: "",
            success: function(data){
                addList(index,data[0],data[1]);
                $('#dlqueue').append(addList(index,data[0],data[1]));
                for (var i = 0; i < data.length; i++) {
                    console.log(i+"/"+data[i]);
                }
            },
            error: function(){
            }
        });

    }


    function addList(index,source,progress){
        // if (status === 'OK'){
        //     status = '<div style="color:green; font-weight: bold;">'+status+'</div>';
        // }else{
        //     status = '<div style="color:red; font-weight: bold;">NG ('+status+')</div>';
        // }

        return '\<tr>\
                    <th>'+index+'</th>\
                    <td style="width: 60%">'+source+'</td>\
                    <td><div class="progress"><div id="progress-US3EwqW7" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="'+progress+'" aria-valuemin="0" aria-valuemax="100" style="width: '+progress+'%;">'+progress+'%</div></div></td>\
                </tr>';
    }

    getIP();

});
