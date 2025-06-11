document.addEventListener("DOMContentLoaded", function () {
    const alternarBtn = document.getElementById('alternarColorBtn');

    alternarBtn.addEventListener("click", function () {
        const elementos = document.querySelectorAll('.navbar *, .estante *');
        const estante = document.querySelector('.estante');
        const navbar = document.querySelector('.navbar');
        elementos.forEach(el => {

            const estilo = window.getComputedStyle(el);
            const colorTexto = estilo.color;
            const colorFondo = estilo.backgroundColor;

            if (colorTexto === "rgb(212, 175, 55)") {
                el.style.color = "#8b5a2b";
            } else if (colorTexto === "rgb(139, 90, 43)") {
                el.style.color = "#d4af37";
            }

            if (colorFondo === "rgb(212, 175, 55)") {
                el.style.backgroundColor = "#8b5a2b";
            } else if (colorFondo === "rgb(139, 90, 43)") {
                el.style.backgroundColor = "#d4af37";
            }
        });

        // ✅ Cambiar fondo de .estante
        const fondoEstante = window.getComputedStyle(estante).backgroundColor;
        if (fondoEstante === "rgb(139, 90, 43)") {
            estante.style.backgroundColor = "#d4af37";
        } else if (fondoEstante === "rgb(212, 175, 55)") {
            estante.style.backgroundColor = "#8b5a2b";

        }
        // ✅ Cambiar fondo de .navbar

        const fondonavbar = window.getComputedStyle(navbar).backgroundColor;
        if (fondonavbar === "rgb(139, 90, 43)") {
            navbar.style.backgroundColor = "#d4af37";
            document.getElementById('salida').style.color = "#8b5a2b";
            document.getElementById('salida').style.backgroundColor = "#d4af37";
            document.getElementById('salida').style.borderColor = "#8b5a2b";
            document.querySelector('.logo').style.color = "#000";
            document.querySelector('footer').style.color = "#8b5a2b";
            document.querySelector('footer').style.backgroundColor = "#d4af37";
            document.querySelectorAll('.libro').forEach(el => {
                el.style.color = "#fff"; 
            });


        } else if (fondonavbar === "rgb(212, 175, 55)") {
            navbar.style.backgroundColor = "#8b5a2b";
            document.getElementById('salida').style.color = "#d4af37";
            document.getElementById('salida').style.backgroundColor = "#8b5a2b";
            document.getElementById('salida').style.borderColor = "#d4af37";
            document.querySelector('.logo').style.color = "#fff";
            document.querySelector('footer').style.color = "#d4af37";
            document.querySelector('footer').style.backgroundColor = "#8b5a2b";
            document.querySelectorAll('.libro').forEach(el => {
                el.style.color = "#000"; 
            });
        }
        const tema = document.getElementById("tema");
const actual = tema.getAttribute("href");

if (actual.includes("pendientes.css")) {
  tema.setAttribute("href", "/css/claro.css");
} else {
  tema.setAttribute("href", "/css/pendientes.css");
}

    });
});
