<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-lock"></i> Change Your Password</h3>
                    </div>
                    <x-includes.sessions />
                    <div class="card-body">
                        <form wire:submit.prevent='updatePassword' id="updatePasswordForm">
                            <!-- Current Password -->
                            <div class="mb-3">
                                <label for="oldPassword" class="form-label">Current Password</label>
                                <div class="position-relative">
                                    <input type="password"
                                        class="form-control @error('form.old_password') is-invalid @enderror"
                                        id="oldPassword" wire:model.live='form.old_password' required
                                        style="padding-right: 40px;">

                                    <button
                                        class="btn btn-outline-secondary toggle-password position-absolute end-0 top-0 h-100"
                                        type="button" data-target="oldPassword" style="right: 0; z-index: 3;">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                @error('form.old_password')
                                <div class="invalid-feedback d-block mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- New Password -->
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">New Password</label>
                                <div class="position-relative">
                                    <input type="password"
                                        class="form-control @error('form.new_password') is-invalid @enderror"
                                        id="newPassword" wire:model.live='form.new_password' required
                                        style="padding-right: 40px;">

                                    <button
                                        class="btn btn-outline-secondary toggle-password position-absolute end-0 top-0 h-100"
                                        type="button" data-target="newPassword" style="right: 0; z-index: 3;">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                @error('form.new_password')
                                <div class="invalid-feedback d-block mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-text mt-2">
                                    Password must be at least 8 characters long and include a combination of letters,
                                    numbers, and special characters.
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                <div class="position-relative">
                                    <input type="password"
                                        class="form-control @error('form.confirm_password') is-invalid @enderror"
                                        id="confirmPassword" wire:model.live='form.confirm_password' required
                                        style="padding-right: 40px;">

                                    <button
                                        class="btn btn-outline-secondary toggle-password position-absolute end-0 top-0 h-100"
                                        type="button" data-target="confirmPassword" style="right: 0; z-index: 3;">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                @error('form.confirm_password')
                                <div class="invalid-feedback d-block mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Action Buttons -->
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="fas fa-save"></i> Update Password
                                    </button>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <button type="button" wire:click='resetFields' class="btn btn-secondary w-100">
                                        <i class="fas fa-undo"></i> Reset Fields
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