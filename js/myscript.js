$(document).ready(function() {
  $('#submit-data').click(function() {
     event.preventDefault();

     email=$('#email').val();
     pass=$('#pass').val();


     if ( notNull(email) && notNull(pass) ) {
           $.ajax({
             data:"email="+email+"&pass="+pass,
             type:"post",
             url:"includes/data_fetch/login.php",
             success:function(data){
               if(data=="false"){

                 $.notify({

                   type: 'alert-success',
                 },{
                   animate: {
                   enter: 'animated fadeInRight',
                   exit: 'animated fadeOutRight'
                  },

                   template:' <div class="alert alert-danger" role="alert"> Your Email Id and Password is wrong.</div> ',

               });

               }else{
                 url="profile.php?id="+email;
                 console.log(data);
                 window.location.href=url;
               }

             }
           });
     }
     else{
       $.notify({
         type: 'alert-success',
       },{
         animate: {
      		enter: 'animated fadeInRight',
      		exit: 'animated fadeOutRight'
        },
         template:' <div class="alert alert-danger" role="alert"> Fill all input to SingIn.</div> '
     });
     }


  });
console.log(1);
//toper Insert form
$('#fill_top').click(function () {
  console.log(1);
  event.preventDefault();
  tname=$('#name_top').val();
  tgrade=$('#grade_top').val();
  tsec=$('#sec_top').val();
  tgpa=$('#gpa_top').val();

  if(notNull(tname) && notNull(tgrade)
   && notNull(tsec) && notNull(tgpa) ){

     $.ajax({
       data:"tname="+tname+"&tgrade="+tgrade+"&tsec="+tsec+"&tgpa="+tgpa+"",
       type:"post",
       url:"includes/data_fetch/topadder.php",
       success:function(data){

         $.notify({
           type: 'alert-success',
         },{
           animate: {
            enter: 'animated fadeInRight',
            exit: 'animated fadeOutRight'
          },
           template:' <div class="alert alert-success" role="alert"> Data Inserted Wait for 4s Page will reload.</div> '
       });

         if(data=='true'){
             setTimeout(function(){location.reload(true);},4000);
         }
         else{
           $.notify({
             type: 'alert-success',
           },{
             animate: {
              enter: 'animated fadeInRight',
              exit: 'animated fadeOutRight'
            },
             template:' <div class="alert alert-danger" role="alert"> There Was Error With DataBase Contact DBA.</div> '
         });
         }



       }
     });

   }
   else{
     $.notify({
       type: 'alert-success',
     },{
       animate: {
        enter: 'animated fadeInRight',
        exit: 'animated fadeOutRight'
      },
       template:' <div class="alert alert-danger" role="alert"> Input all Values.</div> '
   });
   }

});




});

function notNull(val){
  if(val == ""){ return false; }
  else{ return true; }
}
