@extends('../layouts.app')
@section('title', 'เจ้าหน้าที่')
@section('header')
<h1 class="text-3xl font-bold text-indigo-800">เจ้าหน้าที่ (Staff)</h1>
@endsection
@section('content')
<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-indigo-50 text-indigo-900 border-b border-indigo-200">
                <th class="p-3 font-semibold">ID</th>
                <th class="p-3 font-semibold">ชื่อ-นามสกุล</th>
                <th class="p-3 font-semibold">หน่วยงาน</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($staffs as $item)
            <tr class="hover:bg-gray-50">
                <td class="p-3">{{ $item->id }}</td>
                <td class="p-3 font-medium text-gray-800">
                    {{ $item->title->title_name ?? '' }}{{ $item->name }}
                </td>
                <td class="p-3 text-gray-600">
                    {{ $item->organization->org_name ?? '-' }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection