$(document).ready(function(){
  $("#submit").click(function(){
    // var id = $('#id').val();
     $.ajax({
              url:"http://localhost/ci/bcit-ci-CodeIgniter-bcb17eb/ajax-request",
              method:"post",
              // data: {"id":id},
              error: function(value) {
              alert('Something is wrong');
              },

              success:function(value){
                
                $('#aaa').html(value);
               
              }
            });
  });
});



$(document).ready(function(){
  $("#submits").click(function(){
    var i = $('#id').val();
    const name = [];
    const classes = [];
    const roll = [];
    const image = [];
    var form_data = new FormData();
    for(var j=0;j<i;j++)
    {
      name[j] = $('#name'+(j+1)).val();
      classes[j] = $('#class'+(j+1)).val();
      roll[j] = $('#roll'+(j+1)).val();
      image[j] = $('#image'+(j+1)).val();
    }

     $.ajax({
              url:"http://localhost/ci/bcit-ci-CodeIgniter-bcb17eb/ajax-request-post",
              method:"post",
              data: {"name":name,"classes":classes, "roll":roll,"image":image,"i":i},
              error: function(value) {
              alert('Something is wrong');
              },

              success:function(value){
                $('#aaa').html(value);
               
              }
            });
  });
});

$(document).ready(function(){
  $('#upload').submit(function(e){
    e.preventDefault();
     $.ajax({
              url:"http://localhost/ci/bcit-ci-CodeIgniter-bcb17eb/image_upload",
              method:"post",
              data: new FormData(this),
              processData : false,
              contentType : false,
              cache : false,
              async : false,
              error: function(value) {
              alert('Something is wrong');
              },

              success:function(value){
                
                $('#image_display').html(value);
               
               
              }
            });
  });
});



$(document).ready(function(){
  $('#upload_form').submit(function(e){
    e.preventDefault();
     $.ajax({
              url:"http://localhost/ci/bcit-ci-CodeIgniter-bcb17eb/image_uploads",
              method:"post",
              data: new FormData(this),
              processData : false,
              contentType : false,
              cache : false,
              async : false,
              error: function(value) {
              alert('Something is wrong');
              },

              success:function(value){
                
                $('#aaa').html(value);
               
               
              }
            });
  });
});


