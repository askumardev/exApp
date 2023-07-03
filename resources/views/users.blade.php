<p>Hello</p>
 

    @foreach($users as $user)
    <article>
        {{ $user->name }}
    </article>
    @endforeach
