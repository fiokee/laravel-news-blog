<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Page Heading -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Create New Blog</h2>
            <a href="{{route('blog.index')}}" 
               class="px-4 py-2 bg-gray-600 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-gray-700 transition">
                ← Back to Blogs
            </a>
        </div>

        <!-- Form Container -->
        <div class="bg-white shadow-lg rounded-lg p-6 max-w-2xl mx-auto">
            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Title Field -->
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                    <input type="text" id="title" name="title" value="" 
                           class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200" 
                           placeholder="Enter title">
                </div>
            
                @error('title')
                    <div class="error">{{$message}}</div>
                @enderror

                <!-- Description Field -->
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                    <textarea id="description" name="description" rows="4" 
                              class="mt-1 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200" 
                              placeholder="Enter description"></textarea>
                </div>

                @error('description')
                    <div class="error">{{$message}}</div>
                @enderror

                <!-- Banner Image Upload -->
                <div class="mb-4">
                    <label for="banner_image" class="block text-sm font-medium text-gray-700">Banner Image:</label>
                    <input type="file" id="banner_image" name="banner_image" 
                           class="mt-1 p-2 w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
                </div>

                    @error('banner_image')
                        <div class="error">{{$message}}</div>
                    @enderror
                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" 
                            class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold shadow-md hover:bg-blue-700 transition">
                        🚀 Create Blog
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>