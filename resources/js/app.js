import './bootstrap';
document.addEventListener("DOMContentLoaded", () => {
    // Mobile menu toggle
    const mobileMenuButton = document.querySelector('button[aria-controls="mobile-menu"]');
    const mobileMenuIcons = mobileMenuButton.querySelectorAll("svg");
    const mobileMenu = document.getElementById("mobile-menu");
    const nav = document.getElementById("nav");

    mobileMenuButton.addEventListener("click", () => {
        const isExpanded = mobileMenuButton.getAttribute("aria-expanded") === "true";
        mobileMenuButton.setAttribute("aria-expanded", !isExpanded);

        mobileMenuIcons.forEach((icon) => icon.classList.toggle("hidden"));

        // Show/hide the mobile menu
        if (mobileMenu) {
            mobileMenu.classList.toggle("hidden");
        }
    });
});
