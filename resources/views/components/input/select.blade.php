<select
    {{ $attributes->merge(['class' => 'mt-1 px-3 py-2 block w-full border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:border-sky-300 focus:ring focus:ring-sky-200 focus:ring-opacity-50']) }}>
    {{ $slot }}
</select>
