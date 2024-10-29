<x-layout>
    <h1>Update product</h1>
    <form method="POST" action="{{route('products.update', $product)}}">
        @method('PUT')
        @csrf
        <x-form :product="$product"></x-form>
        <button type="submit">Update</button>
    </form>
</x-layout>
