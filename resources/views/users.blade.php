@if ($id == '')
@foreach ($users as $user)
    <span>User Company =></span> {{ $user->title }} <br>
    @foreach ($user->users as $usersInfo)
    <span>User Name => </span> {{ $usersInfo->name }} <br>
    @endforeach
@endforeach
@endif

@if ($id != '')
<span>User Company =></span> {{ $usersInfo->title  }} <br>
@foreach ($usersInfo->users as $user)
    <span>User Name =></span>{{ $user->name }}
@endforeach
@endif
