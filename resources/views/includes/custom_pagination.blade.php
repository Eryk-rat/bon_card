<div class="pagination">
    <div class="back-next">    
        {{-- Strzałka do poprzedniej strony --}}
       
            <a href="{{ $cards->previousPageUrl() }}" rel="prev">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="100.000000pt" height="200.000000pt" viewBox="0 0 600.000000 600.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,600.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M3465 4481 c-11 -5 -350 -338 -753 -742 l-734 -732 734 -734 c524
                    -524 742 -736 766 -744 103 -34 205 66 174 169 -9 30 -136 161 -647 672 l-635
                    635 639 640 c694 694 669 665 642 748 -25 75 -114 117 -186 88z"/>
                    <path d="M4205 4471 c-16 -10 -355 -345 -753 -743 l-722 -723 737 -737 c648
                    -647 742 -737 775 -743 48 -9 98 8 134 46 25 27 29 38 29 90 l0 59 -637 637
                    c-351 351 -638 643 -638 648 0 6 282 291 626 635 344 344 632 637 640 652 62
                    117 -79 249 -191 179z"/>
                    </g>
                </svg>
            </a>




        {{-- Strzałka do następnej strony --}}

            <a href="{{ $cards->nextPageUrl() }}" rel="next">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="100.000000pt" height="200.000000pt" viewBox="0 0 600.000000 600.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,600.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M1670 4462 c-54 -27 -83 -77 -77 -136 l4 -48 637 -637 c350 -350 636
                -641 636 -646 0 -6 -282 -291 -626 -635 -344 -344 -632 -637 -640 -652 -60
                -113 71 -244 184 -184 15 8 354 342 754 743 l728 728 -733 732 c-409 410 -744
                737 -760 743 -40 14 -67 13 -107 -8z"/>
                <path d="M2424 4466 c-63 -28 -96 -103 -75 -168 8 -23 194 -216 646 -668 l635
                -635 -639 -640 c-694 -694 -669 -665 -642 -748 25 -74 113 -117 184 -89 10 4
                349 338 753 742 l734 735 -727 728 c-421 421 -742 735 -760 743 -40 17 -69 17
                -109 0z"/>
                </g>
            </svg>

            </a>

    </div>
    {{-- Numeracja stron --}}
    <div class="all-pages">
        @for ($i = 1; $i <= $cards->lastPage(); $i++)
            @if ($i == $cards->currentPage())
                <span class="current">{{ $i }}</span>
            @else
                <a href="{{ $cards->url($i) }}">
                    <div class="page">
                        {{ $i }}
                    </div>
                </a>
            @endif
    @endfor
    </div>
</div>