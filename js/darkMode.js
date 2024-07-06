function toggleDarkMode() {
  document.body.classList.toggle("dark-mode");

  var iconMode = document.getElementById("iconMode");

  if (iconMode.classList.contains("fa-sun")) {
    iconMode.classList.remove("fa-sun");
    iconMode.classList.add("fa-moon");
  } else {
    iconMode.classList.remove("fa-moon");
    iconMode.classList.add("fa-sun");
  }
}
