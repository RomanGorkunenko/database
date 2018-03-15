<style>
    TABLE {
        border-collapse: collapse;
    }

    TH,
    TD {
        border: 1px solid black;
        text-align: center;
        padding: 4px;
    }

    TH {
        background: #fc0;
        height: 20px;
        vertical-align: bottom;
        padding: 0;
    }

</style>
<span>Количество записей в таблице = </span>{{$count}}<br><br>
<span>Получение одной записи по id = {{$id}}</span><br>
<table>
    <tr>
        <th>#</th>
        <th>login</th>
        <th>email</th>
        <th>password</th>
    </tr>
    <?php $number=1;?> @foreach ($gid as $user)
    <tr>
        <td>{{$number++}}</td>
        <td>{{$user->login}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
    </tr>
    @endforeach
</table><br>
<span>Все записи в таблице =</span><br>
<table>
    <tr>
        <th>#</th>
        <th>login</th>
        <th>email</th>
        <th>password</th>
    </tr>
    <?php $number=1;?> @foreach ($all as $user)
    <tr>
        <td>{{$number++}}</td>
        <td>{{$user->login}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
    </tr>
    @endforeach
</table>
