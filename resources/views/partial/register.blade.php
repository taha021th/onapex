<form action="{{ route('register') }}" method="post">
    <input type="hidden" name="url" value="register" >
    @csrf
    <div class="section text-center">
        <h4 class="mb-3 pb-3">ثبت‌نام</h4>
        <div class="form-group">
            <input type="text" name="name" class="form-style"
                placeholder="نام و نام خانوادگی">
            <i class="input-icon uil uil-user"></i>
        </div>
        @error('name')
            <script>alert('{{$message}}')</script>
        @enderror
        {{-- <div class="form-group mt-2">
        <input type="tel" name="phone_number" class="form-style" placeholder="شماره تماس">
        <i class="input-icon uil uil-phone"></i>
    </div> --}}
        <div class="form-group mt-2">
            <input type="email" name="email" class="form-style"
                placeholder="ایمیل">
            <i class="input-icon uil uil-at"></i>
        </div>
        @error('email')
            <script>alert('{{$message}}')</script>
        @enderror
        <div class="form-group mt-2">
            <input type="password" name="password" class="form-style"
                placeholder="رمز عبور">
            <i class="input-icon uil uil-lock-alt"></i>
        </div>
        @error('password')
            <script>alert('{{$message}}')</script>
        @enderror
        <div class="form-group mt-2">
            <input type="password" name="password_confirmation"
                class="form-style" placeholder="رمز عبور">
            <i class="input-icon uil uil-lock-alt"></i>
        </div>
        <button type="submit" class="btn mt-4">ثبت نام</button>
    </div>
</form>