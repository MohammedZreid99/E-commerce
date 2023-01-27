<link style="border-radius: 50%" rel="shortcut icon" href="{{ asset('assets/images/favvvv.png') }}">

<x-guest-layout>

    <div dir="rtl" class="form-box" style="height: 680px ; width: 600px">
		<div class="header-text">
			انشاء حساب
		</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="d-flex">
                <div class="col-lg-6">
                  <div>اسمك</div>
                 <input id="name" type="text" name="name" placeholder="اكتب اسمك" :value="old('name')" required autofocus autocomplete="name" />
                </div>
                <div class="col-lg-6">

                 <div>البريد الالكتروني</div>

                 <input id="email"  type="email" name="email" placeholder="اكتب بريدك الالكتروني" :value="old('email')" required />
                </div>
                <div class="col-lg-6">

                 <div>رقمك الشخصي</div>

                 <input id="phone"  type="number" name="phone" placeholder="اكتب رقم هاتفك" :value="old('phone')" required />
                </div>
                <div class="col-lg-6">

                 <div>عنوانك</div>

                 <input id="address"  type="text" name="address" placeholder="اكتب عنوانك" :value="old('address')" required />
                </div>
                </div>
                 <div>كلمة المرور الخاصة بك</div>

                 <input id="password" type="password" name="password" placeholder="اكتب كلمة المرور" required autocomplete="new-password" />
                 <div>تأكيد كلمة المرور</div>

                 <input id="password_confirmation" type="password" name="password_confirmation" placeholder="كلمة المرور_تأكيد" required autocomplete="new-password" />

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('مسجل بالفعل?') }}
                </a>

                <x-jet-button class="ml-4" style="background-color: #DD2C00; width: 120px; height: 40px; justify-content: center;">
                    {{ __('			انشاء حساب
                    ') }}
                </x-jet-button>
            </div>
        </form>
    </div>
 </x-guest-layout>
