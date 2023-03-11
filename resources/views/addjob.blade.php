<head>
    <!-- Add the following code to your head section -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
</head>
@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Oops! There were some errors:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <!-- Green background alert for job added -->
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline"> Job has been added.</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <title>Close</title>
          <path d="M14.348 5.652a1 1 0 011.414 1.414L11.414 10l4.348 4.348a1 1 0 01-1.414 1.414L10 11.414l-4.348 4.348a1 1 0 11-1.414-1.414L8.586 10 4.238 5.652a1 1 0 011.414-1.414L10 8.586l4.348-4.348z" clip-rule="evenodd" fill-rule="evenodd"></path>
        </svg>
      </span>
    </div>
@endif
<div class="flex items-center justify-center h-screen">
    <div class="max-w-md w-full mx-auto">
        <a href="{{route('jobs')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">All Jobs</a>
        <form action="{{route('store-job')}}" method="post">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="jobTitle">
                        Job Title
                    </label>
                    <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="jobTitle" type="text" placeholder="Enter job title">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" placeholder="Enter job description"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="url">
                        URL
                    </label>
                    <input name="url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="url" type="text" placeholder="Enter URL">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="location">
                        Location
                    </label>
                    <input name="location" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="location" type="text" placeholder="Enter location">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
