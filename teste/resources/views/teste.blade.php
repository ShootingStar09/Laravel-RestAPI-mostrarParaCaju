@inject('users', 'App\User')
@inject('admins', 'App\admin')


  {{ $users::find(1) }}/////////{{ $users::find(1)->userable }}
