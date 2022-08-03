    
    function aslogin() {
    //  console.log("adminlogin click");
    var email=$('#adminEmail').val();
    var pass=$('#adminPassword').val();
    //  console.log(email);
    $.ajax({
        url:'admin/admin.php',
        method:'POST',
        // dataType:"json",
        data:{
            //name:name,
            aemail:email,
            apassword:pass
        },
        //  console.log("hhhh");
        success: function(data1) {
            // console.log(data)
           var res=JSON.parse(data1);
        //    console.log(res);
            if(res == "o"){
                // console.log("yes");
            $('#admsuccess').html('<div class="spinner-border text-success">successful...</div>');
            setTimeout(()=>{
                // console.log("timeout")
                window.location.href="admin/dashboard.php";
            },100);
               adminclr();
            }
            else if(res == "f"){
                $('#admsuccess').html('<span style="color:red; padding-right:5px;text-transform:uppercase;">Login failed</span>');
                adminclr();
                // clear();
                
            }
            setTimeout(()=>{
                $('#admsuccess').html(" ");
                
            },2000);
        },
    });   
}
 function adminclr(){
    //  console.log("adminclr");
     $('#adminloginform').trigger("reset");
    $('#adminEmail').html(" ");
    $('#adminPassword').html(" ");
 }