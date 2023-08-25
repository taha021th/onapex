<form action="{{ route('password.email') }}" method="post">
    <input type="hidden" name="url" value="register" >
    @csrf
    <div class="section text-center">
        <h4 class="mb-3 pb-3">بازیابی رمز عبور</h4>
      
        <div class="form-group mt-2">
            <input type="email" name="email" class="form-style"
                placeholder="ایمیل">
            <i class="input-icon uil uil-at"></i>
        </div>
        @error('email')
            <script>alert('{{$message}}')</script>
        @enderror
       
        <button type="submit" class="btn mt-4">ارسال</button>
    </div>
</form>