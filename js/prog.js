// JavaScript Document
	$(document).ready(function(){
			
			  $("#cust_phone").keydown(function (e) {
        if (e.shiftKey) e.preventDefault();
        else {
            var nKeyCode = e.keyCode;
            //Ignore Backspace and Tab keys
            if (nKeyCode == 8 || nKeyCode == 9) return;
            if (nKeyCode < 95) {
                if (nKeyCode < 48 || nKeyCode > 57) e.preventDefault();
            } else {
                if (nKeyCode < 96 || nKeyCode > 105) e.preventDefault();
            }
        }
    });
			
		   $("#email_submit").validate({
				rules:{
					name:{required:true},
					phone:{required:true},
					email:{required:true,email:true},
					address:{required:true}
										
					},
				message:{},
				
		   		submitHandler:function(){
					$.ajax({
						   type:"post",url:"action.php",data:$("#email_submit").serialize(),
						   success:function()
						   {
							   alert("Thank you for contacting us, we will reply to your inquiry as soon as possible!");
							   //window.location.href="http://harekrishnadham.com";
							   $("#first_name").val('');
							   $("#cust_phone").val('');
							   $("#cust_email").val('');
							   $("#cust_add").val('');
							   $("#cust_add2").val('');
							   $("input:radio").attr("checked", false);
							   
							   
							},
							error:function()
							{
								alert("Error");
							}
						   });
					}
					});
					//alert("data");
		   });