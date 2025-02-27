export function initImagePreview() {
    const profileImageInput = document.getElementById('profileImage');
    const profilePreview = document.getElementById('profilePreview');
    const updateButton = document.getElementById('updateImageBtn');

    if (profileImageInput && profilePreview) {
        // Store initial image source
        const currentImageSrc = profilePreview.src;

        profileImageInput.addEventListener('change', function (event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    profilePreview.src = e.target.result;
                    updateButton.disabled = false;
                }

                reader.readAsDataURL(file);
            } else {
                // Restore original image if no file selected
                profilePreview.src = currentImageSrc;
                updateButton.disabled = true;
            }
        });
    }
}