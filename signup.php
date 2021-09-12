<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="bg-img">
     <div class="contentr">
         <header>Registrate</header>
         <form action="#">

            <div class="campos">
            <span class="fa fa-user"></span>
                 <input type="text" required placeholder="ID">  
            </div>
            
            <div class="campos">
            <span class="fa fa-user"></span>
                 <input type="text" required placeholder="Nombres">  
            </div>

            <div class="campos">
            <span class="fa fa-user"></span>
                 <input type="text" required placeholder="Apellidos">  
            </div>

             <div class="campos">
             <span class="fa fa-user"></span>
                 <input type="text" required placeholder="Email">  
             </div>

             <div class="campos">
             <span class="fa fa-user"></span>
                <input type="password" class="pass-r" required placeholder="Enter your Password">
                <span class="show-r">SHOW</span>
            </div>

            <div class="campos">
            <span class="fa fa-user"></span>
                 <input type="password" class="confpass-r" required placeholder="Confirmar Contraseña">  
                
             </div>
           
            <div class="field">
                <input type="submit" value="REGISTRARSE">
               
            </div>

            <div class="signup">
                Si ya te registraste Inicia sesion dando click :
                <a href="index.html">LOGIN </a>
            </div>
         </form>
     </div>
 </div>  
 <script>
     const pass_reg =document.querySelector(".pass-r");
    
     const show_btn  = document.querySelector(".show-r");
    
     show_btn.addEventListener("click",function(){
         if(pass_reg.type =="password"){
             pass_reg.type="text";
             show_btn.style.color="#3498db";
             show_btn.textContent="HIDE";
         }else{
             pass_reg.type="password";
             show_btn.style.color="#222";
             show_btn.textContent="SHOW";   
         }
     
     });
 </script>
</body>
</html>