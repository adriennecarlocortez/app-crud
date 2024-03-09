<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
  <div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-emerald-50 to-teal-100 p-10">
    <table class="table-auto">
      <thead>
        <tr>
          <th class="px-4 py-2 text-emerald-600">Title</th>
          <th class="px-4 py-2 text-emerald-600">Author</th>
          <th class="px-4 py-2 text-emerald-600">Views</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">Intro to CSS</td>
          <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">Adam</td>
          <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">858</td>
        </tr>
        <tr class="bg-emerald-200">
          <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
          <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">Adam</td>
          <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">112</td>
        </tr>
        <tr>
          <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">Intro to JavaScript</td>
          <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">Chris</td>
          <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">1,280</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>