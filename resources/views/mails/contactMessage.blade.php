@component('mail::message')
<p>
    <b>Send by:</b> <br> {{ $data->name }}
</p>
<p>
    <b>Message:</b> <br> {{ $data->message }}
</p>
<p>
    Message is send by a contact form from, <a style="color: green;" href="https://realestate.mk/">RealEstate.mk</a> 
</p>
@endcomponent