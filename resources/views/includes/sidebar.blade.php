<ul class="list-group">

    <li @class([
            'list-group-item',
            'list-group-item-primary' => Route::currentRouteName() === 'home'
        ])>
            <a href="{{ route('home') }}">Home</a>
    </li>
    @if(auth()->user()->role === 'admin')
        <li @class([
            'list-group-item',
            'list-group-item-primary' => Str::contains(Route::currentRouteName(), 'admin.user.')
        ])>
            <a href="{{ route('admin.user.index') }}">Users</a>
        </li>
        <li @class([
            'list-group-item',
            'list-group-item-primary' => Str::contains(Route::currentRouteName(), 'admin.event.')
        ])>
            <a href="{{ route('admin.event.index') }}">Events</a>
        </li>
    @endif
    @if(auth()->user()->role === 'election_comission')
        <li @class([
            'list-group-item',
            'list-group-item-primary' => Str::contains(Route::currentRouteName(), 'election.comission.leadership.')
        ])>
            <a href="{{ route('election.comission.leadership.index') }}">Leadership</a>
        </li>
        <li @class([
            'list-group-item',
            'list-group-item-primary' => Str::contains(Route::currentRouteName(), 'election.comission.campaign.')
        ])>
            <a href="{{ route('election.comission.campaign.index') }}">Campaign</a>
        </li>
    @endif
    <li @class([
            'list-group-item',
            'list-group-item-primary' => Route::currentRouteName() === 'profile.index'
        ])>
        <a href="{{ route('profile.index') }}">Profile</a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
    </li>
</ul>
