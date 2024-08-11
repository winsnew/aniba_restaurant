@component('mail::message')
# User Message

<table class="table table-bordered">
    <tbody>
        <tr>
            <td>Name</td>
            <td>{{ $message->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $message->email }}</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>{{ $message->message }}</td>
        </tr>
    </tbody>
</table>

@endcomponent