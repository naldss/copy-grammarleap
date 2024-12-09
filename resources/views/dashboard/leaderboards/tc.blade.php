@foreach ($usersByrankTC as $index => $userByrankTC)
    <div class="leaderboard-user-box"
        @if ($index % 2 == 1) style="background-color: #f4f3ff;" @endif>
        <div class="rank">{{ $index + 1 }}</div>
        <div class="user-name">{{ $userByrankTC->first_name }} {{ $userByrankTC->last_name }}</div>
        <div class="user-points">{{ $userByrankTC->TC_total }} points</div>
    </div>
@endforeach
