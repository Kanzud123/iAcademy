$(document).ready(function(){
    //Ajax call form already exists email verification
    $("#stuemail").on("keypress blur",function(){
        var reg=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var stuemail = $("#stuemail").val();
        $.ajax({
            url:"Student/addstudent.php",
            method:"POST",
            data:{
                checkemail:"checkemail",
                stuemail:stuemail,
            },
            success : function(data){
                console.log(data);
               if(data != 0){
                $("#statusMsg2").html(
                    '<small style="color:red;">Invalid Email ID Already Used !</small>'
                );
                $("#signup").attr("disabled",true);
            }else if(data == 0 && reg.test(stuemail)){
                $("#statusMsg2").html(
                   '<small style="color:green;">There You Go !</small>'
                ); 
              $("#signup").attr("disable",false);
                }else if(!reg.test(stuemail)){
                    $("#statusMsg2").html(
    '<small style="color:red;">Please Enter valid Email e.g. example@gmail.com</small>'
                    );
                    $("#signup").attr("disable",false);
                }
                if(stumail == ""){
                    $("#statusMsg2").html(
                        '<small style="color:red;">Please Enter Email !</small>'
                    );
                }
            },
        });
    });
    
    });
    
    
    
    
function addStu(){
    var reg=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();
    
//checking form fielders on form submission
if(stuname.trim()=="")
{
    $("#statusMsg1").html('<small style="color:red;">Please enter name !</small>');
    $("#stuname").focus();
    return false;
}else if (stuemail.trim()=="")
{
    $("#statusMsg2").html('<small style="color:red;">Please enter email !</small>');
    $("#stuemail").focus();
    return false;
}else if(stuemail.trim() !="" && !reg.test(stuemail))
{
    $("#statusMsg2").html('<small style="color:red;">Please enter valid email e.g. example@gmail.com </small>');
    $("#stuemail").focus();
    return false;
} else if(stupass.trim()=="")
{
    $("#statusMsg3").html('<small style="color:red;">Please enter password !</small>');
    $("#stupass").focus();
    return false;
}else { 
    $.ajax({
        url:"Student/addstudent.php",
        method:"POST",
        dataType: "json",
        data:{
            stusignup:"stusignup",
            stuname:stuname,
            stuemail:stuemail,
            stupass : stupass,

        },
        success:function(data){
            if(data == "OK") {
            $("#successMsg").html("<span class='alert alert-success'>Registration Successful !</span>");
        clearStuRegField();    
        }else if(data == "Failed"){
                $("#successMsg").html("<span class='alert alert-danger'>Unable to Register</span>");
            }
        
         
        
        
        
        
        },
    });  
}
}
   


//empty all field
function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}

//Ajax call for student login verification
function checkStuLogin(){
    var stuLogemail = $("#stuLogemail").val();
    var stuLogpass = $("#stuLogpass").val();
         $.ajax({
            url:"Student/addstudent.php",
            method:"POST",
            data:{
                checkLogemail:"checklogemail",
                stuLogemail:stuLogemail,
                stuLogpass:stuLogpass,
    
            },
            success:function(data){
                if(data == 0){
                    $("#statusLogMsg").html(
                        '<small class="alert alert-danger">Invalid Email ID or Password !</small>'
                    );
                }else if(data == 1){
                    $("#statusLogMsg").html(
                        '<div class="spinner-border text-success" role="status"></div>'
                    ); 
                    setTimeout(() => {
                            window.location.href = "index.php";
                    },1000 );
                }
            },

     });
}