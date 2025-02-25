<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-key"></i> Update Password</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Update Password</li>
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
                <!-- Password Update Form -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-lock"></i> Change Your Password</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" id="updatePasswordForm">
                            @csrf
                            <!-- Old Password -->
                            <div class="mb-3">
                                <label for="oldPassword" class="form-label">Current Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="oldPassword" name="oldPassword"
                                        placeholder="Enter your current password" required>
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="oldPassword">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- New Password -->
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="newPassword" name="newPassword"
                                        placeholder="Enter your new password" required>
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="newPassword">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="form-text">Password must be at least 8 characters long and include a combination of letters, numbers, and special characters.</div>
                            </div>
                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                        placeholder="Confirm your new password" required>
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="confirmPassword">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Buttons -->
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <button type="submit" class="btn btn-primary w-100"><i class="fas fa-save"></i> Update Password</button>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <button type="reset" class="btn btn-secondary w-100"><i class="fas fa-undo"></i> Reset Fields</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>