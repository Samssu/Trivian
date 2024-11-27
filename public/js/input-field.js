const textarea = document.getElementById("postTextarea");
const toolbar = document.getElementById("toolbar");

// Show toolbar on focus
textarea.addEventListener("focus", () => {
    textarea.rows = 4;
    toolbar.classList.remove("d-none");
});

// Hide toolbar on cancel
function cancelEdit() {
    textarea.value = "";
    textarea.rows = 1;
    toolbar.classList.add("d-none");
}

// Text formatting functions
function formatText(command) {
    document.execCommand(command, false, null);
}

// Set font size
function setFontSize(size) {
    document.execCommand("fontSize", false, "7"); // Default execCommand for fontSize
    const fontElements = document.querySelectorAll('font[size="7"]');
    fontElements.forEach((font) => font.removeAttribute("size"));
    fontElements.forEach((font) => (font.style.fontSize = size));
}

// Upload image preview (optional)
document.getElementById("uploadImage").addEventListener("change", function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const img = document.createElement("img");
            img.src = e.target.result;
            img.style.maxWidth = "100%";
            img.style.borderRadius = "10px";
            textarea.value += `\n[Image Uploaded]\n`; // Placeholder for image
            textarea.focus();
        };
        reader.readAsDataURL(file);
    }
});
