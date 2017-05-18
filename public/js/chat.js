/**
 * Created by Daniel on 17-05-2017.
 */
//TODO: load old messages when scrolling up on chat messages area

//Load new messages
function auto_load(){
    $.ajax({
        url: "/msg_ajax_update",
        cache: false,
        success: function(data){
            if (data)
                $("#auto_load_div").append(data);
        }
    });
}

//Load current users
function auto_load_users(){
    $.ajax({
        url: "/users_ajax_update",
        cache: false,
        success: function(data){
            if (data)
                $("#auto_load_users").html(data);
        }
    });
}

function sendMsg() {
    $("#form_msg").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/msg_ajax',
            data: $('form').serialize(),
            success: function(data) {
                if (data)
                    $("#auto_load_div").append(data);
            }
        });
    });
};

$(document).ready(function() {
    auto_load();
    auto_load_users();
    sendMsg();
});

setInterval(auto_load, 2000);
setInterval(auto_load_users, 2000);