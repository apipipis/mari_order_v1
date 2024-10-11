<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Edit Produk</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Nama Produk</label>
                <input type="text" name="name" value="{{ $product->name }}" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Harga Produk</label>
                <input type="number" name="price" value="{{ $product->price }}" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Gambar Produk</label>
                <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Simpan Perubahan</button>
        </form>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
