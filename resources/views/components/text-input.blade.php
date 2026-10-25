@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-gray-800 text-white text-base border-gray-600 focus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm placeholder:text-gray-400']) }}>
