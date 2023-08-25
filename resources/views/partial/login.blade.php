<form action="{{ route('login') }}" method="post">
    @csrf
    <input type="hidden" name="url2" value="login" >
    <div class="section text-center">
        <h4 class="mb-4 pb-3">ورود</h4>
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
        <button type="submit" class="btn mt-4">ورود</button>
        <p class="mb-0 mt-4 text-center"><a href="{{route('password.request')}}"
                class="link">فراموشی رمز
                عبور؟</a></p>
    </div>
</form>