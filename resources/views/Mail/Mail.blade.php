<x-mail::message>
# Mail Details

<x-mail::panel>
    Name : {{ $data['name'] }} <br>
    Email : {{ $data['email'] }} <br>
    Project Type : {{ $data['project_type'] }} <br>
    Project Budget : {{ $data['project_budget'] }} <br>
    Project Details : {{ $data['project_details'] }}
</x-mail::panel>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

