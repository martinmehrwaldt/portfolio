document.addEventListener("DOMContentLoaded", () => {
const buttons = document.querySelectorAll("#about-tabs button");
const contents = document.querySelectorAll(".tab-content");

function showTab(tabId) {
    contents.forEach(c => c.classList.remove("active"));
    document.getElementById(tabId).classList.add("active");
}

buttons.forEach(btn => {
    btn.addEventListener("click", () => {
    const tab = btn.dataset.tab;
    showTab(tab);
    });
});

    showTab(buttons[0].dataset.tab);
});
