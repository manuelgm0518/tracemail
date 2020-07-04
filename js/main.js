
function generateDocView(docId, specId, version, date, authLevel){//, date, authLevel) {
    var status = "Esperando...";
    var icon = "<i class='fas fa-hourglass-half mx-2'></i>";
    var color = "<div class='bg-warning'>";
    var row = "<div class='row'></div>";
    var doc = "<button class='specs-card col' data-toggle='modal' data-target='#exampleModal'><span>"+date+"</span><span>"+docId+": </span><span>"+specId+"</span><span>REVISIÓN: "+version+"</span>";
    switch(authLevel) {
        case 0: status = "Documento devuelto para <b>revisión</b>"; icon = "<i class='fas fa-undo-alt mx-2'></i>"; color = "<div class='bg-danger'>"; break;
        case 1: status = "<b>Esperando</b> al Jefe de calidad"; break;
        case 2: status = "<b>Esperando a</b> la Gestión de Calidad"; break;
        case 3: status = "<b>Esperando</b> a la Dirección de Operación"; break;
        default: status = "Documento <b>aprobado</b>"; icon = "<i class='fas fa-thumbs-up mx-2'></i>"; color = "<div class='bg-success'>";
    }
    doc += color + /*icon +*/ status + "</div></button>";
    $("#mail-center").find(".row").last().append(doc);
}

$("#test-btn").click(function(){
    $("#mail-center").append("<div class='row'></div>");
    for(var i=0; i<30; i++) {
        if(i%3==0)
            $("#mail-center").append("<div class='row'></div>");
        generateDocView(0001, 7877885, 2, "02/11/2019", Math.floor(Math.random()*6) );
    }
});