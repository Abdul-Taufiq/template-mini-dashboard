<th wire:click="setSortBy('{{ $nameSort }}')">
    <button class="btn btn-sm d-flex justify-content-between align-items-center w-100">
        <strong class="text-start" style="font-size: 12px">{{ $displayName }}</strong> &nbsp;&nbsp;
        @if ($sortBy != $nameSort)
            <i class="fa-solid fa-arrow-up-short-wide"></i>
        @elseif ($sortDir == 'asc')
            <i class="fa-solid fa-arrow-up-short-wide"></i>
        @else
            <i class="fa-solid fa-arrow-down-wide-short"></i>
        @endif
    </button>
</th>
