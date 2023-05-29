<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Incripcion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="https://www.uts.edu.co/sitio/wp-content/uploads/2019/10/favicon-1.png">

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="./css/formulario.css"> -->
    <style>
      *{
    box-sizing: border-box;
    margin: 0%;
    padding: 0%;
}
body::-webkit-scrollbar{
    width: 10px;
}
body::-webkit-scrollbar-thumb{
    background-color: #0b4a75;
    border-radius: 100px;
}
body::-webkit-scrollbar-button{
    background-color: #C3D730;
}
body::-webkit-scrollbar-track-piece{
    background-color: transparent;
}
.a{
    background-color: #0b4a75;
    height: 85%;
}

.barraNav{
    background-color: #C3D730;
    height: 50px;
}

.barraNav li{
    border-radius: 150px;
    border-style: none;

}
.barraNav li a:hover{
    background-color: #073d61c2;
    border-radius: 150px;
    font-weight: bold;
}
.lineamientos a{
    text-decoration: none;
    color: white;
}
.barraNav li a{
    align-items: center;
    color: rgb(0, 0, 0);
    text-decoration: none;
    height: 50px;
    padding-left: 30px;
    padding-right: 30px;
    display:flex;
    font-size: 17px;
}
.logo{
    padding-left: 6%;

}
.logo span{
    font-weight: 700;
    font-size: 30px;
    color: white;
}

.iconos{
    display: flex;
    justify-content:end;
    padding-right: 4%;
    gap: 1em;
    padding-top: 22px;

}
.enviar{
    display: flex;
    justify-content: center;
}

.formulario{
    box-shadow: -1px 10px 5px 7px rgba(43, 44, 44, 0.6),0px 1px 3px 4px rgba(213, 213, 213, 0.764);
    padding: 20px;
}
footer{
    background-color: #666666;
    padding-top: 4%;
    color: white;
}
.yo{
    background-color: #171717;
    color: rgb(255, 255, 255);
    text-align: center;
    height: 30px;
    font-size: small;
    font-weight: 600;
    cursor: default;
    padding-top: 0.6%;
    width: 100%;
}
.frame {
    width: 90%;
    margin: 40px auto;
    text-align: center;
  }
  button {
    margin: 20px;
  }
  .custom-btn {
    width: 130px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    padding: 10px 25px;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
     box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
     7px 7px 20px 0px rgba(0,0,0,.1),
     4px 4px 5px 0px rgba(0,0,0,.1);
    outline: none;
  }
.btn-5 {
    width: 130px;
    height: 40px;
    line-height: 42px;
    padding: 0;
    border: none;
    background: #0b4a75;
  background: linear-gradient(0deg, #0b4a75 0%, #0b4a75 100%);
  }
  .btn-5:hover {
    color: #0b4a75;
    background: transparent;
     box-shadow:none;
  }
  .btn-5:before,
  .btn-5:after{
    content:'';
    position:absolute;
    top:0;
    right:0;
    height:2px;
    width:0;
    background: #C3D730;
    box-shadow:
     -1px -1px 5px 0px #fff,
     7px 7px 20px 0px #0003,
     4px 4px 5px 0px #0002;
    transition:400ms ease all;
  }
  .btn-5:after{
    right:inherit;
    top:inherit;
    left:0;
    bottom:0;
  }
  .btn-5:hover:before,
  .btn-5:hover:after{
    width:100%;
    transition:800ms ease all;
  }
  .contenedor-nav{
  text-align: center;
  background-color: #0b4a75;
  color: #fff;
  width: 100%;
  }
  .selector{
    margin-left: 8%;
    display: flex;
    flex-wrap: wrap;
  }
  
  .selector:last-child {
    margin-right: 0;
  }
  
  .selector a {
    text-decoration: none;
    color: #fff;
    padding: 5% 6%;
    border-radius: 5px;
    display: flex;
    align-items: center;
    flex-direction: row;
  }
input:active {
    background-color: transparent;
    box-shadow: 2px 2px 15px rgb(195, 215, 48) inset;
}
input:focus {
    background-color: rgba(0, 0, 255, 0.158);
    box-shadow: 2px 2px 15px #2e3e77f8 inset;
    color: #fafafa;
    justify-content: center;
    text-align:center;
    font-size: 16px;
}
    </style>
  </head>

  <body>
    <header>
        <!-- place navbar here -->
        <div class="container-fluid contenedor-nav">
            <div class="row nav">
                <div class="col-3">
                    <img src="https://www.uts.edu.co/sitio/wp-content/uploads/2019/10/Logo-UTS-1.png" alt="uts" width="35%">
                </div>
                <div class="col-4 titulo">
                    <h1>TELECOMUNICACIONES</h1>
                </div>
                <div class="col-4 selector">
                    <a href="https://www.facebook.com/UnidadesTecnologicasdeSantanderUTS/" target="_blank">
                        <img src="/img/facebook.png" alt="facebook" width="25hv"
                      /></a>
                      <a href="https://www.instagram.com/unidades_uts/"target="_blank"
                        ><img src="/img/instagram.png" alt="instagram" width="25vh"
                      /></a>
                      <a href="https://twitter.com/Unidades_UTS"target="_blank"
                        ><img src="/img/gorjeo.png" alt="twuitter" width="25vh"
                      /></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row barraNav">
              <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="/index.html"
                    style="color: white"
                    >Inicio</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./docentes.html" style="color: white">Docentes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: white">
                      Plan de estudios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"style="width: 500px;">
                      <li><a class="" href="./planIng.html"target="_blank">Ingenieria telecomunicaciones</a></li>
                      <li><a class="" href="./planTec.php" target="_blank">Tecnologia en gestion de sistemas de telecomunicaciones</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white">Inscripción</a>
                  </li>
              </ul>
            </div>
          </div>
</header>
<main>
        <br>
        <div class="row" style="width: 100%;" >
            <div class="col-5">
                <hr>
            </div>
            <div class="col-2">
                <div class="imagenes" style="text-align: center;">
                </div>
            </div>
            <div class="col-5">
                <hr>
            </div>
        </div>
        <div class="alert alert-primary" role="alert" style="margin: 20px;">
            <h4 class="alert-heading" style="text-align: center;" >FORMULARIO DE INSCRIPCION</h4>
        </div>
        <div class="container">
            <form method="post" >
              <br>
              <div class="formulario">
              <div class="row">
                  <div class="col">
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control"  style="border:
                          1.5px solid rgba(24, 23, 23, 0.289)"id="floatingInput" placeholder="nombres"required name="nombre">
                          <label for="floatingInput">Nombres</label>
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="floatingInput" placeholder="apellidos" style="border:
                          1.5px solid rgba(24, 23, 23, 0.289)"required name="apellido">
                          <label for="floatingInput">Apellidos</label>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                      <p>Correo electronico:</p>
                      <div class="input-group">
                          <span class="input-group-text" id="inputGroupPrepend2"><img src="correo-electronico.png" alt=""width="17px"></span>
                          <input name="correo" type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required style="border:
                          1.5px solid rgba(24, 23, 23, 0.289)">
                      </div>
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="col">
                      <p>Telefono:</p>
                      <div class="input-group">
                          <span class="input-group-text" id="inputGroupPrepend2"><img src="llamada-telefonica.png" alt=""width="17px"></span>
                          <input name="telefono" type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required style="border:
                          1.5px solid rgba(24, 23, 23, 0.289)">
                      </div>
                  </div>
              </div>
               <br>
                <div class="row">
                <div class="row">
                  <div class="form-floating">
                      <textarea name="comentarios" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 160px;border:
                      1.5px solid rgba(24, 23, 23, 0.289)"></textarea>
                      <label for="floatingTextarea2" style="text-align: center;" >Comentarios</label>
                    </div>
                </div>
              </div>
              <br>
             <div class="enviar">
              <button class="custom-btn btn-5" name="register" type="submit"><span>Enviar</span></button>

            </form>   
            <?php
            include("./php/enviar.php"); 
            ?>
          </div>
        </div>
           <br><br><br><br>
           
    </main>
    <footer>
      <!-- place footer here -->
      <script>
        fetch('./footter.html')
            .then(response => response.text())
            .then(data => {
            const header = document.querySelector('footer');
            header.innerHTML = data;
        });
    </script>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
