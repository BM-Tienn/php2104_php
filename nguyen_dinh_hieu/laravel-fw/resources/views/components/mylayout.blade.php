<div>
    {{ $header ?? null }}
</div>
<div {{ $attributes->merge(['class' => 'test-class']) }}>
    <center>
        <h2>LARAVEL 8</h1>
        <h2>Component Blade View</h3>
        <p>{{ $title }}</p>
        <p>Admin: {{ $admin }}</p>
        <p>Email: {{ $email }}</p>
        @foreach($users as $user)
            <p>User: {{ $user }}</p>
        @endforeach
        {{ $container ?? null }}
    </center>
</div>
<div class="icon-footer">
    {{ $footer ?? null }}
</div>