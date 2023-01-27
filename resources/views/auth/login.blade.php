<link style="border-radius: 50%" rel="shortcut icon" href="{{ asset('assets/images/favvvv.png') }}">

<x-guest-layout>
   
    <div dir="rtl" class="form-box">
		
        <div class="header-text">
            <img src="../assets/images/GC2.png" width="150px" height="80px" style="margin: auto"/>
			تسجيل الدخول إلى حسابك
		</div>
        <x-jet-validation-errors class="mb-4" />
        <form name="frm-login" method="POST" action="{{ route('login') }}">
            @csrf
        <input type="email" id="frm-login-uname" name="email" placeholder="اكتب عنوان بريدك الإلكتروني" :value="old('email')" required autofocus>
         <input type="password" id="frm-login-pass" name="password" placeholder="كلمة المرور الخاصة بك" required autocomplete="current-password" > 
         <a class="link-function left-position mb-5" href="{{ route('register') }}" title="Forgotten password?">ليس لديك حساب !</a> <br/>
         <a class="link-function left-position" href="{{ route('password.request') }}" title="Forgotten password?">نسيت كلمة المرور?</a><br/>
         <input type="checkbox" name="remember" id="rememberme" value="forever" type="checkbox"> 
         <label for="terms"></label><span>تذكرني</span>
         <input class="button" type="submit"  value="تسجيل الدخول" name="submit">
            </form>
	</div>
</x-guest-layout>