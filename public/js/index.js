document.addEventListener("DOMContentLoaded", () => {
  const footer = document.querySelector("footer");

  window.addEventListener("scroll", () => {
    // Apakah pengguna sudah di bagian bawah halaman?
    const scrollPosition = window.innerHeight + window.scrollY;
    const documentHeight = document.body.offsetHeight;

    if (scrollPosition >= documentHeight - 1) {
      footer.style.display = "block";
      footer.style.position = "fixed";
      footer.style.bottom = "0";
    } else {
      footer.style.display = "none";
    }
  });

  document.getElementById("search").addEventListener("input", function () {
    const query = this.value.toLowerCase();
    const courses = document.querySelectorAll(".course-item");
    courses.forEach((course) => {
      const text = course.innerText.toLowerCase();
      course.style.display = text.includes(query) ? "block" : "none";
    });
  });

  document.querySelectorAll(".course-item").forEach((item) => {
    item.addEventListener("click", () => {
      const url = item.getAttribute("data-url");
      window.location.href = url;
    });
  });
});
