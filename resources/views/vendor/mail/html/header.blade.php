@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://img.freepik.com/premium-vector/word-concept-color-geometric-shapes-blog_205544-12899.jpg?semt=ais_hybrid&w=740" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
