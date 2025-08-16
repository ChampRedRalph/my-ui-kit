document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.getElementById("themeToggle");
  if (toggle) {
    toggle.addEventListener("click", () => {
      document.body.classList.toggle("dark");
      document.body.classList.toggle("light");
      localStorage.setItem("theme", document.body.classList.contains("dark") ? "dark" : "light");
    });
  }

  // load saved theme
  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark");
  } else {
    document.body.classList.add("light");
  }
});
