@if($id == '')
@foreach ($company as $users)
    @foreach ($users->users as $user)
    <span>User name =></span> {{ $user->name }} <br>
    @endforeach
@endforeach
@endif

{{ $users->name }}
