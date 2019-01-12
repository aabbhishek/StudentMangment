$(document).ready(function() {
var s_id;
  $('.update').click(function(){
      now=$(this).attr('updateid');
      s_id=now;
      $.ajax({
        data:'sid='+now+'',
        type:"post",
        url:"includes/data_fetch/idData.php",
        success:function(data){
        set=JSON.parse(data);

        $("#ufn").attr('value',set.name);
        $("#ug").attr('value',set.grade);
        $("#ue").attr('value',set.email);
        $("#uf").attr('value',set.fnum);

        $('#modal-default').modal();


        }
      });

  });


$('#update_data').click(function(){



  grade=$("#ug").val();
  email=$("#ue").val();
  fnumer=$("#uf").val();

    console.log(grade);

  $.ajax({
    data:'id='+s_id+'&grade='+grade+'&email='+email+'&fnumer='+fnumer+'',
    type:"post",
    url:'includes/data_fetch/setUpdated.php',
    success:function(data){
      $.notify({
        type: 'alert-success',
      },{
        animate: {
         enter: 'animated fadeInRight',
         exit: 'animated fadeOutRight'
       },
        template:' <div class="alert alert-success" role="alert"> Student Record Updated.</div> '
    });

    setTimeout(function(){location.reload(); }, 3000);




    }
  });

});


$('.delete').click(function(){
    delid=$(this).attr('deleteid');
    console.log(delid);
    $.ajax({
        data:'id='+delid,
        type:"post",
        url:"includes/data_fetch/del.php",
        success:function(data){
            if(data=="true"){
              $.notify({
                type: 'alert-success',
              },{
                animate: {
                 enter: 'animated fadeInRight',
                 exit: 'animated fadeOutRight'
               },
                template:' <div class="alert alert-success" role="alert"> Data Deleted.</div> '
            });

            setTimeout(function(){location.reload(); }, 3000);

            }

            else{
              console.log(data);
              $.notify({
                type: 'alert-success',
              },{
                animate: {
                 enter: 'animated fadeInRight',
                 exit: 'animated fadeOutRight'
               },
                template:' <div class="alert alert-danger" role="alert"> Some Error.</div> '
            });



            }


        }
    });

  });


});
