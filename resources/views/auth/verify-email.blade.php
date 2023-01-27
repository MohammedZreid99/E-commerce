    
        <link style="border-radius: 50%" rel="shortcut icon" href="{{ asset('assets/images/favvvv.png') }}">

    <div style="width: 30%;
    margin: auto;
    margin-top: 10%;
    text-align: center;
    padding: 50px;
    color: white;
    font-weight: 500;
    font-size: 19px;
    background-image: linear-gradient(#52caff, #2c2c2c);
    border-radius: 30px;
    box-shadow: 0px 2px 20px 7px #ff000080;">
     <div style=" font-size: 25px;margin-bottom: 3%" class="mb-4 text-sm text-gray-600">
        {{ __('ادارة') }}
    </div>
    <div style="margin-bottom: 3%" class="mb-4 text-sm text-gray-600">
        <p style="font-size: 25px; font-weight: 800"><span style="color: red">GC</span> STORE</p>
    </div>
        <div class="mt-4 text-sm text-gray-600">
            {{ __('يمكنك التحقق من عنوان بريدك الإلكتروني من خلال النقر على الرابط الذي أرسلناه إليك للتاكيد وتسجيل الدخول') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button style="
                    margin-top: 20px;
    padding: 9px;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    background-color: #52c64a;
    color: white;
    font-size: 14px;" type="submit">
                        {{ __('إعادة إرسال رسالة التحقق') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button style="    padding: 13px;
                border-radius: 20px;
                border: none;
                cursor: pointer;
                background-color: #000000;
                color: white;
                font-size: 14px;" type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('تسجيل الخروج') }}
                </button>
            </form>
        </div>
    </div>