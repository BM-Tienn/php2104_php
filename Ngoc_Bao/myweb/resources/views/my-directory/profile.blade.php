<x-my-web>
    <div class="container" style="min-height: 900px; display:flex; justify-content: center">
        <tr>
            <th>user name</th>
            <th>email</th>
        </tr>
        <br>
        <tr>
            @foreach ($profiles as $profile)
                <td><a href="{{ route('profile-single-ms.show', ['id' => $profile->id]) }}">{{$profile->user->name}}</a></td>
                <td><a href="{{ route('profile-single-ms.show', ['id' => $profile->id]) }}">{{$profile->user->email}}</a></td>
            @endforeach
        </tr>
    </div>  

</x-my-web>