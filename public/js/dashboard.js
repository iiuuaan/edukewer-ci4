document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("search").addEventListener("input", function () {
    const query = this.value.toLowerCase();
    const courses = document.querySelectorAll(".my-course-item");
    courses.forEach((course) => {
      const text = course.innerText.toLowerCase();
      course.style.display = text.includes(query) ? "block" : "none";
    });
  });

  document.querySelectorAll(".course-item, .my-course-item").forEach((item) => {
    item.addEventListener("click", () => {
      const url = item.getAttribute("data-url");
      window.location.href = url;
    });
  });
});
