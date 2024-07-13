document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll(".fade-in");

  window.addEventListener("scroll", function () {
    elements.forEach((element) => {
      const rect = element.getBoundingClientRect();
      const windowHeight = window.innerHeight * 0.8; // Ajustar el viewport height al 80% de la pantalla

      // Calcular la opacidad basada en la altura relativa dentro del viewport
      const elementMidPoint = rect.top + rect.height / 2;
      const percentHeight =
        (elementMidPoint - window.innerHeight * 0.1) / windowHeight;

      // Disminuir opacidad dependiendo la altura
      let newOpacity = 0;
      if (percentHeight >= 0 && percentHeight < 0.4) {
        newOpacity = (percentHeight - 0.1) * 2.5;
      } else if (percentHeight >= 0.4 && percentHeight <= 0.6) {
        newOpacity = 1;
      } else if (percentHeight > 0.6 && percentHeight <= 1) {
        newOpacity = 1 - (percentHeight - 0.6) * 2.5;
      }

      element.style.opacity = newOpacity.toFixed(2);
    });
  });
});
