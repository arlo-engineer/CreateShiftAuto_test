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
            @foreach ($items as $item)
                名前
                <input type="text" name="name" value="{{ $item->name }}">
                勤務日
                <input type="text" name="WorkingDate" value="{{ $item->DesireWorkingDate }}">
                出勤時間
                <input type="text" name="StartTime" value="{{ $item->DesireStartTime }}">
                退勤時間
                <input type="text" name="EndTime" value="{{ $item->DesireEndTime }}">
                <br>
            @endforeach
            <button class="form-button">シフトを確定する</button>
        </form>
</body>
</html>
