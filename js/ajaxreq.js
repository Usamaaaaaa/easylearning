// email on blur event validation 
$(document).ready(function() {
    clear();
    $('#stdEmail').on("blur",function(){
        var email=$('#stdEmail').val();
        $.ajax({
            url:'student/addstd.php',
            method:'POST',
            // dataType:"json",
            data:{
                //name:name,
                email:email
                //password:pass
            },
            success: function(response) {
            
                if(response != 0)
                {
                $('#emailerr').html('<span style="color:red;">email already used</span>');
                $('#signup').attr("disabled",true);
            }else if(response == 0){
                $('#emailerr').html(" ");
                $('#signup').attr("disabled",false);
            }
                
                   // clear();
                
            },
        }); 
    })
})


//  registration ajax call 

function addstd1() {
    // var reg = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$";
    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var name=$('#stdname').val();
    var email=$('#stdEmail').val();
    var pass=$('#stdPassword').val();
    
    if(name.trim() == ""){
        $('#nameerr').html('<small style="color:red; padding:10px;" >please enter name</small>');
        $('#stdname').focus();
        return false;
    } else
    if(email.trim() == "") {
        $('#nameerr').html(" ");
        $('#emailerr').html('<small style="color:red; padding:10px;">please enter email</small>');
        $('#stdEmail').focus();
        return false;
    }else if(!re.test(email)){
        $('#emailerr').html('<small style="color:red; padding:10px;">invald email e.g example@gmail.com</small>');
    }
    else if(pass.trim() == ""){
        $('#emailerr').html(" ");
        $('#passerr').html('<small style="color:red; padding:10px;">please enter password</small>');
        $('#stdPassword').focus();
        return false;
    }else{
    $.ajax({
        url:'student/addstd.php',
        method:'POST',
        // dataType:"json",
        data:{
            name:name,
            email:email,
            password:pass
        },
        success: function(data) {
            // console.log(JSON.parse(data))
            console.log(data)
            if(data == 00){
            $('#successmsg').html('<span style="color:green;">registerion successfully</span>');
            
                clear();
            }else if(data ==01){
                $('#successmsg').html('<span style="color:green;">registerion failed</span>'); 
            }
            
            
        },
    });
}

}

// login button ajax call 
function login() {
     console.log("login click");
    var email=$('#stdlEmail').val();
    var pass=$('#stdlPassword').val();
    // console.log(email);
    $.ajax({
        url:'student/addstd.php',
        method:'POST',
        // dataType:"json",
        data:{
            //name:name,
            lemail:email,
            lpassword:pass
        },
        success: function(data) {
            console.log(data)
            var res=JSON.parse(data);
             console.log(res);
            if(res == "o"){
                // console.log("yes");
            $('#success').html('<span style="color:green; padding-right:5px;text-transform:uppercase;">Login succes..</span>');
            setTimeout(()=>{
                window.location.href="index.php";
            },100);
               clear();
            }else if(res=="f"){
                $('#success').html('<span style="color:green; padding-right:5px;text-transform:uppercase;">Login failed</span>');
            
                clear();
                
            }
            // setTimeout(()=>{
            //     window.location.href="index.php";
            // },100);
        },
    });   
}
function clear() {
    ///sconsole.log("cc")
    $('#stdregform').trigger("reset");
    $('#stdloginform').trigger("reset");
    $('#nameerr').html(" ");
    $('#emailerr').html(" ");
    $('#passerr').html(" ");
    //$('#successmsg').html(" ")
}
// close button click 
function clear1() {

    // console.log("cccc")
    $('#stdloginform').trigger("reset");
    $('#stdregform').trigger("reset");
    $('#nameerr').html(" ");
    $('#emailerr').html(" ");
    $('#passerr').html(" ");
    $('#successmsg').html(" ");
    $('#success').html(" ");
 }