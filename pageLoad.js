window.addEventListener("DOMContentLoaded", () => {
        const parent = document.querySelector(".animate-on-load");
        if (!parent) return;

        // small timeout so transition looks smoother (optional)
        requestAnimationFrame(() => {
          parent.classList.add("show");
          const items = parent.querySelectorAll(".fade-up");
          items.forEach((el, i) => {
            // stagger: 60ms between elements (adjust as you like)
            el.style.transitionDelay = i * 60 + "ms";
          });
        });
      });



// ham burger nav closed if clicked outside
document.addEventListener("click", function (event) {
    const navbar = document.getElementById("navbarNav");
    const toggler = document.querySelector(".navbar-toggler");

    // Check if navbar is open
    const isNavbarOpen = navbar.classList.contains("show");

    // If navbar is open and user clicked outside both navbar & toggler
    if (
      isNavbarOpen &&
      !navbar.contains(event.target) &&
      !toggler.contains(event.target)
    ) {
      const bsCollapse = new bootstrap.Collapse(navbar, {
        toggle: false,
      });
      bsCollapse.hide();
    }
  });