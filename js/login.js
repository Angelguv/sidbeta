document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("loginForm");
    const endpointLogin = './php/login.php'
    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(loginForm);

        fetch(endpointLogin, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                alert(data.message);
                switch (data.role) {
                    case 'ADMINISTRADOR':
                        window.location.href = "./secciones/Inicio.php";
                        break;
                    case 'PERSONAL':
                        window.location.href = "../secciones/VistaA.php";
                        break;
                    case 'ALUMNO':
                        window.location.href = "./secciones/VistaB.html";
                        break;
                    default:
                        alert("Rol de usuario desconocido");
                }
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            alert("Error al intentar iniciar sesión");
            console.error('Error:', error);
        });
    });
});
