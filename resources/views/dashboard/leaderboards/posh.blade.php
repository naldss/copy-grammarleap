@foreach ($usersByrankPOSH as $index => $userByrankPOSH)
    <div class="leaderboard-user-box"
        @if ($index % 2 == 1) style="background-color: #f4f3ff;" @endif>
        <div class="rank">{{ $index + 1 }}</div>
        <div class="user-name">{{ $userByrankPOSH->first_name }} {{ $userByrankPOSH->last_name }}</div>
        <div class="user-points">{{ $userByrankPOSH->PosH_total }} points</div>
    </div>
@endforeach
