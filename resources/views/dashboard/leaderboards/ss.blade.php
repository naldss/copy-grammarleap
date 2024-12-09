@foreach ($usersByrankSS as $index => $userByrankSS)
    <div class="leaderboard-user-box"
        @if ($index % 2 == 1) style="background-color: #f4f3ff;" @endif>
        <div class="rank">{{ $index + 1 }}</div>
        <div class="user-name">{{ $userByrankSS->first_name }} {{ $userByrankSS->last_name }}</div>
        <div class="user-points">{{ $userByrankSS->SS_total }} points</div>
    </div>
@endforeach
