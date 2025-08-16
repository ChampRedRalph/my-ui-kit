document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("themeToggle");
  const html = document.documentElement;

  // Load saved theme
  const savedTheme = localStorage.getItem("theme") || "light";
  html.setAttribute("data-bs-theme", savedTheme);
  toggleBtn.textContent = savedTheme === "light" ? "🌙" : "☀️";

  // Toggle on click
  toggleBtn.addEventListener("click", () => {
    const currentTheme = html.getAttribute("data-bs-theme");
    const newTheme = currentTheme === "light" ? "dark" : "light";
    html.setAttribute("data-bs-theme", newTheme);
    localStorage.setItem("theme", newTheme);
    toggleBtn.textContent = newTheme === "light" ? "🌙" : "☀️";
  });
});
