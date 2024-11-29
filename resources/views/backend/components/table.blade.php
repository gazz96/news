<div class="table-responsive">
    <table class="table table-hover table-bordered mb-0">
        <thead>
            <tr>
                @foreach ($columns as $key => $column)
                    <th>
                        @if ($column['sort'] ?? false)
                            <a
                                href="{{$baseUrl}}{{ '?' .
                                    http_build_query([
                                        'sort' => request('sort') == 'ASC' ? 'DESC' : 'ASC',
                                        'sortBy' => $key,
                                    ]) }}">{{ $column['label'] }}</a>
                        @else
                            {{ $column['label'] }}
                        @endif
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
                <tr>
                    @foreach ($columns as $key => $column)
                        @php 
                         $style = isset($column['style']) ? collect($column['style'])->map(fn($value, $key) => "{$key}: {$value};")->join(' ') : '';
                        @endphp 
                        <td {!! $style ? 'style="' . $style . '"' : '' !!}>
                            @if (isset($column['callback']))
                                {{ call_user_func($column['callback'], $row) }}
                            @else
                                {{ $row->$key }}
                            @endif
                        </td>
                    @endforeach
                </tr>
            @empty
                <tr>
                    <th colspan="{{ count($columns) }}" class="text-center">
                        Empty data
                    </th>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{$rows->links()}}
    </div>
</div>
