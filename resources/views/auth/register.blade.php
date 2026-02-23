<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="bg-gray-50 dark:bg-gray-800">
    <div class="flex min-h-[100vh] flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="text-center sm:mx-auto sm:w-full sm:max-w-md">
            <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                Register
            </h1>
        </div>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white dark:bg-gray-700 px-4 pb-4 pt-8 sm:rounded-lg sm:px-10 sm:pb-6 sm:shadow">
                <form method="post" class="space-y-6">
                    @csrf  
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 dark:text-white">
                            Username</label>
                        <div class="mt-1">
                            <input name="username" id="username" type="text" 
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                >
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-white">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" 
                                autocomplete="current-password" 
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                >
                        </div>
                    </div>
                     <div>
                        <label for="nis" class="block text-sm font-medium text-gray-700 dark:text-white">NIS</label>
                        <div class="mt-1">
                            <input name="nis"  type="text" 
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                >
                        </div>
                    </div>
                     <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 dark:text-white">Nama Lengkap</label>
                        <div class="mt-1">
                            <input name="nama"  type="text" 
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                >
                        </div>
                    </div>
                     <div>
                        <label for="kelas" class="block text-sm font-medium text-gray-700 dark:text-white">Kelas</label>
                        <div class="mt-1">
                            <input name="kelas"  type="text" 
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                >
                        </div>
                    </div>
                     <div>
                        <label for="jurusan" class="block text-sm font-medium text-gray-700 dark:text-white">Jurusan</label>
                        <div class="mt-1">
                            <input name="jurusan"  type="text" 
                                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:placeholder-gray-300 dark:focus:border-indigo-400 dark:focus:ring-indigo-400 sm:text-sm"
                                >
                        </div>
                    </div>
                    
                    <div>
                        <button  type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:bg-indigo-700 dark:border-transparent dark:hover:bg-indigo-600 dark:focus:ring-indigo-400 dark:focus:ring-offset-2 disabled:cursor-wait disabled:opacity-50">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            Sign Up
                        </button>
                    </div>
                </form>
                
                <div class="m-auto mt-6 w-fit md:mt-8">
                    <span class="m-auto dark:text-gray-400">Already have an account?
                        <a class="font-semibold text-indigo-600 dark:text-indigo-100" href="/login">Sign in</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>