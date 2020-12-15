@component('mail::message')
# Hello,

You recently requested to reset your password for your Onyx Streaming account. Click the button below to reset it.

@component('mail::button', ['url' => 'https://onyxstreaming.com/auth/password-change1?token='.$token, 'color' => 'blue'])
Reset your password
@endcomponent

If you did not request a password reset, please ignore this email or reply to let us know.<br>
Thanks,<br>
Onyx Streaming Team
@endcomponent
