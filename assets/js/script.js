// const ObjWind =  {
 
//     loginHandler: document.querySelector('#hideLogin'),
//     registerHandler: document.querySelector('#hideRegister'),
//     loginForm: document.querySelector("#loginForm"),
//     registerForm: document.querySelector("#registerForm"),

//     Initial : function(){
          
//         this.loginHandler.style.cursor = "pointer";
//          this.registerHandler.style.cursor ="pointer";
//         this.registerForm.style.display = "none";

//     },

//     HideLogin : function(){

//        return this.loginHandler.addEventListener('click',e=>{
//            e.preventDefault();
//            this.loginForm.style.display = "none";
//            this.registerForm.style.display = "block";

//         })
//     },

//     ShowLogin : function(){

//       this.registerHandler.addEventListener('click',e =>{

//         e.preventDefault();

//          this.loginForm.style.display = "block";
//          this.registerForm.style.display = "none";

//       })
//     }

// };
$(document).ready(function(){
    $('#hideLogin').css('cursor','pointer');
    $('#hideRegister').css('cursor', 'pointer');
    
    $('#hideLogin').click(function(){
         
        $('#loginForm').hide();
         $('#registerForm').show();
    });

      $('#hideRegister').click(function () {

          $('#loginForm').show();
          $('#registerForm').hide();
      });


});


