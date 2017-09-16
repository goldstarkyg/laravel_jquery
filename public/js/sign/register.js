/**
 * Created by hh on 9/12/2017.
 */
/*condition for usertype*/
selectUserType();

var files = [];
var files_video = [];

$("input[name=profile_pic]").change(function(event) {
    $.each(event.target.files, function(index, file) {
        var reader = new FileReader();
        reader.onload = function(event) {
            object = {};
            object.filename = file.name;
            object.data = event.target.result;
            files.push(object);
        };
        reader.readAsDataURL(file);
    });
});

$("input[name=video]").change(function(event) {
    $.each(event.target.files, function(index, file) {
        var reader = new FileReader();
        reader.onload = function(event) {
            object = {};
            object.filename = file.name;
            object.data = event.target.result;
            files_video.push(object);
        };
        reader.readAsDataURL(file);
    });
});

function register() {

    var $ = jQuery;
    var formname = 'form#registration';
    var postData 		= $(formname).serializeArray(),
        formURL 		= "/register",
        status 		    = $("#sign_status");

    status.text("User informations are Sending to the server...");


    var gender = $('input[name=gender]:checked', formname).val();
    if(gender == 'male') gender = 0;
    else gender = 1;

    postData.push({"name":"gender","value":gender});
    


    var n = Date.now();
    if(files[0] != null) {
        var filename = n + "_" + files[0].filename;
        var filedata = files[0].data;
        postData.push({"name":"image_name","value":filename});
        postData.push({"name":"image_data","value":filedata});
    }

    if(files_video[0] != null) {
        var video_filename = n + "_" + files_video[0].filename;
        var video_filedata = files_video[0].data;
        postData.push({"name":"video_name","value":video_filename});
        postData.push({"name":"video_data","value":video_filedata});
        if(files_video[0] == null)
            postData.push({"name":"video","value":  0});
        else
            postData.push({"name":"video","value":  1});

    }


    console.log(postData);
    $.ajax(
        {
            url : formURL,
            type: "POST",
            data : postData,
            dataType: "html",
            success:function(data)
            {
                status.text(data);
                advisor_list();
                $('#signupModal').modal('toggle');
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert(errorThrown);
                //status.text('A email address duplicated. Please use another email address.');
            },
        });

}

function selectUserType() {
    var $ = jQuery;
    var formname = 'form#registration';
    var userType =  $('select[name="user_type"]').val();
    if(userType == 'client') {
        $("#sign-video").css("visibility", "hidden");
        files_video = [];
    }else {
        $("#sign-video").css("visibility", "visible");
    }
}
