@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full border-gray-300 dark:border-gray-700 dark:bg-neutral-900 dark:text-gray-300 focus:border-violet-500 dark:focus:border-indigo-600 focus:ring-violet-500 dark:focus:ring-violet-600 rounded-md shadow-sm']) !!}>
