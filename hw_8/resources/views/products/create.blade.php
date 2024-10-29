<x-layout>
    <h1>Create product</h1>
    <form method="POST" action="{{route('products.store')}}">
        @csrf
        <x-form></x-form>
        <button type="submit">Create</button>
    </form>
</x-layout>
