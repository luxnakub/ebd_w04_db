@extends('../layouts.app')
@section('title', 'ชุมชน')
@section('header')
<h1 class="text-3xl font-bold text-indigo-800">ชุมชน (Community)</h1>
@endsection
@section('content')
<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-indigo-50 text-indigo-900 border-b border-indigo-200">
                <th class="p-3 font-semibold">ID</th>
                <th class="p-3 font-semibold">ชื่อชุมชน</th>
                <th class="p-3 font-semibold">ที่ตั้ง</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($communities as $item)
            <tr class="hover:bg-gray-50">
                <td class="p-3">{{ $item->id }}</td>
                <td class="p-3 font-medium text-gray-800">{{ $item->community_name }}</td>
                <td class="p-3 text-gray-600">{{ $item->location }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection