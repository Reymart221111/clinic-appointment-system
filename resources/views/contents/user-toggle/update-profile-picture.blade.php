<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-image"></i> Update Profile Picture</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Update Profile Picture</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Profile Image Update Form -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user-circle"></i> Change Your Profile Picture</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" id="updateProfileImageForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
                                    <!-- Current Image Preview -->
                                    <div class="text-center mb-3">
                                        <h5>Current Profile Picture</h5>
                                        <div class="profile-image-container mb-2">
                                            <img id="currentProfileImage" src="https://via.placeholder.com/200"
                                                alt="Current Profile Picture"
                                                class="img-fluid rounded-circle profile-image border shadow-sm"
                                                style="width: 200px; height: 200px; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
                                    <!-- New Image Preview -->
                                    <div class="text-center mb-3">
                                        <h5>New Profile Picture</h5>
                                        <div class="profile-image-container mb-2">
                                            <img id="newProfileImage" src="https://via.placeholder.com/200?text=Preview"
                                                alt="New Profile Picture"
                                                class="img-fluid rounded-circle profile-image border shadow-sm"
                                                style="width: 200px; height: 200px; object-fit: cover;">
                                        </div>
                                    </div>

                                    <!-- Upload Button -->
                                    <div class="mb-3 text-center w-100">
                                        <label for="profileImage" class="form-label d-none">Choose New Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control d-none" id="profileImage"
                                                name="profileImage" accept="image/*">
                                            <label for="profileImage" class="btn btn-outline-primary w-100">
                                                <i class="fas fa-upload"></i> Choose New Image
                                            </label>
                                        </div>
                                        <div class="form-text">Maximum file size: 2MB. Supported formats: JPG, PNG, GIF.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="row mt-4">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary w-100" id="updateImageBtn" disabled>
                                        <i class="fas fa-save"></i> Update Profile Picture
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for image preview module -->
<script>
    // Export this as a module (resources/js/modules/imagePreview.js)
export function initImagePreview() {
    const profileImageInput = document.getElementById('profileImage');
    const newProfileImage = document.getElementById('newProfileImage');
    const updateButton = document.getElementById('updateImageBtn');
    
    if (profileImageInput && newProfileImage) {
        profileImageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            
            if (file) {
                // Validate file type
                const validTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    alert('Please select a valid image file (JPG, PNG, or GIF)');
                    this.value = '';
                    return;
                }
                
                // Validate file size (2MB max)
                if (file.size > 2 * 1024 * 1024) {
                    alert('File size exceeds 2MB limit');
                    this.value = '';
                    return;
                }
                
                // Create preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    newProfileImage.src = e.target.result;
                    updateButton.disabled = false;
                }
                reader.readAsDataURL(file);
            } else {
                // Reset preview if no file selected
                newProfileImage.src = 'https://via.placeholder.com/200?text=Preview';
                updateButton.disabled = true;
            }
        });
    }
}
</script>