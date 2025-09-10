<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
    <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">Update Record</h1>
    
    <form action="<?=site_url('users/update/'.segment(4));?>" method="POST" class="space-y-4">
      
      <!-- Username -->
      <div>
        <label for="username" class="block text-gray-600 font-medium mb-1">Username</label>
        <input type="text" id="username" name="username" value="<?= html_escape($users['username']);?>"required
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-600 font-medium mb-1">Email</label>
        <input type="email" id="email" name="email" value="<?= html_escape($users['email']);?>"required
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <!-- Submit -->
      <button type="submit"
              class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition">
        Update
      </button>
    </form>
  </div>

</body>
</html>
