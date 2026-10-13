@extends('../layouts.app')
@section('title', 'กิจกรรม')
@section('header')
<h1 class="text-3xl font-bold text-indigo-800">กิจกรรม (Activity)</h1>
@endsection
@section('content')
<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-indigo-50 text-indigo-900 border-b border-indigo-200">
                <th class="p-3 font-semibold">ID</th>
                <th class="p-3 font-semibold">ชื่อกิจกรรม</th>
                <th class="p-3 font-semibold">ชุมชน</th>
                <th class="p-3 font-semibold">วันที่ดำเนินการ</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($activities as $item)
            <tr class="hover:bg-gray-50">
                <td class="p-3">{{ $item->id }}</td>
                <td class="p-3 font-medium text-gray-800">{{ $item->activity_name }}</td>
                <td class="p-3 text-gray-600">{{ $item->community->community_name ?? '-' }}</td>
                <td class="p-3 text-gray-600">{{ $item->activity_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection