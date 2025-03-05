export function initImagePreview() {
    const profileImageInput = document.getElementById('profileImage');
    const previewImage = document.getElementById('profilePreview');

    // Exit the function if either element is missing
    if (!profileImageInput || !previewImage) {
        return;
    }

    // Add event listener if elements are found
    profileImageInput.addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
}
