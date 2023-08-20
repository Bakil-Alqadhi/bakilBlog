<div>
    <form method="POST" wire:submit.prevent='changePassword()'>
        <div class="row">

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Current Password</label>
                    <input type="password" class="form-control" wire:model="current_password"
                        placeholder="Current Password" />
                    <span class="text-danger">
                        @error('current_password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input type="password" class="form-control" wire:model="new_password" placeholder="New Password" />
                    <span class="text-danger">
                        @error('new_password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Confirm new Password</label>
                    <input type="password" class="form-control" wire:model="confirm_new_password"
                        placeholder="Retype new password" />
                    <span class="text-danger">
                        @error('confirm_new_password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
</div>
