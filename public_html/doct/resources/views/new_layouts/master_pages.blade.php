{{-- start nav the other of pages --}}

@section('nav_links')
<li><a class='h2' href="{{ route('home') }}">{{ trans('second_auth.home_page') }}</a></li>
<li><a class='h2' href="{{route('doctors')}}">{{ trans('second_auth.doctors_privacy_two') }}</a></li>
<li><a class="h2" href="{{ route('privacy') }}">{{ trans('second_auth.Privacy_policy_two') }}</a></li>
<li><a class='h2' href="{{ route('Second_sessions_user') }}">{{ trans('second_sessions_user.home') }}</a></li>

@endsection

 {{-- start nav the other of pages --}}


