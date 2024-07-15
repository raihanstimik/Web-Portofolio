<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <a href="{{ route('admin') }}" class="w-full bg-blue-500 text-white font-bold py-2 px-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-250 focus:ring-offset-2" >kembali</a>
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Tambah Data</h2>
        <form action="{{ route('storeUser') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter your email">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter your password">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password confirm</label>
                <input type="password"id="password-confirm" name="password_confirmation" required autocomplete="new-password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="confirm password">
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700">Role :</label>
                <select name="role" id="role" class="form-control">
                                                <option value="">Pilih Role</option>
                                                <option value=1>admin</option>
                                                <option value=2>user</option>
                                            </select>
                </div>
            <div class="flex justify-end">
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Kirim
            </button>
        </form>
    </div>

</body>
</html>
