
<div class="section-title">Create Account</div>

<div class="form-group mb-2">
    <label for="name" class="control-label">Name</label>

    <input type="text" class="form-control" name="name" autocomplete="off">

    @error('name')
        <span class="text-danger"><small>{{ $message }}</small></span>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="email" class="control-label">Email</label>

    <div class="input-group">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        <input type="email" class="form-control" name="email" autocomplete="off">
    </div>

    @error('email')
        <span class="text-danger"><small>{{ $message }}</small></span>
    @enderror
</div>

<div class="form-group mb-2">
    <label for="password" class="control-label">Password</label>

    <div class="input-group">
        <span class="input-group-text"><i class="fas fa-key"></i></span>
        <input type="password" class="form-control" name="password" autocomplete="off">
    </div>

    @error('password')
        <span class="text-danger"><small>{{ $message }}</small></span>
    @enderror
</div>
