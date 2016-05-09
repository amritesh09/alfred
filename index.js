$(document).ready(function(){
      var customerID,cin;


      $("#abtnSubmit").click(function(){
      customerID=$("#customerID").val();
      cin=$("#cin").val();
      /*
      * Perform some validation here.
      */
      $.ajax({
            type: "GET",
            url: "http://localhost:8080/subs/rest/api/1/1347584/",
            
            success: function(response) {

                            alert(response);
                            },
            error :   function(response){
              alert("error in get");
            } ,
            complete: function(res){
              console.log(res+" res");
            }             
              });           

  });
});