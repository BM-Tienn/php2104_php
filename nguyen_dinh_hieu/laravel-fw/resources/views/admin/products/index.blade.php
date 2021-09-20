<x-my-admin>
    <x-slot name="slot">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th style="width: 40px">Label</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->index + 1 }}.</td>
                        <td>
                            <a href="{{ route('admin.products.show', ['product' => $product->id]) }}">
                                {{ $product->name }}
                            </a>
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-my-admin>