

$('.miniature').on('click',function() {
    var idimg = $(this).parent().find(".champCache").val();

    $.ajax({
        type: "POST",
        url: "../models/traitement.php",
        data: {'idimg': idimg},
        success: function(msg){
            $('#resultat').empty();
            $('#resultat').append(msg);
        }
    });
});


$('#haut').on('keyup',function() {
    var text= document.getElementById('haut').value;
    $.ajax({
        type: "POST",
        url: "../models/saisie.php",
        data: {'text':text},
        success: function(msg){
            $('#divHaut').empty();
            $('#divHaut').append(msg);


        }
    });
});

$('#bas').on('keyup',function() {
    var textbas= document.getElementById('bas').value;
    console.log(textbas);
    $.ajax({
        type: "POST",
        url: "../models/saisie.php",
        data: {'textbas':textbas},
        success: function(msg){
            $('#divBas').empty();
            $('#divBas').append(msg);
        }
    });
});

/*
$('#couleurTexte').on('change',function() {
    var couleurTexte= document.getElementById('couleurTexte').value;
    console.log(couleurTexte);
    $('.txt').style.color = couleurTexte;
    $.ajax({
        type: "POST",
        url: "models/couleur.php",
        data: {'couleurTexte':couleurTexte},
        success: function(msg)
        {
            $('.txt').style.color = couleurTexte;
        }
    });
});
*/

document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");

button.addEventListener( "keydown", function( event ) {
    if ( event.keyCode == 13 || event.keyCode == 32 ) {
        fileInput.focus();
    }
});
button.addEventListener( "click", function( event ) {
    fileInput.focus();
    return false;
});
fileInput.addEventListener( "change", function( event ) {
    the_return.innerHTML = this.value;
});



$('.enregistrer').on('click',function() {
    var capture = {};
    var target = $('#boiteImg');
    html2canvas(target, {
        onrendered: function(canvas) {
            capture.img = canvas.toDataURL( "image/png" );
            capture.data = { 'image' : capture.img };
            $.ajax({
                url: "../models/ajax.php",
                data: capture.data,
                type: 'post',
                success: function( result ) {
                    console.log( result );
                    setInterval(refresh(), 10000);
                }
            });
        }
    });
});

function changeColor() {
    document.querySelector('#txt1').style.color = document.querySelector('#couleurTexte').value;
    document.querySelector('#txt2').style.color = document.querySelector('#couleurTexte').value;
}

function refresh() {
   location.reload(true);
}
