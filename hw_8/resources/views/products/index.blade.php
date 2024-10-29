<x-layout>
    <h1>Products</h1>
    <table>
        <a href="{{route('products.create')}}">
            <button class="btn">Create product</button>
        </a>
        <thead>
        <tr>
            <th>Name</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th>{{$product->name}}</th>
                <th>
                    <a href="{{route('products.edit', $product)}}">
                        <button>edit</button>
                    </a>
                    <form method="POST" action="{{route('products.destroy', $product)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit">delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
