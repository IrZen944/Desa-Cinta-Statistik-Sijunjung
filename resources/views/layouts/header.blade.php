<div>
    <nav class="bg-white border-b shadow">
        <div class="lg:container mx-auto px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 md:border-b-2 border-white text-gray-600">
                        <div class="md:block">
                            <x-logo.text />
                        </div>
                        <div class="md:hidden font-bold text-xl capitalize">
                            {{ $title }}
                        </div>
                    </div>
                    <div class="md:block ">
                        <div class="ml-10 flex items-stretch space-x-4 h-16">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                @auth
                    <div class="flex">
                        <div class="md:block">
                            <ul class="flex items-center">
                                <x-header.profile />
                            </ul>
                        </div>
                    </div>
                @endauth
            </div>
        </div>

    </nav>
</div>
