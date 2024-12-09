@foreach ($usersByrankSB as $index => $userByrankSB)
    <div class="leaderboard-user-box"
        @if ($index % 2 == 1) style="background-color: #f4f3ff;" @endif>
        <div class="rank">{{ $index + 1 }}</div>
        <div class="user-name">{{ $userByrankSB->first_name }} {{ $userByrankSB->last_name }}</div>
        <div class="user-points">{{ $userByrankSB->SB_total }} points</div>
    </div>
@endforeach
