@extends('../layouts.app')
@section('title', 'คำนำหน้าชื่อ')
@section('header')
<h1 class="text-3xl font-bold text-indigo-800">คำนำหน้าชื่อ (Title)</h1>
@endsection
@section('content')
<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-indigo-50 text-indigo-900 border-b border-indigo-200">
                <th class="p-3 font-semibold">ID</th>
                <th class="p-3 font-semibold">คำนำหน้า</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($titles as $item)
            <tr class="hover:bg-gray-50">
                <td class="p-3">{{ $item->id }}</td>
                <td class="p-3 font-medium text-gray-800">{{ $item->title_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection