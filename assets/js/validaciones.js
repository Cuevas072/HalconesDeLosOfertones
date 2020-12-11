function validacion(){
    var nombre;
    var apellido;
    var email;
    var telefono;
    var password;
    var combinacionB = /\w+@\w+\.+[a-z]/;
    nombre = document.getElementById('nombre').value;
    apellido = document.getElementById('ap').value;
    email = document.getElementById('email').value;
    telefono = document.getElementById('phone').value;
    password = document.getElementById('password').value;

    if(nombre == ''){
        alert('Falta ingresar el nombre')
        document.getElementById('nombre').focus();
        document.getElementById('nombre').style.background = "blue";
        return false;
    }
    else{
        if (apellido == '') {
            alert('Falta ingresar el apellido')
            document.getElementById('ap').focus();
            document.getElementById('ap').style.background = "blue";
            return false;
        }
        else{
            if (email == '') {
                alert('Falta ingresar el correo electronico')
                document.getElementById('email').focus();
                document.getElementById('email').style.background = "blue";
                return false;
            } else {
                if (telefono == '') {
                    alert('Falta ingresar el telefono')
                    document.getElementById('phone').focus();
                    document.getElementById('phone').style.background = "blue";
                    return false;
                } else {
                    if (password == '') {
                        alert('Falta ingresar la contraseña')
                        document.getElementById('password').focus();
                        document.getElementById('password').style.background = "blue";
                        return false;
                    }
                    else{
                        if (isNaN(telefono)) {
                            alert('Solo se aceptan numeros en el telefono')
                            document.getElementById('phone').focus();
                            document.getElementById('phone').style.background = "blue";
                            return false;
                        } else {
                            if ( telefono.length != 10) {
                                alert('El telefono debe de tener 10 numeros')
                                document.getElementById('phone').focus();
                                document.getElementById('phone').style.background = "blue";
                                return false;
                            } else {
                                if (nombre.length >15) {
                                    alert('El nombre solo pueden ser maximo 15 caracteres')
                                    document.getElementById('nombre').focus();
                                    document.getElementById('nombre').style.background = "blue";
                                    return false;
                                }
                                if (nombre.length <3) {
                                    alert('El nombre debe tener un minimo de 8 caracteres')
                                    document.getElementById('nombre').focus();
                                    document.getElementById('nombre').style.background = "blue";
                                    return false;
                                } else {
                                    if (apellido.length >50) {
                                        alert('El apellido solo pueden ser maximo 50 caracteres')
                                        document.getElementById('ap').focus();
                                        document.getElementById('ap').style.background = "blue";
                                        return false;
                                    } if (apellido.length <5) {
                                        alert('El apellido solo pueden ser minimo 5 caracteres')
                                        document.getElementById('ap').focus();
                                        document.getElementById('ap').style.background = "blue";
                                        return false;
                                    }
                                    else {
                                        if (email.length >50) {
                                            alert('El correo solo pueden ser maximo 50 caracteres')
                                            document.getElementById('email').focus();
                                            document.getElementById('email').style.background = "blue";
                                            return false;
                                        } if (email.length <10) {
                                            alert('El correo solo pueden ser minimo 10 caracteres')
                                            document.getElementById('email').focus();
                                            document.getElementById('email').style.background = "blue";
                                            return false;
                                        } 
                                        else {
                                            if (password.length > 15) {
                                                alert('La contraseña solo pueden ser maximo 15 caracteres')
                                                document.getElementById('email').focus();
                                                document.getElementById('email').style.background = "blue";
                                                return false;
                                            } if (password.length < 8) {
                                                alert('La contraseña solo pueden ser minimo 8 caracteres')
                                                document.getElementById('email').focus();
                                                document.getElementById('email').style.background = "blue";
                                                return false;
                                            }
                                            else {
                                                if (!combinacionB.test(email)) {
                                                    alert('Ingresa un correo valido')
                                                    document.getElementById('email').focus();
                                                    document.getElementById('email').style.background = "blue";
                                                    return false;
                                                } 
                                                else 
                                                {
                                                    
                                                    
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
