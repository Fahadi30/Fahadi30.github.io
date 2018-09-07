$(document).ready(function () {

    $('#acc_type_dropd').on('change', function () {
        if (this.value == "Company") {
            $("#select34").hide();
        } else if (this.value == "Personal") {
            $("#select34").show();
        }

    });




    // check change event of the text field
    $("#username").keyup(function () {
        // get text username text field value
        var username = $("#username").val().trim();
        
        // check username name only if length is greater than or equal to 3
        if (username.length > 0) {
            $("#status").html(' Checking availability...');
            // check username
            $.post("username_check.php", {
                username: username
            }, function (data, status) {
                $("#status").html(data);
            });
        }else {
             $("#status").html('');
        }
    });

    /*$("#acc_type_dropd").change(function (){
                 if(this.value == "Personal"){
                      $("#user_name_dropd").removeAttr("disabled");
                 }else{
              $("#user_name_dropd").attr("disabled", "true");
              }
              }); */
});



/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 4.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */