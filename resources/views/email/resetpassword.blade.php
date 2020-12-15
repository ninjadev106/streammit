@component('mail::message')
# Introduction

Reset or change your password.

@component('mail::button', ['url' => 'https://onyxstreaming.com/password-change1?token='.$token])
Change Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
