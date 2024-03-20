<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <form method="POST" action="{{ route('store') }}" class="form">
            @csrf
            @php
                $staffName = array('山田 太郎', '石川 結子', '鈴木 紗英', '吉川 昂杜'); // この配列をDBから取得できるようにする
            @endphp

            @for ($p=0; $p < count($staffName); $p++)
                @if ($items->containsStrict('name', $staffName[$p])) {{-- シフト提出テーブルのスタッフIDにスタッフテーブルのユーザー名が存在するかどうか確認する　スタッフID数分ループする --}}
                    @php
                        $NameFilter = $items->where('name', $staffName[$p])->values();
                    @endphp
                    @for ($d=1; $d < 16; $d++)
                        @if (strlen($d) == 1)
                            @if ($NameFilter->containsStrict('DesireWorkingDate', '2024-04-0' . $d))
                                @php
                                $DateFilter = $NameFilter->where('DesireWorkingDate', '2024-04-0' . $d)->values();
                                @endphp
                                名前
                                <input type="text" name="name[]" value="{{ $staffName[$p] }}">
                                勤務日
                                <input type="text" name="WorkingDate[]" value="{{ $DateFilter->get(0)->DesireWorkingDate }}">
                                出勤時間
                                <input type="text" name="StartTime[]" value="{{ $DateFilter->get(0)->DesireStartTime }}">
                                退勤時間
                                <input type="text" name="EndTime[]" value="{{ $DateFilter->get(0)->DesireEndTime }}">
                                <br>
                            @else
                                名前
                                <input type="text" name="name[]" value="{{ $staffName[$p] }}">
                                勤務日
                                <input type="text" name="WorkingDate[]" value="2024-04-0{{$d}}">
                                出勤時間
                                <input type="text" name="StartTime[]" value="">
                                退勤時間
                                <input type="text" name="EndTime[]" value="">
                                <br>
                            @endif
                        @else
                            @if ($NameFilter->containsStrict('DesireWorkingDate', '2024-04-' . $d))
                                @php
                                $DateFilter = $NameFilter->where('DesireWorkingDate', '2024-04-' . $d)->values();
                                @endphp
                                名前
                                <input type="text" name="name[]" value="{{ $staffName[$p] }}">
                                勤務日
                                <input type="text" name="WorkingDate[]" value="{{ $DateFilter->get(0)->DesireWorkingDate }}">
                                出勤時間
                                <input type="text" name="StartTime[]" value="{{ $DateFilter->get(0)->DesireStartTime }}">
                                退勤時間
                                <input type="text" name="EndTime[]" value="{{ $DateFilter->get(0)->DesireEndTime }}">
                                <br>
                            @else
                                名前
                                <input type="text" name="name[]" value="{{ $staffName[$p] }}">
                                勤務日
                                <input type="text" name="WorkingDate[]" value="2024-04-{{$d}}">
                                出勤時間
                                <input type="text" name="StartTime[]" value="">
                                退勤時間
                                <input type="text" name="EndTime[]" value="">
                                <br>
                            @endif
                        @endif
                    @endfor
                @else {{-- スタッフテーブルに名前があるが、シフト提出テーブルに名前がない場合 --}}
                    @for ($d=1; $d < 16; $d++)
                        @if (strlen($d) == 1)
                            名前
                            <input type="text" name="name[]" value="{{ $staffName[$p] }}">
                            勤務日
                            <input type="text" name="WorkingDate[]" value="2024-04-0{{$d}}">
                            出勤時間
                            <input type="text" name="StartTime[]" value="">
                            退勤時間
                            <input type="text" name="EndTime[]" value="">
                            <br>
                        @else
                            名前
                            <input type="text" name="name[]" value="{{ $staffName[$p] }}">
                            勤務日
                            <input type="text" name="WorkingDate[]" value="2024-04-{{$d}}">
                            出勤時間
                            <input type="text" name="StartTime[]" value="">
                            退勤時間
                            <input type="text" name="EndTime[]" value="">
                            <br>
                        @endif
                    @endfor
                @endif
            @endfor
            <button class="form-button">シフトを確定する</button>
        </form>
</body>
</html>
