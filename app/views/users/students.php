<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-4xl p-6 bg-white rounded-2xl shadow-lg">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-700">Welcome to Students View</h1>
    
    <div class="overflow-x-auto">
      <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
        <thead class="bg-gray-200">
          <tr>
            <th class="px-4 py-2 text-left text-gray-700 font-semibold">ID</th>
            <th class="px-4 py-2 text-left text-gray-700 font-semibold">Username</th>
            <th class="px-4 py-2 text-left text-gray-700 font-semibold">Email</th>
            <th class="px-4 py-2 text-left text-gray-700 font-semibold">Action</th>

          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <?php foreach(html_escape($users) as $user): ?>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-2 text-gray-600"><?= ($user['id']); ?></td>
            <td class="px-4 py-2 text-gray-600"><?= ($user['username']); ?></td>
            <td class="px-4 py-2 text-gray-600"><?= ($user['email']); ?></td>
            <td class="px-4 py-2 text-gray-600"> <a href="<?=site_url('users/update/'.$user['id']);?>">Update</a> | <a href="<?=site_url('users/delete/'.$user['id']);?>">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <a href="<?=site_url('users/create');?>">Create Record</a>
    </div>
  </div>

</body>
</html>
