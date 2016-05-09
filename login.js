$(document).ready(function(){
      var email,pass;
      $("#btnLogin").click(function(){
      email=$("#txtEmail").val();
      pass=$("#txtPwd").val();
      /*
      * Perform some validation here.
      */
      $.post("/login",{email:email,pass:pass},function(data){
      if(data==='done') {
        location.assign("/pdn_search");
      }
    });
  });
});