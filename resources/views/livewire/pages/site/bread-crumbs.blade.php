<div class="py-4">
    <ol class="flex items-center whitespace-nowrap">
        <li class="inline-flex items-center">
            <a href="{{ url('/') }}"
               class="flex items-center text-sm text-gray-500 hover:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500">
                <svg class="shrink-0 me-2 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
            </a>
            @if (count($segments))
                <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            @endif
        </li>

        @foreach ($segments as $index => $segment)
            <li class="inline-flex items-center">
                @if ($index < count($segments) - 1)
                    <a href="{{ $segment['url'] }}"
                       class="text-sm text-gray-500 hover:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500">
                        {{ $segment['label'] }}
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                @else
                    <span class="text-sm font-semibold text-gray-800 ">
                        {{ $segment['label'] }}
                    </span>
                @endif
            </li>
        @endforeach
    </ol>
</div>
