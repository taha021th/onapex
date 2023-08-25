<form action="{{ route('password.update') }}" method="post">
    
    @csrf
    <div class="section text-center">
        <h4 class="mb-3 pb-3">بازیابی رمز عبور</h4>
        
        <div class="form-group mt-2">
            <input type="email" name="email" class="form-style"
                placeholder="ایمیل" value="{{ request()->email }}">
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
            <input type="password" name="password_confirmation" class="form-style"
                placeholder="رمز عبور">
            <i class="input-icon uil uil-lock-alt"></i>
        </div>
        

        <input type="hidden" name="token" value="{{ request()->route('token') }}">
        
        <button type="submit" class="btn mt-4">ذخیره</button>
    </div>
</form>



