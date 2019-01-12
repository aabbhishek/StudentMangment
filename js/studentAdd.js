$(document).ready(function() {

$("#termCheker").click(function (){
  if($(this).prop("checked") == true){
            $('#ad_student').removeAttr('disabled');
         }
         else if($(this).prop("checked") == false){
             $('#ad_student').attr('disabled','true');
         }
});

$("#ad_student").click(function(){
  fname=$('#fname').val();
  lname=$('#lname').val();
  addemail=$('#addemail').val();
  faname=$('#faname').val();
  maname=$('#maname').val();
  address=$('#address').val();
  spno=$('#spno').val();
  fpno=$('#fpno').val();
  dob=$('#dob').val();
  sgrade=$('#sgrade').val();



  if(notNull(fname) && notNull(lname) && notNull(addemail)
    && notNull(faname) && notNull(maname) && notNull(address)
    && notNull(spno) && notNull(fpno) && notNull(dob)
    && notNull(sgrade)){

        $.ajax({
          data:"fn="+fname+"&lname="+lname+"&addemail="+addemail+"&faname="+faname+"&maname="+maname+"&address="+address+"&spno="+spno+"&fpno="+fpno+"&dob="+dob+"&sgrade="+sgrade+"",
          type:"post",
          url:"includes/data_fetch/addStudentInto.php",
          success:function(data){
            console.log(data);
          if(data=='false'){

            $.notify({
              type: 'alert-success',
            },{
              animate: {
               enter: 'animated fadeInRight',
               exit: 'animated fadeOutRight'
             },
              template:' <div class="alert alert-danger" role="alert"> DataBase Error.</div> '
          });
           }else if(data=='true'){
             $.notify({
               type: 'alert-success',
             },{
               animate: {
                enter: 'animated fadeInRight',
                exit: 'animated fadeOutRight'
              },
               template:' <div class="alert alert-success" role="alert"> Student Record Updated.</div> '
           });
           }
          }
        });



    }

    else{
      console.log(false);
      $.notify({
        type: 'alert-success',
      },{
        animate: {
         enter: 'animated fadeInRight',
         exit: 'animated fadeOutRight'
       },
        template:' <div class="alert alert-danger" role="alert"> Fill all field.</div> '
    });
    }

});

});


function notNull(val){
  if(val == ""){ return false; }
  else{ return true; }
}
