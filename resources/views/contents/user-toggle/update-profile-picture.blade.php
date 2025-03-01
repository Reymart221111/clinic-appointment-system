<x-headers.form-header :title="$title" />

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user-circle"></i> Change Your Profile Picture</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" id="updateProfileImageForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 d-flex flex-column align-items-center justify-content-center">
                                    <!-- New Image Preview (now shows current image by default) -->
                                    <div class="text-center mb-3">
                                        <h5>Profile Picture</h5>
                                        <div class="profile-image-container mb-2">
                                            <img id="profilePreview" 
                                                 src="{{ asset('Images/Umay.jpg') }}" 
                                                 alt="Profile Picture"
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
                                        <div class="form-text">Maximum file size: 2MB. Supported formats: JPG, PNG, GIF.</div>
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