@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-800 border-b-2 border-t-2 border-l-2 border-r-2 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
