@component('mail::message')
<p>
    <b>Send by:</b> <br> {{ $user['name'] }}
</p>
<p>
    <b>Email:</b> <br> {{$user['email']}}
</p>
<p>
    <b>Message:</b> <br> {{ $user['message'] }}
</p>
<p>
    Message is send by a contact form from, <a style="color: green;" href="https://realestate.mk/">RealEstate.mk</a> 
</p>
@endcomponent