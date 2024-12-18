<div class="" x-data="{ show: true }">
    <div class="relative">
        <input :type="show ? 'password' : 'text'"
            {{ $attributes->merge(['class' => 'text-md block px-3 py-2 w-full
        bg-white border placeholder-gray-600
        focus:placeholder-gray-500
        focus:outline-none border-gray-300 dark:border-gray-700 dark:bg-neutral-900 dark:text-gray-300 focus:border-violet-500 dark:focus:border-violet-600 focus:ring-violet-500 dark:focus:ring-violet-600 rounded-md shadow-sm']) }}>
        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
            <svg class="h-6 text-gray-700 hover:text-violet-500 hover:cursor-pointer" @click="show = !show" :class="{ 'hidden': !show, 'block': show }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>

            <svg class="h-6 text-gray-700 hover:text-violet-500 hover:cursor-pointer" @click="show = !show" :class="{ 'block': !show, 'hidden': show }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
            </svg>

        </div>
    </div>
</div>
