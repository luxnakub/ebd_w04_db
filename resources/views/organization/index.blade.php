@extends('../layouts.app')
@section('title', 'หน่วยงาน')
@section('header')
<h1 class="text-3xl font-bold text-indigo-800">หน่วยงาน (Organization)</h1>
@endsection
@section('content')
<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-indigo-50 text-indigo-900 border-b border-indigo-200">
                <th class="p-3 font-semibold">ID</th>
                <th class="p-3 font-semibold">ชื่อหน่วยงาน</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($organizations as $item)
            <tr class="hover:bg-gray-50">
                <td class="p-3">{{ $item->id }}</td>
                <td class="p-3 font-medium text-gray-800">{{ $item->org_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection