document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll(".fade-in");

  window.addEventListener("scroll", function () {
    elements.forEach((element) => {
      const rect = element.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      // Calcular la opacidad basada en la altura relativa dentro del viewport
      const elementMidPoint = rect.top + rect.height / 2;
      const percentHeight = elementMidPoint / windowHeight;

      // Disminuir opacidad dependiendo la altura
      let newOpacity = 0;
      if (percentHeight >= 0 && percentHeight <= 0.5) {
        newOpacity = (percentHeight - 0.1) * 2;
      } else if (percentHeight > 0.5 && percentHeight <= 1) {
        newOpacity = 1 - (percentHeight - 0.5) * 2;
      }

      element.style.opacity = newOpacity.toFixed(2);
    });
  });
});
