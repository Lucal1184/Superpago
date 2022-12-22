function validarpass(){
    let usuario = document.getElementById('user').value;
    let contra = document.getElementById('pass').value;

    //alert(usuario);
    //alert(contra);

    if ((document.getElementById('user').value)=='admin') {
        //window.location = "index.html";
        window.location.href = 'index.html';
    }else{
        
    }

}
