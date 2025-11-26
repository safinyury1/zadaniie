<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   <a href="/reports/create">Создать</a>
     @foreach ($reports as $report)
	 <div class="card">
                <tr>
                    <td> <a href="{{route('reports.show',$report->id)}}"> {{ $report->number }}</a></td>
                    <td>{{ $report->description }}</td>
                     <p>{{ $report->status->name }}</p>
                    <td>{{ $report->created_at ? $report->created_at->format('d.m.Y H:i') : 'Не указана' }}</td>
                </tr>
            <form method="POST" action="{{route('reports.destroy', $report->id)}}">
                @method('delete')
                @csrf
                <input type="submit" value="Удалить">
            </form>
            <a href="{{route('reports.edit', $report->id)}}">Редактировать</a>
           
        <div>
		<span>Сортировка по дате создания</span> 
		<a href="{{ route ('reports.index', ['sort' => 'desc', 'status' => $status]) }}">Сначало новые</a>
		<a href="{{ route ('reports.index', ['sort' => 'asc', 'status' => $status]) }}">Сначало старые</a>
	    </div>
        <div>
		<p>Фильтрация по статусу заявки</p>
		<ul>
			@foreach($statuses as $status)
			<li>
				<a href="{{route('reports.index', ['sort' => $sort, 'status' => $status->id]) }}">
					{{$status->name}}
				</a>
			</li>
			@endforeach
		</ul>
	</div>
    @endforeach
    {{ $reports->links() }}
</body>
</html>