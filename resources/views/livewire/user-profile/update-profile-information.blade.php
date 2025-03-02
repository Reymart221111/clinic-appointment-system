<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Profile Update Form -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user"></i> Personal Information</h3>
                    </div>
                    <x-includes.sessions />
                    <div class="card-body">
                        <form wire:submit.prevent="updateProfileInformation" id="updateProfileForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- First Name -->
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text"
                                            class="form-control @error('form.first_name') is-invalid @enderror"
                                            id="firstName" name="firstName" placeholder="Enter your first name"
                                            wire:model.live="form.first_name" required>
                                        @error('form.first_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Last Name -->
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text"
                                            class="form-control @error('form.last_name') is-invalid @enderror"
                                            id="lastName" name="lastName" placeholder="Enter your last name"
                                            wire:model.live="form.last_name" required>
                                        @error('form.last_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('form.email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Enter your email address"
                                    wire:model.live="form.email" required>
                                @error('form.email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fas fa-save"></i> Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>