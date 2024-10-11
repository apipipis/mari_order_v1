<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>

        <a href="{{ route('products.create') }}" class="mb-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Tambah Produk</a>

        <div class="grid grid-cols-3 gap-4">
            @foreach($products as $product)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="w-full h-32 object-cover mb-4">
                <h3 class="text-gray-800 font-semibold">{{ $product->name }}</h3>
                <p class="text-blue-600 font-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <div class="mt-4 flex space-x-2">
                    <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded-lg hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
