
/*$(document).ready(function(){
$("input[type=text]").val("");*/

	$("#submit").click(function() {
        
                var uname=$("#uname").val();
                var psswd=$("#psswd").val();
                var mail=$("#mail").val();
                var fname=$("#fname").val();
                var mobnum=$("#mobnum").val();
                var dataString =  'Username=' + uname+'&Password=' + psswd+'&Email=' + mail+'&Fullname=' + fname+'&Mobile=' + mobnum;
                /*if (uname==''||psswd==''||mail==''||fname==''||mobnum=='') {
                	alert("plz fill all fieldss")
                }else{*/

                $.ajax({
                    type: "POST",
                    url: "form.php",
                    data: dataString,
                   //dataType: "dataString",
                    success: function(response) {
                       alert("value r inserted");
                       location.reload(true);
                    }
                });
               /* }*/
                //return false;

            });


