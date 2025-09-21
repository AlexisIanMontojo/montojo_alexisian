<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-5xl p-6 bg-white rounded-2xl shadow-lg">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-700">Welcome to Students View</h1>
    
    <!-- Action Buttons -->
    <div class="flex justify-between items-center mb-4">
      <a href="<?=site_url('users/create');?>"
         class="px-4 py-2 bg-blue-600 text-white font-medium rounded-lg shadow hover:bg-blue-700 transition">
        + Create Record
      </a>
      <a href="<?=site_url('author');?>"
         class="px-4 py-2 bg-green-600 text-white font-medium rounded-lg shadow hover:bg-green-700 transition">
        Pagination
      </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto rounded-lg border border-gray-300">
      <table class="w-full text-sm">
        <thead class="bg-gray-200 text-gray-700">
          <tr>
            <th class="px-4 py-3 text-left font-semibold">ID</th>
            <th class="px-4 py-3 text-left font-semibold">Username</th>
            <th class="px-4 py-3 text-left font-semibold">Email</th>
            <th class="px-4 py-3 text-center font-semibold">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <?php foreach(html_escape($users) as $user): ?>
          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 text-gray-600"><?= ($user['id']); ?></td>
            <td class="px-4 py-2 text-gray-600"><?= ($user['username']); ?></td>
            <td class="px-4 py-2 text-gray-600"><?= ($user['email']); ?></td>
            <td class="px-4 py-2 text-center">
              <a href="<?=site_url('users/update/'.$user['id']);?>" 
                 class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition">
                Update
              </a>
              <a href="<?=site_url('users/delete/'.$user['id']);?>" 
                 class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition ml-2">
                Delete
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>
