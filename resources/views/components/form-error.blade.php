@props(['type' => 'title'])
@error($type)
<p class="text-xs font-semibold text-red-500">{{$message}}</p>
@enderror
