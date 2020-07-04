<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <?php include "basedatos.php";?>
    <div class="container-fluid p-0 m-0">

        <div class="col-2 shadow text-center bg-white fixed-top" style="z-index:1; height: 100vh; padding: 6rem 0 0 0">
            <form  action="qcontroller.php" method="POST">
                <button class="section-btn all" type="submit" id="section" value="1">
                    <i class="fas fa-clipboard-list mr-3"></i>Todos<span class="count">0</span></button>
                <button class="section-btn waiting" type="submit" id="section" value="1">
                    <i class="fas fa-clock mr-3"></i>Pendientes<span class="count">0</span></button>
                <button class="section-btn approved" type="submit" id="section" value="1">
                    <i class="fas fa-check-circle mr-3"></i>Aprobados<span class="count">0</span></button>
                <button class="section-btn rejected" type="submit" id="section" value="1">
                    <i class="fas fa-times-circle mr-3"></i>Rechazados<span class="count">0</span></button>
            </form>


            <div class="position-absolute w-100 p-3" style="bottom: 0">
                <button id="specs-btn" class="btn btn-primary btn-block text-white circled">
                    <i class="fas fa-file-upload <?php if($_GET['userId']!='Admin'){ echo 'unauthorized'; } ?>"></i> &nbsp; Especificaciones</button> 
                <button id="test-btn" class="btn btn-light border btn-block circled">
                            Generar</button> 
                <button id="logout-btn" class="btn btn-light border btn-block circled">
                    <i class="fas fa-arrow-left"></i> &nbsp; Salir </button> 
            </div>
        </div>

        <div id="topbar" class="row m-0 p-0">
            <div class="col-4 my-3">
                <img class="avatar" src="img/avatar.png">
                <div class="d-inline-block mx-3" style="vertical-align:middle;">
                    <h4 class="user">Usuario</h4>
                    <h6 class="position text-muted">Cargo</h6>
                </div>
            </div>
            <div class="col-6 text-center">
                <input type="text" id="search-bar" class="form-control circled w-75 d-inline-block mt-3" style="height: 3rem;" placeholder="Buscar especificaciones...">
                <button class="fas btn btn-primary fa-search d-inline-block mb-2 ml-3 circled" style="font-size:3rem;"></button>
            </div>
            <div class="col-2 text-center">
                <img src="img/tracemail-imagetype.png" style="height: 5rem; padding: 1rem;">
            </div>
        </div> 


        <div class="container-fluid mx-0 p-0" style="margin-top: 6rem">
            <div class="row p-0 m-0">
                <div class="col-2 p-0 m-0"></div>
                <div id="mail-center" class="col-10 text-center" style="padding: 0 5rem">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1">
        <div class="modal-dialog w-100 h-100" style="max-width: 70vw; max-height: 90vh;">
            <div class="modal-content h-100" style="border-radius: 1.5rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileTitle">777777777</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <iframe src="Tareas.pdf" frameborder="0" class="w-100 h-100"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary circled" data-dismiss="modal"><i class="fas fa-undo-alt mr-2"></i>Regresar a <b>Materia Prima</b></button>
                    <button type="button" class="btn btn-primary circled"><i class="fas fa-paper-plane mr-2"></i>Enviar a <b>Control de Calidad</b></button>
                </div>
            </div>
        </div>
    </div>

        

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/main.js"></script>
    <script>


        var ColorList = {
            "all": "var(--info-light)",
            "waiting": "var(--warning-light)",
            "approved": "var(--success-light)",
            "rejected": "var(--danger-light)",
        }


        $(document).ready(function() {
            $(".section-btn").click(function(event) {
                var this2 = $(this);
                $(".section-btn").removeClass("active");
                $(this).addClass("active");
                colors = Object.keys(ColorList);
                colors.forEach(function(e, i){
                    console.log(this2.hasClass(colors[i]));
                    if(this2.hasClass(colors[i])) {
                        console.log("ahuevo sí jaló");
                        $("body").css("background-color", ColorList[e]);
                    }
                });
            });
        });



            </script>
            
</body>
</html>